require 'rails_helper'

RSpec.describe "projectfavlookup_vws/new", type: :view do
  before(:each) do
    assign(:projectfavlookup_vw, ProjectfavlookupVw.new(
      :name => "MyString",
      :number => "MyString",
      :active => "MyString",
      :fave_num => 1,
      :user_id => 1
    ))
  end

  it "renders new projectfavlookup_vw form" do
    render

    assert_select "form[action=?][method=?]", projectfavlookup_vws_path, "post" do

      assert_select "input#projectfavlookup_vw_name[name=?]", "projectfavlookup_vw[name]"

      assert_select "input#projectfavlookup_vw_number[name=?]", "projectfavlookup_vw[number]"

      assert_select "input#projectfavlookup_vw_active[name=?]", "projectfavlookup_vw[active]"

      assert_select "input#projectfavlookup_vw_fave_num[name=?]", "projectfavlookup_vw[fave_num]"

      assert_select "input#projectfavlookup_vw_user_id[name=?]", "projectfavlookup_vw[user_id]"
    end
  end
end
