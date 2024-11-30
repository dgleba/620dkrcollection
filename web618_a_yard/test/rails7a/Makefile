
# One liners and simple stuff may be here in this makefile. See readme.md for more info.



cons:
	docker-compose exec web bundle exec rails console

newr:
	docker-compose run --rm web rails new r7hot .

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
	#docker-compose exec dbm	bash -c "chmod -R u+rw-s,g+rws,o+rw  /mydat "

permn:
	docker-compose -f docker-compose-rails-new.yml  run --rm web 	bash -c "chmod -R u+rw-s,g+rws,o+r  /app "
	#docker-compose exec dbm	bash -c "chmod -R u+rw-s,g+rws,o+rw  /mydat "

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




