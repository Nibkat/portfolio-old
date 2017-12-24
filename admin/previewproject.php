<?php

    $title = $_POST["title"];
    $description = $_POST["description"];
    $tags = $_POST["tags"];
    $image = $_POST["image"];

    $buttons = $_POST["buttons"];

    $password = $_POST["password"];
    $correct_password = "spar";

    echo "<div class='container'>
    <div class='row'>
        <div class='col-md-6'>
            <h1>$title</h1>
            <div>";
            
            sort($tags);

            foreach($tags as $tag) {
                echo "<kbd class='tag'>$tag</kbd> ";
            }
            
            echo
            "</div><br>
            <div class='btn-group'>";

                foreach($buttons as $button) {
                    $text = $button['text'];
                    $href = $button['href'];
                    $icon = $button['icon'];

                    echo "
                        <a href='$href' type='button' class='btn btn-primary'>
                            <i class='fa fa-lg fa-$icon fa-fw' aria-hidden='true'></i>&nbsp; $text
                        </a>
                    ";
                }

            echo "</div>

            <br>
            <br>

            <p>$description</p>

    </div>

    <div class='col-md-6 text-center'>
        <img src='$image' style='width: 100%' alt='project image'>
    </div>

    <div class='col-md-12'>
        <br>
    </div>
</div>
<hr>
</div>";

?>