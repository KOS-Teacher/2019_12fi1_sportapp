       var jsonobj2

       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

          if (this.readyState == 4 && this.status == 200) {
              

               var result = this.responseText;


               var jsonobj = JSON.parse(result);

               
               jsonobj2 = jsonobj

                var cboStation = document.getElementById("cboStation");
             

                for(j = 0; j < jsonobj.length; j++){        

                  var t = document.createElement("option")
                  t.value = jsonobj[j].Station_Name;           
                  t.textContent =  t.value;
                  cboStation.append(t)

                }
  
          }
         }

         xmlhttp.open("GET", "../controller/station_controller.php?q=" + "allestationen");

         xmlhttp.send();

      
    





          function loginLehrer() {

            //console.log("test");

            var txtPasswort = document.getElementById("txtPasswort").value;
            var station = document.getElementById("cboStation").value;
            
            

           if (txtPasswort.length == 0) {
            window.alert("Kennwort darf nicht leer sein!");
              return;
           } 
           else {


              //location.href = "stationscannen.php?stationname=" + "result" + "&stationpunkte=" + "result";

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {


                        var result = this.responseText;
                        
                        if (result) {
                          
                          
                          for(j = 0; j < jsonobj2.length; j++){          
                            

                             if(jsonobj2[j].Station_Name == station && jsonobj2[j].Station_Passwort == txtPasswort){

                              var punkte = jsonobj2[j].Station_Punkte;  

                              var id =  jsonobj2[j].Station_ID;


                              location.href = "stationscannen.php?stationname=" + station + "&stationpunkte=" + punkte + "&stationid=" + id;}

                             }

                             

    
                         }
                         else
                             {
                              window.alert("Kennwort ist falsch!");
                             }
                      
                   }
                  }
              }
            

              xmlhttp.open("GET", "../controller/station_controller.php?p=" + txtPasswort + "s&=" + station);

              xmlhttp.send();

        };
      



        function loginAdmin(){


           //console.log("test");

           var txtPasswort = document.getElementById("txtAdminPasswort").value;
           

          if (txtPasswort.length == 0) {
           window.alert("Kennwort darf nicht leer sein!");
             return;
          } 
          else {


              var xmlhttp = new XMLHttpRequest();

              xmlhttp.onreadystatechange = function() {

                  if (this.readyState == 4 && this.status == 200) {


                       var result = this.responseText;
                       
                       if (result) {
                         
                        location.href = "Admin_menu.php";
                      
                      }
                      else{
                        window.alert("Kennwort ist falsch!");
                      }

                     
                  }
                 }
             }
           

             xmlhttp.open("GET", "../controller/administrator_controller.php?p=" + txtPasswort);

             xmlhttp.send();

            };