<?php 

class Controller extends Model {

    public static function paginateCandidate(mixed $currentPage, mixed $itemPerPa){
        parent::paginateCandidate($currentPage, $itemPerPa);
    }

    public static function getAllCandidates() : array {
        return parent::getAllCandidates();
    }

    public function getElectionResults() : array {
        return parent::getElectionResult();
    }

    public static function getCandidateById(string $candidateId){
        return parent::getCandidateById($candidateId);
    }

    public static function getCandidateByCode(string $candidateCode){
        return parent::getCandidateByCode($candidateCode);
    }

    public static function updateCandidateVoteCountAndMoney(string $candidateId, int $voteCount, float $amountReceived) : int{
        return parent::updateCandidateVoteCountAndMoney($candidateId,$voteCount,$amountReceived);
    }

    public static function initPayment(array $payload, string $paymentReference): int {
        return parent::initPayment($payload,$paymentReference);
    }

    public static function updatePaymentStatus(string $reference) : int  {
        return parent::updatePaymentStatus($reference);
    }

    public static function getPaymentInformationByReference(string $paymentReference) : array {
        return parent::getPaymentInformationByReference($paymentReference);
    }

}