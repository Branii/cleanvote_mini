<?php 
require_once("../app/database/Database.php");
require_once("../app/model/Helper.php");
require_once("../app/model/Model.php");
extract($_POST);
echo (new Model)->deleteCandidate($NewCandidateId) == 1 ? 'success' : 'failed';

