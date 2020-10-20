<?php

//$template = $twig->loadTemplate('registration.view.php');
$template = $twig->loadTemplate('registration.html');

$title = 'Ресгистрация';

echo $template->render([
    'title'     => $title,
]);