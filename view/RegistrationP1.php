<?php
include('../control/RegistrationP1check.php');

if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']) &&  isset($_SESSION['gender']) && isset($_SESSION['Dob']) && isset($_SESSION['email']))
{
header("location: RegistrationP2.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration Form </h1>
<h2>Page 1: Personal Information </h2>
<hr>
<form action="" method="post" >
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname"> <?php echo $valFname; ?> </td>
        </tr>

        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname"><?php echo $valLname; ?></td>
        </tr>

        <tr>
            <td> Gender:</td>
            <td>
            <input type="radio" id="Male" name="gender" value="Male">
            <label for="Male">Male</label>

            <input type="radio" id="Female" name="gender" value="Female">
            <label for="Female">Female</label>

            <?php echo $valradioGender; ?>             
     
            </td>
        </tr>

        <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="dob"><?php echo $valDob; ?></td>
        </tr>

        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input type="email" name="email"><?php echo $valemail; ?></td>
        </tr>


        <tr>
            <td><label for="file"> Please choose a profile Picture</label></td>
            <td><input type="file" name="file"></td>
        </tr>



        <tr>
            <td><input type="submit" name="continue" value="Continue"></td>
        </tr>

    </table>
    
<a href="../control/logout.php">Cancel</a>
</form>
</body>
</html>




