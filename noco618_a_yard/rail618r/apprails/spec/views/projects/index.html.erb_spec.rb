require 'rails_helper'

RSpec.describe "projects/index", type: :view do
  before(:each) do
    assign(:projects, [
      Project.create!(
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
      ),
      Project.create!(
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
      )
    ])
  end

  it "renders a list of projects" do
    render
    assert_select "tr>td", :text => "Name".to_s, :count => 2
    assert_select "tr>td", :text => "Number".to_s, :count => 2
    assert_select "tr>td", :text => "Tech Radar Num".to_s, :count => 2
    assert_select "tr>td", :text => "Active".to_s, :count => 2
    assert_select "tr>td", :text => "Priority".to_s, :count => 2
    assert_select "tr>td", :text => "Ae Lead".to_s, :count => 2
    assert_select "tr>td", :text => "Bd Lead Si Customer".to_s, :count => 2
    assert_select "tr>td", :text => "MyText".to_s, :count => 2
    assert_select "tr>td", :text => 2.to_s, :count => 2
    assert_select "tr>td", :text => 3.to_s, :count => 2
  end
end
