<?php

require_once( 'model/media.php' );

/***************************************
 * ----- LOAD HOME PAGE AND SEARCH -----
 **************************************
 * @param $getTitle string research title
 */

function mediaPage( $getTitle ) {

  $medias = Media::filterMedias( $getTitle );

  require('view/mediaListView.php');

}

/*************************************
 * ----- LOAD MEDIA(MOVIE) PAGE -----
 ************************************
 * @param $getMediaId int id media
 */

function mediaMovie($getMediaId ) {

    $media = Media::selectMedia( $getMediaId );
    $genre = Media::searchGenre( $getMediaId );

    require('view/mediaDetails.php');

}

/*************************************
 * ----- LOAD MEDIA(SERIES) PAGE -----
 ************************************
 * @param $getMediaId int id media
 */

function mediaSerie( $getMediaId ) {

    $media   = Media::selectMedia( $getMediaId );
    $genre   = Media::searchGenre( $getMediaId );
    $streamsS1 = Media::selectSeriesS1( $getMediaId );
    $streamsS2 = Media::selectSeriesS2( $getMediaId );
    $totalTime = Media::durationSeries( $getMediaId );

    require('view/mediaStream.php');

}

/*************************************
 * ----- LOAD STREAM PAGE -----
 ************************************
 * @param $getStreamId int id stream
 */

function streamPage( $getStreamId ) {

    $stream   = Media::selectStream( $getStreamId );

    require('view/streamView.php');

}


