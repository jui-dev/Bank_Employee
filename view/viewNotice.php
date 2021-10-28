<!DOCTYPE html>
<html>
<body>
<br/><h1> View All Notices </h1>
<a href="../view/HomePage.php">Back</a>
<br>
</body>
</html>


<?php

    $data = file_get_contents('../control/data.json');
    $mydata = json_decode($data);
        
    foreach($mydata as $myobject)
    {
        foreach($myobject as $key=>$value)
        {
        
            echo $key." : ".$value."<br>";
        }
    }
?>

                       