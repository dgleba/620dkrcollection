module DgrailHelper

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

  # search most columns in .. table
  def most_projects_cont
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id"     
    ]
    Project.column_names.each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


  def text1_morning_meetings_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at"
           
    ]
    MorningMeeting.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end


#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


  
  # show line breaks when showing text_area
  def dgtexts(dgitem)
    simple_format( dgitem, {}, {wrapper_tag: "div" } )
  end
 
 
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 
  def text1_vehicles_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at"
           
    ]
    Vehicle.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end

  def text2_vehicles_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "rsackdummy2"     
    ]
    Vehicle.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end

  
  def text3_vehicles_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "rsackdummy3"     
    ]
    Vehicle.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end


#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

  # search most columns in .. table
  def no_______most_morning_meetings_cont
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id"     
    ]
    MorningMeeting.column_names.each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end
  
  
  # search most columns in .. table
  def most_cilisting1s_cont
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id"     
    ]
    Cilisting1.column_names.each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end


  # there are three of these text?_cilisting1s_cont below. one for each search box on the index view...
  
  def text_sr_csd1_sinters_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id"     
    ]
    SrCsd1Sinter.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end

  def text2_cilisting1s_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id",     
      "ci_leader_1"
    ]
    Cilisting1.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end
 
  def text3_cilisting1s_cont
  #
  # search  * text *  columns in .. table
  #
  # http://stackoverflow.com/questions/17980410/rails-get-the-names-of-all-a-tables-columns-of-a-certain-data-type-column
  # ModelClass.columns.select{ |c| c.type == :integer }.map(&:name)
  #
    most_attributes = []
    attributes_to_exclude = [
      "created_at",
      "updated_at",
      "id",     
      "orginator_email"
    ]
    Cilisting1.columns.select{ |c| c.type == :string || c.type == :text }.map(&:name).each do |column_name|
      most_attributes << column_name unless column_name.in?(attributes_to_exclude)
    end
    most_attributes.join("_or_") + "_cont_any"
  end
 
   
end

