<?php
    // Purpose: built as hello world for OOP in PHP, test on Openshift.
    // reference: https://stackoverflow.com/questions/20603992/object-oriented-php-class-simple-example

    //include_once("php_class_object.php");
    //$name = $_POST['name'];   //add name attribute to input tag in HTML
    $name = "testing";
    $myName = new Name();
    $myName->enterName($name); //to save in database/
    $name=$myName->showName(); //to retrieve from database. 
    print($name);
    
?>
