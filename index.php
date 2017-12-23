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
        <h1>Koen Sparreboom's portfolio <span class="emoji">🌲</span></h1>
        <h2 id="headTitle">Home <span class="emoji">🏠</span></h2>
    </div>

    <!--<button style="position: fixed; bottom: 0; right: 25px; border-radius: 4px 4px 0px 0px; z-index: 99" type="button" class="btn btn-lg"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>-->

    <?php
        require_once("php/projects.php");
    ?>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>