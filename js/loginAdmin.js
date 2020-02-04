

      

        



      //   // Test1
        
      //   var stationtext = '{ "stationen" : [' +
      //              '{ "station":"John"},' +
      //              '{ "station":"Anna"},' +
      //              '{ "station":"Peter"} ]}';


      //   var stationObj = JSON.parse(stationtext);

      //   var cboStation = document.getElementById("cboStation");

        

      //   for(j = 0; j < stationObj.stationen.length; j++){    // i in stationObj)
           
      //     // cboStation.options.length = 0;

      //     // cboStation.options[cboStation.options.length] = new Option(jsonArray2[index], index);

      //    // 
          
      //     var t = document.createElement("option")
      //     t.value = stationObj.stationen[j].station; //jsonArray2[i];
      //     //j = j + 1;
      //     t.textContent = t.value;
      //     cboStation.append(t)
          
         
      //  }
  







      //   // Test2

      //   var jsonArray2 = ["steinam", "milena", "Katze"];

      //   var cboStation = document.getElementById("cboStation");      //innerHTML;


      //   for(i in jsonArray2){
           
      //     // cboStation.options.length = 0;

      //     // cboStation.options[cboStation.options.length] = new Option(jsonArray2[index], index);

      //    // 

      //     var t = document.createElement("option")
      //     t.value = jsonArray2[i];
      //     t.textContent = t.value;
      //     cboStation.append(t)
      //  }



       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

          if (this.readyState == 4 && this.status == 200) {
              

               var result = this.responseText;
     

               var jsonobj = JSON.parse(this.responseText);


               //var jsonArray = [];

                //for(var i in jsonobj)      jsonArray.push([i, jsonArray [i]]);
      
                 

                
                //var jsonArray2 = ["steinam", "milena", "Katze"];

                var cboStation = document.getElementById("cboStation").innerHTML;
             

                for(j = 0; j < jsonobj.stationen.length; j++){     
                  var t = document.createElement("option")
                  t.value = jsonobj.stationen[j].station; 
                  t.textContent =  t.value;
                  cboStation.append(t)
               }
  
          }
         }

         xmlhttp.open("GET", "getlogin.php?q=" + "allestationen");

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
            

              xmlhttp.open("GET", "getlogin.php?q=" + txtPasswort + station);

              xmlhttp.send();

        };
      
