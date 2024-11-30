source 'https://rubygems.org'
gem 'figaro' # switched from dotenv

gem 'rails', '~> 5.0.2'

# gem 'dotenv-rails', :github => "bkeepers/dotenv" # i had trouble getting this to work. see figaro

git_source(:github) do |repo_name|
  repo_name = "#{repo_name}/#{repo_name}" unless repo_name.include?("/")
  "https://github.com/#{repo_name}.git"
end


gem 'mysql2'
gem 'sqlite3'
gem 'puma', '~> 3.0'
gem 'sass-rails', '~> 5.0'
gem 'uglifier', '>= 1.3.0'
gem 'coffee-rails', '~> 4.2'
gem 'jquery-rails'
#gem 'turbolinks', '~> 5'
gem 'jbuilder', '~> 2.5'

group :development, :test do
  # Call 'byebug' anywhere in the code to stop execution and get a debugger console
  gem 'byebug', platform: :mri
  gem 'pry-rails'
  gem 'rspec-rails', '~> 3.5'
  gem 'shoulda-matchers'
  gem 'capybara'
  gem 'factory_girl_rails'
  gem 'database_cleaner'
end

group :development do
  # Access an IRB console on exception pages or by using <%= console %> anywhere in the code.
  gem 'web-console', '>= 3.3.0'
  gem 'listen', '~> 3.0.5'
  # Spring speeds up development by keeping your application running in the background. Read more: https://github.com/rails/spring
  gem 'spring'
  gem 'spring-watcher-listen', '~> 2.0.0'
end

# Windows does not include zoneinfo files, so bundle the tzinfo-data gem
gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]
#
gem 'faker'
gem 'populator'
gem 'thor', '0.19.1'
#
# https://github.com/twbs/bootstrap-sass
#
gem 'simple_form'
gem 'bootstrap-sass'
gem 'kaminari'
gem 'ransack'
gem 'bootstrap-kaminari-views'
gem "devise"
gem 'jwt'
gem "cancancan"
gem 'select2-rails'
gem 'cocoon'

# gem 'bootstrap', '4.0.0.alpha4'

source 'https://rails-assets.org' do
  gem 'rails-assets-tether', '>= 1.1.0'
end

gem 'rails_12factor', group: :production
gem "devise_ldap_authenticatable", :git => "git://github.com/cschiewek/devise_ldap_authenticatable.git"

gem 'rails_admin'
gem 'rails_admin_material'
gem 'rails_admin_mydash'
#
gem 'enum_help'
#
  gem "yaml_db", :git => "git://github.com/dgleba/yaml_db.git"
  gem 'seed_dump'
#
gem 'signature-pad-rails'
gem 'paper_trail'
# https://github.com/bigtunacan/rails-jquery-autocomplete
# https://github.com/yifeiwu/rails4-autocomplete-demo
gem 'rails-jquery-autocomplete'
gem 'jquery-ui-rails'
gem 'autosize'
