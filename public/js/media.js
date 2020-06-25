function presentation() {
    console.log('presentation');
    var contenu_presentation = document.getElementById("contenu_presentation");
    var episodes = document.getElementById('episodes');
    episodes.addEventListener('click', function () {
        if (getComputedStyle(contenu_presentation).display != "none") {
            contenu_presentation.style.display = "none";
        } else {
            contenu_presentation.style.display = "block";
        }
    })

}


function myChoices() {
    var saison = document.getElementById("saison").value;
    var media = document.getElementById('id_media').value;
    if (saison === "NULL") {
        document.getElementById("contenue").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    document.getElementById("contenue").innerHTML = this.responseText;
                } else {
                }
            }
        };
        xmlhttp.open("GET", 'index.php?action=saison&saison='+saison+'&media='+media , true);
        xmlhttp.send();
    }
}

var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
function onYouTubeIframeAPIReady() {
    console.log("yt");
    player = new YT.Player('player', {
        height: '160',
        width: '304',
        videoId: 'MIt2n6E7CUg',
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
    var time = document.getElementById('time');
    var duration = player.getDuration();
    time.value = duration;
    console.log("time value : "+ time.value);

    console.log("time : " + duration);

}


presentation();

