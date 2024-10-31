<?php 

class Model extends Helper{

    public function getAllCandidateWithPaging(mixed $page, mixed $limit): array|string{
        $startpoint = ($page * $limit) - $limit;
        $sql = "SELECT * FROM candidates ORDER BY candidate_id DESC LIMIT {$startpoint},{$limit}";
        $res = self::selectAll($sql);
        return $res;
    }


    public static function paginateCandidate(mixed $currentPage, mixed $itemPerPage) {

        $sql = "SELECT COUNT(*) as total FROM candidates";
        $res = self::selectAll($sql);
        $total = $res[0]['total'];
        $pages = ceil($total / $itemPerPage) ?? 1;

        $pagination = [
            'prev' => ($currentPage > 1) ? $currentPage - 1 : 1,
            'next' => ($currentPage < $pages) ? $currentPage + 1 : $pages,
            'pages' => []
        ];

        for ($i = 1; $i <= $pages; $i++) {
            $pagination['pages'][] = $i;
        }

        return $pagination;

    }

    public static function check_password(string $email, string $password){
        $sql = "SELECT * FROM admins WHERE email = ?";
        $result = self::selectOne($sql,[$email]);
        if($result && password_verify($password, $result["password"])){
            session_start();
            $_SESSION["email"] = $result["email"];
            return true;
        }
        return false;
    }

    public static function getAllCandidates() : array {
        $sql = "SELECT * FROM candidates ORDER BY candidate_id DESC";
        return self::selectAll($sql);
    }

    public static function addNewCandidate(array $data) : int {
        $sql = "INSERT INTO candidates(candidate_name,candidate_gender,candidate_mobile,candidate_image,candidate_code,
        candidate_link,candidate_vote_count,candidate_amount_recieved,datecreated)VALUES(?,?,?,?,?,?,?,?,?)";
        return self::insert($sql, $data);
    }

    public static function getCandidateById(string $candidateId) {
        $sql = "SELECT * FROM candidates WHERE candidate_id = ?";
        return self::selectAll($sql,[$candidateId]);
    }

    public static function getCandidateByCode(string $candidateCode) {
        $sql = "SELECT * FROM candidates WHERE candidate_code = ?";
        return self::selectOne($sql,[$candidateCode]);
    }

    public static function updateCandidateVoteCountAndMoney(string $candidateId, int $voteCount, float $amountReceived) : int {
        $sql = "UPDATE candidates SET cadidate_vote_count = cadidate_vote_count + ?,
        candidate_amount_recieved = candidate_amount_recieved + ? WHERE candidate_id = ?";
        return self::update($sql,[$voteCount,$amountReceived, $candidateId]);
    }

    public static function updateCandidateDetails(array $details) : int {
        $sql = "UPDATE candidates SET candidate_name = ?, candidate_gender = ?, candidate_mobile = ?, candidate_code = ?
        WHERE candidate_id = ?";
        return self::update($sql,$details);
    }

    public static function deleteCandidate(string $candidateId) : int {
        $sql = "DELETE FROM candidates WHERE candidate_id = ?";
        return self::delete($sql,[$candidateId]);
    }

    public static function getCandidateListCount() : int {
        $sql = "SELECT COUNT(*) AS total FROM candidates";
        return self::selectAll($sql)[0]['total'];
    }

    public static function initPayment(array $payload, string $paymentReference): int {
        $payload['paymentReference'] = $paymentReference;
        $payload['paymentStatus'] = 'Pending';
        $payload['dateCreated'] = date("Y-m-d");
        $sql = "INSERT INTO payments (candidate_id,candidate_name,amount_paid,payment_reference,payment_status,date_created)VALUES(?,?,?,?,?,?)";
        return self::insert($sql,array_values($payload));
    }

    public static function updatePaymentStatus(string $reference) : int {
        $sql = "UPDATE payments SET payment_status = ? WHERE payment_reference = ? AND payment_status = 'Pending'";
        return self::update($sql,['Paid',$reference]);
    }

    public static function getPaymentInformationByReference(string $paymentReference) : array {
        $sql = "SELECT candidate_id,amount_paid FROM payments WHERE payment_reference = ? AND payment_status = 'Paid' ";
        return self::selectAll($sql,[$paymentReference])[0] ?? [];;
    }

    public static function getElectionResult() {
        $sql = "SELECT candidate_id, candidate_name, candidate_vote_count FROM candidates";
        return self::selectAll($sql);
    }

}


