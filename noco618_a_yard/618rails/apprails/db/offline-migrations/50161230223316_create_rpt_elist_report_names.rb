class CreateRptElistReportNames < ActiveRecord::Migration[5.0]
  def change
    create_table :rpt_elist_report_names do |t|
      t.references :rpt_elist, foreign_key: true
      t.references :report_name, foreign_key: true
      t.integer :active_status
      t.integer :sort_order

      t.timestamps
    end
  end
end
