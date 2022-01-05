<?php 

/**
 * User: "Nikita Korkuts"
 * Date: "05.01.2022"	
 * Time: "14:25"
 */

function getTasks($json_path){
	$json = file_get_contents($json_path);
  	$json = json_decode($json, true);
  	return $json;
}

function getTask($tasks, $id){
	for($i = 0; $i < count($tasks); $i++){
		if ($tasks[$i]['id'] == $id) {
			return $i;
		}
	}
}
