

      

        



        // Test 
        var jsonArray2 = ["steinam", "milena", "Katze"];

        var cboStation = document.getElementById("cboStation");      //innerHTML;


        for(i in jsonArray2){
           
          // cboStation.options.length = 0;

          // cboStation.options[cboStation.options.length] = new Option(jsonArray2[index], index);

         // 

          var t = document.createElement("option")
          t.value = jsonArray2[i];
          t.textContent = t.value;
          cboStation.append(t)
       }



      //  var xmlhttp = new XMLHttpRequest();
      //   xmlhttp.onreadystatechange = function() {

      //     if (this.readyState == 4 && this.status == 200) {
              

      //          var result = this.responseText;
     

      //          var jsonobj = JSON.parse('result'); 


      //          var jsonArray = [];

      //           for(var i in jsonobj)      jsonArray.push([i, jsonArray [i]]);
      
                 

      //           // Test 
      //           var jsonArray2 = ["steinam", "milena", "Katze"];

      //           var cboStation = document.getElementById("cboStation").innerHTML;


      //           for(var i = 0; i < jsonArray2[0].length; i++){
      //             var t = document.createElement("option")
      //             t.value = jsonArray2[0][i];
      //             //t.textContent = words[myArray[0][i]-1];
      //             cboStation.appendChild(t)
      //          }
  
      //     }
      //    }

      //    xmlhttp.open("GET", "getlogin.php?q=" + "allestationen");

      //    xmlhttp.send();

      
    





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
      
