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
					<h1>Gallery</h1>
					<nav class="d-flex align-items-center">
						<a href="home.phplogid=<?php echo $id;?>" class="nav-link">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="gallery.phplogid=<?php echo $id;?>s" class="nav-link">Gallery</a>						
					</nav>
				</div>
			</div>
		</div>
	</section><br>
	<!-- End Banner Area -->


</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head bg-warning">Browse Categories</div>
					<ul class="main-categories text-left">
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">All</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Food Distribution</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Blanket Distribution</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Plantation drives</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Sanitary pad awareness</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">DMCHP</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Blood donation</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Community Building</a></li>
						<li class="main-nav-list child "><a class="nav-link" href="gallery.php?logid=<?php echo $id;?>">Flood relief works</a></li>
					</ul>
				</div>	

			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center bg-warning"></div><br>
				<div class="row">
				<!-- Start Best Seller -->	
				<div class="col-lg-6">
							<div class="single-product">
								<a href="#" class="nav-link">
									<img class="img-fluid" src="img/events/image_02.jpg" alt="" style="height:15rem;;">								
								</a>	
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-product">
								<a href="#" class="nav-link">
									<img class="img-fluid" src="img/events/image_01.jpg" alt="" style="height:15rem;">								
								</a>	
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-product">
								<a href="#" class="nav-link">
									<img class="img-fluid" src="img/events/image_03.jpg" alt="" style="height:15rem;">								
								</a>	
							</div>
						</div>
				</div>
			
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