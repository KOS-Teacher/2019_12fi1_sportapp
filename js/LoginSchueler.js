

          function loginSchueler() {

              var schulerid = document.getElementById("txtLogin").value;
              

             if (schulerid.length == 0) {


               window.alert("Nummer darf nicht leer sein!");

                return;

             } else {

              


                 var xmlhttp = new XMLHttpRequest();

                 xmlhttp.onreadystatechange = function() {

                     if (this.readyState == 4 && this.status == 200) {

                          
                          var result = this.responseText;


                          if (Object.keys(result).length > 0){

                          var jsonobj = Json.parse(result);


                          for(j = 0; j < jsonobj.length; j++){        

                             var schuelerKlasse = jsonobj[j].Schueler_Klasse;

                             var schuelerPunkte = jsonobj[j].Klassen_Name;
                             
                             var Punkte = jsonobj[j].Schueler_Punkte;

                             var KlasseRang = jsonobj[j].Klasse_Rang;

                             var Bestpunktzahl = jsonobj[j].Schueler_Bestpunktzahl;

                             location.href ="schuelerUebersicht.php/?SchuelerID=" + schulerid + "&SchuelerKlasse=" + schuelerKlasse + "&SchuelerPunkte=" + schuelerPunkte + "&KlasseRang=" + KlasseRang + "&BestePunkte=" + Bestpunktzahl;
          
                          }

                          
                     }
                    }
                };

                xmlhttp.open("POST", "../controller/schueler_controller.php?sch=" + schulerid);   // <------- zurück :  Klasse Name, Punkte , Aktueller Rang der Klasse, Aktuelle Bestpunktzahl

                xmlhttp.send();

          }
        }




        function klassenUbersicht(){

           
         location.href ="klasseUebersicht.php";


        }

       

  