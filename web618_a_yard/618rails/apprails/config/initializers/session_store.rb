# Be sure to restart your server when you modify this file.

# Rails.application.config.session_store :cookie_store, key: '_brail345e_session'

# 2019-06-16_Sun_19.28-PM set different session for each env..
# Rails.application.config.session_store :cookie_store, key: "_prod467_session_#{Rails.env}"

Rails.application.config.session_store :cookie_store, key: "#{ENV['APP_NAME']}_session_#{Rails.env}"
