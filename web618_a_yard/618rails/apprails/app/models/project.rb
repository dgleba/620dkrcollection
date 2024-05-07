class Project < ApplicationRecord
    has_many :favorite_project
	has_many :user, through: :favorite_project
    
    has_paper_trail  class_name: 'PapertrailTable'

    def self.plk
        # raw sql select using ...
        Project.find_by_sql \
        <<-SQL
        
        SELECT projects.id, projects.name, favorite_projects.fave_num ,favorite_projects.user_id FROM `projects` 
        LEFT OUTER JOIN `favorite_projects` ON
        `favorite_projects`.`project_id` = `projects`.`id` 
        WHERE (projects.id >716) order by fave_num desc,name
        
        SQL
    end
    
    def to_s
        # show columns contents, not record object like: 	#<Vehicle:0x007f343b3f2890>	2016-06-08
        "#{number} -- #{name} -- #{active}"
    end

end
