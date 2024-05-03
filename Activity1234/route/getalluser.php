<?php

include_once (__DIR__ . '/../controller/usercontroller.php');
header('Content-Type: application/json');

$getallusers = new UserController();
$alldata = $getallusers->getallusers();
echo json_encode($alldata);
?>
