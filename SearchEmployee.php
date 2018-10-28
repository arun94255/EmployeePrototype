<?php
	require("connect.php");  
	$empNo=$_POST["empNo"]; 
	$empFirstName=$_POST["empFirstName"]; 
	$empLastName=$_POST["empLastName"]; 
	//$empNo=1; 
	//$empFirstName="anand"; 
	//$empLastName="saurav";	
	
	$tql = "select * from employee where empNo='".$empNo."' and empFirstName='".$empFirstName."' and empLastName='".$empLastName."'";

$result = $conn->query($tql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        echo "EmployeeId: ". $row["empNo"]. "<br>";
		echo "EmployeeName: ". $row["empFirstName"]." ". $row["empLastName"]. "<br>";
		echo "EmployeeDOB: ". $row["dob"]. "<br>";
		echo "EmployeeDOJ: ". $row["doj"]. "<br>";
		echo "Department: ". $row["dept"]. "<br>";
		echo "Grade: ". $row["grade"]. "<br>";
		echo "Gender: ". $row["gender"]. "<br>";
		echo "MaritalStatus: ". $row["martialstatus"]. "<br>";
		echo "Address: ". $row["home"]. "<br>";
		echo "Contact: ". $row["phNo"]. "<br>";
    }
} else {
    echo "Please Enter correct employee Number";
}
$conn->close();

?>