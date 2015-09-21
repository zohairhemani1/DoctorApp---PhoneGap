<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
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

$to = "gul_hamza@yahoo.com,zohairhemani@avialdo.com";//webmaster@doctorvisit247.com,
$subject = "HTML email";
 /*
$message = "<html><head><title>Email</title></head><body><p>Web Responses!</p><table><tr><th>Firstname</th><th>Lastname</th><th>Phone</th>";
$message .="<th>Address</th><th>unit</th><th>street</th><th>city</th><th>zipcode</th><th>directions</th><th>next_step</th></tr><tr><td>".$_GET['first_name']."</td><td>".$_GET['last_name']."</td><td>".$_GET['phone']."</td>";
$message .="<td>".$_GET['address']."</td></tr></table></body></html>";
*/
$message = "<html><head><title>Email</title></head><body><p>Web Responses!</p>";
$message .="Firstname : ".$_GET['first_name']."<br>";
$message .="Lastname : ".$_GET['last_name']."<br>";
$message .="Phone : ".$_GET['phone']."<br>";
$message .=" Current Address : ".$_GET['address']."<br>";
$message .="unit : ".$_GET['unit']."<br>";
$message .="street : ".$_GET['street']."<br>";
$message .="city : ".$_GET['city']."<br>";
$message .="zipcode : ".$_GET['zipcode']."<br>";
$message .="directions : ".$_GET['directions']."<br>";







// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <doctorapp@fajjemobile.info>' . "\r\n";
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

