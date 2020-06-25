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
    require('public/ajax/deleteDistinctHistory.php');
}

function deleteAll()
{
    require('public/ajax/deleteAllHistory.php');
}

