class AddUniqueIndexOnAuditorToUsers < ActiveRecord::Migration[5.0]
  def change
    add_index :users, :auditor_inMSaccess_reporter, unique: true
  end
end
