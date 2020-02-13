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
    <script type="text/javascript" src="../js/schuelerAuswertung.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navcol-1">
                <div style="width: 360px">
                    <button class="btn" id="btnMenu" onclick="back()" type="button" style="width: 125px; float: right; border-color: black">Menü</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="text-center">
        <div class="text-center d-flex justify-content-center title">
            <h3>Auswertung</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div style="padding-top: 5%;padding-bottom: 5%;width: 360px;">
                <div class="d-flex justify-content-center" style="margin-bottom: 93px;">
                    <div class="table-responsive" style="background-color: #fefefe;">
                        <table class="table">
                            <thead class="table-header">
                                <tr>
                                    <th>Platz</th>
                                    <th>Klasse</th>
                                    <th>ØPunkte pro Schüler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td>1.</td>
                                    <td>12FI1</td>
                                    <td>22</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-header">
                                <tr>
                                    <th>Platz</th>
                                    <th>Schülernummer</th>
                                    <th>Klasse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td>1.</td>
                                    <td>12345</td>
                                    <td>12FI1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>