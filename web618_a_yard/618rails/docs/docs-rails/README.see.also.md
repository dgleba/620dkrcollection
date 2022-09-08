# Notes at:

sftp://10.4.1.231/srv/file/prod467/docker/notes%2Crail-anonoz%2Cnotes%2C2019-06-15%2Cdocker%2Crail468.txt
and/or
C:\n\nexcl\dbx\Dropbox\csd\0-csd\rail468-docker-2019june\rail-anonoz,notes,2019-06-15,docker,rail468.txt

# This app goes with..

The data from this app is used to send emails to a lists of people.

For an example,

See ftp://pmdsdata3/var/www/html/truenorth/actions/team_leader_send_email.php

Note:

```
        // 1.  make view below  2.  and also copy in ./tables/vw_reportemails/*
        //  select * from rptdb.vw_reportemails
```

```
        // get emails from `Subcribe to reports app` instead of hardcoded here in this file..
        //
        // 1.  make view below  2.  and also copy in ./tables/vw_reportemails/*
        //  select * from rptdb.vw_reportemails
        //
        // http://xataface.com/wiki/Introduction_to_the_Xataface_API
        //  Load the first 30 .. from the .. table
        // report name pattern.. pdata menu name, menu name in app
        $el = df_get_records_array('vw_reportemails', array('reportname'=>'=true_north_reports__team_leader_rpt',
            'active_status'=>'>=1', 'elist_active_status'=>'>=1'));
        $to1= '';
        foreach ( $el as $el){
            // $el is a Dataface_Record object
            // echo "<br>email ".$el->val('id')." is ".$el->val('email');
            $to1 .= $el->val('email').", ";
            // $to1 .= ', ';
          }
          echo "<br>List read from vw_reportemails .. ".$to1;
          //
        //   $to1      = '
        // atrachsel@stackpole.com,
```

---

older..

C:\n\nexcl\dbx\Dropbox\csd\0-csd\prod467,notes,2019-06-14a,railsstarter,csd,emaillist.txt
