class ProjectfavlookupVwsController < ApplicationController
before_filter :authenticate_user!
  # before_action :set_projectfavlookup_vw, only: [:show, :edit, :update, :destroy]

  #cancancan
  load_and_authorize_resource


  # cancancan..
  #load_and_authorize_resource :projectfavlookup_vw

  # GET /projectfavlookup_vws
  def index
    @q = @projectfavlookup_vws.search params[:q]
    @projectfavlookup_vws = @q.result.page(params[:page])
  end

  # GET /projectfavlookup_vws/1
  def show
  end

  # GET /projectfavlookup_vws/new
  def new
  end

  # GET /projectfavlookup_vws/1/edit
  def edit
  end

  # POST /projectfavlookup_vws
  def create
    respond_to do |format|
      if @projectfavlookup_vw.save
        format.html { redirect_to @projectfavlookup_vw, notice: t('success_create') }
        format.json { render :show, status: :created, location: @projectfavlookup_vw }
      else
        format.html { render :new }
        format.json { render json: @projectfavlookup_vw.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /projectfavlookup_vws/1
  def update
    respond_to do |format|
      if @projectfavlookup_vw.update(projectfavlookup_vw_params)
        format.html { redirect_to @projectfavlookup_vw, notice: t('success_update') }
        format.json { render :show, status: :ok, location: @projectfavlookup_vw }
      else
        format.html { render :edit }
        format.json { render json: @projectfavlookup_vw.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /projectfavlookup_vws/1
  def destroy
    @projectfavlookup_vw.destroy
    respond_to do |format|
      format.html { redirect_to projectfavlookup_vws_url, notice: t('success_destroy') }
      format.json { head :no_content }
    end
  end

  private

  # Only allow a trusted parameter "white list" through.
  def projectfavlookup_vw_params
    params.require(:projectfavlookup_vw).permit(:name, :number, :active, :fave_num, :user_id)
  end
end
