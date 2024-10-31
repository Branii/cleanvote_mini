<?php 

class PayStacker {

    public static function iniTializePaystackPayment(array $fields) {
        $ch = curl_init();
        $privateKey = file_get_contents(__DIR__ . '/Privatekey.pem');
        $fields_string = http_build_query($fields);
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL,  "https://api.paystack.co/transaction/initialize");
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Authorization: Bearer $privateKey",
          "Cache-Control: no-cache",
        ));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($ch);
        return $result;
    }

    public static function verifyPaystackTransaction($transactionReference) {
        $ch = curl_init();
        $privateKey = file_get_contents(__DIR__ . '/Privatekey.pem');
        curl_setopt($ch, CURLOPT_URL,"https://api.paystack.co/transaction/verify/" . $transactionReference);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $privateKey",
            "Content-Type: application/json"
        ]);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            return $data;
        }
        curl_close($ch);
    }

}