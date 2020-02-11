

          

            
             var xmlhttp = new XMLHttpRequest();

             xmlhttp.onreadystatechange = function() {

                 if (this.readyState == 4 && this.status == 200) {

                      

                      var result = this.responseText;


                      if (result) {
                          
                          
                        var jsonobj = JSON.parse(result);

                        var table1 = document.getElementById("table1");

                        var table2 = document.getElementById("table2");
                        
                        var i = 1;

                        var h = 1;

                        

                       for(j = 0; j < jsonobj.length; j++){        

                         

                         if (jsonobj[j].Station_Name == "table1"){         // table1 = Auswetung Klassen
                            
                              table1.rows[j].cells[i].innerHTML =  jsonobj[j].Station_Name; 

                              i++;

                              table1.rows[j].cells[i].innerHTML =  jsonobj[j].Punkte; 

                         }




                         if (jsonobj[j].Station_Name == "table2"){        // table2 = Auswertung Schüler


                              table2.rows[j].cells[h].innerHTML =  jsonobj[j].Schuler_Nummer; 

                              i++;

                              table2.rows[j].cells[h].innerHTML =  jsonobj[j].Station_Name; 

                         }
                           
                                   
                           
                        }


                      location.href = "admin_menu.php";    
                 }
            }
          }

            xmlhttp.open("GET", "../controller/getlogin_controller.php?a=" + "auswertungen");

            xmlhttp.send();

            
        
                   
           
