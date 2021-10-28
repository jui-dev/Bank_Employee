<?php
include('../model/db.php');
//session_start();
?>

<!DOCTYPE html>
<html>
<body>

<br/><h1> Transection Detail </h1>

<?php
   
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->TransectionDetail($conobj,"transactions");

    if($userQuery !== false && $userQuery->num_rows > 0 )
    {

        echo "<table><tr><th>uname1</th><th>amount</th><th>uname2</th></tr>";

    while($row = $userQuery->fetch_assoc())
    {
        echo "<tr><td>".$row["uname1"]."</td><td>".$row["amount"]."</td><td>".$row["uname2"]."</td></tr>";
    }

    echo "</table>";

  }
  

 ?>
 <a href="../view/AccountantPage.php">Back</a>
 </body>
 </html>