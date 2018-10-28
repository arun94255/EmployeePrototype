<?php
require("connect.php");
$EmployeeId=$_POST["EmployeeId"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$DOB=$_POST["DOB"];
$DOJ=$_POST["DOJ"];
$select=$_POST["select"];

$tql1="select * from employee where empNo='".$EmployeeId."'";
//UPDATE employee  SET empFirstName='".$FirstName."', empLastName='".$LastName."',doj='".$DOJ."' WHERE empNo='".$EmployeeId."'
$result = $conn->query($tql1);
if ($conn->query($tql1) === TRUE) {
    echo " successfully updated";
} else {
    echo "Please try again after some time: " . $conn->error;
}   





?>