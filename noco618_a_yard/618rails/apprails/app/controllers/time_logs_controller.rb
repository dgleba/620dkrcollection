class TimeLogsController < ApplicationController
before_filter :authenticate_user!
  # before_action :set_time_log, only: [:show, :edit, :update, :destroy]

  #cancancan
  load_and_authorize_resource


  # GET /time_logs
  def index
    @q = @time_logs.search params[:q]
    @time_logs = @q.result.page(params[:page])
    respond_to do |format|
      format.html
      format.json
      format.js
    end    
  end

  # GET /time_logs/1
  def show
  end

  # GET /time_logs/new
  def new
  end

  # GET /time_logs/1/edit
  def edit
  end

  # POST /time_logs
  def create
    
    @time_log.user = current_user

    respond_to do |format|
      if @time_log.save
        format.html { redirect_to action: "index", notice: t('success_create') }
        format.json { render :show, status: :created, location: @time_log }
        format.js
      else
        format.html { render :new }
        format.json { render json: @time_log.errors, status: :unprocessable_entity }
        format.js
      end
    end
  end

  # PATCH/PUT /time_logs/1
  def update
    respond_to do |format|
      if @time_log.update(time_log_params)
        format.html { redirect_to action: "index", notice: t('success_update') }
        format.json { render :show, status: :ok, location: @time_log }
        format.js
      else
        format.html { render :edit }
        format.json { render json: @time_log.errors, status: :unprocessable_entity }
        format.js
      end
    end
  end

  # DELETE /time_logs/1
  def destroy
    @time_log.destroy
    respond_to do |format|
      format.html { redirect_to time_logs_url, notice: t('success_destroy') }
      format.json { head :no_content }
      format.js
    end
  end

  private

  # Only allow a trusted parameter "white list" through.
  def time_log_params
    params.require(:time_log).permit(:project_id, :log_date, :log_hours, :detail, :user_id)
  end
end
