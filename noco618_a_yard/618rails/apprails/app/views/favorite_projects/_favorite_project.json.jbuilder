json.extract! favorite_project, :id, :project_id, :user_id, :fave_num, :sort_order, :active_status, :created_at, :updated_at
json.url favorite_project_url(favorite_project, format: :json)
