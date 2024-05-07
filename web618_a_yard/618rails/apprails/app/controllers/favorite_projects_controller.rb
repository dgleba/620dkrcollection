class FavoriteProjectsController < ApplicationController
before_filter :authenticate_user!
  # before_action :set_favorite_project, only: [:show, :edit, :update, :destroy]

  #cancancan
  load_and_authorize_resource


  # cancancan..
  #load_and_authorize_resource :favorite_project

  # GET /favorite_projects
  def index
    @q = @favorite_projects.search params[:q]
    @favorite_projects = @q.result.page(params[:page])
  end

  # GET /favorite_projects/1
  def show
  end

  # GET /favorite_projects/new
  def new
  end

  # GET /favorite_projects/1/edit
  def edit
  end

  # POST /favorite_projects
  def create
    #
    # assign record to logged in user. 2020-09-20.
    @favorite_project.user = current_user
    #
    respond_to do |format|
      if @favorite_project.save
        format.html { redirect_to @favorite_project, notice: t('success_create') }
        format.json { render :show, status: :created, location: @favorite_project }
      else
        format.html { render :new }
        format.json { render json: @favorite_project.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /favorite_projects/1
  def update
    respond_to do |format|
      if @favorite_project.update(favorite_project_params)
        format.html { redirect_to @favorite_project, notice: t('success_update') }
        format.json { render :show, status: :ok, location: @favorite_project }
      else
        format.html { render :edit }
        format.json { render json: @favorite_project.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /favorite_projects/1
  def destroy
    @favorite_project.destroy
    respond_to do |format|
      format.html { redirect_to favorite_projects_url, notice: t('success_destroy') }
      format.json { head :no_content }
    end
  end

  private

  # Only allow a trusted parameter "white list" through.
  def favorite_project_params
    params.require(:favorite_project).permit(:project_id, :user_id, :fave_num, :sort_order, :active_status)
  end
end
