

          function loginLehrer() {

            console.log("hiiiiiiiiiiiiiii")

            var txtPasswort = document.getElementById("txtPasswort").value;
            var cboStation = document.getElementById("cboStation");
            var station = cboStation.options[cboStation.selectedIndex].value;
            

           if (txtPasswort.length == 0) {

             console.log("00000");


              return;

           } 
           else {

               
             console.log("111");

             if (station == "Admin"){
              location.href ="admin_menu.php"; //"./view/admin_station_erstellen.php"
            } 
            
            
            
            else{

            

             //location.href ="admin_station_erstellen.php"; //"./view/admin_station_erstellen.php";

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {

                        //document.getElementById("txtHint").innerHTML = this.responseText;
                        // Linken zur Seite "Schüler Auswertung" und Daten von PHP da zeigen

                        var result = this.responseText;

                        location.href = "/view/schuelerAuswertung.php?schuelerid=";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                   }
                  }
              }
            };

              xmlhttp.open("GET", "getlogin.php?q=" + txtlogin, true);

              xmlhttp.send();

        }
      
