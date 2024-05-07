
newest at top...

=================================================
2020-11-23 2020-11-23_Mon_10.59-AM


Now it shows the favorites for the user (that are active projects), 
and then all the active projects after, regardless of favorite.

In my case I get my bloom favorite showing twice, but that is not a problem.  
It shows the bloom project as a favorite, and also as not a favorite in the everything 
else pile. Selecting either one results in the same data saved to the database – just the project number.



select `p`.`id` AS `id`,
`p`.`number` AS `number`,
`p`.`name` AS `name`,
`p`.`active` AS `active`,
`f`.`fave_num` AS `fave_num`,
`f`.`user_id` AS `user_id` 
  from (`projects` `p` left join `favorite_projects` `f` on((`f`.`project_id` = `p`.`id`))) 
    where (`p`.`active` like '%active%') and f.fave_num >=1 
      union
select `p`.`id` AS `id`,
`p`.`number` AS `number`,
`p`.`name` AS `name`,
`p`.`active` AS `active`,
null AS `fave_num`,
null AS `user_id` 
  from (`projects` `p` )
    where (`p`.`active` like '%active%')  
order by `fave_num` desc, `name`
    


=================================================
2020-11-23_Mon_10.38-AM


like '%active%' was not the problem.

select `p`.`id` AS `id`,
`p`.`number` AS `number`,
`p`.`name` AS `name`,
`p`.`active` AS `active`,
`f`.`fave_num` AS `fave_num`,
`f`.`user_id` AS `user_id` 
from (`projects` `p` left join `favorite_projects` `f` on((`f`.`project_id` = `p`.`id`))) 
where (`p`.`active` like '%active%') order by `f`.`fave_num` desc,
`p`.`name`


=================================================

as it was at  2020-11-23_Mon_10.33-AM:


Problem:  some projects not showing in the select box.

(It was that someone else favorited it. So it only showed if favorited.)
The problem is that since another user favorited a project, the current user doesn’t see it.


select `p`.`id` AS `id`,`p`.`number` AS `number`,`p`.`name` AS `name`,`p`.`active` AS `active`,`f`.`fave_num` AS `fave_num`,`f`.`user_id` AS `user_id` from (`projects` `p` left join `favorite_projects` `f` on((`f`.`project_id` = `p`.`id`))) where (`p`.`active` = 'active') order by `f`.`fave_num` desc,`p`.`name`

formatted..

select `p`.`id` AS `id`,
`p`.`number` AS `number`,
`p`.`name` AS `name`,
`p`.`active` AS `active`,
`f`.`fave_num` AS `fave_num`,
`f`.`user_id` AS `user_id` 
from (`projects` `p` left join `favorite_projects` `f` on((`f`.`project_id` = `p`.`id`))) 
where (`p`.`active` = 'active') order by `f`.`fave_num` desc,
`p`.`name`

=================================================




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@   mysql db view for project with fav's lookup
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2020-09-20[Sep-Sun]16-51PM 



Class..

ProjectfavlookupVw


View

create view   vw_projectfavlookup   as
  SELECT p.id, p.number, p.name,p.active, f.fave_num ,f.user_id 
    FROM `projects` p LEFT OUTER JOIN `favorite_projects` f ON  f.`project_id` = p.`id` 
      WHERE p.active = 'active'
    ORDER by f.fave_num desc,p.name;


=================================================


