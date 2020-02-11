

          

            
             var xmlhttp = new XMLHttpRequest();

             xmlhttp.onreadystatechange = function() {

                 if (this.readyState == 4 && this.status == 200) {

                      

                      var result = this.responseText;


                      if (result) {
                          
                          
                        var jsonobj = JSON.parse(result);

                        var SchuelerNummer = document.getElementById("SchuelerNummer");
                        var SchuelerKlasse = document.getElementById("SchuelerKlasse");
                        var SchuelerPunkte = document.getElementById("SchuelerPunkte");
                        var KlasseRang = document.getElementById("KlasseRang");
                        var BestePunkte = document.getElementById("BestePunkte");
             

                       for(j = 0; j < jsonobj.length; j++){        

                            var t = document.createElement("option")
                            t.value = jsonobj[j].Station_Name;           
                            t.textContent =  t.value;
                            cboStation.append(t)
                        }


                      

            
            

          
                      SchuelerNummer.innerHTML =  result;
                      SchuelerKlasse.innerHTML =  result;
                      SchuelerPunkte.innerHTML =  result;
                      KlasseRang.innerHTML =  result;
                      BestePunkte.innerHTML =  result;



                      location.href = "admin_menu.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
                 }
            };

            xmlhttp.open("GET", "../controller/getlogin_controller.php?a=" + "auswertungen");

            xmlhttp.send();







            
        }
                   
           
