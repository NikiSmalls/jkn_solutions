# Docker Image Builder
**Note**: This folder is meant to build the docker image that we will be deploying. The docker-compose.yml in this folder is not meant for the deployment. It is meant for testing.

## Steps
- Place the wp-content, wp-admin, wp-include and all of the other files for the wordpress sites in a folder called 'site'.
- Run `docker build -t docker-hub-username/jkn_solutions .`
- Run `docker push docker-hub-username/jkn_solutions`
- Change the image referenced in the docker-compose-template.yml in the parent folder
