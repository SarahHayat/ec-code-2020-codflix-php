<?php

require_once( 'model/media.php' );

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
    require ('view/saisonChose.php');
}

function detailSeriePage(){
    require ('view/presentationSerie.php');
}


