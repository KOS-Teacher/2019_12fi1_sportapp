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
    <main>
        <div class="title">
            <h3>Station bearbeiten</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form style="width: 300px;padding-top: 5%;padding-bottom: 5%;">




           
            
            
                             <form style="text-align: center;max-height: 100%;">
                                <select id="cboStation" class="dropdown-item" style="width: auto;margin-left: 59px;background-color: #f4b183;">
                                    <option value="none" selected disabled hidden>Station auswählen</option> 
                                </select>
                               
                           </form>
                           








                <!-- <div class="dropdown" style="height: auto;width: auto;margin-bottom: 117px;"> -->
                <!-- <button class="btn dropdown-toggle" id = "dropdown11" data-toggle="dropdown" aria-expanded="false" type="button" style="width: auto;margin-left: 59px;background-color: #f4b183;">Station auswählen</button> -->

                       <!-- <div class="dropdown-menu" id = "dropdown12" role="menu">
                       <a class="dropdown-item" role="presentation" href="#">Jonglieren</a>-->
                       <!--<a class="dropdown-item" role="presentation" href="#">Nähen</a>-->
                       
                <!-- </div>
                 -->
                
                </div>


                <div><button class="btn btn-primary btn-menu" id="btnNeu" onclick="admNeueStation()" type="button" style="width: 180px;padding-right: 8px;margin-right: 120px;margin-left: 550px;background-color: #f4b183;">Neue Station anlegen</button>
                
                
                
<<<<<<< HEAD
                <button class="btn btn-primary btn-menu" id="btnBearbeiten" onclick="admBearbeiten()" type="button" style="width: 100px;padding-right: 8px;margin-right: 0px;margin-left: 100px;background-color: #f4b183;">Bearbeiten</button></div>
=======
                <button class="btn btn-primary btn-menu" id="btnBearbeiten" onclick="admBearbeiten()" type="button" style="width: 100px;padding-right: 8px;margin-right: 0px;margin-left: 1px;background-color: #f4b183;">Bearbeiten</button></div>
>>>>>>> 7f8c16d8267a6dd3e6f53e19b3d7587ddb4b51b9
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