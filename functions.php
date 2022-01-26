<?php
$sections =[];
$page_content = renderTemplate('templates/index.php', [section=>$sections]);
$layout_content = renderTemplate('templates/layot.php', ['content'=>$page_content, 'title'=>'Главная']);
print($layout_content);

function inclideTemplate($template, $array_data = []){
    $template = 'templates' . $template;

    if(!file_exists($template)){
        return '';
    }

    extract($array_data);

    ob_start();

    require_once($template);

    $html_template = ob_get_clean();

    return $html_template;
}
