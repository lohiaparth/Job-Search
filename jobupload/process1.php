<?php
require_once('config.php');


?>

<?php

if(isset($_POST)){
        

    
        
    $companyname      = $_POST['companyname'];
    $jobtitle       = $_POST['jobtitle'];
    $location          = $_POST['location'];
    $jobtype    = $_POST['jobtype'];
    $salary       = $_POST['salary'];

    


    $sql = "INSERT INTO job (companyname, jobtitle, location, jobtype, salary ) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);

    $result = $stmtinsert->execute([$companyname, $jobtitle, $location, $jobtype, $salary]);

    if($result){
        echo 'Successfully saved!';

    }else{
        echo 'There were errors while saving the data.';
    }
    
    
}else{
    echo 'NO DATA';
}
