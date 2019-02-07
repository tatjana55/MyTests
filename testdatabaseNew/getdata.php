<?php

$db = new PDO("mysql:host=localhost;dbname=TestPHP", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    
$queryStr = "SELECT * FROM  Goods";
$query = $db->prepare($queryStr);
$query->execute();
while ($row = $query->fetch()) {
    echo $row['id'] . ' - ' . $row['name'] . ' - ' .
            $row['price'] . ' - ' . $row['comment'];
    echo '<br>';
            
}
$query->closeCursor();

}catch (PDOException $e) {
    echo $e->getMessage();
    
}