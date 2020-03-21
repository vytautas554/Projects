<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="../../css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>
        <a href="../../index.php" class="btn btn-info"> Atsijungti </a>
        <h2>POM POM gaminiai</h2><br />
        <?php include_once 'navSG.php' ?>
        <?php require_once 'process2.php'; ?>

        <?php
        if (isset ($_SESSION['message'])): ?>
        <div class="container alert alert-<?=$_SESSION['msg_type']?>">
            <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
             ?>
        </div>
        <?php endif ?>

    <div class="container">
        <?php
        $mysqli = new mysqli('localhost', 'root', 'root', 'sapnu_gaudykles') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM pom") or die($mysqli->error);
        // pre_r($result);
        // pre_r($result->fetch_assoc());?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Dydis</th>
                        <th>Kaina</th>
                        <th>Aprasymas</th>
                        <th colspan="3">Pakeitimai</th>
                    </tr>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php  echo $row['dydis']; ?></td>
                    <td><?php  echo $row['kaina']; ?></td>
                    <td><?php  echo $row['aprasymas']; ?></td>
                    <td>
                        <a href="pom.php?Keisti=<?php echo $row['id']; ?>"
                        class="btn btn-info"> Keisti </a>
                        <a href="process2.php?Istrinti=<?php echo $row['id']; ?>"
                        class="btn btn-danger"> Istrinti </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </table>
        </div>

        <?php
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }?>


        <div class="row justify-content-center">
            <form class="" action="process2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label> Dydis </label>
                    <input type="text" name="dydis" class="form-control" value="<?php echo $dydis; ?>" placeholder="Iveskite dydi">
                </div>
                <div class="form-group">
                    <label> Kaina </label>
                    <input type="text" name="kaina" class="form-control" value="<?php echo $kaina; ?>" placeholder="Iveskite kaina">
                </div>
                <div class="form-group">
                    <label> Aprasymas </label>
                    <input type="text" name="aprasymas" class="form-control" value="<?php echo $aprasymas; ?>" placeholder="Iveskite aprasyma">
                </div>
                <div class="form-group">
                    <?php if ($update == true): ?>
                        <button type="submit" class="btn btn-info" name="pakeisti">Pakeisti</button>
                    <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="issaugoti">Issaugoti</button>
                <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="../../libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="../../libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
