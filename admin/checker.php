<?php 
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");
$email = $_POST['email'];
$password = $_POST['password'];
echo (new Model)->check_password($email, $password);
