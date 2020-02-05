

      

        



       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

          if (this.readyState == 4 && this.status == 200) {
              

               var result = this.responseText;


               var jsonobj = JSON.parse(result);

               //var stationenArray = new Array(2);
              // var stationPassArray
               

                var cboStation = document.getElementById("cboStation");
             

                for(j = 0; j < jsonobj.length; j++){        

                  var t = document.createElement("option")
                  t.value = jsonobj[j].Station_Name;           
                  t.textContent =  t.value;
                  cboStation.append(t)


              //     for (i = 0; i < jsonobj[j].lene)

              //         stationenArray[j][i].push(jsonobj[j].Station_ID);


                }
  
          }
         }

         xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + "allestationen");

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


              location.href = "stationscannen.php?stationname=" + "result" + "&stationpunkte=" + "result";

               var xmlhttp = new XMLHttpRequest();

               xmlhttp.onreadystatechange = function() {

                   if (this.readyState == 4 && this.status == 200) {


                        var result = this.responseText;
                        
                        if (result) {
                          
                          
                          for(j = 0; j < jsonobj.length; j++){          
                            

                             if(jsonobj[j].Station_Name == station && jsonobj[j].Station_Name == txtPasswort){

                              var punkte = jsonobj[j].Station_Punkte;  

                              var id =  jsonobj[j].Station_ID;


                              location.href = "stationscannen.php?stationname=" + "station" + "&stationpunkte=" + "punkte" + "&stationid=" + "id";}

                             }

          
                         }
                      
                   }
                  }
              }
            

              xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtPasswort + station);

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
                       
                       if (result) {location.href = "Admin_menu.php";}

                     
                  }
                 }
             }
           

             xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtPasswort);

             xmlhttp.send();

            };