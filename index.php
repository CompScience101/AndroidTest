<?php
    // Purpose: built as hello world for OOP in PHP, test on Openshift.
    // reference: https://stackoverflow.com/questions/20603992/object-oriented-php-class-simple-example

    include_once("php_class_object.php");
    //$name = $_POST['name'];   //add name attribute to input tag in HTML
    $name = "testing phpinfo";
    $myName = new Name();
    $myName->enterName($name); //to save in database/
    $name=$myName->showName(); //to retrieve from database. 
    print($name);
    
    // Show all information, defaults to INFO_ALL
    phpinfo();
    //Communicate with Database
    $servername = getenv("HOSTNAME"); //mysql, android-test-53-wn9xb, getenv(MYSQL_PORT_3306_TCP_ADDR) //ip address
    $username = "my_admin";
    $password = "iversoncarter153";//root
    $dbname = "AndroidTestDB";
    $port = getenv("MYSQL_SERVICE_PORT_MYSQL");// default= "3306"

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
?>
