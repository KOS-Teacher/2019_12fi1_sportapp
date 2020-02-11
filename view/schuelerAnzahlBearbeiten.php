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
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <main>
        <div style="height: 100%;">
            <div class="title">
                <h3>Schüleranzahl bearbeiten</h3>
            </div>
            <div class="d-flex justify-content-center" style="height: 40%;padding-top: 5%;padding-bottom: 5%;">
                <form style="text-align: center;max-height: 100%;">
                    <div class="dropdown d-flex justify-content-center" style="margin-bottom: 20px;">
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- <button class="btn dropdown-toggle border rounded pale-orange" data-toggle="dropdown" aria-expanded="false" id="cboKlasse" type="button" style="margin-bottom: 0px;width: 250px;">Klasse</button> -->
                        
                        
                    <select id="cboStation" class="dropdown-item" >
                                    <option value="none" selected disabled hidden>Station auswählen</option> 
                     </select>
                        
                        
                        <div class="dropdown-menu" role="menu"
                            style="margin-top: 0px;width: 250px;"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div><input class="form-control" type="number" id="txtSchuelerAnzahl" placeholder="Schüleranzahl"><button class="btn btn-green" id="btnBestaetigen" onclick="bestaetigen()" type="button" style="margin-top: 20%;width: 125px;">Bestätigen</button></form>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/schuelerAnzahlBearbeiten.js"></script>
</body>

</html>