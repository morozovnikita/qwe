<?php



$sql = "INSERT INTO tasks(title , content) VALUES (:title , :content)";

$pdo = new PDO("mysql:host=localhost;dbname=tasks" , "root" , "pass");
$statement = $pdo->prepare($sql);
$statement->bindParam(":title" , $_POST['title']);
$statement->bindParam(":content" , $_POST['content']);
$result = $statement->execute();


var_dump($result);