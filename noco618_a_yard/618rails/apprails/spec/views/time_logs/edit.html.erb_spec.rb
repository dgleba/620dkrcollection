require 'rails_helper'

RSpec.describe "time_logs/edit", type: :view do
  before(:each) do
    @time_log = assign(:time_log, TimeLog.create!(
      :project => nil,
      :log_hours => 1.5,
      :detail => "MyText",
      :user => nil
    ))
  end

  it "renders the edit time_log form" do
    render

    assert_select "form[action=?][method=?]", time_log_path(@time_log), "post" do

      assert_select "input#time_log_project_id[name=?]", "time_log[project_id]"

      assert_select "input#time_log_log_hours[name=?]", "time_log[log_hours]"

      assert_select "textarea#time_log_detail[name=?]", "time_log[detail]"

      assert_select "input#time_log_user_id[name=?]", "time_log[user_id]"
    end
  end
end
