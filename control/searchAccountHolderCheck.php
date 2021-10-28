<?php
include('../model/db.php');
//session_start(); 


if (isset($_POST['Search']))
 {


    $accountHolderUserName=$_POST['username'];
    
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->searchAccountHolder($conobj,"account_holder", $accountHolderUserName);

    if($userQuery !== false && $userQuery->num_rows > 0 )
    {

        echo "<table><tr><th>fname</th><th>lname</th><th>age</th><th>email</th><th>account</th></tr>";

    while($row = $userQuery->fetch_assoc())
    {
        echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["account"]."</td></tr>";
    }

    echo "</table>";

  } 
}
 
  
?>


