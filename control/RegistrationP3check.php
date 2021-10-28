<?php

include('../model/db.php');

session_start(); 

$Jobpos="";
$valJobpos="";
$Uname="";
$valUname="";
$password="";
$valpass="";


if (isset($_POST['Confirm'])) 
{
    $Jobpos= $_POST['jobposition'];
    $Uname=$_POST['username'];
    $password=$_POST['password'];
  

    if(isset($Jobpos))
    {
        $_SESSION["Jobpos"]=$Jobpos;
    
    }

    else
    {
        $valJobpos="Please select a Job Position";

    }
    if(!empty($Uname) || ctype_alpha($Uname)|| strlen($Uname)>=3)
    {
        $_SESSION["username"]=$Uname;
    
    }

    else
    {
        $valUname="Username is required";

    }

    if( !empty($password) || strlen($password)>4)
    {
        $_SESSION["Password"]=$password;
    
    }

    else
    {
        $valpass="Password is required";

    }

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertRegisteredData($conobj,"employee",$_SESSION["firstname"],$_SESSION["lastname"],$_SESSION["gender"],$_SESSION["Dob"],$_SESSION["email"],$_SESSION["Jobpos"],$_SESSION["username"],$_SESSION["Password"] );

    $connection->CloseCon($conobj);

}


?>