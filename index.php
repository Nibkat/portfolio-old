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

    <div class="container">
        <div class="row">
        <a href="javascript:void(0)" onclick="$('#tag-filter-list').slideToggle();">Hide</a>
            <div id="tag-filter-list" class="list-group">
                
            </div>
        </div>
    </div>

    <br>

    <?php
        require_once("php/projects.php");
    ?>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>