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

    <!--<button style="position: fixed; bottom: 0; right: 25px; border-radius: 4px 4px 0px 0px; z-index: 99" type="button" class="btn btn-lg"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>-->

    <?php
        class Project {
            public $name;
            public $description;
            public $image;
            public $github;
            public $url;

            function __construct($name, $description, $image, $github, $url) {
                $this->name = $name;
                $this->description = $description;
                $this->image = $image;
                $this->github = $github;
                $this->url = $url;
            }
        }

        $projects = array(
            new Project("Discord animate",
            "Discord animate is a project made with C# and the <a href='https://github.com/RogueException/Discord.Net' target='_blank'>Discord.Net</a> API wrapper, it animates messages within Discord by editing them at a set interval. This project was made to learn more about the Discord API and just for fun.",
            "https://i.imgur.com/yjh7QWE.png", "https://github.com/LtKst/discord-animate", "http://ltkst.net/discordanimate/")
        );

        foreach($projects as $project) {
            echo "<div class='container'>
                    <div class='row'>
                        <div class='col-md-8'>
                            <h1>$project->name
                                <a href='$project->github'><i style='color: #333; font-size: 1em;' class='fa fa-github'></i></a><a href='$project->url'><i style='color: #333; font-size: 1em;' class='fa fa-globe'></i></a>
                            </h1>
                            <p>$project->description</p>
                        </div>
                        <div class='col-md-4 text-center'>
                            <img src='$project->image' width='300' alt='project image'>
                        </div>
                    </div>
                
                    <hr>
                </div>";
        }
    ?>

    <?php
        for ($i = 0; $i <= 5; $i++) {
            include("html/projects.html");
        }
    ?>
    
    <?php
        include('html/footer.html');
        include('html/scripts.html');
    ?>

</body>

</html>