<?php

require_once( 'model/media.php' );
require_once('model/history.php');


/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  require('view/mediaListView.php');

}
function filmPage(){
    require('view/detailFilm.php');
}

function seriePage(){
    require ('view/detailSaison.php');
}

function saisonPage(){
    require('public/ajax/saisonChose.php');
}

function detailSeriePage(){
    require ('view/presentationSerie.php');
}


