<?php
/**
 * User: "NikitaKorkuts"
 * Date: "05.01.2022"
 * Time: "13:52"
 */
require('functions.php');

$tasks = getTasks("todo.json");

if($_POST['task_name']){
	$newTask = new stdClass();

	$newTask->id = end($tasks)['id'] + 1;
	$newTask->task = $_POST['task_name'];
	$newTask->is_done = false;

	$tasks[] = $newTask;

	print_r($tasks);

	$newJson = json_encode($tasks);
	file_put_contents('todo.json', $newJson);
}

if($_POST['doneBtn_id']){
	$task = getTask($tasks, $_POST['doneBtn_id']);
	
	$tasks[$task]['is_done'] = true;

	$newJson = json_encode($tasks);
	file_put_contents('todo.json', $newJson);
}	

if($_POST['deleteBtn_id']){
	$task = getTask($tasks, $_POST['deleteBtn_id']);
	
	array_splice($tasks, $task, 1);

	$newJson = json_encode($tasks);
	file_put_contents('todo.json', $newJson);
}

header('Location: index.php');

?>