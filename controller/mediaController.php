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
    $genre = Media::searchGenre( $get );

    require('view/mediaDetails.php');

}

function mediaSerie( $get ) {

    $media   = Media::selectMedia( $get );
    $genre   = Media::searchGenre( $get );
    $streamsS1 = Media::selectSeriesS1( $get );
    $streamsS2 = Media::selectSeriesS2( $get );
    $totalTime = Media::durationSeries( $get );

    require('view/mediaStream.php');

}


