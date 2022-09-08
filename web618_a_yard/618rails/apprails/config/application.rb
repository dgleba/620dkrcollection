#srv\web\lpa346\config\application.rb

require_relative 'boot'

require 'rails/all'

# Require the gems listed in Gemfile, including any gems
# you've limited to :test, :development, or :production.
Bundler.require(*Rails.groups)

# Dotenv::Railtie.load
# require 'figaro'

# https://github.com/rails-sqlserver/activerecord-sqlserver-adapter/issues/568
# puts ENV.inspect

ENV['RAILS_ADMIN_THEME'] = 'material'
    
puts '___1____'
#puts ENV.inspect

module Projtrac535
  class Application < Rails::Application
  
    #config # https://github.com/laserlemon/figaro/issues/186
    
    # http://railsapps.github.io/rails-environment-variables.html
    config.before_configuration do
      env_file = File.join(Rails.root, 'config', 'local_env.yml')
      YAML.load(File.open(env_file)).each do |key, value|
        ENV[key.to_s] = value
      end if File.exists?(env_file)
    end
    
    puts '___2____'
    puts ENV.inspect

    # config.before_configuration do
      # Figaro.load
    # end

    config.time_zone = 'Eastern Time (US & Canada)'
    # got error wit this..... config.time_zone = :local
    config.active_record.default_timezone = :local

    

    # Settings in config/environments/* take precedence over those specified here.
    # Application configuration should go into files in config/initializers
    # -- all .rb files in that directory are automatically loaded.
  end
end
