require 'rails_helper'

RSpec.describe "projects/show", type: :view do
  before(:each) do
    @project = assign(:project, Project.create!(
      :name => "Name",
      :number => "Number",
      :tech_radar_num => "Tech Radar Num",
      :active => "Active",
      :priority => "Priority",
      :ae_lead => "Ae Lead",
      :bd_lead_si_customer => "Bd Lead Si Customer",
      :ae_objective => "MyText",
      :sort_order => 2,
      :active_status => 3
    ))
  end

  it "renders attributes in <p>" do
    render
    expect(rendered).to match(/Name/)
    expect(rendered).to match(/Number/)
    expect(rendered).to match(/Tech Radar Num/)
    expect(rendered).to match(/Active/)
    expect(rendered).to match(/Priority/)
    expect(rendered).to match(/Ae Lead/)
    expect(rendered).to match(/Bd Lead Si Customer/)
    expect(rendered).to match(/MyText/)
    expect(rendered).to match(/2/)
    expect(rendered).to match(/3/)
  end
end
