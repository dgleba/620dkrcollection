json.extract! time_log, :id, :project_id, :log_date, :log_hours, :detail, :user_id, :created_at, :updated_at
json.url time_log_url(time_log, format: :json)
