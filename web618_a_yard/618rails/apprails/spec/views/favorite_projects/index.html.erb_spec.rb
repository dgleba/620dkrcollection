require 'rails_helper'

RSpec.describe "favorite_projects/index", type: :view do
  before(:each) do
    assign(:favorite_projects, [
      FavoriteProject.create!(
        :project => nil,
        :user => nil,
        :fave_num => 2,
        :sort_order => 3,
        :active_status => 4
      ),
      FavoriteProject.create!(
        :project => nil,
        :user => nil,
        :fave_num => 2,
        :sort_order => 3,
        :active_status => 4
      )
    ])
  end

  it "renders a list of favorite_projects" do
    render
    assert_select "tr>td", :text => nil.to_s, :count => 2
    assert_select "tr>td", :text => nil.to_s, :count => 2
    assert_select "tr>td", :text => 2.to_s, :count => 2
    assert_select "tr>td", :text => 3.to_s, :count => 2
    assert_select "tr>td", :text => 4.to_s, :count => 2
  end
end
