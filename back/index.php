<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$friends = [
    ["name" => "Amr", "age" => 20],
		["name" => "Ahmed", "age" => 21],
		["name" => "Mohamed", "age" => 22],
		["name" => "Ahmed", "age" => 23]
	];

echo json_encode($friends);
?>
