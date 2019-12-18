


function Speichern() {

    console.log("hiiiiiiiiiiiiiii")

    var txtKlasseName = document.getElementById("txtKlasseName").value;
    var txtAnzahlSchueler = document.getElementById("txtAnzahlSchueler").value;



       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                //var result = this.responseText;

                location.href = "/view/admin_klasse_verwalten.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           }
      };

      xmlhttp.open("GET", "getlogin.php?q=" + txtKlasseName + txtAnzahlSchueler);

      xmlhttp.send();

}



function Verwerfen() {

    console.log("hiiiiiiiiiiiiiii")

    location.href = "/view/admin_klasse_verwalten.php"; 

}

