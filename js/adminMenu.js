

          function admStation() {

            console.log("hiiiiiiiiiiiiiii")

             

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {

                        

                        var result = this.responseText;

                        location.href = "/view/stationen.php?schuelerid=" + responseText;    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                   }
              };

              xmlhttp.open("GET", "getlogin.php?q=" + "stationen");

              xmlhttp.send();

        }

        
      
        function admKlassen() {

          console.log("hiiiiiiiiiiiiiii")
  
          location.href = "/view/admin_klasse_verwalten.php";
           

      }

      


      function genNummer() {

          

      }

      
  
      function krank() {

          console.log("hiiiiiiiiiiiiiii")
  
          location.href = "/view/krankMeldung.php";
           

      }


      
      function auswertung() {

          console.log("hiiiiiiiiiiiiiii")

           

             var xmlhttp = new XMLHttpRequest();

             xmlhttp.onreadystatechange = function() {

                 if (this.readyState == 4 && this.status == 200) {

                      

                      var result = this.responseText;

                      location.href = "/view/schuelerAuswertung.php?schuelerid=" + responseText;    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                 }
            };

            xmlhttp.open("GET", "getlogin.php?q=" + " ");

            xmlhttp.send();

      }






