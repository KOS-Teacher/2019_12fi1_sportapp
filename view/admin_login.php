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
            <h3>Sporttag</h3>
            <h3>Klara-Oppenheimer-Schule</h3>
            <h3>- Lehrer</h3>
        </div>
        <div role="tablist" id="accordion-1">
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0" style="text-align: center;"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Station</a></h5>
                </div>
                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <div class="d-flex justify-content-center" style="height: 40%;padding-top: 5%;padding-bottom: 5%;">
                             <form style="text-align: center;max-height: 100%;">
                                <select id="cboStation" class="dropdown-item" >
                                    <option value="none" selected disabled hidden>Station auswählen</option> 
                                </select>
                                <input class="form-control d-flex justify-content-center" type="password" id="txtPasswort" placeholder="Passwort"><button class="btn btn-green" id="btnLoginLehrer" onclick="loginLehrer()" type="button" style="margin-top: 20%;width: 125px;">Login</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0" style="text-align: center;"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Admin</a></h5>
                </div>
                <div class="collapse show item-2" role="tabpanel" data-parent="#accordion-1">
                    <div class="card-body">
                        <div class="d-flex justify-content-center" style="height: 40%;padding-top: 5%;padding-bottom: 5%;">
                            <form style="text-align: center;max-height: 100%;"><input class="form-control d-flex justify-content-center" type="password" id="txtAdminPasswort" placeholder="Passwort"><button class="btn btn-green" id="btnLoginAdmin" onclick="loginAdmin()"  type="button" style="margin-top: 20%;width: 125px;">Login</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- AJAX mit PHP Integration -->
        <script type="text/javascript" src="../js/loginAdmin.js"></script>
</body>

</html>