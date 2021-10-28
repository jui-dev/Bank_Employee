<?php
include('../model/db.php');
session_start(); 


if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>View Profile</h2>

Hii,<h3><?php echo $_SESSION["username"];?></h3>
Your Profile Page.
<br>
<br>

<?php

$connection = new db();
$conobj=$connection->OpenCon();
$username=$_SESSION["username"];

$userQuery=$connection->myProfile($conobj,"employee",$username);

if($userQuery !== false && $userQuery->num_rows > 0 )
  {

    while($row = $userQuery->fetch_assoc())
      {
        echo "First Name : " .$row["fname"]."<br>";
    
        echo "Last Name : " .$row["lname"]."<br>";

        echo "Gender : " .$row["gender"]."<br>";

        echo "Date of Birth : " .$row["dob"]."<br>";

        echo "E mail : " .$row["email"]."<br>";
      
        echo "Job Position : " .$row["jobpos"]."<br>";
      }


  }

else
  {
    echo "0 results";
  }
  
?>
<br>
<a href="../view/AccountantPage.php">Back</a>
</body>
</html>
