 <?php
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$body = "A callback was requested by " . $name . "\nDetails:\nEmail: " . $email . "\Phone: " . $phone;
if(isset($_POST['callback-btn'])) {

mail("jb49195@gmail.com", "DFC - New Callback Request",

$body);

header('Location: ' . $_SERVER['HTTP_REFERER']);


}

?>