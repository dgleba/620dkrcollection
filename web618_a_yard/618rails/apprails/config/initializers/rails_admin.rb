
Rails.application.eager_load!

RailsAdmin.config do |config|

  #   I have not been able to get this to work...
  # config all models at once...
  # ActiveRecord::Base.descendants.each do |imodel|
    # config.model "#{imodel.name}" do
      # #
      # # list do
        # # exclude_fields :created_at, :updated_at
      # # end
      # #
      # edit do
        # fields do
          # help false
        # end
      # end
    # end
  # end
  # # https://github.com/sferik/rails_admin/wiki/Models

  config.main_app_name = Proc.new {
    ["Prod469", "(#{Time.zone.now.to_s(:time)})"]
  }
  
  config.total_columns_width = 9999999

  ### Popular gems integration

  # == Devise ==
  config.authenticate_with do
    warden.authenticate! scope: :user
  end
  config.current_user_method(&:current_user)

  ## == Cancan ==
   config.authorize_with :cancan
     # config.authorize_with :cancan, AdminAbility

  ## == Pundit ==
  # config.authorize_with :pundit

  ## == PaperTrail ==
    config.audit_with :paper_trail, 'User', 'PaperTrail::Version' # PaperTrail >= 3.0.0

   ### More at https://github.com/sferik/rails_admin/wiki/Base-configuration

  ## == Gravatar integration ==
  ## To disable Gravatar integration in Navigation Bar set to false
  # config.show_gravatar true

  config.actions do
    #dashboard                     # mandatory
    # hide disable record count bar graphs, https://github.com/sferik/rails_admin/wiki/Dashboard-action
    dashboard do
      statistics false
    end
    index                         # mandatory
    new
    export
    bulk_delete
    show
    edit
    delete
    show_in_app
    ## With an audit adapter, you can add:
     history_index
     history_show
  end

  # got error.. include_all_fields
  # don't exclude empty fields in show...
  config.compact_show_view = false
  

  config.model 'User' do
    edit do
      exclude_fields :versions
      fields do
        help false
      end
    end
    list do
      exclude_fields  :versions
    end
  end

  # noworky..
  # hide versions for all models.
  # ActiveRecord::Base.descendants.each do |imodel|
  #   # if  (imodel.name == 'Version')
  #   #   # do nothing
  #   #   puts "version model ---------------------"
  #   # end
  #     config.model "#{imodel.name}" do
  #       if  (imodel.name == 'Version')
  #         # do nothing
  #         puts "version model ---------------------"      
  #       else
  #         list do
  #           exclude_fields :versions
  #           # exclude_fields :created_at, :updated_at
  #         end
  #       end
  #   end
  # end
   


  #  http://stackoverflow.com/questions/11658281/rails-admin-display-name-instead-of-id
  # 2017-05-16 kwruby 
  # see the model for this item as well.
  # config.model 'RptElistReportName' do
  config.model 'Elist' do
    object_label_method do
      :radisplay_rpt_elist
    end

    edit do
      #include_all_fields # all other default fields will be added after, conveniently
      exclude_fields :elist_report,  :versions
      #
      fields do
        help false
      end
      field :active_status do   help '0 = inactive, 1 = active'   end  
      field :report do
        searchable [:name]
        queryable true # default except for associations

        associated_collection_scope do
          active_status = bindings[:object]
          proc { |scope| scope.where(active_status: 1) }
        end          
      end    
              
    end

    # ggl: rails_admin association edit show only active
    # https://stackoverflow.com/questions/54109021/rails-admin-form-for-has-many-association
      # field :students do
      #   associated_collection_scope do
      #     class_room = bindings[:object]

      #     proc { |scope| scope.where(class_room: class_room) }
      #   end

    list do
      sort_by :email
      #include_all_fields # all other default fields will be added after, conveniently
      exclude_fields :elist_report, :report, :versions
      #
      fields do
        help false
      end
    end    
    
  end


  config.model 'ElistReport' do
    exclude_fields  :versions
    list do
      field :elist do
        searchable [:email]
        queryable true # default except for associations
      end
      field :report do
        searchable [:name]
        queryable true # default except for associations
      end      
    end
  end

  config.model 'Report' do
    object_label_method do
      :radisplay_report
    end

    edit do
      #include_all_fields # all other default fields will be added after, conveniently
      exclude_fields :elist_report,  :versions
      #
      fields do
        help false
      end
      field :active_status do   help '0 = inactive, 1 = active'   end      
    end

    list do
      sort_by :name
      #include_all_fields # all other default fields will be added after, conveniently
      exclude_fields :elist_report, :elist, :versions
      #
      fields do
        help false
      end
    end    
    
  end

  # Example In `model`.rb
  #  http://stackoverflow.com/questions/11658281/rails-admin-display-name-instead-of-id
  #  see also.. \\10.4.1.227\rt\srv\share\lpa346\ ...   config\initializers\rails_admin.rb
  # def ra_question_list_nameref
  #   "##{id}: #{name}"
  # end


#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


end
