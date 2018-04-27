<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Отлично');
$app->initLayout('Centered');
If(isset($_SESSION['name'])) {
  $msg=$app->add(['Message','Добро пожаловать, '.$_SESSION['name'].'!','type'=>'success','icon'=>'loading thumbs outline up']);
} else {
  $msg=$app->add(['Message','Вы не зарегистрировались!!!','icon'=>'loading warning sign']);
}
$button=$app->add(['Button', 'Выйти', 'teal']);
$button->link(['logout']);
