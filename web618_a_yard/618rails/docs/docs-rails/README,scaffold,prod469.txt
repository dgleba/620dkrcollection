
----------------------------------------------------

docker-compose run --rm web bundle exec  rails g scaffold Report  name  active_status:integer sort_order:integer  

--no-migration \

 -f

docker-compose run --rm  web bundle exec  rails g scaffold Elist  email   active_status:integer  sort_order:integer
  \
    --no-migration 
  -f 


docker-compose run --rm web bundle exec  rails g scaffold ElistReport  when_to_send  elist:references  report:references active_status:integer \
  sort_order:integer 
  
    --no-migration 
  -f 


----------------------------------------------------

destroy..

docker-compose run --rm web bundle exec  rails destroy  scaffold Report 

docker-compose run --rm web bundle exec  rails destroy  scaffold Elist 

docker-compose run --rm web bundle exec  rails destroy  scaffold ElistReport


----------------------------------------------------


add display-name to railsadmin for rpt_elist


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

docker-compose run --rm web  bundle exec rails generate migration ChangeElistReportsActiveStatusDefault active_status:integer


sudo chown -R $USER:$USER .


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



















----------------------------------------------------
----------------------------------------------------
----------------------------------------------------
----------------------------------------------------
----------------------------------------------------
----------------------------------------------------

older stuff..

----------------------------------------------------


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

docker-compose run --rm web bundle exec  rails g scaffold ReportName name  active_status:integer sort_order:integer  --no-migration \

 -f

docker-compose run --rm web bundle exec  rails g scaffold RptElist  email  when active_status:integer  sort_order:integer  \
    --no-migration 
  -f 


docker-compose run --rm web bundle exec  rails g scaffold RptElistReportName   rpt_elist:references  report_name:references active_status:integer \
  sort_order:integer 
    --no-migration 
  -f 


----------------------------------------------------

destroy..

docker-compose run --rm web bundle exec  rails destroy  scaffold ReportName 

docker-compose run --rm web bundle exec  rails destroy  scaffold RptElist 

docker-compose run --rm web bundle exec  rails destroy  scaffold RptElistReportName


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



4.
 
docker-compose run --rm web bundle exec  rails g scaffold ReportName name  active_status:integer sort_order:integer  --no-migration \
 -f
 
docker-compose run --rm  web bundle exec  rails g scaffold RptElist  email report_name:references when active_status:integer \
  sort_order:integer 
    --no-migration 
  -f 


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~




docker-compose run web bundle exec rails g migration CreateJoinTableRptElistReportName rpt_elist report_name 


docker-compose run --rm web  bundle exec rails generate migration ChangeElistReportsActiveStatusDefault active_status:integer


sudo chown -R $USER:$USER .


_____________

ref. eg.

rails g migration CreateJoinTablePartNumberProcessSteps part_numbers process_steps


    create_join_table :part_numbers, :process_steps, table_name: :part_numbers_process_steps, column_options: { index: true }

    
# part_number.rb
has_and_belongs_to_many :process_steps, join_table: :part_numbers_process_steps
   
 
# process_step.rb
has_and_belongs_to_many :part_numbers, join_table: :part_numbers_process_steps
 
  

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

