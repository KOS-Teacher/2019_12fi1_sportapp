

   function getUrlParameterByName(name, url)
   {
       if (!url) url = window.location.href;
       name = name.replace(/[\[\]]/g, "\\$&");
       var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"), results = regex.exec(url);
       if (!results) return null;
       if (!results[2]) return '';
       return decodeURIComponent(results[2].replace(/\+/g, " "));
   }


   
   var stationname = document.getElementById("stationname");

   var stationpunkte = document.getElementById("stationpunkte");


   stationname.innerHTML = getUrlParameterByName('stationname');


   stationpunkte.innerHTML = getUrlParameterByName('stationpunkte');


   var stationid =  getUrlParameterByName('stationid');
 


 function absenden() {

   
  
   
   var txtSchuelerNr1 = document.getElementById("txtSchuelerNr1").value;
  
   var txtSchuelerNr2 = document.getElementById("txtSchuelerNr2").value;
  
   var txtSchuelerNr3 = document.getElementById("txtSchuelerNr3").value;
  
   var txtSchuelerNr4 = document.getElementById("txtSchuelerNr4").value;
  
   var txtSchuelerNr5 = document.getElementById("txtSchuelerNr5").value;   

   

    //location.href ="admin_menu.php";
    
       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                
                var result = this.responseText;

                if(!result){ 

                     // msgBox:  bitte probieren Sie es nochmal!
                     alert("bitte probieren Sie es nochmal!");

                  }

                location.href ="admin_menu.php";
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?schulernummer1=" + txtSchuelerNr1 + "&schulernummer2="  + txtSchuelerNr2 + "&schulernummer3=" + txtSchuelerNr3 + "&schulernummer4=" + txtSchuelerNr4 + "&schulernummer5=" + txtSchuelerNr5 + "&station_id="  + stationid );   // <------- PHP : schulernummer + station_id , zurück ob es geklappt hat aslo boolean

      xmlhttp.send();

//}
}


function checkListe(){


  
  
       // TODO : PDF generieren

       



}


