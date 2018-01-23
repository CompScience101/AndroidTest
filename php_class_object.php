<?php
    // Purpose: built as hello world for OOP in PHP, test on Openshift.
    // reference: https://stackoverflow.com/questions/20603992/object-oriented-php-class-simple-example
    // PHP class filename: php_class_object.php

class Name
{
    public $name;
    public function showName()
    {
        /**
        Put your database code here to extract from database.
        **/
        return($this->name);
    }
    public function enterName($TName)
    {
        $this->name = $TName.".Stored";
        /**
        Put your database code here.
        **/
    }
}
?>
