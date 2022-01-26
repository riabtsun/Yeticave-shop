<?php
$sections =[];
$page_content = renderTemplate('templates/index.php', [section=>$sections]);
$layout_content = renderTemplate('templates/layot.php', ['content'=>$page_content, 'title'=>'Главная']);
print($layout_content);

