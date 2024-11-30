#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

See bashrail instructions too. https://github.com/dgleba/bashrail.git

seemed to help create gemfile.lock, then dkupr worked better..
docker run --rm -v "$PWD":/myapp -w /myapp ruby:2.5 bundle install
eg. from https://hub.docker.com/_/ruby/
docker run --rm -v "$PWD":/usr/src/app -w /usr/src/app ruby:2.5 bundle install

works..

docker-compose exec dev rake db:migrate

docker-compose exec dev rake db:seed

no..
docker-compose run dev bin/rails g scaffold ReportName name clock active_status:integer sort_order:integer
albe@pmdsdata8:/srv/file/prod467$ docker-compose run dev bin/rails g scaffold ReportName name clock active_status:integer sort_order:integer
Error response from daemon: OCI runtime create failed: container_linux.go:348: starting container process caused "exec: \"bin/rails\": permission denied": unknown
albe@pmdsdata8:/srv/file/prod467$

works..
docker-compose run dev bundle exec rails g scaffold ReportName name clock active_status:integer sort_order:integer

try..
docker-compose exec dev bundle exec rails g scaffold ReportName name clock active_status:integer sort_order:integer

try..

docker-compose run dev rails new /testapp --force --no-deps

albe@pmdsdata8:/srv/file/prod467\\\\\$ docker-compose run dev rails new /testapp --force --no-deps
Error response from daemon: OCI runtime create failed: container_linux.go:348: starting container process caused "exec: \"rails\": executable file not found in \\\\\$PATH": unknown
albe@pmdsdata8:/srv/file/prod467\$

try..

docker-compose run dev bin/rails new /testapp --force --no-deps

ans.
use -- bundle exec rails

bash

docker-compose -f docker-compose.yml exec dev /bin/bash

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# on .. pdata 10.4.1.224 pmdsdata3 ssh

cd /srv/dkr

git clone https://github.com/dgleba/brail347a22.git

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

# run it in docker..

chmod +x docker/prep.sh
docker/prep.sh

mkdir -p deployed/pids deployed/sockets deployed/log

---

docker-compose build

---

docker-compose run app rails r passw.rb
albe@pmdsdata4:/srv/dkr/brail347a22\$ docker-compose run app rails r passw.rb
Starting brail347a22_db_1 ... done
Please specify a valid ruby command or the path of a script to run.
Run 'bin/rails runner -h' for help.
undefined local variable or method `passw' for main:Object

rails r passw.rb -e production

---

docker-compose up

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

https://www.reddit.com/r/docker/comments/7zjbe4/docker_rails_puma_nginx_postgres/

level 2 satendra02nov
1 point ·6 months ago

I have removed the db:setup from DockerFile for rails app as you suggested. Now this can be handled manually.

docker-compose run app rake db:create
docker-compose run app rake db:migrate
docker-compose run app rake db:seed

works..

docker-compose exec dev rake db:migrate

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
