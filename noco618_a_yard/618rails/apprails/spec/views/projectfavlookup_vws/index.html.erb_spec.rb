require 'rails_helper'

RSpec.describe "projectfavlookup_vws/index", type: :view do
  before(:each) do
    assign(:projectfavlookup_vws, [
      ProjectfavlookupVw.create!(
        :name => "Name",
        :number => "Number",
        :active => "Active",
        :fave_num => 2,
        :user_id => 3
      ),
      ProjectfavlookupVw.create!(
        :name => "Name",
        :number => "Number",
        :active => "Active",
        :fave_num => 2,
        :user_id => 3
      )
    ])
  end

  it "renders a list of projectfavlookup_vws" do
    render
    assert_select "tr>td", :text => "Name".to_s, :count => 2
    assert_select "tr>td", :text => "Number".to_s, :count => 2
    assert_select "tr>td", :text => "Active".to_s, :count => 2
    assert_select "tr>td", :text => 2.to_s, :count => 2
    assert_select "tr>td", :text => 3.to_s, :count => 2
  end
end
