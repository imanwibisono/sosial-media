<?php

$db_host = "192.168.33.11";
$db_user = "devopscilsy";
$db_pass = "P@ssw0rd";
$db_name = "dbsosmed";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
