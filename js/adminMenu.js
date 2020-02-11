
          function admStation() {

                location.href = "stationen.php";
          }
        

        
        function myFunction(arr) {
            var out = "";
            var i;
            for(i = 0; i < arr.length; i++) {
                out += '<a href="' + arr[i].url + '">' +
                arr[i].display + '</a><br>';
            }
            document.getElementById("id01").innerHTML = out;
        }






        
      
        function admKlassen() {

          
  
          location.href = "admin_klasse_verwalten.php";
           

      }

      


      function genNummer() {

          // TODO

      }

      
  
      function krank() {

          location.href = "krankMeldung.php";
           
      }


      
      function auswertung() {

        location.href = "schuelerAuswertung.php"; 
      }






