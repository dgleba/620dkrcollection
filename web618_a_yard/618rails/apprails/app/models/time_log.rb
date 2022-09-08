class TimeLog < ApplicationRecord
  belongs_to :project
  belongs_to :user

  validates :log_hours, presence: true

  default_scope { joins(:project).order('log_date desc, projects.name') }
  
  # noworky.
  # default_scope { joins(:project).order( :log_date :desc, Project.to_s ) }


  def daily_total_hours(logdate,currentuser)
    # works with current date.. TimeLog.where(log_date: Date.current).sum(:log_hours)
    TimeLog.where(log_date: logdate, user_id: currentuser).sum(:log_hours)
  end

  
  
  # TimeLog.week_total_hours(1)
  # TimeLog.where("log_date BETWEEN ? AND ? AND user_id = ? ", DateTime.current.beginning_of_week, DateTime.current, 1          ).sum(:log_hours)
  # TimeLog.where("log_date BETWEEN ? AND ? AND user_id = ? ", DateTime.current.beginning_of_week, DateTime.current, currentuser).sum(:log_hours)
  #
  def self.this_week_hours(currentuser)
    # works with current date.. TimeLog.where(log_date: Date.current).sum(:log_hours)
    TimeLog.where("log_date >= ? AND log_date <= ? AND user_id = ? ", DateTime.current.beginning_of_week.to_date  , DateTime.current.to_date, currentuser).sum(:log_hours)
  end


  # things i was trying exploring..
  #
  # scope :daily_total_price, ->(date_time = Time.now) { where('created_at BETWEEN ? AND ?',date_time.beginning_of_day, date_time.end_of_day).sum(:price) }
  # scope :daily_total_hours, -> (log_date_today) { where('log_date ?', sum(:log_hours) }
  #
  # def daily_total_hours
  #   TimeLog.group(:log_date).each do |charge|
  #       charge.where('log_date = ?', charge.log_date).sum(:log_hours)
  #   end
  # end



end

