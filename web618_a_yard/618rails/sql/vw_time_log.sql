
create or replace view vw_timelog
as
select t.log_date, t.log_hours, 
		p.name as project_name, p.number as project_number , p.tech_radar_num, p.active as project_active, p.ae_lead, p. bd_lead_si_customer,
		u.email
from time_logs t 
	left join projects p  on t.project_id = p.id
	left join users u on t.user_id = u.id


