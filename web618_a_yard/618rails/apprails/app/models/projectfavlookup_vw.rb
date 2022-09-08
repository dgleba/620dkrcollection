class ProjectfavlookupVw < ApplicationRecord

    # http://10.4.1.231:6533/projectfavlookup_vws

    # this model access the view...
    
    # see view code at: sftp://10.4.1.231/srv/dkr/projtrac535/proj535/sql/projectfavlookupVw.view.txt.sql

    self.table_name  = 'vw_projectfavlookup'
    # specify primary key name if it's other than id
    #   self.primary_key = 'id'


    def to_s
        # show columns contents, not record object like: 	#<Vehicle:0x007f343b3f2890>	2016-06-08
        "#{number} -- #{name} -- fav=#{fave_num}"
    end
  
  end