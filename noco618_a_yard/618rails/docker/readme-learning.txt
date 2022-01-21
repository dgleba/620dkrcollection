
IMPORTANT
      Remember to edit both web.Dockerfile and app.Dockerfile 
      
      # Set an environment variable where the Rails app is installed to inside of Docker image:
      # ENV RAILS_ROOT /var/www/app_name
      ENV RAILS_ROOT /var/www/brail347a22   # <<<  edit app_name

      

Create docker folder in app root 


-app_name
  -app
  -db
  -config
    -database.yml
  ...
  -docker
    -app
      -DockerFile
    -web
      -DockerFile
      -nginx.conf
  -docker-compose.yml
  

ref.
  
https://itnext.io/docker-rails-puma-nginx-postgres-999cd8866b18

https://gist.github.com/satendra02/1b335b06bfc5921df486f26bd98e0e89


  