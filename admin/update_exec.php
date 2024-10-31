<?php 
ini_set('display_errors', 1);
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");
extract($_POST);
$params = [$candidatename,$candidategender,$candidatemobile,$candidatecode,$candidateid];
echo (new Model)->updateCandidateDetails($params);
