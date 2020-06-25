<?php


class History

{

    protected $id;
    protected $user_id;
    protected $media_id;
    protected $start_date;
    protected $finish_date;
    protected $watch_duration;
    protected $saison_id;

    public function __construct( $history = null ) {

        if( $history != null ):
            $this->setId( isset( $history->id ) ? $history->id : null );
            $this->setUserId( $history->user_id );
            $this->setMediaId(isset( $history->media_id ) ? $history->media_id : false );
        endif;
    }

    /***************************
     * -------- SETTERS ---------
     ***************************/


    public function setId($id)
    {
        $this->id = $id;
    }


    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


    public function setMediaId($media_id)
    {
        $this->media_id = $media_id;
    }


    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
    }


    public function setFinishDate($finish_date)
    {
        $this->finish_date = $finish_date;
    }


    public function setWatchDuration($watch_duration)
    {
        $this->watch_duration = $watch_duration;
    }


    public function setSaisonId($saison_id)
    {
        $this->saison_id = $saison_id;
    }

    /***************************
     * -------- GETTERS ---------
     ***************************/

    public function getId()
    {
        return $this->id;
    }


    public function getUserId()
    {
        return $this->user_id;
    }


    public function getMediaId()
    {
        return $this->media_id;
    }


    public function getStartDate()
    {
        return $this->start_date;
    }


    public function getFinishDate()
    {
        return $this->finish_date;
    }


    public function getWatchDuration()
    {
        return $this->watch_duration;
    }


    public function getSaisonId()
    {
        return $this->saison_id;
    }


    /***************************
     * -------- GET LIST --------
     ***************************/

    public static function getHistoryByUser($id_user){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('SELECT * FROM history left join users on users.id = history.user_id left JOIN media ON media.id = history.media_id left JOIN saisons ON saisons.id_saison = history.saison_id where history.user_id = ? order by history.start_date asc');
        $req->execute(array($id_user));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }

    /***************************
     * -------- SET LIST --------
     ***************************/

    public static function setHistory($id_user, $id_media, $id_saison){
        // Open database connection
        $db = init_db();

        $req = $db->prepare('INSERT INTO history(user_id, media_id,saison_id, start_date)VALUES( :id_user, :id_media,:id_saison, NOW())');
        $req->execute(array(
            "id_user" => $id_user,
            'id_media' => $id_media,
            'id_saison'=> $id_saison
        ));

        // Close databse connection
        $db = null;

        return $req->fetchAll();
    }
    /***************************
     * ------ DELETE LIST ------
     ***************************/

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