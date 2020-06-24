<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

function signup( $post ) {

    try {
        (new User)->createUser();
        $success_msg="Utilisateur créé";
    } catch (Exception $e) {
        $error_msg  = $e;
    }

    require('view/auth/signupView.php');
}