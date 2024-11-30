require "rails_helper"

RSpec.describe FavoriteProjectsController, type: :routing do
  describe "routing" do

    it "routes to #index" do
      expect(:get => "/favorite_projects").to route_to("favorite_projects#index")
    end

    it "routes to #new" do
      expect(:get => "/favorite_projects/new").to route_to("favorite_projects#new")
    end

    it "routes to #show" do
      expect(:get => "/favorite_projects/1").to route_to("favorite_projects#show", :id => "1")
    end

    it "routes to #edit" do
      expect(:get => "/favorite_projects/1/edit").to route_to("favorite_projects#edit", :id => "1")
    end

    it "routes to #create" do
      expect(:post => "/favorite_projects").to route_to("favorite_projects#create")
    end

    it "routes to #update via PUT" do
      expect(:put => "/favorite_projects/1").to route_to("favorite_projects#update", :id => "1")
    end

    it "routes to #update via PATCH" do
      expect(:patch => "/favorite_projects/1").to route_to("favorite_projects#update", :id => "1")
    end

    it "routes to #destroy" do
      expect(:delete => "/favorite_projects/1").to route_to("favorite_projects#destroy", :id => "1")
    end

  end
end
