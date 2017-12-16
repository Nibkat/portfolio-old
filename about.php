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
        <h2 id="headTitle">About</h2>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <?php
                    include("html/loripsum.html");
                ?>
                <br>
            </div>
        </div>
    </div>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>