<?php

include 'template.php';

$template = new Template;

$template->assign('sometext', 'World');

$template->render('myTemplate');


?>