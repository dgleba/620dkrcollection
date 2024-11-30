

# see .env for vars..
    # export nodeimg='node:14.15-slim'
    # export proj=vue-eg-552cfab
    # export devport=14331

source ./.env

# run developmet (dev) server:

    docker run --rm -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8080 -it  $nodeimg sh -c "yarn serve"


