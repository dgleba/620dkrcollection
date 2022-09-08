require 'rails_helper'

RSpec.describe "projectfavlookup_vws/show", type: :view do
  before(:each) do
    @projectfavlookup_vw = assign(:projectfavlookup_vw, ProjectfavlookupVw.create!(
      :name => "Name",
      :number => "Number",
      :active => "Active",
      :fave_num => 2,
      :user_id => 3
    ))
  end

  it "renders attributes in <p>" do
    render
    expect(rendered).to match(/Name/)
    expect(rendered).to match(/Number/)
    expect(rendered).to match(/Active/)
    expect(rendered).to match(/2/)
    expect(rendered).to match(/3/)
  end
end
