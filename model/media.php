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

        $req = $db->prepare('SELECT media.*, DATE_FORMAT(media.duration, "%Hh%i") as time_media FROM media WHERE title LIKE ? ORDER BY release_date DESC');
        $req->execute(array('%'.$title.'%'));

        // Close databse connection
        $db = null;

        return $req->fetchAll();

    }

    public static function getAvailableMedias()
    {

        // Open database connection
        $db = init_db();

        $req = $db->query('SELECT media.*, DATE_FORMAT(media.duration, "%Hh%i") as time_media from media WHERE status = "available"');

        // Close databse connection
        $db = null;

        return $req->fetchAll();

    }


    public static function getMediaById($id)
    {
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT genre.*, media.*, DATE_FORMAT(media.duration, "%Hh%i") as time_media from media join genre on media.genre_id = genre.id WHERE media.id = ?');
        $req->execute(array($id));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }


    public static function getSaisonByMedia($id_media)
    {
// Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT saisons.*, media.*, DATE_FORMAT(media.duration, "%Hh%i") as time_media FROM media join saisons ON saisons.media_id = media.id where media.id= ?');
        $req->execute(array($id_media));

        // Close databse connection
        $db = null;

        return $req->fetchAll();

    }
    public static function getSummarySaison($id_media){

// Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT saisons.*, media.*, DATE_FORMAT(media.duration, "%Hh%i") as time_media FROM media join saisons ON saisons.media_id = media.id where media.id= ? LIMIT 1');
        $req->execute(array($id_media));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function getSerieEpisodeBySaison($id_saison, $id_media)
    {
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT episodes.*, saisons.* , DATE_FORMAT(episodes.time_episode, "%Hh%i") as time_media from episodes JOIN saisons ON saisons.id_saison = episodes.saison_id join media on media.id = saisons.media_id WHERE episodes.saison_id = ? AND media.id = ?');
        $req->execute(array($id_saison, $id_media));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function getSummaryByEpisode($id_episode)
    {
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT episodes.*,  DATE_FORMAT(episodes.time_episode, "%Hh%i") as time_episode from episodes WHERE id_episode = ?');
        $req->execute(array($id_episode));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function setDurationMedia($time, $id_media){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('UPDATE media SET duration= ? WHERE media.id = ?');
        $req->execute(array($time, $id_media));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function setHistory($id_user, $id_media){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('INSERT INTO history(user_id, media_id, start_date, finish_date)VALUES( ?, ?, NOW(), NOW()+1)');
        $req->execute(array($id_user, $id_media));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }
    public static function getHistoryByUser($id_user){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT * 
FROM history 
join users
on users.id = history.user_id
JOIN media
ON media.id = history.media_id
where history.user_id = ? order by history.start_date asc');
        $req->execute(array($id_user));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    public static function deleteDistinctHistory($id_history){
        // Open database connection
        $db = init_db();

        $req = $db->query('DELETE FROM history WHERE id_history = "'.$id_history.'"');

        // Close databse connection
        $db = null;

       $req->closeCursor();

    }
    public static function deleteAllHistory(){
        // Open database connection
        $db = init_db();

        $req = $db->query('DELETE FROM history');

        // Close databse connection
        $db = null;


    }

}
