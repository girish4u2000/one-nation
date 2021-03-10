<?php 
include('includes/header.php');?>

<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/pro-1.png" alt="" style="height:3rem;"></a>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>							
						</ul>
					</div>
				</div>
			</nav>
		</div>
</header>
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="" >						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register</h3>
						<form class="row login_form" action="register.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
							<?php require "includes/connection.php";
                        if(isset($_POST['register'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $mobile=$_POST['mobile'];
                            $pas=$_POST['pas'];
                            $pas1=md5($pas);
                            if($name=="" or $pas=="" or $mobile=="" or $email==""){
                                echo "<script>alert('all the fields should be filled');</script>";                                
                            }else{
                                $str="select * from user_table where email_id='$email' and password='$pas1'";
                                $res=mysqli_query($con,$str);
                                if(mysqli_num_rows($res)>0){                                    
                                    echo "<script>alert('User already exist with this email please login');</script>";
                                }else{
                                    $str="insert into user_table values('$name','$email',$mobile,'$pas1')";
                                    if(mysqli_query($con,$str)){                                       
                                        echo "<script>alert('Account created successfully');</script>";
                                        echo "<script>location.href='login.php';</script>";
                                    }else{
                                        echo "<script>alert('Error in adding');</script>";
                                    }
                                }
                            }
                        }
                    ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email ID'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pas1" name="pas1" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>                            
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="register" class="primary-btn">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	
	<?php include('includes/footer.php');?>

	<?php
		function email_validation($str) { 
			return (!preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) ? FALSE : TRUE; 
		}  
	?>
   