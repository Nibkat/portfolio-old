<?php
    include "../php/generate_project.php";

    $title = $_POST["title"];
    $description = $_POST["description"];
    $tags = $_POST["tags"];
    $image = $_POST["image"];

    $buttons = $_POST["buttons"];
    $buttons_final = array();

    foreach($buttons as $button) {
        $object = new stdClass();
        $object->text = $button['text'];
        $object->href = $button['href'];
        $object->icon = $button['icon'];

        var_dump($object);

        array_push($buttons_final, $object);
    }

    $password = $_POST["password"];
    $correct_password = "spar";

    echo generate_project($title, $tags, $buttons_final, $description, $image);
?>