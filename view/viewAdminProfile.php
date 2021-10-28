<?php
include('../model/db.php');
//session_start();
?>

<!DOCTYPE html>
<html>
<body>

<br/><h1> Admin Profile </h1>

<?php
   
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->viewAdminProfile($conobj,"admin");

    if($userQuery !== false && $userQuery->num_rows > 0 )
  {

    while($row = $userQuery->fetch_assoc())
      {
        echo "First Name : " .$row["fname"]."<br>";

        echo "Last Name : " .$row["lname"]."<br>";

        echo "Mobile : " .$row["mobile"]."<br>";

        echo "Dob : " .$row["dob"]."<br>";
    
        echo "Email : " .$row["email"]."<br>";
      
      }

  }

else
  {
    echo "0 results";
  }


 ?>
 <a href="../view/ManagerPage.php">Back</a>
 </body>
 </html>