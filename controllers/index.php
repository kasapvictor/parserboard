<?php

//$template = $twig->loadTemplate('index.view.php');
$template = $twig->loadTemplate('index.html');
$title = 'Главная';

echo $template->render([
    'title'     => $title,
]);

