<?php

require_once( 'database.php' );

class Media {

  protected $id;
  protected $genre_id;
  protected $title;
  protected $type;
  protected $status;
  protected $release_date;
  protected $summary;
  protected $trailer_url;

  public function __construct( $media ) {

    $this->setId( isset( $media->id ) ? $media->id : null );
    $this->setGenreId( $media->genre_id );
    $this->setTitle( $media->title );
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setGenreId( $genre_id ) {
    $this->genre_id = $genre_id;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }

  public function setType( $type ) {
    $this->type = $type;
  }

  public function setStatus( $status ) {
    $this->status = $status;
  }

  public function setReleaseDate( $release_date ) {
    $this->release_date = $release_date;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getGenreId() {
    return $this->genre_id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getType() {
    return $this->type;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getReleaseDate() {
    return $this->release_date;
  }

  public function getSummary() {
    return $this->summary;
  }

  public function getTrailerUrl() {
    return $this->trailer_url;
  }

  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterMedias( $title ) {

    // Open database connection
    $db   = init_db();

    if($title==null):

        $req  = $db->prepare( "SELECT * FROM media ORDER BY release_date DESC");
        $req->execute( array( '%' . $title . '%' ));

    else:

        $req  = $db->prepare( "SELECT * FROM media WHERE title LIKE :title ORDER BY release_date DESC");
        $req->execute( array(':title' => '%' . $title . '%' ));

    endif;

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

    public static function selectMedia( $id ) {

        // Open database connection
        $db   = init_db();

        $req  = $db->prepare( "SELECT * FROM media WHERE id = ?" );
        $req->execute( array( $id ));

        // Close databse connection
        $db   = null;

        return $req->fetch();

    }

    public static function searchGenre( $id_media ) {

        // Open database connection
        $db   = init_db();

        $req  = $db->prepare( "SELECT * FROM media LEFT JOIN genre ON (media.genre_id = genre.id) WHERE media.id = ?" );
        $req->execute( array( $id_media ));

        // Close databse connection
        $db   = null;

        return $req->fetch();

    }

    public static function selectSeriesS1($id_media ) {

        // Open database connection
        $db   = init_db();

        $req  = $db->prepare( "SELECT * FROM stream WHERE media_id LIKE :media_id AND season LIKE 1" );
        $req->execute( array( ':media_id' => $id_media ));

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }

    public static function selectSeriesS2($id_media ) {

        // Open database connection
        $db   = init_db();

        $req  = $db->prepare( "SELECT * FROM stream WHERE media_id LIKE :media_id AND season LIKE 2" );
        $req->execute( array( ':media_id' => $id_media ));

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }

    public static function durationSeries( $id_media ) {

        // Open database connection
        $db   = init_db();

        $req  = $db->prepare( "SELECT SEC_TO_TIME( SUM(time_to_sec(duration))) as 'TotalTime' FROM stream WHERE media_id LIKE :media_id" );
        $req->execute( array ( ':media_id' => $id_media ));

        // Close databse connection
        $db   = null;

        return $req->fetchAll();

    }
}
