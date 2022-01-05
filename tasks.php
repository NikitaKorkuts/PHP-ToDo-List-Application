<?php
/**
 * User: "Nikita Korkuts"
 * Date: "05.01.2022"
 * Time: "14:44"
 */

require('functions.php');
$tasks = getTasks('todo.json');

for($i=0; $i < count($tasks); $i++) { 					
?>
<div class="todo-task">
	<?php if($tasks[$i]['is_done'] == true){?>
		<span class="done todo-task_name"><?php echo($tasks[$i]['task']); ?></span>
		<form action="handler.php" method="post">
			<input class="none" name="deleteBtn_id" value="<?php echo($tasks[$i]['id']);?>">
			<input value="Delete" type="submit" class="todo-task_deleteBtn btn btn-danger">
		</form>
	<?php } else { ?>
		<span class="todo-task_name"><?php echo($tasks[$i]['task']); ?></span>
		<form action="handler.php" method="post">
			<input class="none" name="doneBtn_id" value="<?php echo($tasks[$i]['id']);?>">
			<input value="Done" type="submit" class="todo-task_doneBtn btn btn-success">
		</form>
		<form action="handler.php" method="post">
			<input class="none" name="deleteBtn_id" value="<?php echo($tasks[$i]['id']);?>">
			<input value="Delete" type="submit" class="todo-task_deleteBtn btn btn-danger">
		</form>
	<?php }?>

</div>
<?php

}

?>

