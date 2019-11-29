#!/bin/bash

STACK_NAME=group3-stack
aws cloudformation create-stack --stack-name $STACK_NAME  --template-body file://$PWD/fullstack.yml

while true; do
  StackInfo=$(aws cloudformation describe-stacks --stack-name $STACK_NAME --output json)
  InstanceState=$(echo $StackInfo | jq '.Stacks[0].StackStatus')
  echo $STACK_NAME $InstanceState
  if [[ $InstanceState == *"CREATE_COMPLETE"* ]]; then
    while read i; do
      key=$(echo $i | jq '.OutputKey')
      val=$(echo $i | jq '.OutputValue' --raw-output)
      if [[ "$key" == *"InstancAddress"* ]]; then
        Address=$val
      elif [[ "$key" == *"InstanceIP"* ]]; then
        Ip=$val
        DockerIp="${val}:2375"
      elif [[ "$key" == *"DBHost"* ]]; then
        DBHost=$val
      elif [[ "$key" == *"DBPort"* ]]; then
        DBPort=$val
      fi
    done < <(echo $StackInfo | jq -c '.Stacks[0].Outputs[]')
    break
  fi
  sleep 30s
done

sed "s/PLACEHOLDER_DB_HOST/$DBHost/g;s/PLACEHOLDER_DB_PORT/$DBPort/g" docker-compose-template.yml > docker-compose.yml

# docker -H $Ip ps -a
docker-compose -H $DockerIp up -d
docker -H $DockerIp exec -it wordpress chown -R www-data:www-data /var/www/html
docker-compose -H $DockerIp ps

echo "AWS Stack Name           : ${STACK_NAME}"
echo "EC2 Machine URL          : https://${Address}"
echo "EC2 Machine IP           : ${Ip}"
echo "Wordpress Installer Page : https://${Address}/installer.php"
echo "DB  Machine IP           : ${DBHost}"

# aws cloudformation delete-stack --stack-name $STACK_NAME
