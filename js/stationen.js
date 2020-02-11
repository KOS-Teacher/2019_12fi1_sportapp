
            //console.log("hiiiiiiiiiiiiiii")


           // get Stationen 
           var xmlhttp = new XMLHttpRequest();

           xmlhttp.onreadystatechange = function() {

               if (this.readyState == 4 && this.status == 200) {

            

                

                var result = this.responseText;


                var jsonobj = JSON.parse(result);

                var cboStation = document.getElementById("cboStation");
         

                for(j = 0; j < jsonobj.length; j++){        

                  var t = document.createElement("option")
                  t.value = jsonobj[j].Station_Name;           
                  t.textContent =  t.value;
                  cboStation.append(t)

                }

                    
               }


               xmlhttp.open("GET", "../controller/station_controller.php?q=" + "allestationen");

               xmlhttp.send();
          };

        

        







            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }

           // var stationen = getUrlVars()["station"];





            // stationen = ["Saab", "Volvo", "BMW"];




            // var dropdown = document.getElementById("dropdown12");

            // for (i = 0; i < stationen.length; i++) {
            //      var option = document.createElement('option');
            //      option.text = stationen[i];
            //      option.value = stationen[i];
            //      dropdown.appendChild(option);
            //   } 




        

        function admNeueStation() {

            console.log("hiiiiiiiiiiiiiii")
  
            location.href = "/view/admin_station_erstellen.php"
  
               
  
        }