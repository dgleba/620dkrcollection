class CreateJoinTableRptElistReportName < ActiveRecord::Migration[5.0]
  def change
    create_join_table :rpt_elists, :report_names , table_name: :rpt_elists_report_names, \
          column_options: { index: true }  do |t|
      # t.index [:rpt_elist_id, :report_name_id]
      # t.index [:report_name_id, :rpt_elist_id]
    end
  end
end


