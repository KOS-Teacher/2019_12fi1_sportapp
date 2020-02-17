
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {

   if (this.readyState == 4 && this.status == 200) {
       

        var result = this.responseText;


        var jsonobj = JSON.parse(result);

        
        

         var cboStation = document.getElementById("cboStation");

         var inaktiv = document.getElementById("txtInaktiv");

         var krank = document.getElementById("txtKrank");
      

         for(j = 0; j < jsonobj.length; j++){        

           var t = document.createElement("option")
           t.value = jsonobj[j].Station_Name;           
           t.textContent =  t.value;
           cboStation.append(t)

         }

     
         inaktiv.value = jsonobj.inaktiv;

         krank.value =  jsonobj.krank;



   }
  }

  xmlhttp.open("GET", "../controller/station_controller.php?k=" + "alleklassen");  //   zurück : alle klassen, inaktivAnzahl, krankanzahl, schuleNummer, Punkte

  xmlhttp.send();