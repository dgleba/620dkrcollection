namespace :db do
  desc "fill database"
  task :populate => :environment do
    require 'populator'
    require 'faker'
    Product.populate 11 do |a12|
      a12.name     = Faker::Commerce.product_name
    end
    CountryOfOrigin.populate 99 do |a12|
      a12.name     = Faker::Address.country
    end
    Pfeature.populate 9 do |a12|
      a12.name     = Faker::Commerce.color
    end
  end
end
