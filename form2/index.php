

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
	

      <link rel="stylesheet" href="css/style.css">

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
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>



  <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript">  </script>
  <script src="http://www.vebbler.com/js/jquery.min.js"></script>

  <script type="text/javascript">


$(document).ready(function() {
    var c=geoplugin_countryName();
      var s=geoplugin_region();
        var ct=geoplugin_city();
    $("#country").text(c);
    $("#state").text(s);
    $("#city").text(ct);



     $("#country_v").hide();
    $("#state_v").hide();
    $("#city_v").hide();

     $("#country_v").val(c);
    $("#state_v").val(s);
    $("#city_v").val(ct);
});

  </script>
  <style type="text/css">
    .upload-btn {
    background-color: #1bbc9b;
    padding: 10px 25px;
    width: 165px;
    font-size: 15px;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.primary-btn, .upload-btn {
    color: #fff;
    border: none;
    display: inline-block;
    font-weight: 400;
    line-height: 1.42857143;
    overflow: hidden;
    cursor: pointer;
    vertical-align: middle;
    text-align: center;
    outline: 0;
}

input {
	height: 10px;
}
  </style>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


	</head>

	<body>

	<!-- Loader -->
	<div class="vblr-loader"></div>
	
	<div id="vblr-page">
		<section id="vblr-header" >
			<div class="container">
				<nav role="navigation" >
					<h1 id="vblr-logo"><a href="../index.html"><img src="../images/v-logo.png" style="float:left;" /><span></span></a></h1>
				</nav>
			</div>
		</section>
		<!-- END #vblr-header -->

		<section id="vblr-hero" class="" style="background-image: url(../images/singerb.jpg);height:200px;" data-next="yes">
			
		</section>
		<!-- END #vblr-hero -->
		
		<section id="vblr-features">
			<div class="container">
			
				<div class="row">
											
 <form class=" form-horizontal" action="signup_check.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-5 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control input-lg"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control input-lg"  type="text">
    </div>
  </div>
</div>




 <div class="form-group">
  <label class="col-md-4 control-label">Hospital</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="hospital" placeholder="Hospital" class="form-control input-lg"  type="text">
    </div>
  </div>
</div>


 <div class="form-group">
  <label class="col-md-4 control-label">Type</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="type" placeholder="Type" class="form-control input-lg"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control input-lg"  type="text">
    </div>
  </div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
   <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="password" placeholder="Password" class="form-control input-lg" type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Mobile #</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="Mob. Number" class="form-control input-lg" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Country</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <div name="country" id="country" placeholder="Country" class="form-control input-lg" type="text"></div>
    
     <input name="country_v" id="country_v"  type="text" >

    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <div id="city" placeholder="city" class="form-control input-lg"  type="text"></div>
      <input name="city_v" id="city_v"  type="text" >


    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-5 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <div id="state" class="form-control input-lg selectpicker" ></div>
      <input name="state_v" id="state_v"  type="text" >

  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control input-lg"  type="text">
    </div>
</div>
</div>

<!-- Text input-->


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="upload-btn" style="background-color: #00ACBC;padding: 10px 25px;width: 470px;font-size: 15px;text-overflow: ellipsis;white-space: nowrap;" >Register<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>







							
					
					
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
								<li><a href="patients" target="_blank">Patient's Portal</a></li>
								<li><a href="donors" target="_blank">Donors's Portal</a></li>
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
							<p class="vblr-left"><small>&copy; 2017 <a href="index.html">Happy To Help</a>. All Rights Reserved.</small></p>
							<p class="vblr-right"><small>Made with love<i class="icon-heart"></i> in Pune</small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #vblr-footer -->
	</div>
	<!-- END #vblr-page -->

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

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
  <script src="js/index.js"></script>
		
    
   
	</body>
</html>


