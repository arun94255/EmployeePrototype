<?php
require("connect.php");
$EmployeeId=1;//$_POST["EmployeeId"];
$FirstName="aditya";//$_POST["FirstName"];
$LastName="mahule"//$_POST["LastName"];
$DOB=1996-03-30//$_POST["DOB"];
$DOJ="1996-03-30"//$_POST["DOJ"];
$select="A"//$_POST["select"];

$tql1="UPDATE employee  SET empFirstName=$FirstName, empLastName=$LastName,doj=$DOJ WHERE empNo=$EmployeeId";

$result = $conn->query($tql1);
if ($conn->query($tql1) === TRUE) {
    echo " successfully updated";
} else {
    echo "Please try again after some time: " . $conn->error;
}   





?>