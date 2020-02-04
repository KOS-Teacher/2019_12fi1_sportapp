function del() {

    console.log("hiiiiiiiiiiiiiii")

    var txtKlasseName = document.getElementById("txtKlasseName").value;

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                var result = this.responseText;

                location.href = "/view/admin_klasse_verwalten.php";    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           }
      };

      xmlhttp.open("GET", "../controller/getlogin_controller.php?q=" + "delete" + txtKlasseName);

      xmlhttp.send();

}





function cancel() {

    console.log("hiiiiiiiiiiiiiii")

    location.href = "/view/admin_klasse_verwalten.php";

 

}