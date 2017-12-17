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
                <h1>Koen Sparreboom's portfolio
                    <span class="emoji">🌲</span>
                </h1>
                <h2 id="headTitle">About
                    <span class="emoji">💬</span>
                </h2>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-circle" width="200" src="https://dizivizi.com/mbb/imgs/site/default_user.png" alt="me_irl">
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <p class="about-me">Hello! I'm Koen Sparreboom, I'm 17 years old, born on the 9th of February in 2000, I'm from
                            <a class="link" href="https://www.google.nl/maps/place/Strekel,+Oostzaan/@52.4341585,4.8688501,17.01z/data=!4m5!3m4!1s0x47c5fd530c911feb:0x3a366bce8e4492f1!8m2!3d52.4341472!4d4.871041"
                                target="_blank" title="Location on Google maps">Oostzaan, the Netherlands</a>.
                            <br>
                            <br> My passion is programming for multiple reasons one of which is the sense of improvement since
                            there's always something new to learn whether it's a new language, a new API, a new concept or
                            so much more. My strongest points as of right now are Unity with C#, Java, JavaScript &#38; C++
                            and in teams we use SCRUM.
                            <br>
                            <br>In my freetime I like to talk with people, improve my programming by looking up documentations
                            and trying new things, I play games like Super Mario and Counter Strike and I play guitar.</p>
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