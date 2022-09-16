
# https://github.com/Mashpy/rails-7-docker-template-with-mysql/blob/main/Dockerfile


FROM ruby:3.1.2-slim

RUN apt-get update -qq && apt-get install -yq --no-install-recommends \
    build-essential \
    gnupg2 \
    less \
    git \
    libpq-dev \
    postgresql-client \
    default-libmysqlclient-dev \
    libvips42 \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ENV LANG=C.UTF-8 \
  BUNDLE_JOBS=4 \
  BUNDLE_RETRY=3
  
# RUN gem update --system && gem install bundler

# ENV BUNDLE_PATH /bundle
# ENV RAILS_ROOT /myapp

# nothanks RUN bundle config --global frozen 1

# unneeded.. COPY Gemfile Gemfile.lock ./

# RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs mc \

RUN echo "alias lsl='ls -la'" >>   ~/.bashrc ; chmod ugo+rw  ~/.bashrc \
  && echo "alias psg='ps -ef|grep '" >>   ~/.bashrc  \
  && mkdir -p /app

WORKDIR /app

EXPOSE 3000

# ENTRYPOINT ["./entrypoint.sh"]

CMD ["bundle", "exec", "rails", "s", "-b", "0.0.0.0"]
