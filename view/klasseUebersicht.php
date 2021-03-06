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
    <main class="text-center">
        <div class="text-center d-flex justify-content-center title">
            <h3>Klassenübersicht</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div style="width: 180px;">
                <div class="dropdown" style="width: 100%;">
                
                
                <!-- <button class="btn dropdown-toggle pale-orange" data-toggle="dropdown" aria-expanded="false" id="cboKlasse" type="button" style="width: 100%;">Klasse</button> -->

                <select id="cboStation" class="dropdown-item" >
                                    <option value="none" selected disabled hidden>Klasse</option> 
                                </select>




                    <!-- <div class="dropdown-menu" role="menu" style="width: 100%;"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div> -->
                </div><label class="label" style="float: left;">Inaktiv:   </label><label id="txtInaktiv" class="text" style="float: right;"></label>
                <div class="space"></div><label class="label" style="float: left;">Krank:    </label><label id="txtKrank" class="text" style="float: right;"></label></div>
        </div>
        <div class="d-flex justify-content-center">
            <div style="width: 360px;">
                <div class="d-flex justify-content-center">
                    <div class="table-responsive" style="width: 300px;background-color: #fefefe;">
                        <table class="table" id="tblSchuelerUebersicht">
                            <thead class="table-header">
                                <tr>
                                    <th>Schülernummer</th>
                                    <th>Punkte</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="table-row">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="table-row">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="table-row">
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="table-row">
                                    <td></td>
                                    <td></td>
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

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/klassenUebersicht.js"></script>
</body>

</html>
