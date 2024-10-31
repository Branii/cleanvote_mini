<?php 
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");

$results = (new Model)->getElectionResult();
$votes = array_column($results,"candidate_vote_count");
$name = array_column($results,"candidate_name");
$jsonData = [
   "name"=> $name,
   "vote"=> $votes
];
echo json_encode($jsonData);