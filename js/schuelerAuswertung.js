

          

            
             var xmlhttp = new XMLHttpRequest();

             xmlhttp.onreadystatechange = function() {

                 if (this.readyState == 4 && this.status == 200) {

                      

                      var result = this.responseText;


                      if (result) {
                          
                          
                        var jsonobj = JSON.parse(result);

                        var table1 = document.getElementById("table1");

                        
                        
                        var i = 1;

                       

                        

                        var cell = 1;


                        var row = 1;

                        

                       for(j = 0; j < jsonobj.length; j++){        


                              table1.rows[row].cells[cell].innerHTML =  jsonobj[j].Klasse_ID;  

                              row++;
   
                           
                        }

                        row = 1;

                        cell = 2;

                        for(j = 0; j < jsonobj.length; j++){        

                               table1.rows[row].cells[cell].innerHTML =  jsonobj[j].Klasse_Punkte / jsonobj[j].Klasse_Anzahlschueler;  
                               row++;
     
                         }


                    //   location.href = "admin_menu.php";    
                 }
            }
          }

          xmlhttp.open("GET", "../controller/klasse_controller.php?a=" + "auswertungen");
           
            xmlhttp.send();

            
        
                   
           
            


            var xmlhttp = new XMLHttpRequest();

             xmlhttp.onreadystatechange = function() {

                 if (this.readyState == 4 && this.status == 200) {

                      

                      var result = this.responseText;


                      if (result) {
                          
                          
                        var jsonobj = JSON.parse(result);

                       

                        var table2 = document.getElementById("table2");
                        
                       

                        var cell = 1;


                        var row = 1;

                        

                       for(j = 0; j < jsonobj.length; j++){        


                              table2.rows[row].cells[cell].innerHTML =  jsonobj[j].Schueler_ID;  

                              row++;
   
                           
                        }

                        row = 1;

                        cell = 2;

                        for(j = 0; j < jsonobj.length; j++){        

                               table2.rows[row].cells[cell].innerHTML =  jsonobj[j].Schueler_Punkte;  
                               row++;
     
                         }


                    //   location.href = "admin_menu.php";    
                 }
            }
          }

            xmlhttp.open("GET", "../controller/schueler_controller.php?a=" + "auswertungen");
           
            xmlhttp.send();
