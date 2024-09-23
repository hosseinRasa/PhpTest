<?php
require_once 'Db.php';
class User extends Db{
    public $tableName = "rasa";

 
}


$user = new User();
echo $user -> all();