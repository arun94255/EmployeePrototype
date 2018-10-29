<?php 
require("connect.php");  
$EmployeeId=$_POST["EmployeeId"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$DOB=$_POST["DOB"];
$DOJ=$_POST["DOJ"];
$select=$_POST["select"];
$tql = "select * from employee where empNo=$EmployeeId";
$result = $conn->query($tql);
 if ($result->num_rows > 0) { 
 	while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
 		echo json_encode($row);
    }
   } else {
   	    $err=array("err"=>"unable to load item");
   	     echo json_encode($err);
    }

$conn->close(); 
?>
