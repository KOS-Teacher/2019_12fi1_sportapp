<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Templates</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/loginschueler.js"></script>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <main>
        <div class="title">
            <h3>Sporttag</h3>
            <h3>Klara-Oppenheimer-Schule</h3>
            <h3>- SchĂ¼ler</h3>
        </div>
        <div class="d-flex justify-content-center">
            <p style="padding-left: 20px;padding-right: 20px;color: #ec880e;font-weight: bold;text-align: center;font-size: 1.3em;">Willkommen beim<br>Klaraktiv Sporttag 2020!</p>
        </div>
        <div class="d-flex justify-content-center">
            <p style="padding-left: 20px;padding-right: 21px;max-width: 350px;text-align: center;">Um Deinen aktuellen Punktestand und Rang zu sehen, gib im folgenden Feld Deine Durchlauf-Nummer an.</p>
        </div>
        <div class="d-flex justify-content-center" style="height: 40%;padding-top: 2%;padding-bottom: 2%;">
            <form style="text-align: center;max-height: 100%;width: 250px;"><input class="form-control" type="number" id="txtLogin" placeholder="Nummer"><button class="btn btn-green" id="btnLogin" onclick="loginSchueler()"   type="button" style="margin-top: 20%;width: 125px;" >Login</button></form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
