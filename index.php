<?php
/**
 * User: "Nikita Korkuts"
 * Date: "04.01.2022"
 * Time: "23:32"
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ToDo List</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<form action="handler.php" method="post">
		<div class="todo-add input-group mb-3">
			<input name="task_name" type="text" class="todo-add_input form-control" placeholder="Enter a task" aria-label="Recipient's username" aria-describedby="button-addon2">
		  	<button class="todo-add_btn btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>	
		</div>
	</form>
	<div class="todo-list">
		<?php require('tasks.php');?>
	</div>
</body>
</html>