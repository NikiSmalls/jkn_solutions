# Docker Image Builder
**Note**: This folder is meant to build the docker image that we will be deploying. The docker-compose.yml in this folder is not meant for the deployment. It is meant for testing and creating your own image in dockerhub.

## Steps
- Create a project folder
- Ensure that the webapp folder is inside this project folder
- Change the name of the web-app folder to 'site'.
- Run `docker build -t <your docker hub username here>/jkn_solutions .`
- Run `docker push <your docker hub username here>/jkn_solutions`
- Change the image referenced in the docker-compose-template.yml in the parent folder
