 <?php
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$body = "A callback was requested by " . $name . "\nDetails:\nEmail: " . $email . "\Phone: " . $phone;
if(isset($_POST['callback-btn'])) {

mail("jb49195@gmail.com", "DCF Contact Form",

$body);

header("Location: ../index.php");

}

?>