json.extract! post, :id, :title, :body, :sort_order, :active_status, :created_at, :updated_at
json.url post_url(post, format: :json)
