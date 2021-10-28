<?php

session_start(); 

$Cemployed="";
$valRadioCemployed="";
$Jobexp="";
$valRadioJobexp="";


 if (isset($_POST['continue'])) 
{
    $Cemployed= $_POST['curremp'];
    $Jobexp=$_POST['jobexp'];

    if(isset($Cemployed))
    {
        $_SESSION["Cemployed"]=$Cemployed;
    
    }

    else
    {
        $valRadioCemployed="Please select yes/No";

    }

    if(isset($Jobexp))
    {
        $_SESSION["Jobexp"]=$Jobexp;
    
    }

    else
    {
        $valRadioJobexp="Please select yes/No";

    }
    
}

?>