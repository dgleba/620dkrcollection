module DatepickerHelper

    # for bootstrap datepicker gem 'bootstrap-datepicker-rails'
    # https://github.com/Nerian/bootstrap-datepicker-rails

    # See 
    # sftp://10.4.1.231/srv/dkr/projtrac535/proj535/apprails/app/assets/javascripts/bootstrap_datepicker.js
    # sftp://10.4.1.231/srv/dkr/projtrac535/proj535/apprails/app/views/time_logs/_form.html.erb
    # sftp://10.4.1.231/srv/dkr/projtrac535/proj535/apprails/app/views/time_logs/_new_time_log_partial.html.erb


    # ref. class bootstrapdatepicker
    #
    # ./apprails/app/helpers/datepicker_helper.rb:10:    # ref. class bootstrapdatepicker
    # ./apprails/app/assets/javascripts/bootstrap_datepicker.js:12:    $('.bootstrapdatepicker').datepicker(
    # ./apprails/app/views/time_logs/_form.html.erb:27:        <%= f.text_field :log_date, class: "form-control bootstrapdatepicker" ,  :value => Time.now.strftime('%Y-%m-%d'),
    # ./apprails/app/views/time_logs/_new_time_log_partial.html.erb:22:  <%= f.text_field :log_date, class: "bootstrapdatepicker" ,  :value => Time.now.strftime('%Y-%m-%d'), style: 'width: 99px;',
    # ./apprails/app/views/time_logs/new.js.erb:8:$('.bootstrapdatepicker').datepicker(
    # albe@pmdsdata8:/srv/dkr/projtrac535/proj535$



    # I didnt get this to work..
    def datepicker_input form, field
        content_tag :td, :data => {:provide => 'datepicker', 'date-format' => 'yyyy-mm-dd', 'date-autoclose' => 'true'} do
        form.text_field field, class: 'form-control', placeholder: 'YYYY-MM-DD'
        end
    end


    # https://dev.mikamai.com/2016/07/13/the-easiest-way-to-add-a-datepicker-in-rails/
    # <%= datepicker_input f, :log_date%>

    # https://stackoverflow.com/questions/30522655/how-to-use-date-picker-with-form-for-in-rails

end


