<?php 
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");

$results = (new Model)->getAllCandidates();
$TotalVotes = array_sum(array_column($results,"candidate_vote_count"));
$TotalCandidate = count(array_column($results,"candidate_name"));
$jsonData = [
   'target' => 10000,
   "votecount"=> $TotalVotes,
   "modeycount"=> $TotalVotes,
   "candidate"=> $TotalCandidate
];
echo json_encode($jsonData);