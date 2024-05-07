class AddAuditorToUser < ActiveRecord::Migration[5.0]
  def change
    add_column :users, :auditor_inMSaccess_reporter, :integer
  end
end
