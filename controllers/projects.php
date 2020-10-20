<?php

//$template = $twig->loadTemplate('projects.view.php');
$template = $twig->loadTemplate('projects.html');

$title = 'Список проектов';

echo $template->render([
    'title'     => $title,
]);
