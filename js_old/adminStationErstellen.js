

    

    function admKlasserstellen() {

        console.log("hiiiiiiiiiiiiiii")

        var txtKlasseName = document.getElementById("txtKlasseName").value;

        var txtAnzahlSchueler = document.getElementById("txtAnzahlSchueler").value;

          

          xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtAnzahlSchueler + txtKlasseName);

          xmlhttp.send();

    }