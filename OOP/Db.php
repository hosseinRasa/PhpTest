<?php
class Db{

    public $tableName   ;

    public function __construct( )
    {


    }

    public   function all()
    {

        return "SELECT * FROM {$this -> tableName}";
    }
}

