<?php

//$template = $twig->loadTemplate('project.view.php');
$template = $twig->loadTemplate('project.html');

$title = 'Проект {название}';

echo $template->render([
    'title'     => $title,
]);
