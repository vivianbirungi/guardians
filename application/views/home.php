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
  .pie {
  --p:20;
  --b:22px;
  --c:darkred;
  --w:150px;

  width: var(--w);
  aspect-ratio: 1;
  position: relative;
  display: inline-grid;
  margin: 5px;
  place-content: center;
  font-size: 25px;
  font-weight: bold;
  font-family: sans-serif;
}
.pie:before,
.pie:after {
  content: "";
  position: absolute;
  border-radius: 50%;
}
.pie:before {
  inset: 0;
  background:
    radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
    conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
  -webkit-mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
          mask: radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
}
.pie:after {
  inset: calc(50% - var(--b)/2);
  background: var(--c);
  transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
}
.animate {
  animation: p 1s .5s both;
}
.no-round:before {
  background-size: 0 0, auto;
}
.no-round:after {
  content: none;
}
@keyframes p{
  from{--p:0}
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
							<li class="page-scroll">
								<a href="#About">
									<span data-hover="About">About</span>
								</a>
							</li>
						
							<li class="page-scroll">
								<a href="#Services">
									<span data-hover="Services">Services</span>
								</a>
							</li>
							
							
							
							<li class="page-scroll">
								<a href="#Portifolio">
									<span data-hover="Portifolio">Portifolio</span>
								</a>
							</li>
							<li class="page-scroll">
								<a href="#WorkProcess">
									<span data-hover="Work Process">Work Process</span>
								</a>
							</li>
							<li class="page-scroll">
								<a href="#Skills">
									<span data-hover="Skills">Skills</span>
								</a>
							</li>
							<li class="page-scroll">
								<a href="#Team">
									<span data-hover="Team">Team</span>
								</a>
							</li>
							<li class="page-scroll">
								<a href="#Testimonials">
									<span data-hover="Testimonials">Testimonials</span>
								</a>
							</li>
							<li class="page-scroll">
								<a href="#Contact">
									<span data-hover="Contact">Contact</span>
								</a>
							</li>
							<li class="page-scroll">
						<a href="">Blog</a>
					</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!--=== End Header ===-->

		<!-- Promo Block -->
		<div class="promo">
			<div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
				<div id="rev_slider_104_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-309"  data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
						 data-masterspeed="1000" data-thumb="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_3-100x50.jpg" data-rotate="0"
						 data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Guardians of Nature"
						 data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
							 data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-309-layer-11" data-x="['center','center','center','center']"
							 data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full"
							 data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;"
							 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0"
							 data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-309-layer-1" data-x="['left','left','left','left']"
							 data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
							 data-fontsize="['110','100','70','60']" data-lineheight="['110','100','70','60']" data-width="['none','none','none','400']"
							 data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];"
							 data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide"
							 data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">Guardians of Nature
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-309-layer-4" data-x="['left','left','left','left']"
							 data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
							 data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
							 data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">We foster development in the broad areas of fisheries, aquaculture and agriculture
							</div>

							<!-- LAYER NR. 4 -->
							

							<!-- LAYER NR. 5 -->
							<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-309-layer-12" data-x="['left','left','left','left']"
							 data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							 data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide"
							 data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
								<i class="fa fa-chevron-right"></i>
							</div>
						</li>
						
						<!-- SLIDE  -->
						<li data-index="rs-310" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
						 data-masterspeed="1000"  data-start="700" data-basealign="slide" data-thumb="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/typing_cover-100x50.jpg" data-rotate="0"
						 data-saveperformance="off" data-title="Great Consultancy" data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/typing_cover.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
							 data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- BACKGROUND VIDEO LAYER -->
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-310-layer-11" data-x="['center','center','center','center']"
							 data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full"
							 data-height="['400','400','400','550']" data-whiFtespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;"
							 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="700"
							 data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-310-layer-1" data-x="['left','left','left','left']"
							 data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
							 data-fontsize="['110','100','70','60']" data-lineheight="['100','90','60','60']" data-width="['none','none','none','400']"
							 data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
							 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="750" data-splitin="none" data-splitout="none"
							 data-basealign="slide" data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">Great Consultancy
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-310-layer-4" data-x="['left','left','left','left']"
							 data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
							 data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
							 data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="800" data-splitin="none"
							 data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">We provide the best consultancy services for your business
							</div>

							<!-- LAYER NR. 4 -->
						

							<!-- LAYER NR. 5 -->
							<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-310-layer-12" data-x="['left','left','left','left']"
							 data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							 data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="800" data-splitin="none"
							 data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide"
							 data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
								<i class="fa fa-chevron-right"></i>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-311" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
						 data-masterspeed="1000" data-thumb="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_1-100x50.jpg" data-rotate="0"
						 data-saveperformance="off" data-title="Guardians of Nature" data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
							 data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-311-layer-11" data-x="['center','center','center','center']"
							 data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full"
							 data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;"
							 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0"
							 data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-311-layer-1" data-x="['left','left','left','left']"
							 data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
							 data-fontsize="['110','100','70','60']" data-lineheight="['100','90','60','60']" data-width="['none','none','none','400']"
							 data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];"
							 data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide"
							 data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">Proposal Writing
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-311-layer-4" data-x="['left','left','left','left']"
							 data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
							 data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
							 data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">We write eye-catching proposals for our clients  for all kind of projects 
							</div>

							<!-- LAYER NR. 4 -->
							

							<!-- LAYER NR. 5 -->
							<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-311-layer-12" data-x="['left','left','left','left']"
							 data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							 data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide"
							 data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
								<i class="fa fa-chevron-right"></i>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-312" data-transition="slideoverhorizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
						 data-masterspeed="1000" data-thumb="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_3-100x50.jpg" data-rotate="0"
						 data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Guardians of Nature"
						 data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url();?>asset1/plugins/revolution-slider/assets/images/bigbold_3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
							 data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" id="slide-312-layer-11" data-x="['center','center','center','center']"
							 data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full"
							 data-height="['400','400','400','550']" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;"
							 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-start="0"
							 data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.45) 100%);">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" id="slide-312-layer-1" data-x="['left','left','left','left']"
							 data-hoffset="['50','50','30','17']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','160']"
							 data-fontsize="['110','100','70','60']" data-lineheight="['110','100','70','60']" data-width="['none','none','none','400']"
							 data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];"
							 data-mask_out="x:inherit;y:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-basealign="slide"
							 data-responsive_offset="off" style="z-index: 6; white-space: nowrap;">Guardians of Nature
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption BigBold-SubTitle   rs-parallaxlevel-0" id="slide-312-layer-4" data-x="['left','left','left','left']"
							 data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
							 data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
							 data-height="['60','100','100','100']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">We foster development in the broad areas of fisheries, aquaculture and agriculture
							</div>

							<!-- LAYER NR. 4 -->
							

							<!-- LAYER NR. 5 -->
							<div class="tp-caption BigBold-Button rev-btn  rs-parallaxlevel-0" id="slide-312-layer-12" data-x="['left','left','left','left']"
							 data-hoffset="['676','676','226','216']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','30','20']"
							 data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							 data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
							 data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="650" data-splitin="none"
							 data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-basealign="slide"
							 data-responsive_offset="off" data-responsive="off" style="z-index: 9; white-space: nowrap;padding:15px 20px 15px 20px;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
								<i class="fa fa-chevron-right"></i>
							</div>
						</li>
					</ul>
					<div class="tp-static-layers"></div>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div>
			<!-- END REVOLUTION SLIDER -->
		</div>
		<!-- End Promo Block -->

		<!-- About Us Block -->
		<div class="chess-about-us equal-height-columns clearfix" id="About">
			<div class="chess-about-us-item chess-about-us-item--1 equal-height-column">
				<div class="chess-about-us-inner chess-about-us-inner--left">
					<h3>We love our customers</h3>
					<p>our customers' needs come first ready and pleased to help out whenever necessary until you are satisified to the fullest. lets connect on our social media pages and the blog</p>
				</div>
			</div>
			<div class="chess-about-us-item chess-about-us-item--2 chess-about-us-item--dark equal-height-column">
				<div class="chess-about-us-inner chess-about-us-inner--right">
					<h3>We are creative</h3>
					<p>Creative production is often characterized by the divergent nature of human thought and action. we are characterised by fluency, elaboration, flexibility and originality</p>
				</div>
			</div>
			<div class="chess-about-us-item chess-about-us-item--3 chess-about-us-item--dark equal-height-column">
				<div class="chess-about-us-inner chess-about-us-inner--left">
					<h3>We are pragmatic</h3>
					<p>whatever project we take on, proves the practicality in our company with solutions to the problems in the real world. </p>
				</div>
			</div>
			<div class="chess-about-us-item chess-about-us-item--4 equal-height-column">
				<div class="chess-about-us-inner chess-about-us-inner--right">
					<h3>We are professional</h3>
					<p>The experience we have, is reviled in the work done by all our team members. In this we have neccessary and the best qualifiaction to out put the best for you.</p>
				</div>
			</div>
			<img src="<?php echo base_url();?>assets/img-temp/team2.jpg" alt="">
		</div>
		<!-- End About Us Block -->

		<!-- Why We Block -->
		<div class="why-we equal-height-columns g-heading-v7 g-mb-80 clearfix" id="Services">
			<div class="why-we-item why-we-item--light equal-height-column">
				<div class="why-we-item-inner">
					<h2 class="h2">
						<em class="block-name"></em>Our Objectives</h2>
					<p>a) To carry on business as a General Commercial Company</p>
					<p>b) To engage in the business of  running/operating a consultancy firm</p>
					<p>c) To foster development in the broad areas of fisheries, aquaculture and agriculture .</p>
					<p> d) To foster sustainable environmental conservation using several interventions such as: Research for development, 
						Writing policy briefs, Educational awareness campaigns, 
						Fostering strategic partnerships at national, regional and international levels, 
						Engaging other professionals and businesses in multidisciplinary and interdisciplinary approach,
						Production and processing of goods and services using endowments of nature such as flora and fauna, Conservation, Preservation and advocacy of our natural and human history – encompassing for example culture and tradition, museum collections, botanical gardens and arboretum.</p>
					<p>e) To do all such other things as may be deemed incidental or conducive to the attainment of the above objects or any of them. </p>
						
					</p>
				</div>
			</div>

			<div class="why-we-item why-we-item--dark equal-height-column">
				<div class="why-we-item-inner">
				    <div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
						
					</div>
					<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
						<div class="g-display-td g-text-middle hidden-xs">
							<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-magnet"></i>
						</div>
						<div class="g-display-td g-text-top">
							<h4>Proposal writting</h4>
							<p>Our proposal writing service provides the writing and strategic skills needed for must-win opportunities. We provide compliant copy, compelling writing, risk identification, and on-time delivery.</p>
						</div>
					</div>
					<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
						<div class="g-display-td g-text-middle hidden-xs">
							<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-magic-wand"></i>
						</div>
						<div class="g-display-td g-text-top">
							<h4>Educational awareness</h4>
							<p>We can offer a huge gamut of Educational Awareness Services to our clients. We make society aware of the concerns of the people and promote better understanding of benifits of being educated</p>
						</div>
					</div>
					<div class="g-display-table wow fadeInRight" data-wow-offset="20" data-wow-duration="1.75s">
						<div class="g-display-td g-text-middle hidden-xs">
							<i class="icon-custom icon-2lg rounded-x icon-color-u icon-border-v2 icon-line icon-calculator"></i>
						</div>
						<div class="g-display-td g-text-top">
							<h4>consultancy</h4>
							<p>Aliquam dignissim, leo sit amet pulvinar dapibus, neque sapien bibendum massa, a efficitur massa mauris a augue. Suspendisse
								faucibus.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Why We Block -->

	

		<!--=== Content Part ===-->
		<div class="container content text-center g-heading-v7 g-mb-80" id="Portifolio">
  
  			<div style="margin-top:70px; text-align:center">
			  <h2 class="h2">
				<em class="block-name">Portifolio</em> Our Portifolio</h2>
			</div>
			<!-- Portfolio Sorting Blocks -->
			<div class="sorting-block">
				<div class="content-xs">
					<ul class="sorting-nav sorting-nav-v1 text-center">
						<li class="filter" data-filter="all">All</li>
						<?php 
							if( count( $categories ) > 0 ) {
								foreach($categories as $portifolio){
									echo '<li class="filter" data-filter="'.$portifolio->category.'">'.$portifolio->category.'</li>';
								}
							}
						?>
		
					</ul>
				</div>

				<ul class="row sorting-grid">
					<?php 
						if( count( $categories ) > 0 ) {
							foreach($portifolios as $portifolio){
								echo '<li class="col-md-3 col-sm-6 col-xs-12 mix '.$portifolio->category.'" data-cat="1">
									<a href="'.base_url().'welcome/tryPage/'.$portifolio->portifolio_id.'">
										<img class="img-responsive" src="'.base_url().'assets/img/main/'.$portifolio->portifolio_image.'" alt="">
										<span class="sorting-cover">
											<span>'.$portifolio->portifolio_name.'</span>
										</span>
									</a>
								</li>';
							}
						}
					?>
				</ul>

				<div class="clearfix"></div>
			</div>
			<!-- End Portfolio Sorting Blocks -->
		</div>
		<!--/container-->
		<!--=== End Content Part ===-->

		<!-- How We Work -->
		<div class="v-tab-content text-center g-heading-v7 g-mb-80" id="WorkProcess">
			<div class="container">
				<h2 class="h2">
					<em class="block-name">Work Process</em> How We Work</h2>
				<div class="row g-mb-70">
					<div class="col-sm-8 col-sm-offset-2">
						Our main three sectors i.e. Fisheries and aquaculture, Animal Husbandry and Forestry follow a defined process to give a fine output.
					</div>
				</div>

				<div class="row text-left">
					<div class="col-sm-3">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-stacked g-mb-30" role="tablist">
							<li role="presentation" class="active">
								<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Fisheries and aquaculture</a>
							</li>
							<li role="presentation">
								<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Animal Husbandry</a>
							</li>
							<li role="presentation">
								<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Forestry</a>
							</li>
						</ul>
					</div>

					<div class="col-sm-9">
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="tab1">
								<p class="g-mb-30">
									<img src="<?php echo base_url();?>assets/img-temp/process/2.jpg" alt="" class="img-responsive">
								</p>
								<div class="row mob">
									<div class="col-md-4 col-sm-6 g-mb-30">
										<div class="g-display-table g-mb-15">
											<div class="g-display-td g-text-middle">
												<i class="num-icon-v2">1</i>
											</div>
											<div class="g-display-td g-text-middle">
												<h4>Discuss With Client</h4>
											</div>
										</div>

										<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus
											turpis. Donec vel pharetra tellus. Sed non est lacus.</p>
									</div>
									<div class="col-md-4 col-sm-6 g-mb-30">
										<div class="g-display-table g-mb-15">
											<div class="g-display-td g-text-middle">
												<i class="num-icon-v2">2</i>
											</div>
											<div class="g-display-td g-text-middle">
												<h4>Pitching with Executive Leadership Teams</h4>
											</div>
										</div>

										<p>Cras sit amet varius velit. Maecenas porta condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis
											dis. Donec vel pharetra tellus. Sed non est lacus.</p>
									</div>
									<div class="col-md-4 col-sm-6 g-mb-30">
										<div class="g-display-table g-mb-15">
											<div class="g-display-td g-text-middle">
												<i class="num-icon-v2">3</i>
											</div>
											<div class="g-display-td g-text-middle">
												<h4>Creative Concept</h4>
											</div>
										</div>

										<p>Nam in nisl volutpat ex bibendum sollicitudin. Praesent ac magna convallis, sagittis erat in, dapibus mauris. Donec
											vel pharetra tellus. Sed non est lacus.</p>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="tab2">
								<p class="g-mb-30">
									<img src="<?php echo base_url();?>assets/img/main/goat1.jpg" alt="" class="img-responsive">
								</p>
								<div class="row">
									<div class="col-sm-6 g-mb-30">
										<div class="g-display-table g-mb-15">
											<div class="g-display-td g-text-middle">
												<i class="num-icon-v2">1</i>
											</div>
											<div class="g-display-td g-text-middle">
												<h4>Creating Proposals</h4>
											</div>
										</div>

										<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus
											turpis. Donec vel pharetra tellus. Sed non est lacus.</p>
									</div>
									<div class="col-sm-6 g-mb-30">
										<div class="g-display-table g-mb-15">
											<div class="g-display-td g-text-middle">
												<i class="num-icon-v2">2</i>
											</div>
											<div class="g-display-td g-text-middle">
												<h4>Closing the Deal</h4>
											</div>
										</div>

										<p>Cras sit amet varius velit. Maecenas porta condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis
											dis. Donec vel pharetra tellus. Sed non est lacus.</p>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab3">
								<p class="g-mb-30">
									<img src="<?php echo base_url();?>assets/img/main/green2.jpg" alt="" class="img-responsive">
								</p>
								<p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem,
									vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem
									eros vel odio.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End How We Work -->

		<!-- Our Best Side -->
		<div class="container text-center g-heading-v7 g-mb-80" id="Skills">
		    <div style="height:60px;"></div>
			<h2 class="h2">
				<em class="block-name">Skills</em> Our Best Side</h2>
			<div class="row g-mb-70">
				<div class="col-sm-8 col-sm-offset-2">
					
				</div>
			</div>

			<!-- Pie Charts v3 -->
			<div class="row pie-progress-charts g-mb-50">
				<div class="inner-pchart col-md-3 col-sm-6 g-mb-30--sm">
				<div class="pie animate" style="--p:90;--c:#228B22; --b:10px; margin-bottom:40px"> 90%</div>

					<h4 class="g-mb-15">Happy Clients</h4>
					<p>Our clients are our priority , the big percentage is for them.</p>
				</div>
				<div class="inner-pchart col-md-3 col-sm-6 g-mb-50--sm">
				<div class="pie animate" style="--p:80;--c:#228B22; --b:10px; margin-bottom:40px"> 80%</div>
					<h4 class="g-mb-15">Consultancy</h4>
					<p>The clients we have given this service testify to the effort and their deliverables show</p>
				</div>
				<div class="inner-pchart col-md-3 col-sm-6 g-mb-30--sm">
				<div class="pie animate" style="--p:70;--c:#228B22; --b:10px; margin-bottom:40px"> 70%</div>

					<h4 class="g-mb-15">Our Team</h4>
					<p>our team has skills in achieving targets set for both our clients and the company at large</p>
				</div>
				<div class="inner-pchart col-md-3 col-sm-6">
				<div class="pie animate" style="--p:100;--c:#228B22; --b:10px; margin-bottom:40px"> 100%</div>

					<h4 class="g-mb-15">COMPLETED PROJECTS</h4>
					<p>our projects have so far raised this percentage for our company and we are proud of the effort and skills offered</p>
				</div>
			</div>
			<!-- End Pie Charts v3 -->		
		</div>
		<!-- End Our Best Side -->

		<!-- Our Team -->
		<div class="our-team-v4 text-center g-heading-v7" id="Team">
			<div class="our-team-v4-start">
				<div class="container">
					<h2 class="h2">
						<em class="block-name">Our Team</em> Work With Professionals</h2>
					<div class="row g-mb-30">
						<div class="col-sm-8 col-sm-offset-2">
							Guardians of Nature has trained and dedicated team ready to serve our clients with complete dedication to their work.
						</div>
					</div>
				</div>
			</div>

			<div class="container our-team-v4-members" >
				<div class="row">
					<!-- Col -->
					<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
						<div class="our-team-v4-member g-mb-50">
							<div class="our-team-v4-member-wrapper g-mb-40">
								<img src="<?php echo base_url();?>assets/img-temp/team/2.jpg" alt="">
								<div>
									<em>
										changing your mind and changing world
									</em>
									<ul class="g-social-icons-v2">
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
								</div>
							</div>
							<em class="our-team-v4__role">Company Director</em>
							<strong class="our-team-v4__name">Margaret Masette</strong>
							<span class="our-team-v4__position">Head Photographer</span>
							<a style="color:dodgerblue" data-target="#person1" data-toggle="modal">View full profile</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
						<div class="our-team-v4-member g-mb-50">
							<div class="our-team-v4-member-wrapper g-mb-40">
								<img src="<?php echo base_url();?>assets/img-temp/team/2.jpg" alt="">
								<div>
									<em>
										changing your mind and changing world
									</em>
									<ul class="g-social-icons-v2">
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
								</div>
							</div>
							<em class="our-team-v4__role">Company Director</em>
							<strong class="our-team-v4__name">Margaret Masette</strong>
							<span class="our-team-v4__position">Head Photographer</span>
							<a style="color:dodgerblue" data-target="#person1" data-toggle="modal">View full profile</a>
						</div>
					</div>
					<!-- End Col -->
					<!-- Col -->
					<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
						<div class="our-team-v4-member g-mb-50">
							<div class="our-team-v4-member-wrapper g-mb-40">
								<img src="<?php echo base_url();?>assets/img-temp/team/5.jpg" alt="">
								<div>
									<em>
										changing your mind and changing world
									</em>
									<ul class="g-social-icons-v2">
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
								</div>
							</div>
							<em class="our-team-v4__role">Company Director</em>
							<strong class="our-team-v4__name">Kubiriza Kawooya Godfrey</strong>
							<span class="our-team-v4__position">Fisheries Department</span>
							<a style="color:dodgerblue" data-target="#person2" data-toggle="modal">View full profile</a>
						</div>
					</div>
					<!-- End Col -->
					<!-- Col -->
					<div class="col-md-3 col-sm-6 col-xs-6 col-2xs-12">
						<div class="our-team-v4-member g-mb-50">
							<div class="our-team-v4-member-wrapper g-mb-40">
								<img src="<?php echo base_url();?>assets/img-temp/team/1.jpg" alt="">
								<div>
									<em>
										changing your mind and changing world
									</em>
									<ul class="g-social-icons-v2">
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
								</div>
							</div>
							<em class="our-team-v4__role">Company Director</em>
							<strong class="our-team-v4__name">Robinson Odong</strong>
							<span class="our-team-v4__position">Zoology, Entomology and Fisheries Sciences</span>
							<a style="color:dodgerblue" data-target="#person3" data-toggle="modal">View full profile</a>
						</div> 
					</div>
					<!-- End Col -->
					<!-- Col -->
					
					<!-- End Col -->
				</div>
			</div>
		</div>
		<!-- End Our Team -->

		<!-- Testimonials & Clients -->
		<div class="testimonials-clients clearfix" id="Testimonials">
			<div class="tc-testimonials">
				<div class="testimonials-clients-block">
					<div class="testimonials-v6">
						<div class="testimonials-v6-item">
							<div class="g-display-table g-mb-25">
								<div class="g-display-td g-text-middle">
									<img src="<?php echo base_url();?>assets/img-temp/testimonials/1.jpg" alt="">
								</div>
								<div class="g-display-td g-text-middle">
									<strong>Melissa Jordany</strong>
									<em>Gray Consultion Corp.</em>
								</div>
							</div>
							<blockquote>
								Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur
								lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo
								id ipsum tempus mollis.
							</blockquote>
						</div>
						<div class="testimonials-v6-item">
							<div class="g-display-table g-mb-25">
								<div class="g-display-td g-text-middle">
									<img src="<?php echo base_url();?>assets/img-temp/testimonials/2.jpg" alt="">
								</div>
								<div class="g-display-td g-text-middle">
									<strong>Joe Armstrong</strong>
									<em>Blue Yellow Sky Corp.</em>
								</div>
							</div>
							<blockquote>
								Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur
								lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo
								id ipsum tempus mollis.
							</blockquote>
						</div>
					</div>
				</div>
			</div>

			<div class="tc-testimonials-clients why-we-item--dark">
				<div class="testimonials-clients-block">
					<ul class="owl-clients-v5">
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/1.png" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/2.png" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/3.png" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/4.png" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/5.png" alt="">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>assets/img-temp/clients/6.png" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Testimonials & Clients -->

		<!-- Contacts -->
		<div class="contacts-v4 text-center g-heading-v7 equal-height-columns" id="Contact">
			<div class="container g-pt-80 g-pb-30">
				<h2 class="h2">
					<em class="block-name">Contact Us</em> Get In Touch</h2>
			</div>
			<div class="row">
				<div class="col-sm-3 contacts-v4-info contacts-v4-info--dark equal-height-column">
					<i class="icon-line icon-map icon-v4 g-mb-30"></i>
					<div>
						<em>Address</em>
						<strong>5 Buku Close<br>
							P. O. Box 168<br>
							Entebbe</strong>
					</div>
				</div>
				<div class="col-sm-3 contacts-v4-info equal-height-column">
					<i class="icon-line icon-screen-smartphone icon-v4 g-mb-30"></i>
					<div>
						<em>Phone Number</em>
						<strong>0772394289/0704316396</strong>
					</div>
				</div>
				<div class="col-sm-3 contacts-v4-info contacts-v4-info--dark equal-height-column">
					<i class="icon-line icon-envelope-letter icon-v4 g-mb-30"></i>
					<div>
						<em>Email</em>
						<strong>
							<a href="mailto:info@guardiansofnature.com">info@guardiansofnature.com</a>
						</strong>
					</div>
				</div>
				<div class="col-sm-3 contacts-v4-info equal-height-column">
					<i class="icon-line icon-call-in icon-v4 g-mb-30"></i>
					<div>
						<em>Call Free</em>
						<strong>+48 555 1258 987</strong>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contacts -->

		<!-- Form -->
		<div class="g-section-bg-gray text-center g-pt-60 g-pb-70 g-heading-v7">
			<div class="container">
				<h3>Have A Questions?</h3>
				<div class="row g-mb-40">
					<div class="col-sm-8 col-sm-offset-2">
						Draft it here and we shall respond to you as soon as possible
					</div>
				</div>
				<form action="#" class="sky-form" method="post" id="sky-form3">
					<fieldset>
						<div class="row">
							<div class="col-sm-6 g-mb-25">
								<label class="input">
									<input type="text" placeholder="Your name" name="name" id="name">
								</label>
							</div>
							<div class="col-sm-6 g-mb-25">
								<label class="input">
									<input type="text" placeholder="Your phone" name="phone" id="phone">
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 g-mb-25">
								<label class="select">
									<select name="department">
										<option value="0">Department</option>
										<option value="1">Department 1</option>
										<option value="2">Department 2</option>
										<option value="3">Department 3</option>
										<option value="4">Department 4</option>
									</select>
									<i></i>
								</label>
							</div>
							<div class="col-sm-6 g-mb-25">
								<label class="input">
									<input type="text" placeholder="Subject" name="subject" id="subject">
								</label>
							</div>
						</div>
						<div class="row g-mb-35">
							<div class="col-sm-12">
								<label class="textarea textarea-expandable">
									<textarea rows="3" placeholder="Message" name="message" id="message"></textarea>
								</label>
							</div>
						</div>
						<button type="submit" class="btn-u btn-u-lg btn-u-red btn-u-upper">Send Message</button>
					</fieldset>

					<!-- Success Message -->
					<div class="message">
						<i class="rounded-x fa fa-check"></i>
						<p>Your message was successfully sent!</p>
					</div>
				</form>
			</div>
		</div>
		<!-- END Form -->

		<!-- GMaps -->
		
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.817643978226!2d32.43488471409558!3d0.033361964400991866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d8134f3b79eb1%3A0xfb3cc7ec0fe58544!2sBuku%20Rd%2C%20Entebbe!5e0!3m2!1sen!2sug!4v1677582168145!5m2!1sen!2sug" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<!-- END GMaps -->

		<!-- Footer 9 -->
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
		<div class='modal fade' role="dialog" id="person1">
		<div  class="modal-dialog">
		<div  class="modal-content">
		<div  class="modal-header">Margaret Masette Company Director</div>
		<div  class="modal-body">
		<p>Margaret Masette is an employee of National Agricultural Research Organization (NARO),
		as a Senior Research Officer working with Food Bioscience and Agri-business (FBA), one of the six programs under National
		Agricultural Research Laboratories. She started working with Ministry of Agriculture, Animal industry and Fisheries 
		(MAAIF) in 1980s and transferred her services to NARO at its inception in 1994 as a Research Officer. FBA is mandated to generate information and offer support services to fast-track agri-food systems and enterprises in Uganda. As a senior researcher, she supervises research activities for a dozen scientists and creates linkages with food processing industrialists and development partners. She also offers lectures and supervises special projects for both undergraduate and post-graduate students in post-harvest fisheries, marketing and transportation courses in the Department of Zoology, Entomology and Fisheries Sciences,
		Makerere University.</p>
		<p>She is also implementing FAO funded project that is designed to combat malnutrition among vulnerable communities through 
		incorporation of micro-nutrient rich fish powders into staple carbohydrate foods. 
		Part of this study, included a market survey of fish-based feed manufacturers as a start point for fish powder production
		intended for human consumption. In the recent past, she has successfully implemented several projects that included; (1) development of novel products from small pelagic fishes of Ugandan lakes (2) nutritional security of freshwater fish products in the East, Central and Southern African region, (3) assessment of processing technologies for small-sized pelagic fishes from Lake Albert (Brycinus nurse - ragoogi and Neobola bredoi - muziri) and (4) increasing supply of mukene (Rastrineobola argentea) for human consumption. All the projects undertaken link research outputs with end-users who inevitably include consumers, traders and entrepreneurs or industrialists. She has authored many disseminated materials; book chapters, peer-reviewed papers, processing manuals/guides, brochures and leaflets. She is also widely travelled; locally, regionally and internationally.
		Without doubt, she is a hardworking, reliable and competent person who espouses Christian values.</p></div>
		<div class="modal-footer">Guardians of Nature</div>
		</div>
		</div>
</div>

		<div class='modal fade' role="dialog" id="person2">
		<div  class="modal-dialog">
		<div  class="modal-content">
		<div  class="modal-header">Godfrey Kawooya Kubiriza Director</div>
		<div  class="modal-body">
		<p>Godfrey Kawooya Kubiriza, obtained his PhD from The United Nations University Fisheries Training Programme in Iceland
		(UNU-FTP). His PhD thesis research was on “The effects of dietary lipid oxidation on farmed fish”. 
		He is a Lecturer in aquaculture in the Department of Zoology, Entomology and Fisheries Sciences, Makerere University. 
		He is also a Field Attachment Coordinator, linking students to different fish farms in Uganda. 
		He studied sustainable aquaculture management at Holar University College.
		He has vast experience on effective experimental design and statistical analyses of aquaculture growth studies and on 
		the development and preservation of aquafeeds in Africa and elsewhere. 
		He is the technical advisor for the fish farmers in the WALIMI Fish cooperative society (WAFICOS) umbrella, based in 
		Wandegeya, Uganda. Godfrey is the contact person for programs run by his Department with UNU-FTP and the Icelandic 
		International Development Agency (ICEIDA) consulate. In the past, he worked with USAID as a training coordinator
		for “fish project” in the country. Godfrey has also served as a Lecturer in the Natural Resources College of Malawi,
		Lilongwe. Similarly, he was a station manager for growth trials for developing a suitable formulated feeds,
		for use in Cage culture of Tilapia on L. Malawi, and as a Service provider with the National Agricultural Advisory 
		Services to implement Fish farming in Mukono-District.</p>

		</div>
		<div class="modal-footer">Guardians of Nature</div>
		</div>
		</div>
		</div>
<div class='modal fade' role="dialog" id="person3">
    <div  class="modal-dialog">
    <div  class="modal-content">
    <div  class="modal-header"> Dr. Odong Director</div>
    <div  class="modal-body"><p>Dr. Odong is a Lecturer in the Department of Zoology, Entomology and Fisheries Sciences,
	 Makerere University. He has vast experience in Hydrobiology, a subject which he undertook during his MSc studies and that 
	 he teaches. Dr. Odong holds a PhD in Environmental Biotechnology of Makerere University, Uganda, obtained in January 2015.
	  He has vast research experience in Fisheries and Aquaculture. Together with Dr. Kawooya, he is a Coordinator of Fisheries and Aquaculture Field Attachment Programme in the Department of Zoology, Entomology and Fisheries Sciences. He has a lot of experience working with Aquaculture farms, e.g., on the two projects:  (a) “Integration of floating islands and the culture of bivalves to remove pollutants from cage fish farming sites in Lake Victoria and provide high quality protein source for aquafeeds” at Source of the Nile Fish Farm, Buikwe. This project is funded by the Swedish Government through Sida; and (b)  “Harnessing the high protein and nutrient sequestration potential of bivalves for value addition for enhanced profitability of smallholder aquaculture in Uganda”,
	 sponsored by The Regional Universities Forum for Capacity Building in Agriculture (RUFORUM).</p></div>
    <div class="modal-footer">Guardians of Nature</div>
    </div>
	</div>


</div>
<div class='modal fade' role="dialog" id="adminLogin">

		<div  class="modal-dialog">
		<div  class="modal-content">
		<div  class="modal-body" style=" padding:70px;">
		<div class="container" style=" border:5px solid #228B22;
        
        
        height:500px;
        width:400px;">
	<div class="row" style="height:90px;
        
		text-align:center;
        background-color:#ffffff;">
		 <h1> Hello, Admin</h1>
         <p>Welcome back, Login to continue</p>
        </div><br /><br />
         
        <form method="post" action="<?php echo base_url('Welcome/admin_login');?>">
		<div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" style="border-radius:20px; background-color:#fff">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password" style="border-radius:20px">
  </div>
                      
              <button type="submit" class="btn btn-block" style="border-radius:20px ;background-color:#228B22; color:#fff; margin-top:60px"> Login</button>
         
        
 
	</div>
		</form>
		</div>
		<div class="modal-footer">Guardians of Nature</div>
		</div>
		</div>
</div>


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