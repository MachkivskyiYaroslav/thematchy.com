<?php
	$to = "contactus@thematchy.com"; // Email отримувача
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	
	$subject = "Тема письма"; // Тема листа
	
	$name = $_POST['regname'];
	$email = $_POST['regemail'];
	$text = $_POST['regtext'];
	
	$msg="
		Name: $name		
		E-mail: $email 
        Text: $text 
		Time:  $date, в $time.";
 	
	mail($to, $subject, $msg, "From: thematchy.com ");

?>

 
 <?php
echo '<script type="text/javascript">';
  echo 'window.location.replace("./successful.html");';
echo '</script>';
 ?>


 




 

