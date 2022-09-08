# Migrating all mysql data and users to another server.


In Makefile

```
#
# 2020-09-22 i used dumpall, and impall to move from docker named volume to folder mounted. works ok.
# dump was used as an extra backup before doing the migration.
#

dump:
	docker-compose  exec dbm /bin/bash /script/all-individual-mysqldump.sh

dumpall:
	docker-compose  exec dbm /bin/bash -c 'exec mysqldump --force  --user=root -p"$$MYSQL_ROOT_PASSWORD" --all-databases  \
      --routines   --events  > /mydat/db_mysqldump-alldb-events.sql '

impall:
	  docker-compose  exec dbm /bin/bash -c 'exec mysql --local-infile=1 -uroot \
	  	-p"$$MYSQL_ROOT_PASSWORD"  < /mydat/db_mysqldump-alldb-events.sql '

```
