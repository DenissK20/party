<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['hach']);
header('Location: index.php');
