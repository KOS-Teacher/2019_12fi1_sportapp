
          function admStation() {

            console.log("hiiiiiiiiiiiiiii")

            location.href = "stationen.php";

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {

                        

                        //var result = this.responseText;     // JSON mit Stationen


                        var myArr = JSON.parse(this.responseText);
                        

                        var out = "";
                        var i;
                        for(i = 0; i < myArr.length; i++) {
                            out += '=station' + i + myArr[i].url;
                        }





                        location.href = "stationen.php?" + out;    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                   }
              };

              xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + "stationen");

              xmlhttp.send();

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

          console.log("hiiiiiiiiiiiiiii")
  
          location.href = "admin_klasse_verwalten.php";
           

      }

      


      function genNummer() {

          

      }

      
  
      function krank() {

          console.log("hiiiiiiiiiiiiiii")
  
          location.href = "krankMeldung.php";
           

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

            xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + " ");

            xmlhttp.send();

      }






