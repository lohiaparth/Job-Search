<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Search Results</title>
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }
    </style>
</head>
<body style="background:rgb(220, 220, 220)">
<div class="row">
		<div class="containe gray highlightTextIn">
			<a alt="Find Jobs" href="index.php">Find Jobs</a>
			<a alt="Employers" href="employers.php">Employers</a>
			<a alt="Upload Job" href="/WEBSITE/jobupload/uploadjob.php">Upload Job</a>
			<a alt="About Us" href="aboutus.php">About Us</a>
			
		</div>
    
</div>

</div>

<div class="row">
    <div id="keylist">

        <?php
            include 'dbconfig.php';
            $keywordfromform = $_GET["keyword"];
            $location1 = $_GET["location"];

            if($location1 == "Anywhere"){

            

            if (!empty($keywordfromform)) {





                $sql = "SELECT * FROM job WHERE jobtitle LIKE '%" . $keywordfromform . "%';";
                $result = $db->query($sql);

                if ($result){
                    //output data of each row
                    echo "<table>";
                    echo "<tr style='border-bottom:1px solid white'>
                    <th>COMPANY NAME</th>
                    <th>JOB TITLE</th>
                    <th>LOCATION</th>
                    <th>TYPE</th>
                    <th>SALARY</th>
                  </tr>";
                    while($row = $result->fetch(PDO::FETCH_OBJ)){
                
                        echo "<tr>" . "<td>".$row->companyname . "</td>"."<td>". $row->jobtitle ."</td>"."<td>". $row->location ."</td>". "<td>". $row->jobtype ."</td>". "<td> ₹". $row->salary ."</td>". "</tr>";
                    }

                    echo "</table>";


                }else{
                    echo "<ul id='list'>";
                        echo "<li>"."0 results"."</li>";
                        echo "</ul>";
                    }



            }
        }else {
            
            if (!empty($keywordfromform)) {
                




                
                $sql = "SELECT * FROM job WHERE location LIKE '$location1' AND jobtitle LIKE '%" . $keywordfromform . "%';";
                $result = $db->query($sql);

                if ($result){
                    //output data of each row
                    echo "<table>";
                    echo "<tr style='border-bottom:1px solid white'>
                    <th>COMPANY NAME</th>
                    <th>JOB TITLE</th>
                    <th>LOCATION</th>
                    <th>TYPE</th>
                    <th>SALARY</th>
                  </tr>";
                    while($row = $result->fetch(PDO::FETCH_OBJ)){
                
                        echo "<tr>" . "<td>".$row->companyname . "</td>"."<td>". $row->jobtitle ."</td>"."<td>". $row->location ."</td>". "<td>". $row->jobtype ."</td>". "<td> ₹". $row->salary ."</td>". "</tr>";
                    }

                    echo "</table>";

                }else{
                    echo "<ul id='list'>";
                        echo "<li>"."0 results"."</li>";
                        echo "</ul>";
                    }



            }
            # code...
        }
             
        ?>

    </div>

</div>

    
</body>
</html>


