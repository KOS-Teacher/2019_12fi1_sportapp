

          

            console.log("hiiiiiiiiiiiiiii")

            var txtlogin = document.getElementById("txtLogin").value;




            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }
            
            
            //var number = getUrlVars()["x"];
            //var mytext = getUrlVars()["text"];

            var stationen = getUrlVars()["stationen"];






            //document.getElementById("dropdown-menu").classList.toggle("show");

            
            var select = document.createElement('select');

            // Use the Option constructor: args text, value, defaultSelected, selected
            var option = new Option('text', 'value', false, false);
            select.appendChild(option);


            stationen.forEach(myFunction);

           function myFunction(item) {
                 option = document.createElement('option');
                 option.value = satitonen1;
                 option.text = stationen;
                 select.appendChild(option);
            } 
            
            



















            

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

                        location.href = "/view/schuelerAuswertung.php?schuelerid=";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                   }
              };

              xmlhttp.open("GET", "getlogin.php?q=" + txtlogin, true);

              xmlhttp.send();

        }
      



        

        function admNeueStation() {

            console.log("hiiiiiiiiiiiiiii")
  
            location.href = "/view/admin_station_erstellen.php"
  
               
  
        }