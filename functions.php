<?php

date_default_timezone_set('Europe/Kiev');

function renderTemplate($template, $array_data = []){
    $template = 'templates' . $template;

    if(!file_exists($template)){
        return '';
    }

    ob_start();
    extract($array_data);

    require_once($template);

    $html_template = ob_get_clean();

    return $html_template;
}


