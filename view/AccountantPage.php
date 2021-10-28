<?php
session_start(); 
if(empty($_SESSION["username"]) && empty($_SESSION["password"]) ) 
{
header("Location: ../view/login.php"); 
}

?>


<!DOCTYPE html>
<html>
<body>

<br/><h1> Accountant Page </h1>

<h4>View your Profile Details  <a href="../view/ShowProfileA.php">Profile</a></h4>
<h4>View Account Holder List  <a href="../view/AccountHolderListA.php">Account Holder List</a></h4>
<h4>Search Account Holder by name  <a href="../view/searchAccountHolderA.php">Search Account Holder</a></h4>
<h4>View transection Detail  <a href="../view/ViewTransaction.php">Transection Detail</a></h4>
<br/>

<h3>Do you want to <a href="../control/logout.php">logout</a></h3>

</body>
</html>