<?php

require_once('model/media.php');

/***************************
 * ----- LOAD HISTORY PAGE -----
 ***************************/

function history()
{
function deleteDistinctHistory($id_history){
    Media::deleteDistinctHistory($id_history);
    require('view/historyView.php');

}

    require('view/historyView.php');

}

