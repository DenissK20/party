<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Ошибка');
$app->initLayout('Centered');
$msg=$app->add(['Message','Произошла ошибка!','type'=>'error','icon'=>'loading warning sign']);
$button=$app->add(['Button', 'Зарегистрироваться', 'teal']);
$button->link(['index']);
