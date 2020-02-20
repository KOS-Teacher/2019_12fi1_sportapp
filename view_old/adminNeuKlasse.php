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
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navcol-1">
                <div style="width: 360px">
                    <button class="btn" id="btnZurueck" onclick="back()" type="button" style="width: 125px; float: right; border-color: black">Zurück</button>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="title">
            <h3>Klasse neuanlegen</h3>
        </div>
        <div>
            <p style="font-size: 18px;width: 100%;text-align: center;">Um eine neue Klasse anzulegen, füllen Sie folgende Felder:</p>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 5%;padding-bottom: 5%;">
            <form style="width: 300px;"><label class="left" style="font-size: 22px;float: left;margin-bottom: 30px;">Name der Klasse:</label><input class="form-control right" type="text" id="txtKlasseName" style="width: 103px;float: right;"><label class="left" style="width: 191px;font-size: 22px;padding-right: 2px;float: left;">Anzahl der Schüler:</label>
                <input
                    class="form-control" type="number" id="txtAnzahlSchueler" style="width: 70px;float: right;">
                    <div style="clear: both;height: 50px;"></div>
                    <div><button class="btn btn-red" id="btnVerwerfen" onclick="Verwerfen()" type="button" style="width: 100px;">Verwerfen</button><button class="btn btn-green" id="btnSpeichern" onclick="Speichern()" type="button" style="width: 99px;">Speichern</button></div>
            </form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

     <!-- AJAX mit PHP Integration -->
     <script type="text/javascript" src="../js/adminNeueKlasse.js"></script>
</body>

</html>