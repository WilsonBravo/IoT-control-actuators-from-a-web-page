<?php
    $server='localhost';
    $username='id18625872_kawidi';
    $password='c8c[UBtZyMhBOI+b';
    $database= 'id18625872_php_login_database';
  
    try{
        $conn=new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    } catch(PDOException $e){
        die('Connection failed:'.$e->getMessage());
    }

?>