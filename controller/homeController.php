<?php

require_once( 'model/user.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function homePage() {

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):

    $user_data  = User::getUserById( $user_id );

    require('view/dashboard.php');
  else:
    require('view/homeView.php');
  endif;

}

/****************************
 * ---- LOAD HISTORY PAGE ---
 ***************************
 * @param $getIdUser int id user
 */

function historyPage( $getIdUser ) {

    $history = Media::selectHistory( $getIdUser );

    if ( isset( $_GET['del'] ) ):

        historyPage( $_SESSION['user_id'] );

        switch( $_GET['del']):

            case 'allHistorique':

                if ( !empty( $_POST ) ) Media::deleteAllHistory( $_SESSION['user_id'] );
                else historyPage( $_SESSION['user_id'] );

                break;

            /*case 'oneMedia':

                if ( !empty( $_POST ) ) Media::deleteMediaHistory();
                else historyPage( $_SESSION['user_id'] );

                break;*/

        endswitch;

    endif;

    require('view/historyView.php');

}

/****************************
 * --- LOAD CONTACT PAGE ---
 ****************************/

function contactPage( ) {

    require('view/contactView.php');

}


