<!DOCTYPE html>
<html lang="en">

<?php
    include "html/head.html";
?>

<body>
    <?php
        include('html/navbar.html');
    ?>

    <div class="jumbotron text-center" style="margin-top: 50px;">
        <h1>Koen Sparreboom's portfolio</h1>
        <h2 id="headTitle">Skills</h2>
    </div>

    <div class="container">
        <div class="row">
            <?php

                for ($i = 0; $i < 25; $i++) {
                    $rnd = rand(10, 100);

                    echo "<div class='col-sm-4'>
                    <h3>Column $i</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    <div class='progress'>
                        <div class='progress-bar' role='progressbar' aria-valuenow='$rnd' aria-valuemin='0' aria-valuemax='100' style='width:$rnd%'>
                            $rnd%
                        </div>
                    </div>
                </div>";
                }

            ?>
        </div>
        <br>
    </div>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>