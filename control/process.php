
<!DOCTYPE html>
<html>
<body>

<a href="../view/ManagerPage.php">Back</a>
<br>
</body>
</html>

<?php

    $formdata = array(
	      
        'Notice'=>$_POST["notice"]
                  
    );
            
            
        
    $existingdata = file_get_contents('data.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] =$formdata;
               
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(isset($_POST["Insert"]))
    {
        if(!empty($_POST["notice"]))
        {
            
            if(file_put_contents("data.json", $jsondata))
            {
                echo "Data successfully saved <br>";
                //header("Location: ../view/ManagerPage.php");
            }
            else
            {
                echo "no data saved";  
        
            } 
        }
    }
                    
    /*$data = file_get_contents("data.json");
    $mydata = json_decode($data);
        
    foreach($mydata as $myobject)
    {
        foreach($myobject as $key=>$value)
        {
        
            echo "your ".$key." is ".$value."<br>";
                       
        }
    }*/
    
?>



