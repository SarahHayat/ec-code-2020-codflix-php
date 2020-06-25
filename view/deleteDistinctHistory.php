<?php

$id_history = $_GET['id_history'];



    Media::deleteDistinctHistory($id_history);


//echo 'DELETE FROM history WHERE id = "'.$id_history.'"';
//header('Location : index.php?action=history');
?>