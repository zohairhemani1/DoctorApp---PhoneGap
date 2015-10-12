<html>
   
   <head>
      <title>Sending Results</title>
   </head>
   
      
     <?php
/*echo"text";
echo"aca<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone</th>
<th>Address</th>
</tr>
<tr>
<td>"+$_GET['first_name']+"</td>
<td>"+$_GET['last_name']+"</td>
<td>"+$_GET['phone']+"</td>
<td>"+$_GET['address']+"</td>
</tr>
</table>";

*/

$to = "webmaster@doctorvisit247.com";//webmaster@doctorvisit247.com,
$subject = "HTML email";
 /*
$message = "<html><head><title>Email</title></head><body><p>APP VISIT REQUEST</p><table><tr><th>First Name</th><th>Last Name</th><th>Phone</th>";
$message .="<th>Address</th><th>Unit/Apt/Suite</th><th>Street</th><th>City</th><th>Zipcode</th><th>Directions</th><th>next_step</th></tr><tr><td>".$_GET['first_name']."</td><td>".$_GET['last_name']."</td><td>".$_GET['phone']."</td>";
$message .="<td>".$_GET['address']."</td></tr></table></body></html>";
*/
$message = "<html><head><title>Email</title></head><body><p>Web Responses!</p>";
$message .="First Name : ".$_GET['first_name']."<br>";
$message .="Last Name : ".$_GET['last_name']."<br>";
$message .="Phone : ".$_GET['phone']."<br>";
$message .="Current Address : ".$_GET['address']."<br>";
$message .="Street : ".$_GET['street']."<br>";
$message .="Unit/Apt/Suite : ".$_GET['unit']."<br>";
$message .="City : ".$_GET['city']."<br>";
$message .="Zipcode : ".$_GET['zipcode']."<br>";
$message .="Directions : ".$_GET['directions']."<br>";







// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@doctorvisit247.com>' . "\r\n";
echo $message;
$retval=mail($to,$subject,$message,$headers);

    if( $retval)
         {
            echo "Message sent successfully...";
         }
         else
         {
            echo "Message could not be sent...";
         }

?>


</html>

