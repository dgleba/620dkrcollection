class ProjectsController < ApplicationController
before_filter :authenticate_user!
  # before_action :set_project, only: [:show, :edit, :update, :destroy]

  #cancancan
  load_and_authorize_resource


  # GET /projects
  def index
    @q = @projects.search params[:q]
    @projects = @q.result.page(params[:page])
  end

  # GET /projects/1
  def show
  end

  # GET /projects/new
  def new
  end

  # GET /projects/1/edit
  def edit
  end

  # POST /projects
  def create
    respond_to do |format|
      if @project.save
        format.html { redirect_to @project, notice: t('success_create') }
        format.json { render :show, status: :created, location: @project }
      else
        format.html { render :new }
        format.json { render json: @project.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /projects/1
  def update
    respond_to do |format|
      if @project.update(project_params)
        format.html { redirect_to @project, notice: t('success_update') }
        format.json { render :show, status: :ok, location: @project }
      else
        format.html { render :edit }
        format.json { render json: @project.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /projects/1
  def destroy
    @project.destroy
    respond_to do |format|
      format.html { redirect_to projects_url, notice: t('success_destroy') }
      format.json { head :no_content }
    end
  end

  private

  # Only allow a trusted parameter "white list" through.
  def project_params
    params.require(:project).permit(:name, :number, :tech_radar_num, :active, :priority, 
      :ae_lead, :bd_lead_si_customer, :ae_objective, :sort_order, :active_status
             )

    # syntax error
    # params.require(:project).permit(:name, :number, :tech_radar_num, :active, :priority, 
    #   :ae_lead, :bd_lead_si_customer, :ae_objective, :sort_order, :active_status,
    #   favorite_project: :user_id, :fave_num       )

    # params.require(:project).permit!

    # params.require(:favorite_project).permit(:project_id, :user_id, :fave_num, :sort_order, :active_status)
    # params.permit(:project_id, :user_id, :fave_num, :sort_order, :active_status, :favorite_project)

  end
end
