<?php

require_once('model/media.php');

/***************************
 * ----- LOAD HISTORY PAGE -----
 ***************************/

function history()
{

    require('view/historyView.php');

}

function deleteDistinct()
{
    require('view/deleteDistinctHistory.php');
}

