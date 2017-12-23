<!DOCTYPE html>
<html lang="en">

<?php
    include "../html/head.html";
?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Add a project</h1>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="Project title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" rows="5" id="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, quod res alia tota est? Quod vestri non item. Tanta vis admonitionis inest in locis; Duo Reges: constructio interrete. Nihil illinc huc pervenit. Dici enim nihil potest verius. Negare non possum. Praeclare hoc quidem. Tibi hoc incredibile, quod beatissimum. Quae sequuntur igitur? Sed haec omittamus; Haeret in salebra. Beatus sibi videtur esse moriens. Ut optime, secundum naturam affectum esse possit. Negare non possum. Sint modo partes vitae beatae. Comprehensum, quod cognitum non habet? Erat enim Polemonis. Et quidem, inquit, vehementer errat; Quare attende, quaeso.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Image" value="https://placeimg.com/500/260/any">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">GitHub</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="GitHub" value="https://github.com/LtKst/">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">URL</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="URL" value="http://ltkst.net/">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr>
                </div>

                <div class="col-sm">
                    <h1>Preview</h1>
                    <hr>
                    <div class='container' style="margin: 1em; padding: 1em; border: 2px solid black;">
                        <div class='row'>
                            <div class='col-md-5'>
                                <h1>Angry Birds</h1>
                                <div class='btn-group'>
                                    <a href='https://github.com/LtKst/angry-birds' type='button' class='btn btn-primary'>
                                        <i class='fa fa-lg fa-github fa-fw' aria-hidden='true'></i>&nbsp; Github
                                    </a>
                                    <a href='http://22084.hosts.ma-cloud.nl/bewijzenmap/p2.2/idp/angry-birds/' type='button' class='btn btn-primary'>
                                        <i class='fa fa-lg fa-globe fa-fw' aria-hidden='true'></i>&nbsp; Website
                                    </a>
                                </div>
                                <br>
                                <br>
                                <p>$project->description</p>
                            </div>
                            <div class='col-md-7 text-center'>
                                <img src='https://i.imgur.com/NUyGWi2.gif' style="width: 100%" alt='project image'>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <p>
                                    <kbd>C#</kbd>
                                    <kbd>Unity</kbd>
                                    <kbd>2D</kbd>
                                    <kbd>School assignment</kbd>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </body>

</html>