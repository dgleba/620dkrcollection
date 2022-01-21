require 'rails_helper'

RSpec.describe "favorite_projects/edit", type: :view do
  before(:each) do
    @favorite_project = assign(:favorite_project, FavoriteProject.create!(
      :project => nil,
      :user => nil,
      :fave_num => 1,
      :sort_order => 1,
      :active_status => 1
    ))
  end

  it "renders the edit favorite_project form" do
    render

    assert_select "form[action=?][method=?]", favorite_project_path(@favorite_project), "post" do

      assert_select "input#favorite_project_project_id[name=?]", "favorite_project[project_id]"

      assert_select "input#favorite_project_user_id[name=?]", "favorite_project[user_id]"

      assert_select "input#favorite_project_fave_num[name=?]", "favorite_project[fave_num]"

      assert_select "input#favorite_project_sort_order[name=?]", "favorite_project[sort_order]"

      assert_select "input#favorite_project_active_status[name=?]", "favorite_project[active_status]"
    end
  end
end
