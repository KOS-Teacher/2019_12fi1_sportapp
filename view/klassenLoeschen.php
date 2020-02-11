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
    <script type="text/javascript" src="../js/klassenLoeschen.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navcol-1">
                <div style="width: 360px">
                    <button class="btn" id="btnLogout" onclick="back()" type="button" style="width: 125px; float: right; border-color: black">Menü</button>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="title">
            <h3>Klasse löschen</h3>
        </div>
        <div>
            <p class="text-center" style="padding-right: 15px;padding-left: 15px;">Geben Sie den Namen der zu löschenden Klasse ein:</p>
        </div>
        <div class="d-flex justify-content-center" style="height: 40%;padding-top: 5%;padding-bottom: 5%;">
            <form style="text-align: center;max-height: 100%;width: 300px;"><input class="form-control" type="text" id="txtKlasseName" placeholder="Klasse"><button class="btn btn-green" id="btnAbbruch" onclick="cancel()" type="button" style="margin-top: 20%;width: 125px;">Abbruch</button><button class="btn btn-red" id="btnLoeschen" onclick="del()"
                    type="button" style="margin-top: 20%;width: 125px;">Löschen</button></form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>