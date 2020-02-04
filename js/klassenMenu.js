

function newClass() {

    console.log("hiiiiiiiiiiiiiii")

    location.href = "/view/adminNeuKlasse.php";

 

}





function Bearbeiten() {

    console.log("hiiiiiiiiiiiiiii")

     

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                var result = this.responseText;

                location.href = "/view/schuelerAnzahlBearbeiten.php?schuelerid=" + responseText;    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           }
      };

      xmlhttp.open("GET", "getlogin_controller.php?q=" + "klassen");

      xmlhttp.send();

}




function del() {

    console.log("hiiiiiiiiiiiiiii")

     

       var xmlhttp = new XMLHttpRequest();

       xmlhttp.onreadystatechange = function() {

           if (this.readyState == 4 && this.status == 200) {

                

                var result = this.responseText;

                location.href = "/view/schuelerAnzahlBearbeiten.php?schuelerid=" + responseText;    //?schuelerid=" + result + "?klasse=" + result + "?punkte=" + result;
           }
      };

      xmlhttp.open("GET", "getlogin_controller.php?q=" + "klassen");

      xmlhttp.send();

}