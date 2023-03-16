<?php
include 'dbconfig.php';




$sql = "SELECT * FROM job";
$result = $db->query($sql);

if ($result){
    //output data of each row
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        echo " Companyname: " . $row->companyname . " Job Title: " . $row->jobtitle ." Location: " . $row->location . " Job Type: " . $row->jobtype . " Salary: " . $row->salary . " <br> ";
    }


}else{
        echo "0 results";
    }




?>