<?php

/**
 * A delegate class for the entire application to handle custom handling of
 * some functions such as permissions and preferences.
 */
class conf_ApplicationDelegate {

    public function beforeHandleRequest() {

        //default sort...
        $query = & Dataface_Application::getInstance()->getQuery();
        if (!$_POST and $query['-table'] == 'nte_note' and !isset($query['-sort'])) {
            $query['-sort'] = 'updatedtime desc';
        }

        //dashboard...
        $app = & Dataface_Application::getInstance();
        $query = & $app->getQuery();
        if ($query['-table'] == 'dashboard' and ($query['-action'] == 'browse' or $query['-action'] == 'list')) {
            $query['-action'] = 'dashboard_action';

        //custom css...
        Dataface_Application::getInstance()->addHeadContent(
                    sprintf('<link rel="stylesheet" type="text/css" href="%s"/>', htmlspecialchars(DATAFACE_SITE_URL . '/css/dashboard1.css'))
            );
        }

        Dataface_Application::getInstance()->addHeadContent(
                sprintf('<link rel="stylesheet" type="text/css" href="%s"/>', htmlspecialchars(DATAFACE_SITE_URL . '/css/styleXF2.css')
                )
        );
        
    //endof... beforehandlerequest
    }

    
    function block__custom_javascripts() {
        //echo '<script src="js\javascriptsdg.js" type="text/javascript" language="javascript"></script>';
        // Dataface_JavascriptTool::getInstance()->import('submithandler1.js');
        echo '<script src="js/handler-idletimeout.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-save1a.js" type="text/javascript" language="javascript"></script>';
    }

    function block__before_fineprint() {
        //block__before_fineprint()   block__after_left_column()
        echo "<span id=\"timeoutdg1\"> Time: <span id=\"timeoutdg2\"> </span></span>";
    }
    
    
     function block__after_login_form() {
        //block__before_fineprint()   block__after_left_column()
        echo "<span style='font-family: Arial, sans-serif; font-size: 13px; line-height: 27px; background-color: rgb(255, 255, 255);'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Username: &nbsp;</strong>user or admin &nbsp; &nbsp;&nbsp;<strong>Password:</strong>&nbsp; &nbsp;user or admin</span>";
    }
   

    /**
     * Returns permissions array.  This method is called every time an action is
     * performed to make sure that the user has permission to perform the action.
     * @param record A Dataface_Record object (may be null) against which we check
     *               permissions.
     * @see Dataface_PermissionsTool
     * @see Dataface_AuthenticationTool
     */
    function getPermissions(&$record) {
        $auth = & Dataface_AuthenticationTool::getInstance();
        $user = & $auth->getLoggedInUser();
        if (!isset($user))
            // if the user is null then nobody is logged in... no access.
            // This will force a login prompt.
           {
           return Dataface_PermissionsTool::NO_ACCESS();
           }
           {
           $role = $user->val('Role');
           if ( $user and  $user->val('Role') != 'ADMIN' )
               {
               // Returns all of the permissions for the user's current role.
               return Dataface_PermissionsTool::getRolePermissions($role);
               }
           return Dataface_PermissionsTool::ALL();
           }
    }

//endof... class
}
