FROM ruby:2.6

WORKDIR /myapp

ENV BUNDLE_PATH /bundle
ENV RAILS_ROOT /myapp

# RUN bundle config --global frozen 1

COPY Gemfile Gemfile.lock ./
# COPY Gemfile /myapp/Gemfile
# COPY Gemfile.lock /myapp/Gemfile.lock
# COPY . /myapp

RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs mc \
  && echo "alias lsl='ls -la'" >>   ~/.bashrc ; chmod ugo+rw  ~/.bashrc \
  && echo "alias psg='ps -ef|grep '" >>   ~/.bashrc 

# RUN bundle install --jobs 40 --retry 5
# RUN bundle install 

# RUN  apt-get install -y  mc 
# RUN  echo "alias lsl='ls -la'" >>   ~/.bashrc ; chmod ugo+rw  ~/.bashrc
# RUN echo "alias psg='ps -ef|grep '" >>   ~/.bashrc 

# RUN mkdir /myapp

EXPOSE 3000

# https://medium.com/@cristian_rivera/cache-rails-bundle-w-docker-compose-45512d952c2d
COPY ./docker/app.docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh
ENTRYPOINT ["/docker-entrypoint.sh"]

ENV BUNDLE_PATH=/bundle \
  BUNDLE_BIN=/bundle/bin \
  GEM_HOME=/bundle
ENV PATH="${BUNDLE_BIN}:${PATH}"