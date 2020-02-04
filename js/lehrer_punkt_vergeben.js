


btnAbsenden



function stationScannen() {

    console.log("hiiiiiiiiiiiiiii")

    var lblstation = document.getElementById("lblstation");

    var lblpunkte = document.getElementById("lblpunkte");

    var txtSchuelerNr1 = document.getElementById("txtSchuelerNr1");
    var txtSchuelerNr2 = document.getElementById("txtSchuelerNr2");
    var txtSchuelerNr3 = document.getElementById("txtSchuelerNr3");
    var txtSchuelerNr4 = document.getElementById("txtSchuelerNr4");
    var txtSchuelerNr5 = document.getElementById("txtSchuelerNr5");

    
    

   if (txtSchuelerNr1.length == 0 && txtSchuelerNr2.length == 0 && txtSchuelerNr3.length == 0 && txtSchuelerNr4.length == 0 && txtSchuelerNr5.length == 0) {

     console.log("00000");
     

      //document.getElementById("txtLogin").innerHTML = "qqqqq";

      return;

   } else {

       
     //console.log("111");

     //location.href ="admin_station_erstellen.php"; //"./view/admin_station_erstellen.php";

       //var xmlhttp = new XMLHttpRequest();

       //xmlhttp.onreadystatechange = function() {

         //  if (this.readyState == 4 && this.status == 200) {

                //document.getElementById("txtHint").innerHTML = this.responseText;
                // Linken zur Seite "Schüler Auswertung" und Daten von PHP da zeigen

           //     var result = this.responseText;

             //   location.href = "/view/schuelerAuswertung.php?schuelerid=";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           //}

           xmlhttp.open("GET", "getlogin_controller.php?q=" + txtSchuelerNr1 + txtSchuelerNr1 + txtSchuelerNr1 + txtSchuelerNr1 + txtSchuelerNr1 + lblstation);

           xmlhttp.send();
      };

      

}

