<?php
$name=$_REQUEST['un'];
$email=$_REQUEST['ue'];
$password=$_REQUEST['pw'];

$server='localhost';
$username='root';
$password='';
$dbname='newswebsite';

$conn=new mysqliz($server,$username,$password,$dbname);

if($ conn-> connect_error)
{
die("connection failed:".$conn->connect_error);
}

else{
echo("connection sucess!!<br>");
}

$sql="insert into signupdetails(name) value('.$name')";

if($conn->query($sql)==true){
echo("inserted Successfull");
}

$conn-> close();
?>
