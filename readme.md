# JKN Solutions

## Members
- Nikita Louison
- Krystel Manning
- Jonathan Herbert

## Requirements
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [AWS CLI](https://aws.amazon.com/cli/)
- [JQ](https://stedolan.github.io/jq/)

## Building Docker Image
Follow the instructions in [docker-image-builder](docker-image-builder) folder.

## Deploying
- Deploy the AWS stack using the [create.sh](create.sh) file.
- Connect to the database and run the [bitnami_wordpress](bitnami_wordpress.sql) file to populate the database.
- Verify that the site is operational.
