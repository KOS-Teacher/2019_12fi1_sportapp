<!doctype html>
<html lang="de">
  <head>
    <?php include "./view/elements/head.html"; ?>

     <!-- AJAX mit PHP Integration -->
     <!-- Login Schüler-->
    <script>
          function loginSchueler(str) {

             if (str.length == 0) {

                document.getElementById("txtHint").innerHTML = "";

                return;

             } else {

                 var xmlhttp = new XMLHttpRequest();

                 xmlhttp.onreadystatechange = function() {

                     if (this.readyState == 4 && this.status == 200) {

                          //document.getElementById("txtHint").innerHTML = this.responseText;
                     }
                };

                xmlhttp.open("GET", "gethint.php?q=" + str, true);

                xmlhttp.send();

          }
        }
   </script>
   <!-- AJAX mit PHP Integration -->

  </head>




  <body>
    <h1>Startseite</h1>
    <?php include "./view/elements/footer.html"; ?>


    <p><b>Start typing a name in the input field below:</b></p>
    <form>
    Nummer <input type="text" onkeyup="loginSchueler(this.value)">
    </form>
    <p>Antwort <span id="txtHint"></span></p>






  </body>
</html>
