<?php

//$template = $twig->loadTemplate('password.view.php');
$template = $twig->loadTemplate('password.html');

$title = 'Восстановление пароля';

echo $template->render([
    'title'     => $title,
]);