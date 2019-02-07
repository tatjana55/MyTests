<?php

$db = new PDO("mysql:host=localhost;dbname=TestPHP","root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
  $queryStr = "INSERT INTO Goods (name, price, comment) VALUES ('tatjana',  '25' , 'gut'),('sveta',  '2305' , 'guut') ";
  $db->query($queryStr);
}catch (PDOException $e){
    echo $e->getMessage();

} 
    