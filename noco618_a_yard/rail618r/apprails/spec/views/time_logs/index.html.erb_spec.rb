require 'rails_helper'

RSpec.describe "time_logs/index", type: :view do
  before(:each) do
    assign(:time_logs, [
      TimeLog.create!(
        :project => nil,
        :log_hours => 2.5,
        :detail => "MyText",
        :user => nil
      ),
      TimeLog.create!(
        :project => nil,
        :log_hours => 2.5,
        :detail => "MyText",
        :user => nil
      )
    ])
  end

  it "renders a list of time_logs" do
    render
    assert_select "tr>td", :text => nil.to_s, :count => 2
    assert_select "tr>td", :text => 2.5.to_s, :count => 2
    assert_select "tr>td", :text => "MyText".to_s, :count => 2
    assert_select "tr>td", :text => nil.to_s, :count => 2
  end
end
