<?php
require 'connection.php';

class App extends \atk4\ui\App{
    public $db;
    public $sms;
    function __construct($mode) {
       parent::__construct('Party');
       If ($mode == 'public') {
          $this->initLayout('Centered');
          $this->layout->template->del('Header');

          $logo = 'logo_image.jpg';

          $this->layout->add([
             'Header',
             '',
             'size'=>'huge',
             'aligned'=>'center'
           ],'Header');


           $this->layout->add(['Image', $logo, 'medium centered'], 'Header');

        }elseif($mode == 'admin') {
           $this->initLayout('Admin');
           $this->layout->leftMenu->addItem(['Main menu', 'icon'=>'home'], ['index']);
           $this->layout->leftMenu->addItem(['Admin', 'icon'=>'users'], ['admin']);
           $this->layout->leftMenu->addItem(['User', 'icon'=>'unordered list'], ['user']);
        }
       }
    }
