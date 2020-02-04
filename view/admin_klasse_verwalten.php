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
    <main class="text-center">
        <div class="text-center d-flex justify-content-center title">
            <h3>Klassenverwaltung</h3>
        </div>
        <div class="d-flex justify-content-center" style="padding-top: 5%;padding-bottom: 5%;">
            <form class="text-center justify-content-center align-items-center align-content-center align-self-center" style="width: 300px;"><button class="btn btn-primary btn-menu" id="btnClassNew" onclick="newClass()" type="button" style="width: 200px;margin: 0px;margin-right: 0px;padding-right: 12px;height: 38px;margin-bottom: 20px;"><strong>Neuanlegen</strong></button><button class="btn btn-primary btn-menu"
                    id="btnClassEdit" onclick="Bearbeiten()" type="button" style="width: 200px;margin-bottom: 20px;"><strong>Bearbeiten</strong></button><button class="btn btn-primary btn-menu" id="btnClassDel" onclick="del()" type="button" style="width: 200px;margin-bottom: 20px;"><strong>LĂ¶schen</strong></button></form>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- AJAX mit PHP Integration -->
    <script type="text/javascript" src="../js/klassenMenu.js"></script>
</body>

</html>