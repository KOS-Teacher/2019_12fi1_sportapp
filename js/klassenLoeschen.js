function del() {

    

    var txtKlasseName = document.getElementById("txtKlasseName").value;

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

        //    if (this.readyState == 4 && this.status == 200) {

                

        //         var result = this.responseText;

                location.href = "admin_klasse_verwalten.php"; 
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + txtKlasseName + "&q=" + "klasseLoeschen");

      xmlhttp.send();

}





function cancel() {

   

    location.href = "admin_klasse_verwalten.php";

 

}