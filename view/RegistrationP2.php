<?php

include('../control/RegistrationP2check.php');

if(isset($_SESSION['Cemployed']) && isset($_SESSION['Jobexp']))
{
header("location: RegistrationP3.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration Form </h1>
<h2>Page 2: Career Information </h2>
<hr>
<form action="" method="post">
    <table>

        <tr>
            <td> Are you currently employed:</td>
            <td>
            <input type="radio" id="Yes" name="curremp" value="Yes">
            <label for="Yes">Yes</label>

            <input type="radio" id="No" name="curremp" value="No">
            <label for="No">No</label>

            <?php echo $valRadioCemployed; ?>             
     
            </td>
        </tr>

        <tr>
            <td> Do you have any job experience? </td>
            <td>
            <input type="radio" id="Yes" name="jobexp" value="Yes">
            <label for="Yes">Yes</label>

            <input type="radio" id="No" name="jobexp" value="No">
            <label for="No">No</label>

            <?php echo $valRadioJobexp; ?>             
     
            </td>
        </tr>

        <tr>
            <td> Please upload your CV</td>
            <td><input type="file" name="file"></td>
        </tr>


        <tr>
            <td><input type="submit" name="continue" value="Continue"></td>
        </tr>

    </table>

<br>



<a href="../control/logout.php">Cancel</a>

</form>
</body>
</html>
