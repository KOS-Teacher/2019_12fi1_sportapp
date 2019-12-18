<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Templates</title>
    <link rel="stylesheet" type ="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">

   

    
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <main>
        <div class="title">
            <h3>Schüler - Übersicht</h3>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 20px;padding-bottom: 20px;">
            <form style="text-align: center;max-height: 100%;width: 250px;">
                <div><label class="label" for="SchuelerNummer">Schüler</label><label id="SchuelerNummer" class="text">12345</label></div>
                <div class="space"></div>
                <div><label class="label" for="SchuelerKlasse">Klasse</label><label id="SchuelerKlasse" class="text">12FI1</label></div>
                <div class="space"></div>
                <div><label class="label" for="SchuelerPunkte">Deine Punkte</label><label id="SchuelerPunkte" class="text">35</label></div>
            </form>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 20px;padding-bottom: 20px;">
            <form style="text-align: center;max-height: 100%;width: 250px;">
                <div><label class="label" for="SchuelerKlasse">Aktueller Rang der Klasse</label><label id="KlasseRang" class="text">2.</label></div>
                <div class="space"></div>
                <div><label class="label" for="SchuelerPunkte">Aktuelle Bestpunktzahl</label><label id="BestePunkte" class="text">55</label></div>
            </form>
        </div>
        <div class="d-flex justify-content-center">
            <div style="width: 300px;margin-top: 20px;">
                <div style="width: 90px;height: 150px;float: left;margin-right: 15px;">
                    <div class="siegertreppe" style="height: 70%;top: 30%;">
                        <div class="treppe-text">
                            <p id="sieger-klasse-2">11FI2</p>
                            <p id="sieger-punkte-2">320</p>
                        </div>
                    </div>
                </div>
                <div style="width: 90px;height: 150px;float: left;margin-right: 15px;">
                    <div class="siegertreppe" style="height: 100%;">
                        <div class="treppe-text">
                            <p id="sieger-klasse-1">12FI1</p>
                            <p id="sieger-punkte-1">440</p>
                        </div>
                    </div>
                </div>
                <div style="width: 90px;height: 150px;float: left;">
                    <div class="siegertreppe" style="height: 50%;top: 50%;">
                        <div class="treppe-text">
                            <p id="sieger-klasse-3">10FI4</p>
                            <p id="sieger-punkte-3">265</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../../js/schuelerUebersicht.js"></script>
</body>

</html>