require "rails_helper"

RSpec.describe ProjectfavlookupVwsController, type: :routing do
  describe "routing" do

    it "routes to #index" do
      expect(:get => "/projectfavlookup_vws").to route_to("projectfavlookup_vws#index")
    end

    it "routes to #new" do
      expect(:get => "/projectfavlookup_vws/new").to route_to("projectfavlookup_vws#new")
    end

    it "routes to #show" do
      expect(:get => "/projectfavlookup_vws/1").to route_to("projectfavlookup_vws#show", :id => "1")
    end

    it "routes to #edit" do
      expect(:get => "/projectfavlookup_vws/1/edit").to route_to("projectfavlookup_vws#edit", :id => "1")
    end

    it "routes to #create" do
      expect(:post => "/projectfavlookup_vws").to route_to("projectfavlookup_vws#create")
    end

    it "routes to #update via PUT" do
      expect(:put => "/projectfavlookup_vws/1").to route_to("projectfavlookup_vws#update", :id => "1")
    end

    it "routes to #update via PATCH" do
      expect(:patch => "/projectfavlookup_vws/1").to route_to("projectfavlookup_vws#update", :id => "1")
    end

    it "routes to #destroy" do
      expect(:delete => "/projectfavlookup_vws/1").to route_to("projectfavlookup_vws#destroy", :id => "1")
    end

  end
end
