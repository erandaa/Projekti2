<?php

$host = "localhost";
$databasename="lulishtja1";
$username = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$databasename";
 try{
     $databaseconnection= new PDO($dsn,$username,$password);
     echo "good";
 }catch(PDOException $error){
     echo $error;
 }