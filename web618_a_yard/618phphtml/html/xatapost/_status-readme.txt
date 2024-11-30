
=================================================

Purpose:

view / search tables


http://10.4.71.231:6611/xatapost/index.php?-table=posts_arc

=================================================

make list wider. fill screen 100%


You can just copy `plone.css`  from `copyof` folder to xataface folder downloaded from github..


notes:

        modify plone.css

        line 3680  body.large #list-window {
            overflow-x: scroll;
            /* width: 1000px; */
        }    

        line 3587  body.one-col .responsive-content {
            margin:0;
            padding:0;
            /* width: 1000px; */
            margin: 0 auto;
        }


        @media only screen and (max-width:100%) {
            div.responsive-content {
                max-width: 100%;
            }
            
            body.large #list-window {
                overflow-x: scroll;
                width: 100%;
            }
        } 
        

todo:
    better to overide with a local css file.
    
_____________


width: 1000px;

=================================================
