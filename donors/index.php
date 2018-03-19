<?php
include('config.php');
include('../header.php');

if(isset($_GET['last_msg_id'])){
	$last_msg_id=$_GET['last_msg_id'];
}
else{
		$last_msg_id=0;
}


if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
		$action="";
}

if($action <> "get")
{
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Techanalogy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A new photo app that makes it easy for groups to share photos with each other instantly." />
	<meta name="keywords" content="create photo groups, group community, instant photos with groups, photo sharing, group photo sharing, share photos with groups, group photos, camera app, best camera app, real-time photo sharing, photo editing, image editing, photo filters, trendy filters, photo art, turn photos into art, turn photos into painting, photo to painting, photo stickers, animated stickers, personalise photos, personalize photos, create gif images, gif photos, animated photo, enhance photos," />
	
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="http://techanalogy.com"/>
	<meta property="og:site_name" content="Techanalogy"/>
	<meta property="og:description" content="Techanalogy"/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
			
		function last_msg_funtion() 
		{ 
		   
           var ID=$(".message_box:last").attr("id");
			$('div#row').html('<img src="bigLoader.gif">');
			$.post("index.php?action=get&last_msg_id="+ID,
			
			function(data){
				if (data != "") {
				$(".message_box:last").after(data);			
				}
				$('div#row').empty();
			});
		};  
		
		$(window).scroll(function(){
			if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			   last_msg_funtion();
			}
		}); 
		
	});
</script>

	<!-- favicon.png -->
	<link rel="shortcut icon" href="../images/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Default Theme Style -->
	<link rel="stylesheet" href="../css/red.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">

	
	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="http://www.vebbler.com/js/respond.min.js"></script>
	<![endif]-->


<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>




	</head>

	<body>

	<!-- Loader -->
	<div class="vblr-loader"></div>
	
	<div id="vblr-page">
		<section id="vblr-header" >
			<div class="container">
				<nav role="navigation" >
					<h1 id="vblr-logo"><a href="../index.php"><img src="../images/v-logoo.png" style="float:left;" /><span></span></a></h1>
				</nav>
			</div>
		</section>
		<!-- END #vblr-header -->

		<section id="vblr-hero" class="" style="background-image: url(../images/singerb.jpg);height:200px;" data-next="yes">
			
		</section>
		<!-- END #vblr-hero -->
		
		<section id="vblr-features">
			<div class="container">
				<div class="row text-center row-bottom-padded-md">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="vblr-lead animate-box fadeInUp animated">Donors</h2>
						<p class="fh5co-bio animate-box fadeInUp animated"></p>
					</div>
				</div>
				<div class="row">
					

<?php

include('load_first.php');

?>



						







							
					
					
				</div>
				<br />
				
			</div>
		</section>
		<!-- END #vblr-features -->
		
		<!-- END #vblr-features-3 -->
		
	

		<footer id="vblr-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="vblr-footer-widget">
							<h3>Company</h3>
							<ul class="vblr-links">
								<li><a href="about.html">About</a></li>
								<li><a href="press.html">Press</a></li>
								<li><a href="faq.html">FAQs</a></li>
								<li><a href="http://blog.vebbler.com">Blog</a></li>
								<li><a href="https://s3.amazonaws.com/vebbler-static/privacy-policy.html">Privacy Policy</a></li>
								<li><a href="https://s3.amazonaws.com/vebbler-static/terms-and-conditions.html">Terms of Service</a></li>
								<li><a href="https://s3.amazonaws.com/vebbler-static/community-guidelines.html">Community Guidelines</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="vblr-footer-widget">
							<h3>Product</h3>
							<ul class="vblr-links">
								<li><a href="../patients" >Patient's Portal</a></li>
								<li><a href="#" >Donor's Portal</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="vblr-footer-widget">
							<h3>Contact Us</h3>
							<p>
								<a href="mailto:info@happytohelp.com">info@happytohelp.com</a> <br>
								Bengaluru, India. <br>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="vblr-footer-widget">
							<h3>Follow Us</h3>
							<ul class="vblr-social">
								<li><a href="http://facebook.com/"><i class="icon-facebook"></i></a></li>
								<li><a href="http://twitter.com/"><i class="icon-twitter"></i></a></li>
								<li><a href="http://instagram.com/"><i class="icon-instagram"></i></a></li>
								<li><a href="http://youtube.com/"><i class="icon-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="vblr-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="vblr-left"><small>&copy; 2017 <a href="index.php">Happy To Help</a>. All Rights Reserved.</small></p>
							<p class="vblr-right"><small>Made with love<i class="icon-heart"></i> in Pune</small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #vblr-footer -->
	</div>
	<!-- END #vblr-page -->

	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	f
	<!-- Main JS -->
	<script src="../js/main.js"></script>

		
    
   
	</body>
</html>
<?php
}
else
{
 
include('load_second.php');		
	
		}
		?>	

