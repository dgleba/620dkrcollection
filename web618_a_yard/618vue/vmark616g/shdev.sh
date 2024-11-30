

# see .env for vars..
    # export nodeimg='node:14.15-slim'
    # export proj=vue-eg-552cfab
    # export devport=14331

source ./.env

# run developmet (dev) server:

  docker run --name sh-dev_vmark616-g-dev_021 --rm -v "${PWD}:/$(basename `pwd`)" -w "/$(basename `pwd`)" -p $devport:8081  \
      -e     "VIRTUAL_HOST=vmark616devg.198.144.183.160.nip.io" \
      -e "LETSENCRYPT_HOST=vmark616devg.198.144.183.160.nip.io" \
      -e "VIRTUAL_PORT=8081" \
      -e "LETSENCRYPT_EMAIL=dgleba@gmail.com" \
    --network=sister \
    -it  $nodeimg sh -c "npm run serve "

    # see vue.config.js instead..    
    # -it  $nodeimg sh -c "npm run serve --allowed-hosts all --host 0.0.0.0 --public host211220-1121.enwebhost.net:8081 "
    # -it  $nodeimg sh -c "npx webpack serve --allowed-hosts all --port 8081 "
    # -it  $nodeimg sh -c "npm run serve --host 198.144.183.160 --port 8081"


