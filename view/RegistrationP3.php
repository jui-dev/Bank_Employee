
<?php

include('../control/RegistrationP3check.php');

if(isset($_SESSION["Jobpos"]) && isset($_SESSION["username"]) && isset($_SESSION["Password"]))
{
header("location: RegistrationConfirm.php");
}


?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration Form </h1>
<h2>Page 3: Job Position </h2>
<hr>
<form action="" method="post" >
    <table>
       
        <tr>
            <td> select Category:</td>
            <td>
            <input type="radio" id="Manager" name="jobposition" value="Manager">
            <label for="Manager">Manager</label>

            <input type="radio" id="Accountant" name="jobposition" value="Accountant">
            <label for="Accountant">Accountant</label>

            <?php echo $valJobpos; ?>        
     
            </td>
        </tr>

        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"><?php echo $valUname; ?></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"><?php echo $valpass; ?></td>
        </tr>

        <tr>
            <td><input type="submit" name="Confirm" value="Confirm"></td>
        </tr>

    </table>

<br>
<a href="../control/logout.php">Cancel</a>
</form>
</body>
</html>
