<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage( $get ) {

  $medias = Media::filterMedias( $get );

  require('view/mediaListView.php');

}

function mediaSummary( $get ) {

    $media = Media::selectMedia( $get );

    require('view/mediaSummary.php');

}
