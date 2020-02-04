

      

        



     // Test1
        
      // var testobj =  `{ "station_name": "john" , "station_password" : "a"  }`;  //, station_name: Anna , station_password : b, station_name: Peter, station_password : b}`;
     

      //          var jsonobj = JSON.parse(testobj);       

      //          var cboStation = document.getElementById("cboStation");
             

      //         for(i in jsonobj) {    //(j = 0; j < jsonobj.length; j++){     
      //             var t = document.createElement("option")
      //             t.value =  jsonobj.station_name + " " + jsonobj.station_password ;     //jsonobj.station_name[j] + jsonobj.station_password[j]; 
      //             t.textContent =  t.value;
      //             cboStation.append(t);
      //          }
  



       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

          if (this.readyState == 4 && this.status == 200) {
              

               var result = this.responseText;


               var jsonobj = JSON.parse(result);


               

                var cboStation = document.getElementById("cboStation");
             

                for(i in jsonobj){     
                  var t = document.createElement("option")
                  t.value = jsonobj.station_name;           //stationen[j].station; 
                  t.textContent =  t.value;
                  cboStation.append(t)
               }
  
          }
         }

         xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + "allestationen");

         xmlhttp.send();

      
    





          function loginLehrer() {

            console.log("test");

            var txtPasswort = document.getElementById("txtPasswort").value;
            var station = document.getElementById("cboStation").value;
            
            brea

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

                        if (station == "Admin"){
                          location.href = "admin_menu.php";
                        }
                        else{
                            location.href = "stationscannen.php?stationname=" + "result" + "&stationpunkte=" + "result";  
                      }
                   }
                  }
              }
            

              xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtPasswort + station);

              xmlhttp.send();

        };
      
