
            console.log("hiiiiiiiiiiiiiii")


            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }

           // var stationen = getUrlVars()["station"];





            stationen = ["Saab", "Volvo", "BMW"];




            var dropdown = document.getElementById("dropdown12");

            for (i = 0; i < stationen.length; i++) {
                 var option = document.createElement('option');
                 option.text = stationen[i];
                 option.value = stationen[i];
                 dropdown.appendChild(option);
              } 




        

        function admNeueStation() {

            console.log("hiiiiiiiiiiiiiii")
  
            location.href = "/view/admin_station_erstellen.php"
  
               
  
        }