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
        <h2 id="headTitle">Home</h2>
    </div>

    <?php
        for ($i = 0; $i <= 20; $i++) {
            include("html/projects.html");
        }
    ?>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>