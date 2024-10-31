<?php 
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");

extract($_POST);
$folder = "../public/assets/imgs/candidate/";
$filelocation = $_FILES['myfile']['tmp_name'];
$filename = $_FILES['myfile']['name'];

if(move_uploaded_file($filelocation,$folder.$filename)){ 
    $link = "https://host/domain/code/" . $code;
    $params = [$name,$gender,$mobile,$filename,$code,$link,0,0,date("Y-m-d")];

   echo (new Model)->addNewCandidate($params) == 1 ? 'success' : 'failed';

}else{

  return "File upload failed";

}
