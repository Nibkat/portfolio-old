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
        <h2 id="headTitle">Contact <span class="emoji">📝</span></h2>
    </div>

    <div class="container-fluid" style="max-width: 1110px; padding: 0">
        <div class="col-md-12" style="margin: 0; padding: 0">
            <div class="form-area">
                <form role="form">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Feel free to email me!</h3>
                    <h4 style="margin-bottom: 25px; text-align: center;">Email will be sent to <a href="mailto:koensparreboom@gmail.com">koensparreboom@gmail.com</a></h4>
                    <hr style="border-top: 1px solid #c3c3c3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </span>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="500" rows="7"></textarea>
                        <span class="help-block">
                            <p id="characterLeft" class="help-block ">You have reached the limit</p>
                        </span>
                    </div>

                    <div id="emailInfo" class="alert alert-warning">
                        <strong>Warning!</strong> Emailing doesn't work yet lol.
                    </div>

                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Send</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>
    
</body>

</html>