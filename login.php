<?php 
include('includes/header.php');?>

<?php session_start();?>
<?php 
  if(isset($_GET['logid']))
  {
    $id=$_GET['logid'];  

  }else{
    $id=0;
    $_SESSION['log_status']=false;
  }  
  if(isset($_GET['st']))
    {
      $_SESSION['log_status']=$_GET['st'];
    }     
?>
<!-- Start Header Area -->
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
	<!-- End Header Area -->
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
					<img class="img-fluid" src="img/events/image_02.jpg" alt="" >												
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="login.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
							<?php
                    require "includes/connection.php";
                    if(isset($_POST['login'])){
                        $email=$_POST['email'];
                        $pas=$_POST['pas'];
                        $pas1=md5($pas);
                        if($email=="" or $pas==""){
                            echo "<script>alert('All the fields should be filled');</script>";                            
                        }else{
                            $str="select * from user_table where email_id='$email' and password='$pas1'";
                            $res=mysqli_query($con,$str);
                            if(mysqli_num_rows($res)>0){
                                $_SESSION['log_status']=true;
                                $_SESSION['email']=$email;
                                echo "<script>alert('Login successfull');</script>";
                            echo "<script>location.href='index.php?logid=1&log_status=true';</script>";
                            }else{
                                echo "<script>alert('Invalid credentials');</script>";                            
                            }                            
                        }
                    }
                ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pas" name="pas" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="login" class="primary-btn">Log In</button>
								<!--<a href="#">Forgot Password?</a>-->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<?php include('includes/footer.php');?>