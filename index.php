<?php
    // Purpose: built as hello world for mysql connection on Openshift, for OOP in PHP, test on Openshift.
    // reference: https://www.w3schools.com/php/func_mysqli_connect.asp
    // reference: https://developers.openshift.com/managing-your-applications/environment-variables.html
    // reference: http://php.net/manual/en/function.phpinfo.php
    // PHP class filename: index.php

    include_once("php_class_object.php");
    //$name = $_POST['name'];   //add name attribute to input tag in HTML
    $name = "testing mysql://mysql";
    $myName = new Name();
    $myName->enterName($name); //to save in database/
    $name=$myName->showName(); //to retrieve from database. 
    print($name);
    
    //Communicate with Database
    $servername = "mysql://mysql"; //mysql, 172.30.172.210, jdbc:mysql://mysql:3306/,android-test-53-wn9xb, getenv(MYSQL_PORT_3306_TCP_ADDR) //ip address, getenv("HOSTNAME") //ip address
    $username = "my_admin";
    $password = "iversoncarter153";//root
    $dbname = "AndroidTestDB";
    $port = getenv("MYSQL_SERVICE_PORT_MYSQL");// default= "3306"
    echo "servername:".$servername.", username:".$username.", password:".$password.", dbname:".$dbname.", port:".$port;
    // Create connection
//    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
    // Check connection
    //if (!$conn) {
      //  die("Connection failed: " . mysqli_connect_error());
    //}
    echo "Connected successfully";
    
    // Show all information, defaults to INFO_ALL
    phpinfo();
?>
