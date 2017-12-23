<?php
    $json_content=file_get_contents("json/projects.json");
    $json=json_decode($json_content);
    
    foreach($json->projects as $project) {
        echo
            "<div class='container'>
                <div class='row'>
                    <div class='col-md-6'>
                        <h1>$project->title</h1>
                        <p>";
                        
                        foreach($project->tags as $tag) {
                            echo "<kbd>$tag</kbd> ";
                        }
                        
                        echo
                        "</p>
                        <div class='btn-group'>";

                            foreach($project->buttons as $button) {
                                echo "
                                    <a href='$button->href' type='button' class='btn btn-primary'>
                                        <i class='fa fa-lg fa-$button->icon fa-fw' aria-hidden='true'></i>&nbsp; $button->text
                                    </a>
                                ";
                            }

                        echo "</div>

                        <br>
                        <br>

                        <p>$project->description</p>

                </div>

                <div class='col-md-6 text-center'>
                    <img src='$project->image' style='width: 100%' alt='project image'>
                </div>

                <div class='col-md-12'>
                    <br>
                </div>
            </div>
            <hr>
        </div>";
    }
?>