<?php

    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    $one=1;
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"certed");
	$a="insert into contact(id,name,email,subject,message,status)values('','$name','$email','$subject','$text','$one')";


 $res=mysqli_query($con,$a);
 if($res)
 {
 }


?>
