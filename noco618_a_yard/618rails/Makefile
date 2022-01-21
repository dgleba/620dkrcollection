
# One liners and simple stuff may be here in this makefile. See readme.md for more info.



cons:
	docker-compose exec web bundle exec rails console

devb:
	docker-compose  -f docker-compose.yml  build

bi:
	docker-compose run --rm web bundle install

dup:
	docker-compose  -f docker-compose.yml up

mi:
	docker-compose  -f docker-compose.yml  exec web rails db:migrate

se:
	docker-compose  -f docker-compose.yml  exec web rails db:seed

destroyscaffold2:

	docker-compose  -f docker-compose.yml  exec web rails destroy scaffold  Elist 
	docker-compose  -f docker-compose.yml  exec web rails destroy scaffold  ElistReport 
	docker-compose  -f docker-compose.yml  exec web rails destroy scaffold  Report

# having trouble setting env variable, but do I need it?
# to gain write access to code files created by the container.
perm:
	docker-compose exec  web	bash -c "chmod -R u+rw-s,g+rws,o+r  /app "
	docker-compose exec dbm	bash -c "chmod -R u+rw-s,g+rws,o+rw  /mydat "

asc:
	docker-compose  run --rm web bundle exec rake assets:precompile


#

# Production deployment

prb:
	docker-compose  -f docker-compose.prod.yml build

prup:
	docker-compose  -f docker-compose.prod.yml up

prd:
	docker-compose  -f docker-compose.prod.yml up -d

pasc:
	docker-compose -f docker-compose.prod.yml run prodweb bundle exec rake assets:precompile

prdn:
	# leads to.. ERROR: for prod469_web_1  Cannot start service web: network dd5fb837f569e4aed574e9af8ded2914b359b0d2899aaeccf93857950bb15fd6 not found
	docker-compose  -f docker-compose.prod.yml down

prst:
	docker-compose  -f docker-compose.prod.yml stop


#

mgr219:
	docker-compose --rm run app bin/rails active_storage:install:migrations ; \
     	docker-compose run app rake db:migrate



# Database 

#
# 2020-09-22 i used dumpall, and impall to move from docker named volume to folder mounted. works ok.
# dump was used as an extra backup before doing the migration.
#

dump:
	docker-compose  exec dbm /bin/bash /script/all-individual-mysqldump.sh

dumpall:
	docker-compose  exec dbm /bin/bash -c 'exec mysqldump --force  --user=root -p"$$MYSQL_ROOT_PASSWORD" --all-databases  \
      --routines   --events  > /mydat/db_mysqldump-alldb-events.$$(date +"%Y-%m-%d_%H.%M.%S").sql '

impall:
	  docker-compose  exec dbm /bin/bash -c 'exec mysql --local-infile=1 -uroot \
	  	-p"$$MYSQL_ROOT_PASSWORD"  < /mydat/db_mysqldump-alldb-events.sql '


dumpalltest2:
	docker-compose  exec dbm /bin/bash -c 'exec mysqldump --force  --user=root -p"$$MYSQL_ROOT_PASSWORD" \
	   --all-databases    > /mydat/db_mysqldump-alldb-noevents01.sql '






# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

#  other / `less common` stuff / examples...






devrup9:
	docker-compose  -f docker-compose.yml up --build  --force-recreate

prupr9:
	docker-compose  -f docker-compose.prod.yml up --build  --force-recreate


te9:
  # test accessing exported env variable.
	echo $${PWD##*/}
	#export PWDbasename=$${PWD##*/} ; echo $$PWDbasename



myrup9:
# db recreate build force
	docker-compose  up --build  --force-recreate

myup9:
# db up
	docker-compose up

phprup9:
	# docker-compose  -f php/docker-compose.yml stop \
	docker-compose  -f ../php392/docker-compose.yml up --build  --force-recreate

phpup9:
	docker-compose  -f ../php392/docker-compose.yml up


myl9:
	docker-compose  -f mysql/docker-compose.yml logs -t -f

adup9:
	docker-compose  -f ../adminer392/docker-compose.yml up --build  --force-recreate

myd9:
# dump
	docker-compose  -f mysql/docker-compose.yml run

mysh9:
	docker-compose  -f mysql/docker-compose.yml exec dbm /bin/bash


myimpa9:
	docker-compose  -f mysql/docker-compose.yml exec dbm /bin/bash /root/sh21.sh

mydumpa9:
	docker-compose  -f mysql/docker-compose.yml exec dbm /bin/bash /root/all-individual-mysqldump.sh


mydumpb9:
	docker-compose  -f mysql/docker-compose.yml exec dbm sh -c 'exec mysqldump  --force --opt --user=root -p"$$MYSQL_ROOT_PASSWORD" --databases dkrdbm dgnote130  \
    --complete-insert --quote-names  --allow-keywords  \
    --skip-add-drop-table --add-drop-database  --skip-lock-tables  --no-tablespaces --no-create-info --routines  \
    --events  > /home/db_mysqldump.sql '



# run system with umask test dockerfile
# I can't seem to get writable group permissions 2018-08-27_Mon_21.28-PM
#
umasktest9:
	docker-compose  -f docker-compose.devtest.yml  run djangodev  django-admin.py startproject myproject .


# shell in django
#
djbash9:
	docker-compose run djangodev /bin/bash

dps9:
	docker ps
	docker ps -a
	docker images
	docker volume ls


# clean docker containers
#
clean:
	# docker ps
	# docker ps -a
	# docker images
	# docker volume ls
	# remove this one..
	# -docker rmi dkr382django2t_djangodev
	# -docker rmi dkr382r-django_djangodev
  # remove docker containers exited
	-docker rm $$(docker ps -qa --no-trunc --filter "status=exited")
	# remove tagged <none>
	-docker rmi $$(docker images | grep "^<none>" | awk '{ print $3 }')
  #volumes
	# Not sure I want this done too much.. -docker volume rm $$(docker volume ls -qf dangling=true)


#
dkv9:
	docker --version
	docker-compose -version


perm9:
# fix permissions. make them group writable so www-data group can manage the files. move, delete, etc..
	docker-compose run djangodev sh sc/fixpermsh




recreatep9:
# recreate for production...
	docker-compose -f docker-compose.prod.yml up --build  --force-recreate

rup9:
# dev recreate build force
	docker-compose  up --build  --force-recreate

up9:
# dev recreate build force
	docker-compose  up

prep9:
	docker/prep.sh

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# https://github.com/docker/compose/issues/2033 docker compose command line run sh multiple commands in one line
# $ requires escaping with $, so, $$
# continuation card  \
# - dash in front of command ignores error. -rm -f *.o
