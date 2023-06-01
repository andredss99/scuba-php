<?php

function renderView($template) {
    $content = file_get_contents(VIEW_FOLDER . $template . '.view');
    echo $content;
}