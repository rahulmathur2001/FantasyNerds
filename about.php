<php?
$visitor=$_POST['email']

$email_from='gamersgates20001@gmail.com'
$email_subject="New Subs"
$email_body="User Email:$visitor.\n". 

$to="rahulmathurjuly@gmail.com"             
$headers="from:$email_from\r\n";
$headers="reply-to:$visitor_Email\r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location:about.html");
?>

