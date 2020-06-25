

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







