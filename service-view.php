<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

	
<?php
    require "includes/connection.php";
    if(isset($_GET['name'])){
        $name=$_GET['name'];
    }
    $str="select * from activity_table where name='$name'";
    $res=mysqli_query($con,$str);
    $row=mysqli_fetch_assoc($res);
   ?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Service Details</h1>
					<nav class="d-flex align-items-center">
						<a href="home.php?logid=<?php echo $id;?>" class="nav-link">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="services.php?logid=<?php echo $id;?>" class="nav-link">Service<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="nav-link"><?php echo $name;?></a>
					</nav>
				</div>
			</div>
		</div>
	</section><br>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->	
	
	<section id="features" class="features-area section_gap">		
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-6">
					<div class="single-features">						
						<img src="uploads/<?php echo $row['image'];?>" alt="" width="450rem">						
					</div>
				</div>
				<div class="col-lg-6 ">
					<h2 class="text-warning"><?php echo $name;?></h2>
					<p><?php echo $row['description'];?></p>					
				</div>							
			</div>
		</div>		
</section>
	<br>
	<!--================End Single Product Area =================--> 


	<?php include('includes/main_footer.php');?>
	<?php include('includes/footer.php');?>