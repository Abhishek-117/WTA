<?php
$email=$_POST['email'];
$psw=$_POST['psw'];
$name=$_POST['name'];
$pno=$_POST['pno'];
$addr=$_POST['addr'];

$pdo=new PDO("mysql:host=localhost;dbname=wta","root","");
$result=$pdo->query("select * from donor where email='$email'"); 
if(($row=$result->fetch()))
{
  echo "Specified email already exists";
  exit;
}
$sql="INSERT into donor(name,phone,email,password,address) values('$name',$pno,'$email','$psw','$addr')";
$result=$pdo->exec($sql);
echo "Registered successfully";
?>