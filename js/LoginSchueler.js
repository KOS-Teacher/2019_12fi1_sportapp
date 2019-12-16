

          function loginSchueler() {

              console.log("hiiiiiiiiiiiiiii")

              var txtlogin = document.getElementById("txtLogin").value;
              

             if (txtlogin.length == 0) {

               console.log("00000");
               

                document.getElementById("txtLogin").innerHTML = "qqqqq";

                return;

             } else {

                 
               console.log("111");

               location.href ="admin_station_erstellen.php"; //"./view/admin_station_erstellen.php";

                 var xmlhttp = new XMLHttpRequest();

                 xmlhttp.onreadystatechange = function() {

                     if (this.readyState == 4 && this.status == 200) {

                          //document.getElementById("txtHint").innerHTML = this.responseText;
                          // Linken zur Seite "Schüler Auswertung" und Daten von PHP da zeigen

                          var result = this.responseText;

                          location.href = "/view/admin_station_erstellen.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                     }
                };

                xmlhttp.open("GET", "getlogin.php?q=" + txtlogin, true);

                xmlhttp.send();

          }
        }
