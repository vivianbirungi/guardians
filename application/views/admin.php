<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Guardians of Nature</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logo-dark3.png">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/app.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/blocks.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/plugins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/headers/header-default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/footers/footer-v1.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/portfolio-v2.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/owl-carousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms-v2.css">



	<!-- CSS Implementing Plugins
    <link rel="stylesheet" href="<?php echo base_url();?>asset1/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.css"> -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/css/navigation.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/agency.style.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/custom.css">
	<style>

  .chess-about-us-inner p{
    color:#dadada
  }
  .g-display-td p{
	color:#dadada 
  }
  .mob p{
	color:#dadada
  }
  .mob1 p{
	color:#aaaaaa
  }
  .filter{
	  padding:10px;
	  text-transform:capitalize !important;
	  background:#eee  !important;
	  border-radius:0px  !important;
	  padding-left:20px  !important;
	  padding-right:20px  !important;
	  font-style: normal !important;
  }
  .profile{
  height:auto;
  position:relative;
  
    margin-top:100px;
    margin-bottom:50px;
    padding:30px
  }
  .box-shadow {
  -webkit-box-shadow:  2px 1px 3px 3px rgba(0,0,0,.25); // iOS <4.3 & Android <4.1
          box-shadow: 2px 1px 3px 3px rgba(0,0,0,.25);
}




  

</style>
</head>

<!--
	The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">
	<main class="wrapper">

		<!--=== Header ===-->
		<nav class="one-page-header navbar navbar-default navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
			<div class="container">
				<div class="menu-container page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#body">
						<img src="<?php echo base_url();?>assets/img/logo-dark3.png" alt="" style="height:40px; width:40px;">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav">
							
							
					<li >
						<a class="btn btn-primary" style="color:white; border-radius:10px; padding:6px" href="<?php echo base_url('logout'); ?>">Log Out</a>
					</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!--=== End Header ===-->
<!--=== Style Switcher ===-->
<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>


    <!--=== Content Part ===-->



    <div class="container">
	
		<?php if ($this->session->flashdata('success')): ?>
    <div class="error alert alert-success" style="position:absolute; top:100px; left:150px; border-radius:10px; padding:5px; color: background-color:'red'; width:80%; text-align:center; z-index:1000">
	<?php $data = $this->session->flashdata('success');
	 echo $data; ?></div>
<?php endif; ?>

<div class=" profile">
    <h1>Portifolio</h1>
	<form action="<?php echo base_url('Welcome/upload_pdf'); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-5" style="margin-right:30px; padding:20px">
			<ul class="list-group">
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Doc 1</li>
  <li class="list-group-item">Third item</li>
  <li class="list-group-item">Third item</li>
</ul>
		
		   </div>
			<div class="col-md-6" style="">
			<div class="box-shadow" style="width:100%; padding:10px">
			<p>Capture Data on the Upload</p>

			<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  placeholder="Enter title" style="border-radius:10px" name='title'>
    
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" placeholder="First Name" name='author' style="border-radius:10px"  >
  </div>
  
  <div class="form-group">
    <label for="description">Description</label>
	<textarea class="form-control" name="description" id="description" rows="3" style="border-radius:10px"></textarea>
  </div>
  <div class="form-group">
    <label for="date">Creation Date</label>
	<input type="date" id="date" class="form-control rounded-2"  style="border-radius:10px" name='creation_date' >
  </div>
  <div class="form-group">
    <label for="pdf_file">Upload Document</label>
			<input type="file" name="pdf_file" value="<?php echo $user['portifolio']; ?>">
        </div>
		<button type="submit" class="btn btn-primary  btn-round" style="padding:10px; margin-top:30px; border-radius:20px; width:30%" >Submit</button>

		</div>
		
		</div>
		
	</form>	
	

</div>

    </div>
    <!--/container-->
    <!--=== End Content Part ===-->
	<?php var_dump($user);?> 
	<!-- <iframe src="<?php  echo base_url('Welcome/view_pdf'); ?>" frameborder="0" style="width:100%; height:500px;"></iframe> -->
	<!-- <embed src="<?php echo base_url('uploads/'.$user['user_id'].'/'.$user['portifolio']);?>" #toolbar=0 width="100%" height="100%" />	 -->
     <!--=== Footer Version 1 ===-->
    

     <div class="footer-v9 text-center">
			<div class="container">
				<div class="page-scroll">
					<a href="#body" class="footer-logo">
						<img src="<?php echo base_url();?>assets/img/logo-dark3.png" alt="Logo" class="g-mb-30">
					</a>
				</div>
				<div class="g-mb-35"></div>
				<ul class="g-social-icons-v2 g-mb-30">
					<li>
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-v9-menu list-inline">
					<li class="page-scroll">
						<a href="#About">About</a>
					</li>
					<li class="page-scroll">
						<a href="#WhyWe">Why We</a>
					</li>
					<li class="page-scroll">
						<a href="#Services">Services</a>
					</li>
					<li class="page-scroll">
						<a href="#WorkProcess">Work Process</a>
					</li>
					<li class="page-scroll">
						<a href="#Skills">Skills</a>
					</li>
					<li class="page-scroll">
						<a href="#Team">Team</a>
					</li>
					<li class="page-scroll">
						<a href="#Testimonials">Testimonials</a>
					</li>
					<li class="page-scroll">
						<a href="#Contact">Contact</a>
					</li>
					<li class="page-scroll">
						<a href="">Blog</a>
					</li>
					<li class="page-scroll">
						<a data-target="#adminLogin" data-toggle="modal" >Admin Login</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End Footer 9 -->

	</main>

	<!-- JS Global Compulsory -->
	<script src="<?php echo base_url();?>asset1/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- JS Implementing Plugins -->
	<script src="<?php echo base_url();?>asset1/plugins/smoothScroll.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/jquery.easing.min.js"></script>
	<script src="<?php echo base_url();?>https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script>
	<script src="<?php echo base_url();?>assets/js/plugins/gmaps-ini.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/circles-master/circles.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/jquery-appear.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/wow/dist/wow.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/owl-carousel2/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>

	<!-- REVOLUTION JS FILES -->
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo base_url();?>asset1/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- JS Page Level -->
	<script src="<?php echo base_url();?>asset1/js/one.app.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/owl-carousel2.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/progress-bar.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/circles-master.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/promo.js"></script>
	<script src="<?php echo base_url();?>assets/js/forms/contact.js"></script>

	<script>
		$(function () {
			App.init();
			OwlCarousel.initOwlCarousel();
			ContactForm.initContactForm();
			CirclesMaster.initCirclesMaster();
			ProgressBar.initProgressBarHorizontal();
			new WOW().init();
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/page_portfolio.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			App.init();
			StyleSwitcher.initStyleSwitcher();
			PortfolioPage.init();
		});
	</script>
</body>
</html>
