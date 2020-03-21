<?php include('index-header.php') ?>

        <div class="container">
            <header class="row bg-info d-flex justify-content-center">
                <?php include('nav.php') ?>
                <h1> Kombinuotos sapnu gaudykles </h1>
            </header>

            <section class="row bg-info mt-2 ">

                <?php
                include ('controllers/kombinuotos_sg.php');
                $visosSG = getSGS();
                // is Mysqli objekto paima viena eilute ir pavercia i array:
                $SG = mysqli_fetch_assoc($visosSG);
                //-------------
                while($SG ){?>
                    <section class="col-md-3 pt-3">
                    <?php echo "<img src='{$SG['foto']}' width='200px' height='200px'>";?>
                    <?php echo "<h3>". "<br>". $SG['dydis']."<br>".
                    $SG['kaina']."<br>". $SG['aprasymas']."</h3>";?>
                    </section>
                    <?php $SG = mysqli_fetch_assoc($visosSG);
                }?>
            </section>

<?php include('index-footer.php') ?>
