require 'rails_helper'

RSpec.describe "time_logs/new", type: :view do
  before(:each) do
    assign(:time_log, TimeLog.new(
      :project => nil,
      :log_hours => 1.5,
      :detail => "MyText",
      :user => nil
    ))
  end

  it "renders new time_log form" do
    render

    assert_select "form[action=?][method=?]", time_logs_path, "post" do

      assert_select "input#time_log_project_id[name=?]", "time_log[project_id]"

      assert_select "input#time_log_log_hours[name=?]", "time_log[log_hours]"

      assert_select "textarea#time_log_detail[name=?]", "time_log[detail]"

      assert_select "input#time_log_user_id[name=?]", "time_log[user_id]"
    end
  end
end
