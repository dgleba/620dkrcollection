class CreateTimeLogs < ActiveRecord::Migration[5.0]
  def change
    create_table :time_logs do |t|
      t.references :project, foreign_key: true
      t.date :log_date
      t.float :log_hours
      t.text :detail
      t.references :user, foreign_key: true

      t.timestamps
    end
  end
end
