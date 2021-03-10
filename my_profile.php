<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>My Profile</h1>
					<nav class="d-flex align-items-center">
						<a href="homme.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="my_profile.php">My Profile</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<?php 
		require "includes/connection.php";
		$email=$_SESSION['email'];
		$str="select * from user_table where email_id='$email'";
		$res=mysqli_query($con,$str);
		$row=mysqli_fetch_array($res);
	?>
	<section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <form class="row contact_form" action="my_profile.php?logid=<?php echo $id;?>" method="post" novalidate="novalidate">
						<div class="col-lg-5"  align="center">
							<div class=" col-8 form-group p_star">
									<img src="img/slide1.jpeg" alt="" style="width:15rem;height:15rem">
								</div>
							</div>
                        <div class="col-lg-7" >
							<div class="row text-center">
									<div class=" col-lg-12 form-group p_star text-center">
										<h3 class="text-center">Profile</h3>
									</div>
									<?php 
										if(isset($_POST['update'])){
											$name=$_POST['name'];
											$mobile=$_POST['number'];
											$str="update user_table set name='$name', mobile_number='$mobile' where email_id='$email'";
											if(mysqli_query($con,$str)){												
												echo "<script type='text/javascript'>location.href = 'my_profile.php?logid=".$id."';</script>";
												echo "<p class='text-success'>Updated Successfully.</p>";
											}else{
												echo "<p class='text-success'>Error in updation!</p>";
											}
										}
									
									?>
									<div class="form-group col-lg-6  p_star">
										<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo $row['name'];?>">
									</div>
									<div class="form-group col-lg-6 p_star">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email ID" value="<?php echo $row['email_id'];?>"readonly>
									</div>
									<div class=" col-lg-8 form-group p_star">
										<input type="text" class="form-control" id="number" name="number" value="<?php echo $row['mobile_number'];?>" />
									</div>
									<div class="form-group p_star">
										<input type="submit" class="genric-btn primary text-dark" id="update" name="update" value="Update">
									</div>
                        	</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include('includes/main_footer.php');?>
<?php include('includes/footer.php');?>