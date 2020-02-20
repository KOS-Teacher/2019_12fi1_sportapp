function del() {

    

    var txtKlasseName = document.getElementById("txtKlasseName").value;

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

        //    if (this.readyState == 4 && this.status == 200) {

                

        //         var result = this.responseText;

<<<<<<< HEAD
                location.href = "admin_klasse_verwalten.php"; 
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtKlasseName + "&q=" + "klasseLoeschen");
=======
        //         location.href = "/view/admin_klasse_verwalten.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
        //    }
      };

      xmlhttp.open("GET", "../controller/klasse_controller.php?delete=" + txtKlasseName);
>>>>>>> 7f8c16d8267a6dd3e6f53e19b3d7587ddb4b51b9

      xmlhttp.send();

}





function cancel() {

   

    location.href = "admin_klasse_verwalten.php";

 

}