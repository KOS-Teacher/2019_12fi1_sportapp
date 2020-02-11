

function gesund() {

    

    var txtSchuelerIDKrank = document.getElementById("txtSchuelerIDKrank").value;

    if(txtSchuelerIDKrank.length  <= 0){
       window.alert("Die Nummer darf nicht leer sein!");
    }
    else{

    

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                

                location.href = "admin_menu.php";   
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?s=" + txtSchuelerIDKrank + "?g=" + "gesund" );

      xmlhttp.send();
     }

}





function krank(){


     var txtSchuelerIDKrank = document.getElementById("txtSchuelerIDKrank").value;

     if(txtSchuelerIDKrank.length <= 0){
        window.alert("Die Nummer darf nicht leer sein!");
     }
     else{
 
     
 
        var xmlhttp = new XMLHttpRequest();
 
        xmlhttp.onreadystatechange = function() {
 
            if (this.readyState == 4 && this.status == 200) {
 
                 
 
                 
 
                 location.href = "admin_menu.php";   
            }
       };
 
       xmlhttp.open("GET", "../controller/getlogin_controller.php?s=" + txtSchuelerIDKrank + "?g=" + "krank" );
 
       xmlhttp.send();
      }




}