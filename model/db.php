<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "bank";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }

 function InsertRegisteredData($conn,$table,$Fname,$Lname,$gender,$dob,$email,$Jobpos,$Username,$Password )

 {
     $result=$conn-> query("INSERT INTO $table VALUES('$Fname','$Lname','$gender','$dob','$email','$Jobpos','$Username','$Password')");
     return $result;
 }


 function CheckEmpManager($conn,$table,$username,$pwd)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."' AND pwd='". $pwd."' AND jobpos='Manager'");
 return $result;
 }

 function CheckEmpAccountant($conn,$table,$username,$pwd)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."' AND pwd='". $pwd."' AND jobpos='Accountant'");
 return $result;
 }

 function myProfile($conn,$table,$Uname)
 {
$result = $conn->query("SELECT * FROM ".$table." WHERE uname='". $Uname."'");
 return $result;
 }

 function AccountHolderList($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function searchAccountHolder($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $username."'");
 return $result;
 }


function TransectionDetail($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function viewAdminProfile($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }



 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>