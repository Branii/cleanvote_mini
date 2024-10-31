<?php
require_once '../database/Database.php';
require_once '../model/Helper.php';
require_once '../model/Model.php';
require_once '../controller/Controller.php';
require_once '../core/Paystacker.php';

 extract($_POST);
 $uniqueId = uniqid();
 if((new Controller)->initPayment($_POST, $uniqueId )){

  $fields = [
    'email' => "customer@email.com",
    'amount' => $money * 100,
    'reference' => $uniqueId,
    'callback_url' => "https://3638-102-176-101-124.ngrok-free.app/cleanvote_mini/done.php",
    'metadata' => ["cancel_action" => "https://3638-102-176-101-124.ngrok-free.app/cleanvote_mini/"]
  ];
 
 echo (new Paystacker)->iniTializePaystackPayment($fields);

 }else{
  echo "Payment could not be initialized, please try again";
 }
 

?>