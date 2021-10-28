<?php
include('../control/logincheck.php');

?>

<!DOCTYPE html>
<html>
<body>
<h1>Login Page </h1>
<hr>

<form action="" method="post" >

    <table>
    <br>

        <tr>
            <td>User Name:</td>
            <td><input type="text" name="uname"></td>
        </tr>

        <tr>
            <td> Password:</td>
            <td><input type="password" name="pwd"></td>
                
        </tr>

        <tr>
            <td> Remember Me:</td>
            <td>
            <input type="checkbox" id="remember" name="remember_me" >           
     
            </td>
        </tr>


        <tr>
            <td><input type="submit" name="submit" value="LOGIN"></td>
        </tr>

    </table>

<a href="../control/logout.php">Cancel</a>
</form>
</body>
</html>
