<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template</title>
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
    <main>
        <div class="title">
            <h3>Station bearbeiten</h3>
        </div>
        <div>
            <p style="font-size: 18px;width: 100%;text-align: center;">Um eine neue Station anzulegen, füllen Sie folgende Felder:</p>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 5%;padding-bottom: 5%;">
            <form style="width: 300px;"><label class="left" style="font-size: 22px;float: left;margin-bottom: 10px;">Station:</label><input class="form-control right" type="text" id="txtStationName" style="width: 170px;float: right;">
                <div class="space"></div><label class="left" style="width: 110px;font-size: 22px;float: left;">Punkte:</label><input class="form-control" type="number" id="txtStationPunkte" style="width: 78px;float: right;">
                <div class="space"></div><label class="left" style="width:auto;font-size: 22px;float: left;">Ort:</label><input class="form-control right" type="text" id="txtStationOrt" style="width: 170px;float: right;">
                <div class="space"></div><label class="left" style="width: auto;font-size: 22px;float: left;">Startzeit:</label><input class="form-control" type="time" id="txtStationStart" style="width: 100px;float: right;">
                <div class="space"></div><label class="left" style="width: auto;font-size: 22px;float: left;">Endzeit:</label><input class="form-control" type="time" id="txtStationEnde" style="width: 100px;float: right;">
                <div class="space"></div><label class="left" style="width:auto;font-size: 22px;float: left;">Bemerkung:</label><textarea class="form-control" id="txtStationBemerkung" style="float: right;width: 170px;max-width: 170px;height: 60px;max-height: 60px;"></textarea>
                <div
                    class="space" style="height: 20px;"></div>
        <div><button class="btn btn-orange" id="btnVerwerfen" type="button" style="width: 100px;">Verwerfen</button><button class="btn btn-green" id="btnSpeichern" type="button" style="width: 99px;">Speichern</button></div>
        </form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>