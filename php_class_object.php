<?php
    // Purpose: built as hello world for OOP in PHP, test on Openshift.
    // reference: https://stackoverflow.com/questions/20603992/object-oriented-php-class-simple-example
    // PHP class filename: php_class_object.php

class info
{
    private $server_support = '';
    private $host = '';
    private $port = '';
    private $auth = '';
    //public function __construct(){
       // my_init();
    //}
    public function myInit(){
        $this->server_support = '<UHC_Tech_Supprt@gmail.com>';
        $this->host = 'ssl://smtp.gmail.com';
        $this->port = '465';
        $this->auth = true;
    }
    public function enterName($TName)
    {
        //$this->name = $TName.".Stored";//del
        /**
        Put your database code here.
        **/
    }
}
?>
