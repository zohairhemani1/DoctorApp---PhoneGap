
     <?php

require './sdk-php-master/autoload.php';


$message = "<html><head><title>Payment</title></head><body><p>Web Responses!</p>";
$message .="Firstname : ".$_POST['first_name']."<br>";
$message .="Lastname : ".$_POST['last_name']."<br>";
$message .="email : ".$_POST['email']."<br>";
$message .=" amount : ".$_POST['amount']."<br>";
$message .="cardnumber : ".$_POST['cardnumber']."<br>";
$message .="cvv : ".$_POST['cvv']."<br>";
$message .="cardexpiry : ".$_POST['cardexpiry']."<br>";





define("AUTHORIZENET_API_LOGIN_ID", "59sM2BnGDP");
define("AUTHORIZENET_TRANSACTION_KEY", "54x6rMG357SPmp9N");
define("AUTHORIZENET_SANDBOX", true);
$sale           = new AuthorizeNetAIM;
//$sale->amount   = $_POST['amount'];
$sale->amount   = 500;
$sale->card_num = $_POST['cardnumber'];
$sale->exp_date = $_POST['cardexpiry'];
$response = $sale->authorizeAndCapture();
//echo $message."<br>";
//var_dump($response);
//echo "<br>";
if ($response->approved) {
    $transaction_id = $response->transaction_id;
	echo $transaction_id."<br> Your Transaction has been completed Successfully";
}
else{
echo $response->response_reason_text;
}
// json_encode
?>

