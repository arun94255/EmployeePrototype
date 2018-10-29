<?php
require("connect.php");
$EmployeeId=$_POST["EmployeeId"];
$empFirstName=$_POST["empFirstName"];
$empLastName=$_POST["empLastName"];
$dob=$_POST["dob"];
$doj=$_POST["doj"];
$grade=$_POST["grade"];

$tql1="update employee set empFirstName='".$empFirstName."', empLastName='".$empLastName."',doj='".$doj."',dob='".$doj."',grade='".$grade."' WHERE empNo='".$EmployeeId."'";

$result = $conn->query($tql1);
if ($result == TRUE) {
    echo " successfully updated";
} else {
    echo "Please try again after some time: " . $conn->error;
}   
?>