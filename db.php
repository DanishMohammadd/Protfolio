<?php 

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";
}

if(!mysqli_select_db($con,'portfolio'))
{
	echo "not database";
}
$name=$_POST['name'];
$email=$_POST['email'];
$project=$_POST['project'];
$message=$_POST['message'];

$sql="INSERT INTO contact(name,email,project,message)
       VALUES('$name','$email','$project','$message')";

       if(!mysqli_query($con,$sql))
       {
       	echo "not inserted";
       }

       else{
       	echo "Thank you...";
       }

       header("refresh:1; url=index.php");


?>