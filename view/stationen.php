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
        <div class="title">
            <h3>Station bearbeiten</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form style="width: 300px;padding-top: 5%;padding-bottom: 5%;">
                <div class="dropdown" style="height: auto;width: auto;margin-bottom: 117px;">
                <button class="btn dropdown-toggle" id = "dropdown11" data-toggle="dropdown" aria-expanded="false" type="button" style="width: auto;margin-left: 59px;background-color: #f4b183;">Station auswählen</button>

                       <!-- <div class="dropdown-menu" id = "dropdown12" role="menu">
                       <a class="dropdown-item" role="presentation" href="#">Jonglieren</a>-->
                       <!--<a class="dropdown-item" role="presentation" href="#">Nähen</a>-->
                       
                    </div> -->
                
                
                </div>


                <div><button class="btn btn-primary btn-menu" id="btnVerwerfen" onclick="admNeueStation()" type="button" style="width: 180px;">Neue Station anlegen</button><button class="btn btn-primary btn-menu" id="btnSpeichern" type="button" style="width: 100px;padding-right: 8px;margin-right: 0px;margin-left: 1px;background-color: #f4b183;">Bearbeiten</button></div>
            </form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/stationen.js"></script>
</body>

</html>