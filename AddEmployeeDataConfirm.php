<?php
require("connect.php");
$empFirstName = $_POST["empFirstName"];
$empLastName = $_POST["empLastName"];
$dob = $_POST["dob"];
$doj = $_POST["doj"];
$dept = $_POST["dept"];
$grade = $_POST["grade"];
$gender = $_POST["gender"];
$martialstatus = $_POST["martialstatus"];
$home = $_POST["home"];
$phNo = $_POST["phNo"];

$abc="insert into employee (empFirstName,empLastName,dob,doj,dept,grade,gender,martialstatus,home,phNo)values('".$empFirstName."','".$empLastName."','".$dob."','".$doj."','".$dept."','".$grade."',
'".$gender."','".$martialstatus."','".$home."','".$phNo."')";
$result = $conn->query($abc);
if($result==TRUE)
{
	echo "employee information added successfully";
	
}
else
	echo "Employee data not added because ".$conn->error;
?>