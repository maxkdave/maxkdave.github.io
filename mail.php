<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'maxkdave@gmail.com';
$fromsubject = 'info@maxkdave.github.io';
$fname = $_POST['fname'];
$email_address = $_POST['email_address'];
$title = $_POST['title']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Message received from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 E-mail: '.$$email_address.'
	 Subject: '.$title.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you for your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>"; 
								mail($to, $title, $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='index.html'>Contact Page</a>"; 
}
?> 