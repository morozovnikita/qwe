<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);








// 1.Connect to DB

$pdo = new PDO("mysql:host=localhost;dbname=taskmanager" , "root" , "pass");

// 2.Prepare statement
$sql = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$result = $statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<table class="table">
	    			<h1>All tasks</h1>
	    			<a href="create.php" class="btn btn-success">Add tasks</a>
	    			<thead>
	    				<tr>
	    					<th>ID</th>
	    					<th>Title</th>
	    					<th>Actions</th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				<?php foreach($tasks as $task): ?>
	    				<tr>
	    					<td><?=$task['id'];?></td>
	    					<td><?=$task['title'];?></td>
	    					<td>
	    						<a href="#" class="btn btn-warning">Edit</a>
	    						<a href="#" class="btn btn-danger">Delete</a>
	    					</td>
	    				</tr>
	    				<?php endforeach; ?>
	    			</tbody>
    			</table>
    		</div>
    	</div>
    </div>
  </body>
</html>