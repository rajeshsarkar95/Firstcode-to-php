<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"connection sucessfull";
}
else
{
echo"plese try again ";
}
mysqli_select_db($con,'rajesh');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$subject = $_POST['subject'];



$query ="insert into application (firstname,lastname,city,subject)
values('$firstname','$lastname','$city','$subject')";

echo"$query";
mysqli_query($con,$query);
header('location:index.php');
?>