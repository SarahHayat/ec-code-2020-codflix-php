<?php

require_once('database.php');

class Media
{

    protected $id;
    protected $genre_id;
    protected $title;
    protected $type;
    protected $status;
    protected $release_date;
    protected $summary;
    protected $trailer_url;

    public function __construct($media)
    {

        $this->setId(isset($media->id) ? $media->id : null);
        $this->setGenreId($media->genre_id);
        $this->setTitle($media->title);
    }

    /***************************
     * -------- SETTERS ---------
     ***************************/

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setReleaseDate($release_date)
    {
        $this->release_date = $release_date;
    }

    /***************************
     * -------- GETTERS ---------
     ***************************/

    public function getId()
    {
        return $this->id;
    }

    public function getGenreId()
    {
        return $this->genre_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getTrailerUrl()
    {
        return $this->trailer_url;
    }

    /***************************
     * -------- GET LIST --------
     ***************************/

    public static function filterMedias($title)
    {

        // Open database connection
        $db = init_db();

        $req = $db->prepare("SELECT * FROM media WHERE title = ? ORDER BY release_date DESC");
        $req->execute(array('%' . $title . '%'));

        // Close databse connection
        $db = null;

        return $req->fetchAll();

    }

    public static function getAvailableMedias()
    {

        // Open database connection
        $db = init_db();

        $req = $db->query('SELECT * from media WHERE status = "available"');

        // Close databse connection
        $db = null;

        return $req->fetchAll();

    }
    public static function getMediaByFilm(){
        // Open database connection
        $db = init_db();

        $req = $db->query('SELECT * from media join genre on media.genre_id = genre.id WHERE media.type = "film"');


        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function getMediaBySerie(){
        // Open database connection
        $db = init_db();

        $req = $db->query('SELECT * from media join genre on media.genre_id = genre.id WHERE media.type = "serie"');


        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }
    public static function getMediaById($id){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT * from media join genre on media.genre_id = genre.id WHERE media.id = ?');
        $req->execute(array($id));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }
    public static function getSerieDetail($id){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT DISTINCT saisons.`name_saison`, episodes.name_episode FROM saisons join episodes ON saisons.id_saison = episodes.saison_id JOIN media ON media.id = saisons.media_id where media.id=? ');
        $req->execute(array($id));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }
    public static function getSerieEpisodeBySaison($id_media, $id_saison, $id_episode){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT * from episodes JOIN saisons ON saisons.id_saison = episodes-.saison_id  join media on media.id = saisons.media_id 
WHERE episodes.media_id = :media_id AND episodes.saison_id = :saison_id AND episodes.id_episode = :episode_id');
        $req->execute(array(
            'media_id' => $id_media,
            'saison_id' => $id_saison,
            'episode_id' => $id_episode,
        ));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }


}
