<?php
    include "generate_project.php";

    $json_content = file_get_contents("json/projects.json");
    $json = json_decode($json_content);
    
    foreach($json->projects as $project) {
        echo generate_project($project->title, $project->tags, $project->buttons, $project->description, $project->image);
    }
?>