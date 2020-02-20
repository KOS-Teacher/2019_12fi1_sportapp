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
                    <button class="btn" id="btnLogout" onclick="back()" type="button" style="width: 125px; float: right; border-color: black">Menü</button>
                </div>
            </div>
        </div>
    </nav>
    <main class="text-center">
        <div class="text-center" style="padding-right: 15px;padding-left: 15px;">
            <h3>Krankmeldung</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form>
                <div class="text-center" style="height: 100px;width: 360px;">
                    <p class="text-left" style="padding-right: 15px;padding-left: 15px;">Um einen Schüler krankzumelden, scannen sie den zugehörigen QR-Code oder geben Sie die Nummer ein</p>
                    <div style="padding-top: 5%;padding-bottom: 5%;">
                        <div class="d-flex justify-content-center" style="margin-bottom: 117px;">
                            <form class="text-center justify-content-center align-items-center align-content-center align-self-center" style="width: 300px;"><input type="file"></form>
                        </div>
                        <div style="width: 360px;">
                            <form>
                                <div>
                                    <div class="input-group" style="padding-left: 15px;padding-right: 15px;">


                                        <div class="input-group-prepend">

                                        
                                        
                                       
                                        <span class="input-group-text">Schülernummer:</span></div><input class="form-control"  id="txtSchuelerIDKrank"type="text">
                                        
                                        
                                        
                                        <div class="input-group-append">
                                        <button class="btn btn-green" id="btnGesund" onclick="bestaetigen('false')" type="button">Gesund</button>
                                        <button class="btn btn-red" id="btnKrank" onclick="bestaetigen('true')" type="button">Krank</button>
                                        </div>



                                    </div>
                                    
                                </div>
                                <!-- <div style="padding: 50px 20px 50px 20px">
                                        <button style="float: left;" class="btn btn-green" id="btnGesund" onclick="bestaetigen()" type="button">Gesund</button>
                                        <button style="float: right;" class="btn btn-red" id="btnKrank" onclick="bestaetigen()" type="button">Krank</button>
                                    </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/krankMeldung.js"></script>
</body>

</html>