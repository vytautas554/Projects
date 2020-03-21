<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <!-- MANO CSS visada pats zemiausias!!! -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <div class="container  bg-light">
        <?php include('nav.php') ?>
         <h1>Kontaktai</h1>

         <!-- uzduotis email.php faile patestuoti ar gaunat ivestu duomenis -->
         <form  action="controllers/email.php" method="post">
               <input type="text" name="vardas" placeholder="Jusu vardas"> <br>
               <input type="email" name="email" placeholder="Jusu email" required> <br>
               <input type="text" name="tema" placeholder="Tema"> <br>
               <textarea name="klausimas" rows="4" cols="40" placeholder="Jusu kausimas" required></textarea><br>

               <input type="submit" value="Klausti">
        </form>
    </div>




        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <!-- MANO JS pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
