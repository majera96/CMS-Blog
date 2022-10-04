<?php

try {

$host = 'localhost';
$dbname = 'cleanblog';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname,$user,$pass");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo $e->getMessage();
}

/* if($conn == true){
    echo 'Connection works fine';
} else {
    echo 'Connection error';
} */