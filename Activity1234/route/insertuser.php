<?php

include_once (__DIR__ . '/../controller/usercontroller.php');

$insertuser = new UserController();
$data = $insertuser->insertuser($_POST);
echo json_encode($data);
?>
