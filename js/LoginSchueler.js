

          function loginSchueler() {

              var schulerid = document.getElementById("txtLogin").value;
              

             if (schulerid.length == 0) {


               window.alert("Nummer darf nicht leer sein!");

                return;

             } else {

                 
               console.log("111");

               location.href ="schuelerUebersicht.php/?SchuelerNummer=1" + 1 + "&SchuelerKlasse=2" + 2 + "&SchuelerPunkte=3" + 3 + "&KlasseRang=4" + 4 + "&BestePunkte=5" + 5;


                 var xmlhttp = new XMLHttpRequest();

                 xmlhttp.onreadystatechange = function() {

                     if (this.readyState == 4 && this.status == 200) {

                          
                          var result = this.responseText;

                         // location.href ="schuelerUebersicht.php?SchuelerNummer=" + 1 + "&SchuelerKlasse=" + 2 + "&SchuelerPunkte=" + 3 + "&KlasseRang=" + 4 + "&BestePunkte=" + 5;
                     }
                };

                xmlhttp.open("POST", "../controller/getlogin_controller.php?sch=" + schulerid, true);   // <------- PHP mit schulerid

                xmlhttp.send();

          }
        }
