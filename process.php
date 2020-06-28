<?php
$myemail = 'somebody@email.com';
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
$link_address = "index.html";

echo "<div class=\"alert alert-success\" ><strong>Your message has been received.</strong> \r\n
Thank you for getting in touch! We appreciate you contacting us $name. One of our colleagues will get back in touch with you soon! \r\n
Here is what you submitted:</div><br><br>";

echo "<stong>Name:</strong> ".$name."<br>";
echo "<stong>Email:</strong> ".$email."<br>";
echo "<stong>Message:</strong> ".$message."<br>";
echo "<br />";
echo "<a  class=\"btn btn-primary\" href='".$link_address."'>Back</a>";

$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}?>
