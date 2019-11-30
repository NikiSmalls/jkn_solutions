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
- Deploy the AWS stack using the [create.sh](create.sh) file. `./create.sh`
- Enter a keyname, db user and db password in the prompts.
- Wait for the stack to be created and the script's output to give the DB's IP Address. Make a note of it for Duplicator restore process.
- Goto Wordpress Installer URL that [create.sh](create.sh) gives.
- Go through the Duplicator flow using the information that you recorded.
- Verify that the site is operational.
