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

    require('view/historyView.php');

}

/****************************
 * --- LOAD CONTACT PAGE ---
 ****************************/

function contactPage( ) {

    require('view/contactView.php');

}


