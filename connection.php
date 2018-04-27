<?php
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=main_db;host=localhost','root','');
class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('email');
    $this->addField('phone_number');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
    $this->addField('age');
  }
}
