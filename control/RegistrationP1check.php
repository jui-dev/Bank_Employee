<?php
session_start();

$Fname="";
$valFname="";
$Lname="";
$valLname="";
$Gender="";
$valradioGender="";
$Dob="";
$valDob="";
$Email="";
$valemail="";


if (isset($_POST['continue'])) 
{
    $Fname= $_POST['fname'];
    $Lname=$_POST['lname'];
    $Gender=$_POST['gender'];
    $Dob=$_POST['dob'];
    $Email=$_POST['email'];

    if(!empty($Fname) || ctype_alpha($Fname)|| strlen($Fname)>=3)
    {
        $_SESSION["firstname"]=$Fname;
    
    }

    else
    {
        $valFname="First name is required";

    }

    if(!empty($Lname) || ctype_alpha($Lname)|| strlen($Lname)>=3)
    {
        $_SESSION["lastname"]=$Lname;
    
    }

    else
    {
        $valLname="Last name is required";

    }

    if(isset($Gender))
    {
        $_SESSION["gender"]=$Gender;
    
    }

    else
    {
        $valradioGender="Please select a gender";

    }

    if(!empty($Dob))
    {
        $_SESSION["Dob"]=$Dob;
    
    }

    else
    {
        $valDob="Date of Birth is required";

    }

    if(!empty($Email) || preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$Email))
    {
        $_SESSION["email"] =$Email;
    
    }

    else
    {
        $valemail="email is required";

    }

}
?>