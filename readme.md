# JKN Solutions

## Members
- Nikita Louison
- Krystel Manning
- Jonathan Herbert

## COMP 6905 Cloud Technologies

## Requirements
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [AWS CLI](https://aws.amazon.com/cli/)
- [jq](https://stedolan.github.io/jq/)
- sudo apt-get install jq


## Building Docker Image
- Follow the instructions in [docker-image-builder](docker-image-builder) folder.

## Deploying
- Clone the repository
- Create a new keypair on the EC2 Console for us-east-1
- Download a copy of the keypair to the project folder
- Ensure the docker-compose-template.yml is using the correct image.(The image in the file currently will work)
- Deploy the AWS stack using the [create.sh](create.sh) file. `./create.sh`
- Enter a keyname, db user and db password in the prompts.
- Wait for the stack to be created and the script's output to give the DB's IP Address. Make a note of it for Duplicator restore process.
- Goto Wordpress Installer URL that [create.sh](create.sh) gives.
- Example of url (Wordpress Installer Page : http://ec2-100-24-23-185.compute-1.amazonaws.com/installer.php)
- Go through the Duplicator flow using the information that you recorded.
- Verify that the site is operational.

## Extra notes for Duplicator
- (In Step 2)The DB name will be wordpress, user and password will be the username and password you you entered during creation
- WordPress site admin login name: user and password:user@dmin123
