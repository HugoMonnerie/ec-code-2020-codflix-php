<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage( $getTitle ) {

  $medias = Media::filterMedias( $getTitle );

  require('view/mediaListView.php');

}

function mediaSummary( $getMediaId ) {

    $media = Media::selectMedia( $getMediaId );
    $genre = Media::searchGenre( $getMediaId );

    require('view/mediaDetails.php');

}

function mediaSerie( $getMediaId, $getType ) {

    $media   = Media::selectMedia( $getMediaId );
    $genre   = Media::searchGenre( $getMediaId );
    $streamsS1 = Media::selectSeriesS1( $getMediaId );
    $streamsS2 = Media::selectSeriesS2( $getMediaId );
    $totalTime = Media::durationSeries( $getMediaId, $getType );

    require('view/mediaStream.php');

}


