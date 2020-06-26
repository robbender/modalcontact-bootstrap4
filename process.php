<?php
$myemail = 'hello@robertbender.net';
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<stong>Name:</strong> ".$name."<br>";
echo "<stong>Email:</strong> ".$email."<br>";
echo "<stong>Message:</strong> ".$message."<br>";


$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n\r ".
"Email: $email\n Message:\n\r $message";
$headers = "From: $myemail\n\r";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}?>
