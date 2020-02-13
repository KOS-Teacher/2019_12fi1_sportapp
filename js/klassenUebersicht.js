
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
  }

  xmlhttp.open("GET", "../controller/station_controller.php?k=" + "alleklassen");  //   zurück : 

  xmlhttp.send();