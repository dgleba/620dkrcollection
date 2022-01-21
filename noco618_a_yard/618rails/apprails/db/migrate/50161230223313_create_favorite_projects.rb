class CreateFavoriteProjects < ActiveRecord::Migration[5.0]
  def change
    create_table :favorite_projects do |t|
      t.references :project, foreign_key: true
      t.references :user, foreign_key: true
      t.integer :fave_num
      t.integer :sort_order
      t.integer :active_status

      t.timestamps
    end
  end
end
