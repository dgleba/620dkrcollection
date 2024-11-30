module TimeLogsHelper


    # https://stackoverflow.com/questions/14015317/rails-change-html-element-based-on-time-elspased-from-a-date
    #
    def style_by_days_gone(by_date)
        ago = (Date.today - by_date).round
        case ago
        when (0..7) then "week_1"
        when (8..14) then "week_2_ago"
        when (15..21) then "week_3_ago"
        else
            if ago > 21
            "older_time_ago"
            end  
        end
    end

    #
    def style_by_week(by_date)
        lastweek_start = (DateTime.current.beginning_of_week.to_date - 7)
        if  ( by_date >= DateTime.current.beginning_of_week.to_date  && by_date <=  DateTime.current.to_date )   
            "this_week"
        elsif  ( by_date <= DateTime.current.beginning_of_week.to_date  && by_date >= lastweek_start)   
            "last_week"
        else
            "older_time_ago"
        end
    end

end
