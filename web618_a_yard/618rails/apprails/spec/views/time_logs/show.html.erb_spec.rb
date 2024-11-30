require 'rails_helper'

RSpec.describe "time_logs/show", type: :view do
  before(:each) do
    @time_log = assign(:time_log, TimeLog.create!(
      :project => nil,
      :log_hours => 2.5,
      :detail => "MyText",
      :user => nil
    ))
  end

  it "renders attributes in <p>" do
    render
    expect(rendered).to match(//)
    expect(rendered).to match(/2.5/)
    expect(rendered).to match(/MyText/)
    expect(rendered).to match(//)
  end
end
