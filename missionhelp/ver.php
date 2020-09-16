<?php
$servername = "localhost";
$username = "id10238529_koushikdb";
$password = "koushik";
$dbname = "id10238529_betinfo";
$name=$_POST['name'];
$amount=$_POST['amount'];
$pho=$_POST['phone'];
$email=$_POST['email'];
$purpose="mission help donation";
include "Instamojo.php";
$api = new Instamojo\Instamojo('77add71dd88e93406b19de1172fcbe19','68f20ef4419ca5c6fccf2024a671b0fa', 'https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "send_email" => true ,
        "email" => $email,
        "phone" => $pho,
        "send_sms" => true ,
        "buyer_name" => $name,
        "redirect_url" => 'http://sucess.html'
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}