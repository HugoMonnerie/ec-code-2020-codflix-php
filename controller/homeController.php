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
 * @param $getIdHistory int id history
 */

function historyPage( $getIdUser, $getIdHistory ) {

    $history = Media::selectHistory( $getIdUser );
    //$delOneHistory = Media::deleteOneHistory($getIdHistory);
    //$delAllHistory = Media::deleteAllHistory($getIdUser);

    require('view/historyView.php');

}

/****************************
 * --- LOAD CONTACT PAGE ---
 ****************************/

function contactPage( ) {

    require('view/contactView.php');

}


