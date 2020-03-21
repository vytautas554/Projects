<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../../../libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="../css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Prisijungti</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label for=""> Vartotojo vardas</label>
                            <input type="text" name="vartotojas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Jusu slaptazodis</label>
                            <input type="text" name="slaptazodis" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Prisijungti </button>

                    </form>
                </div>
                <!-- <div class="col-md-6">
                    <h2>Registruotis</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for=""> Vartotojo vardas</label>
                            <input type="text" name="vartotojas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Jusu slaptazodis</label>
                            <input type="text" name="slaptazodis" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Registruotis </button>

                    </form>
                </div>
            </div> -->
        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="../libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="../master.js"></script>

    </body>
</html>
