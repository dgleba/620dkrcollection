
# One liners and simple stuff may be here in this makefile. See sc folder for scripts.
# run scripts from project folder like this --  sc/cl

# run system with umask test dockerfile
# I can't seem to get writable group permissions 2018-08-27_Mon_21.28-PM
#


perm:
# fix permissions. make them group writable so www-data group can manage the files. move, delete, etc..  
# docker-compose run --rm djan sh -c 'su root;chmod -R g+w .;exit;exit'
# docker-compose run --rm vv bash -c 'chgrp -R 33 . &&  chmod -R g+w . && #chmod +x *.sh && chmod -R go+rwx  /code'
# docker-compose run --rm vv bash -c 'chown -R 1000:33 . ;  chmod -R g+w . ;  chmod -R g+rwx  /code'
	docker-compose run --rm vv bash -c 'cat /etc/group'
	docker-compose run --rm vv bash -c 'chown -R 1000:33 . '







# other examples..




zmmb:
	docker-compose run --rm djdev python manage.py makemigrations blogapp

zmig:
	docker-compose run --rm djdev python manage.py migrate

zcs:
	  docker-compose -f docker-compose.prod.yml run --rm  djprod python manage.py collectstatic --noinput


zcronad:
	docker-compose    run --rm djdev   python manage.py crontab add

  

# shell in django
#
zdjbash:
	docker-compose run djangodev /bin/bash


zprb:
	docker-compose  -f docker-compose.prod.yml  build

zprup:
	docker-compose  -f docker-compose.prod.yml  up

zprupd:
	docker-compose  -f docker-compose.prod.yml  up -d

zprst:
	docker-compose  -f docker-compose.prod.yml  down

zprrs:
	docker-compose  -f docker-compose.prod.yml  restart



zumasktest:
	docker-compose  -f docker-compose.devtest.yml  run djangodev  django-admin.py startproject myproject .

  

# clean docker containers 
#
zclean:   
	# remove this one.. 
	-docker rmi dkr382r-django_djangodev
  # remove docker containers exited 
	-docker rm $$(docker ps -qa --no-trunc --filter "status=exited") 
	# remove tagged <none> 
	-docker rmi $$(docker images | grep "^<none>" | awk '{ print $3 }') 
	-docker network rm $(docker network ls | grep "bridge" | awk '/ / { print $1 }')


#

perm1:
# fix permissions. make them group writable so www-data group can manage the files. move, delete, etc..  
	docker-compose run djangodev sh sc/fixpermsh

    
# having trouble setting env variable, but do I need it?  
#
perm2:  
	docker-compose run vv \
	bash -c " chmod -R go+rwx  /code"

  
zrecreatep:  
# recreate for production...
	docker-compose -f docker-compose.prod.yml up --build  --force-recreate  

  
zrecreated:  
# dev recreate build force
	docker-compose  up --build  --force-recreate  
 
zup:  
# dev recreate build force
	docker-compose  up 

  
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# https://github.com/docker/compose/issues/2033 docker compose command line run sh multiple commands in one line
# $ requires escaping with $, so, $$
# continuation card  \
# - dash in front of command ignores error. -rm -f *.o
