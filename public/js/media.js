function presentation() {
    console.log('presentation');
    var contenu_presentation = document.getElementById("contenu_presentation");
    var presentation = document.getElementById('presentation');
    presentation.addEventListener('click', function () {
        if (getComputedStyle(contenu_presentation).display != "none") {
            contenu_presentation.style.display = "none";
        } else {
            contenu_presentation.style.display = "block";
        }
    })

}

function showDetail() {
    var name = document.getElementById('name');
    var summary = document.getElementById('summary');
    if (getComputedStyle(summary).display != "none") {
        summary.style.display = "none";
    } else {
        summary.style.display = "block";
    }
}



function myChoices() {
    var saison = document.getElementById("saison").value;
    var media = document.getElementById('id_media').value;
    if (saison === "NULL") {
        document.getElementById("contenue").innerHTML = "";
        console.log("null" + saison);
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log("saison : " + saison + " " + media);
            if (this.readyState == 3) {
                if (this.status == 200) {
                    console.log("ordre" + saison);
                    document.getElementById("contenue").innerHTML = this.responseText;
                } else {
                    console.log("else");
                }
            }
        };
        xmlhttp.open("GET", 'saisonChose.php?saison='+saison+'&media='+media , true);
        xmlhttp.send();
    }
}
function choixEpisode() {
    var episode = document.getElementById("episode").value;
    if (saison === "NULL") {
        document.getElementById("contenue").innerHTML = "";
        console.log("null" + episode);
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            console.log("episode : " + episode );
            if (this.readyState == 3) {
                if (this.status == 200) {
                    console.log("episode" + episode);
                    document.getElementById("contenue").innerHTML = this.responseText;
                } else {
                    console.log("else");
                }
            }
        };
        xmlhttp.open("GET", 'saisonChose.php?episode='+episode, true);
        xmlhttp.send();
    }
}

presentation();