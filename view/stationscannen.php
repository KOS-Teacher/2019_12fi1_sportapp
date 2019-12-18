<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Templates</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <main>
        <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
            <div class="title" style="height: auto;width: 360px;">
                <div style="float: left;margin-left: 30px;width: 120px;">
                    <p class="label" style="font-weight: bold;font-size: 1.4em;">Station:</p>
                    <p class="text" id = "stationname" style="max-width: 120px;">Brettspiele</p>
                </div>
                <div style="float: right;margin-right: 30px;width: 120px;">
                    <p class="label"  style="font-weight: bold;font-size: 1.4em;">Punkte:</p>
                    <p class="text" id = "stationpunkte">3</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center" style="height: 40%;">
            <form style="text-align: center;max-height: 100%;"><input type="file" style="/*height: 90px;*//*width: 90px;*/">
                <div style="height: 15px;"></div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Schüler-Nummer</span></div><input class="form-control" type="text" id="txtSchuelerNr1">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Schüler-Nummer<br></span></div><input class="form-control" type="text" id="txtSchuelerNr2">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Schüler-Nummer<br></span></div><input class="form-control" type="text" id="txtSchuelerNr3">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Schüler-Nummer<br></span></div><input class="form-control" type="text" id="txtSchuelerNr4">
                    <div class="input-group-append"></div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Schüler-Nummer<br></span></div><input class="form-control" type="text" id="txtSchuelerNr5">
                    <div class="input-group-append"></div>
                </div>
                <div style="margin-top: 25px;"><button class="btn btn-green" id="btnCheckliste" type="button" style="width: 125px;margin-right: 65px;">Checkliste</button><button class="btn btn-green" id="btnAbsenden" onclick="absenden()" type="button" style="width: 125px;">Absenden</button></div>
            </form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/stationscannen.js"></script>
</body>

</html>