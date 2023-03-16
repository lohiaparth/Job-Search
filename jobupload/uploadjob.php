<?php
require_once('config.php');


?>

<html lang="en">
<head>

    <link rel="stylesheet" href="newstyle.css"> 
    <style> 
                div.containe a
        {
            color: #2d3e3f;
            text-decoration: none;
            font: 20px 'Poppins',sans-serif;
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }
        div.containe
        {
            font-family: 'Poppins',sans-serif;
            margin: 0 auto;

            text-align: center;
        }




        div.highlightTextIn a:before
        {
            position: absolute;
            color: #2d3e3f;
            top: 0px;
            left: 0px;
            padding: 10px;
            overflow: hidden;
            content: attr(alt);
            transition: all 0.3s;
            transform: scale(0.8);
            opacity: 0;
        } 

        div.highlightTextIn a:hover:before
        {
            transform: scale(1);
            opacity: 1;
        }

        div.highlightTextIn a
        {
            color: rgba(0, 0, 0, 0.4); 
        }

        div.highlightTextIn a:before
        {
            transform: scale(1.2);
        }  
            
            
            
            body{
            color:  white;
            
            font-family: 'Poppins',sans-serif;
}</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Job</title>
    
</head>
<body>
    <div>
    <?php



?>
</div>
	<div class="row">
    
			 
			<div class="containe gray highlightTextIn">
				<a alt="Find Jobs" href="/WEBSITE/userlogin/index.php">Find Jobs</a>
				<a alt="Employers" href="/WEBSITE/userlogin/employers.php">Employers</a>
				<a alt="Upload Job" >Upload Job</a>
				<a alt="About Us" href="/WEBSITE/userlogin/aboutus.php">About Us</a>
				
			</div>
			
	</div>

   

    <div class="row">
    <h1 style="font-size:48px" >Upload Job</h1>

    </div>
	
    
   









    <div class="container">
      <form method="post">
        <!--Company name-->
    		<div class="box">
          <label for="companyname" class="fl fontLabel"> Company Name: </label>
    			<div class="new iconBox">
            
          </div>
    			<div class="fr">
    					<input type="text" name="companyname" id="companyname" placeholder="Company Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Company name-->


        <!--JOB TITLE-->
    		<div class="box">
          <label for="jobtitle" class="fl fontLabel"> Job Title: </label>
    			<div class="fl iconBox"></div>
    			<div class="fr">
    					<input type="text" required name="jobtitle" id="jobtitle"
              placeholder="Job Title" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--JOB TITLE-->


    		<!---Location------>
    		<div class="box">
          <label for="location" class="fl fontLabel">Location:</label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
                <select name="location" id="location" class="textBox">
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--- Location ---->

            <!---JOB TYPE----->
    		<div class="box radio">
          <label for="jobtype" class="fl fontLabel"> Job Type: </label>
    				<input type="radio" name="jobtype" value="Remote" id="remote" required> Remote &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="jobtype" value="On-site" id="on-site" required> On-site
    		</div>

            <!---JOB TYPE----->


    		<!---SALARY---->
    		<div class="box">
          <label for="salary" class="fl fontLabel"> Salary: </label>
    			<div class="fl iconBox"></div>
    			<div class="fr">
    					<input type="text" required name="salary" id="salary" placeholder="Salary" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--SALARY----->



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="create" class="submit" value="Upload" id="upload">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>

    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type= "text/javascript">
    $(function(){
        $('#upload').click(function(e){

            var valid = this.form.checkValidity();

            
            if(valid){

            var companyname = $('#companyname').val();
            console.log(companyname);
            var jobtitle = $('#jobtitle').val();
            console.log(jobtitle);
            var location = $('#location').val();
            console.log(location);
            var jobtype = $("input[type='radio'][name='jobtype']:checked").val();
            console.log(jobtype);
            var salary = $('#salary').val();
            console.log(salary);

                e.preventDefault();

                $.ajax({
                    type : 'POST',
                    url : 'process1.php',
                    data : {companyname: companyname,jobtitle: jobtitle,location: location,jobtype: jobtype,salary: salary},
                    success : function(data){
                        Swal.fire({
                            'title': 'Successful',
                            'text': data,
                            'icon': 'success'
            


                         })

                    },
                    error : function(data){
                        

                        Swal.fire({
                            'title': 'ERROR',
                            'text': 'There were errors while saving the data.',
                            'icon': 'error'
            


                         })


                    }



                });



                alert('true');
            }else{
                alert('false')
            }


            

        });

        

    });


</script>
    
</body>
</html>