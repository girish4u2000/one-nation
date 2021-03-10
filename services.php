<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


		<?php 
            require "includes/connection.php";                                     
    	?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Popular Causes</h1>
					<nav class="d-flex align-items-center">
						<a href="home.php?logid=<?php echo $id;?>" class="nav-link">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="services.php?logid=<?php echo $id;?>" class="nav-link">Services</a>						
					</nav>
				</div>
			</div>
		</div>
	</section><br>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">			
			<div class="col-xl-12 col-lg-12 col-md-12">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center bg-warning"></div><br>
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
                    <?php
                    $str="select * from activity_table";
                    $res=mysqli_query($con,$str);
                    if(mysqli_num_rows($res)>0)
                    {
                        for($i=0;$i<mysqli_num_rows($res);$i++)
                        {
                            $row=mysqli_fetch_assoc($res);
						?>
						<div class="col-lg-3">
							<div class="single-product">
								<a href="service-view.php?name=<?php echo $row['name']; ?>&logid=<?php echo $id;?>" class="nav-link">
									<img class="img-fluid" src="uploads/<?php echo $row['image']; ?>" alt="" style="height:10rem;width:15rem;">
									<div class="product-details text-center">
										<h6 style="color:chocolate;"><?php echo $row['name'];?></h6>
									</div>
								</a>	
							</div>
						</div>
						<?php }}else{
							echo "No Events";
							}?>
					</div>
				</section><br>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center bg-warning"></div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>
							<br>
	<!-- Start related-product Area -->
	<!-- End related-product Area -->	
	<?php include('includes/main_footer.php');?>
	<?php include('includes/footer.php');?>