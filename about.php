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
        <h2 id="headTitle">About <span class="emoji">💬</span></h2>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <img class="img-circle" width="200" src="https://dizivizi.com/mbb/imgs/site/default_user.png" alt="me_irl">
            </div>
        </div>
        
        <hr>
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