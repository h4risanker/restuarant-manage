<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"certed");
if(!empty($_POST["id"]))
{
$query =mysqli_query($con,"update reservation set status=1 where id='" . $_POST["id"] . "'");
echo 1;
}
?>
