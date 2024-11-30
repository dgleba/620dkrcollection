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

        //custom css...

        Dataface_Application::getInstance()->addHeadContent(
                sprintf('<link rel="stylesheet" type="text/css" href="%s"/>', htmlspecialchars(DATAFACE_SITE_URL . '/assets/styleXF2.css')
                )
        );
        
    //endof... beforehandlerequest
    }

    

//endof... class
}
