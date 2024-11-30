require 'rails_helper'

RSpec.describe "projects/edit", type: :view do
  before(:each) do
    @project = assign(:project, Project.create!(
      :name => "MyString",
      :number => "MyString",
      :tech_radar_num => "MyString",
      :active => "MyString",
      :priority => "MyString",
      :ae_lead => "MyString",
      :bd_lead_si_customer => "MyString",
      :ae_objective => "MyText",
      :sort_order => 1,
      :active_status => 1
    ))
  end

  it "renders the edit project form" do
    render

    assert_select "form[action=?][method=?]", project_path(@project), "post" do

      assert_select "input#project_name[name=?]", "project[name]"

      assert_select "input#project_number[name=?]", "project[number]"

      assert_select "input#project_tech_radar_num[name=?]", "project[tech_radar_num]"

      assert_select "input#project_active[name=?]", "project[active]"

      assert_select "input#project_priority[name=?]", "project[priority]"

      assert_select "input#project_ae_lead[name=?]", "project[ae_lead]"

      assert_select "input#project_bd_lead_si_customer[name=?]", "project[bd_lead_si_customer]"

      assert_select "textarea#project_ae_objective[name=?]", "project[ae_objective]"

      assert_select "input#project_sort_order[name=?]", "project[sort_order]"

      assert_select "input#project_active_status[name=?]", "project[active_status]"
    end
  end
end
