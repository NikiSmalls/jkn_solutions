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

## Building Docker Image
- Follow the instructions in [docker-image-builder](docker-image-builder) folder.

## Deploying
- Deploy the AWS stack using the [create.sh](create.sh) file.
- Make note of the the DB's IP Address and the DB credentials from [fullstack.yml](fullstack.yml).
- Goto Wordpress Installer URL that create.sh gives.
- Go through the Duplicator flow using the information that you recorded.
- Verify that the site is operational.
