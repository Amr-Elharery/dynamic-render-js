<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$friends = [
    ["name" => "Amr", "age" => 20],
		["name" => "Ahmed", "age" => 21],
		["name" => "Mohamed", "age" => 22],
		["name" => "Ahmed", "age" => 23]
	];
	
$response = [
    "status" => 200,
    "message" => "Data retrieved successfully",
    "data" => $friends
];

http_response_code(200);
echo json_encode($response);
?>
