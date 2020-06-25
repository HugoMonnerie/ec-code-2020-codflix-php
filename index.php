<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );

/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

        if ( !empty( $_POST ) ) signup( $_POST );
        else signupPage();

    break;

    case 'logout':

      logout();

    break;

  endswitch;

elseif ( isset( $_GET['media'] ) && isset( $_GET['type'] ) ):

    switch( $_GET['type']):

        case 'film':

            if ( !empty( $_GET['media'] ) ) mediaSummary( $_GET['media'] );
            else mediaPage(null);

        break;

        case 'serie':

            if ( !empty( $_GET['media'] ) ) mediaSerie( $_GET['media'], $_GET['type'] );
            else mediaPage(null);

        break;

    endswitch;

elseif ( isset( $_GET['title'] ) ):

    mediaPage( $_GET['title']);

elseif ( isset( $_GET['history'] ) ):

    historyPage( $_SESSION['user_id'], $_GET['history.id'] );

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
    mediaPage(null);
  else:
    homePage();
  endif;

endif;
