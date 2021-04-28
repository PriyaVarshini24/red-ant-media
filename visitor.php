<?php
$uname = $_POST['uname'];
$entrytime = $_POST['entrytime'];
$visit=$_POST['visit'];
$reason=$_POST['reason'];
$exittime = $_POST['exittime'];
$servername="localhost";
$username="root";
$password="";
$db="system";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql="insert into visitor(uname,entrytime,visit,reason,exittime) values ('$uname','$entrytime','$visit','$reason','$exittime')";
if($conn->query($sql)==TRUE)
{
echo "<br/><br/><span> Data Inserted successfully...!!</span>";
}
Else
{
echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();