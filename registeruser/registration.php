<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
<title>Registration</title>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/newstyle.css"> 

</head>
<body>


<h1 style="font-size:48px;padding:20px;">Register Yourself</h1>

<div>

    <?php
    


    ?>

</div>

<div>
    <!-- <form method="post" >
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Fill In the details carefully</p>
                    <hr class="mb-3">

                    <label for="firstname"><b> First Name</b></label>
                    <input class="form-control" type="text" name="firstname" id="firstname" required>

                    <label for="lastname"><b> Last Name</b></label>
                    <input class="form-control" type="text" name="lastname" id="lastname" required>

                    <label for="email"><b> Email </b></label>
                    <input class="form-control" type="email" name="email" id="email" required>

                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" type="text" name="phonenumber" id="phonenumber" maxlength="10" pattern="\d{10}" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" id="password" required>

                    <hr class="mb-3">
                    
                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    
                </div>
                <div>
                    Already have an account? <a href="/WEBSITE/userlogin/login.php">Log In</a>
                </div>    

            </div>    




        </div>





 



    </form>-->

</div>
<div class="container">
      <form method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          <label for="firstname" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="firstname" id="firstname" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Last name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Last Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="lastname" id="lastname"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Last name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="phonenumber" id="phonenumber" maxlength="10" pattern="\d{10}" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" id="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" id="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->





    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="submit" name="create" id="register" class="submit" value="Sign Up">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type= "text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();

            
            if(valid){

            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var phonenumber = $('#phonenumber').val();
            var password = $('#password').val();

                e.preventDefault();

                $.ajax({
                    type : 'POST',
                    url : 'process.php',
                    data : {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                    success : function(data){
                        Swal.fire({
                            'title': 'Successful',
                            'text': data,
                            'icon': 'success'
            


                         })
                         setTimeout(function () {
                            window.location.href = "/WEBSITE/userlogin/index.php"; 
                                    }, 2000);
                           

                    },
                    error : function(data){

                        Swal.fire({
                            'title': 'ERROR',
                            'text': 'There were errors while saving the data.',
                            'icon': 'error'
            


                         })


                    }



                });


               // 
                alert('true');
            }else{
                alert('false')
            }


            

        });

        

    });


</script>





</body>




</html>