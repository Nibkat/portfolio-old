<?php
    function generate_project($title, $tags, $buttons, $description, $image) {
        $tags_final = "";
        $buttons_final = "";

        sort($tags);
        
        foreach($tags as $tag) {
            $tags_final .= "<a href='javascript:void(0)' onclick='selectTag(" . '"' . $tag . '"' . ")'><kbd class='tag'>$tag</kbd></a> ";
        }

        foreach($buttons as $button) {
            $buttons_final .= "<a href='$button->href' type='button' class='btn btn-primary'><i class='fa fa-lg fa-$button->icon fa-fw' aria-hidden='true'></i>&nbsp; $button->text</a>";
        }

        return
            "<div class='container project'>
                <div class='row'>
                    <div class='col-md-6'>
                        <h1 class='project-title'>$title</h1>

                        <div>$tags_final</div>

                        <br>

                        <div class='btn-group'>$buttons_final</div>

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
    }
?>