class Ability
  include CanCan::Ability

  # remember to add roles to user.rb
  #
  # http://hibbard.eu/authentication-with-devise-and-cancancan-in-rails-4-2/  
  #

  def initialize(user)

    if user.lr_admin?
      can :manage, :all
      can :access, :rails_admin       
      can :dashboard                  # allow access to dashboard

    elsif user.lr_supervisor?

      # if this not  here, then cannot autocomplete machine
      can :manage, :all
      cannot [ :create, :update, :destroy,  ],  :all

      can :access, :rails_admin      
      can :manage, :dashboard                  # allow access to dashboard
      can :dashboard                  # allow access to dashboard
      can :access, :dashboard                  # allow access to dashboard
      can :show_in_app, :all

      can :read, :all 
      can :read,  [  Project ]
      can [ :read, :create, :update, ], [ TimeLog, FavoriteProject, Project, User, Role ]
      can [:destroy,], [ TimeLog, FavoriteProject, Project ]

      can :export,  :all 
      can :history,  :all
      
      
    elsif user.lr_regular?

      # if this not  here, then cannot autocomplete machine
      can :manage, :all
      cannot [ :create, :update, :destroy, :read ],  :all

      can :access, :rails_admin       
      can :manage, :dashboard                  # allow access to dashboard
      can :dashboard                  # allow access to dashboard
      can :access, :dashboard                  # allow access to dashboard

      can :read,  [  Project ]
      can [ :read, :create, :update, :destroy,], [ TimeLog, FavoriteProject ], user_id: user.id
      can :export,  :all 
      can :show_in_app, :all

    elsif user.lr_future4?
      # can :read, [ Product, Role, User]
      # can [ :create, :update, :destroy, ], [ Product, ]

      
    elsif user.lr_readonly?
      can :manage, :all
      cannot [ :create, :update, :destroy, :read ],  :all

      can :manage, :dashboard                  # allow access to dashboard
      can :dashboard                  # allow access to dashboard
      can :access, :rails_admin       
      can :access, :dashboard                  # allow access to dashboard

      cannot :export,  :all 
      can :show_in_app, :all
      
    elsif user.lr_minimal?
      can :read, Role

    end
    
  end
   
end

