

# see .env for vars..
    # export nodeimg='node:14.15-slim'
    # export proj=vue-eg-552cfab
    # export devport=14331

source ./.env

echo $(basename `pwd`)

# install..

#docker run --rm -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg sh -c " npm install --save /vmark616f1/198.23.238.244:8080"

#docker run --rm -name=sh__$(basename `pwd`) -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg sh -c "npm i --save @vue/cli"
#docker run --rm --name=sh__$(basename `pwd`) -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg sh -c "npm init"
#docker run --rm --name=sh__$(basename `pwd`) -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg sh -c "npm i --save -g @vue/cli"

docker run --rm --name=sh__$(basename `pwd`) -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg bash


