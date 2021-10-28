<?php
include('../model/db.php');
session_start(); 

?>

<!DOCTYPE html>
<html>
<body>
<h2>Account Holder List</h2>

<a href="../view/AccountantPage.php">Back</a>
<br>

<?php

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->AccountHolderList($conobj,"account_holder");

if($userQuery !== false && $userQuery->num_rows > 0 )
{

    echo "<table><tr><th>fname</th><th>lname</th><th>age</th><th>email</th><th>account</th></tr>";

    while($row = $userQuery->fetch_assoc())
    {
        echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["account"]."</td></tr>";
    }

    echo "</table>";

  } 
else
{
    echo "0 results";
}

?>


