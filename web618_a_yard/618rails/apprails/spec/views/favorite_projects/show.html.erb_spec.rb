require 'rails_helper'

RSpec.describe "favorite_projects/show", type: :view do
  before(:each) do
    @favorite_project = assign(:favorite_project, FavoriteProject.create!(
      :project => nil,
      :user => nil,
      :fave_num => 2,
      :sort_order => 3,
      :active_status => 4
    ))
  end

  it "renders attributes in <p>" do
    render
    expect(rendered).to match(//)
    expect(rendered).to match(//)
    expect(rendered).to match(/2/)
    expect(rendered).to match(/3/)
    expect(rendered).to match(/4/)
  end
end
