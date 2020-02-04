<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Menü</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <main class="text-center">
        <div class="text-center d-flex justify-content-center title">
            <h3>Admin Bereich&nbsp;</h3>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 5%;padding-bottom: 5%;">
            <form class="text-center justify-content-center align-items-center align-content-center align-self-center" style="width: 300px;"><button class="btn btn-primary btn-menu" id="btnAdmStation" onclick="admStation()" type="button" style="width: 200px;margin: 0px;margin-right: 0px;padding-right: 12px;height: 38px;margin-bottom: 20px;"><strong>Stationen</strong></button><button class="btn btn-primary btn-menu"
                    id="btnAdmClass" onclick="admKlassen()" type="button" style="width: 200px;margin-bottom: 20px;"><strong>Klassen</strong></button><button class="btn btn-primary btn-menu" id="btnAdmNumbers" onclick="genNummer()"  type="button" style="width: 200px;margin-bottom: 20px;"><strong>Nummern generieren</strong></button>
                <button
                    class="btn btn-primary btn-menu" id="btnAdmEvaluation" onclick="krank()" type="button" style="width: 200px;margin-bottom: 20px;"><strong>Krankmeldung</strong></button><button class="btn btn-primary btn-menu" id="btnAdmEvaluation" onclick="auswertung()" type="button" style="width: 200px;"><strong>Auswertung</strong></button></form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/adminMenu.js"></script>
</body>

</html>