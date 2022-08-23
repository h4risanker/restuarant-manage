<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"certed");
if(!empty($_POST["id"]))
{
$query =mysqli_query($con,"update student set status=0 where id='" . $_POST["id"] . "'");
echo 1;
}
?>
