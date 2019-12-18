

          function loginLehrer() {

            

            var txtPasswort = document.getElementById("txtPasswort").value;
            var station = document.getElementById("cboStation").value

            //var cboStation = document.getElementById("cboStation").value;
            //var station = cboStation.options[cboStation.selectedIndex].text;
            

           if (txtPasswort.length == 0) {
            window.alert("Kennwort darf nicht leer sein!");
              return;
           } 
           else {


              //location.href = "stationscannen.php?stationname=" + "result" + "&stationpunkte=" + "result";

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {

                        //document.getElementById("txtHint").innerHTML = this.responseText;
                        // Linken zur Seite "Schüler Auswertung" und Daten von PHP da zeigen

                        var result = this.responseText;

                        if (station == "Admin"){
                          location.href = "admin_menu.php";
                        }
                        else{
                            location.href = "stationscannen.php?stationname=" + "result" + "&stationpunkte=" + "result";  
                      }
                   }
                  }
              }
            

              xmlhttp.open("GET", "getlogin.php?q=" + txtPasswort + station);

              xmlhttp.send();

        };
      
