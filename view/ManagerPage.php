<?php

session_start(); 
if(empty($_SESSION["username"]) && empty($_SESSION["password"]) ) 
{
header("Location: ../view/HomePage.php"); 
}

?>


<!DOCTYPE html>
<html>
<body>

<br/><h1> Manager Page </h1>

 <h4>View your Profile Details  <a href="../view/ShowProfileM.php">Profile</a></h4>

 <h4>View Account Holder List  <a href="../view/AccountHolderListM.php">Account Holder List</a></h4>

 <h4>Search Account Holder by name  <a href="../view/searchAccountHolderM.php">Search Account Holder</a></h4>

 <h4>Visit Admin Profile  <a href="../view/viewAdminProfile.php">Admin Profile</a></h4>

<form action="../control/process.php" method="post" >
    <table>
        <tr>
            <td>Notice:</td>
            <td><textarea id="notice" name="notice" rows="4" cols="50"></textarea></td>
        </tr>

        <tr>
            <td><input type="submit" name="Insert" value="Insert"></td>
        </tr>
    
    </table>

<h3>Do you want to <a href="../control/logout.php">logout</a></h3>

</body>
</html>

