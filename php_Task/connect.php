<?php

//database_connection.php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="project";

// Create connection
$connect = new mysqli($servername, $username, $password);

// Create connection with database name
$connect = new mysqli($servername, $username, $password, $dbname);




?>