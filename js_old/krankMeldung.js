

function bestaetigen(zusatand) {   

   

    var txtSchuelerIDKrank = document.getElementById("txtSchuelerIDKrank").value;

    if(txtSchuelerIDKrank.lenght == 0){
       wondows.alert("Die Nummer darf nicht leer sein!");
    }
    else{

    

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                //var result = this.responseText;

                location.href = "admin_menu.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?s=" + txtSchuelerIDKrank + "&z=" + zustand); // gesund = false krank = true

      xmlhttp.send();
     }

}