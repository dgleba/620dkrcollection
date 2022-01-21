class CreateProjects < ActiveRecord::Migration[5.0]
  def change
    create_table :projects do |t|
      t.string :name
      t.string :number
      t.string :tech_radar_num
      t.string :active
      t.string :priority
      t.string :ae_lead
      t.string :bd_lead_si_customer
      t.text :ae_objective
      t.integer :sort_order
      t.integer :active_status

      t.timestamps
    end
  end
end
