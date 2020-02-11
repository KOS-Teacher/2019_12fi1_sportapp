


function Speichern() {

    //console.log("hiiiiiiiiiiiiiii")

    var txtKlasseName = document.getElementById("txtKlasseName").value;
    var txtAnzahlSchueler = document.getElementById("txtAnzahlSchueler").value;



       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {


            //   if (this.responseText){
                 
               
            //   }
            //   else{
            //     window.alert("Bitte versuchen Sie es noch mal!");
            //   }
                

              location.href = "admin_klasse_verwalten.php";

                    
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?k=" + txtKlasseName + "?s=" + txtAnzahlSchueler);

      xmlhttp.send();

}



function Verwerfen() {

    //console.log("hiiiiiiiiiiiiiii")

    location.href = "admin_klasse_verwalten.php"; 

}

