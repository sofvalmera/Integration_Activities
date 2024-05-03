<?php

include_once (__DIR__ . '/../controller/usercontroller.php');
header('Content-Type: application/json');

// $search = $_GET;
$searchusers = new UserController();
$searchdata = $searchusers->searchusers($_GET);
echo json_encode($searchdata);
?>
