<?php

include('../model/db.php');


session_start();



if (isset($_POST['submit']))
 {

if (empty($_POST['uname']) || empty($_POST['pwd']))
 {
 echo "Username and Password is required";
}

else
{

    $username=$_POST['uname'];
    $password=$_POST['pwd'];

    
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->CheckEmpManager($conobj,"employee",$username,$password);

    if($userQuery !== false && $userQuery->num_rows > 0) 
    {

       
        $_SESSION["username"] = $_POST['uname'];
        $_SESSION["password"] = $_POST['pwd'];

        

        if(isset($_POST['remember_me']))
    {
        setcookie('username', $_SESSION["username"], time()+86400*30);
        header("location: ManagerPage.php");
    }
    else
    {
        header("location: ManagerPage.php");

    }

        

    

    } 
    else
     {
        $userQuery=$connection->CheckEmpAccountant($conobj,"employee",$username,$password);

    if($userQuery !== false && $userQuery->num_rows > 0) 
    {

       
        $_SESSION["username"] = $_POST['uname'];
        $_SESSION["password"] = $_POST['pwd'];
        
        if(isset($_POST['remember_me']))
    {
        setcookie('username', $_SESSION["username"], time()+86400*30);
        header("location: AccountantPage.php");
    }
    else
    {
        header("location: AccountantPage.php");



    }

        


      }
      else
      {
          echo "username or password is incorrect !";

      }

      $connection->CloseCon($conobj);





   }
 
}
 }




?>