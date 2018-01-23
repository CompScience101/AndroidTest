<?php
    // Purpose: built as hello world for OOP in PHP, test on Openshift.
    // reference: https://stackoverflow.com/questions/20603992/object-oriented-php-class-simple-example

    include_once("php_class_object.php");
    //$name = $_POST['name'];   //add name attribute to input tag in HTML
    $name = "testing";
    $myName = new Name();
    $myName->enterName($name); //to save in database/
    $name=$myName->showName(); //to retrieve from database. 
    print($name);
    
    //Communicate with Database
    $servername = "mysql:3306/AndroidTestDB";
    $username = "my_admin";
    $password = "bicycle_car_crane";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
?>
