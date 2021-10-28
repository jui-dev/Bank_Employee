<?php
include('../control/searchAccountHolderCheck.php');
?>
<!DOCTYPE html>
<html>
<h1> Search account holder by user name</h1>
<body>
<hr>

<form action="" method="post" >

    <table>
    <br>

        <tr>
            <td>Insert Account Holder username:</td>
             <td><input type="text" name="username"></td>
        </tr>

        <tr>
            <td><input type="submit" name="Search" value="Search" ></td>
        </tr>

    </table>

    <a href="../view/AccountantPage.php">Back</a>

</form>
</body>
</html>
