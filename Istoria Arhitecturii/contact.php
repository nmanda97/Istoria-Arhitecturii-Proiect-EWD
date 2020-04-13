<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Html5xCss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

	$from = "Html5xCss3.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>





	<meta charset="utf-8">
	<title>Istoria arhitecturii</title>
	<meta name="description" content="Arhitectura">
	<meta name="author" content="Olteanu Andrei">




	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">





  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>



		$(function () {

		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>



</head>
<body>
<div class="wrap-body">







<header>
	<div class="top-header">
		<div class="zerogrid">
			<nav id="menu-wrap"><div id="menu-trigger">Meniu</div>
				<ul id="menu" style="display: none;">
					<li><a href="index.html">Acasa</a></li>
					<li>
						<a href="#">Categorii</a>
						<ul>
							<li>
								<a href="#">01</a>
							</li>
							<li>
								<a href="#">02</a>
							</li>
							<li>
								<a href="#">03</a>
								<ul>
									<li><a href="#">31</a></li>
									<li><a href="#">32</a></li>
								</ul>
							</li>
							<li>
								<a href="#">04</a>
								<ul>
									<li><a href="#">41</a></li>
									<li><a href="#">42</a></li>
									<li><a href="#">43</a></li>
									<li><a href="#">44</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="despre.html">Despre</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li style="float:right !important">
						<form method="get" action="/search" id="search" class="f-right">
							<input name="q" type="text" size="40" placeholder="Search..." />
						</form>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="clearfix">
		<div class="wrap-header">
			<div class="row">
				<div class="col-full t-center">
					<div class="wrap-col">
						<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>
						<div class="tagline">   </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="zerogrid">
		<div class="cat-title t-center">
			<a href="#">CONTACT</a>
		</div>
	</div>
</header>

	<section id="container">
		<div class="zerogrid">
			<div class="wrap-container clearfix">
				<div class="row">
					<div id="main-content" class="col-2-3">
						<div class="wrap-content">
							<div class="col-full">
								<div style="margin-top: 60px;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.373106978018!2d23.26772131596246!3d45.03764997909815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474d8a66f3db09ab%3A0x4f386765b0fe90ba!2sCOLEGIUL+NA%C5%A2IONAL+TUDOR+VLADIMIRESCU!5e0!3m2!1sro!2sro!4v1487803484172" width="100%" height="450" frameborder="0" style="border:0"></iframe>

									<div class="contact">
										<h3>Contact </h3>




										<center><?php echo $text;?></center>



										<div id="contact_form">
											<form name="form1" id="ff" method="post" action="contact.php">
												<label class="row">
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
														</div>
													</div>
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="col-full">
														<div class="wrap-col">
														<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="wrap-col">
														<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
														placeholder="Message"></textarea>
													</div>
												</label>
												<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="sidebar" class="col-1-3">









						<div class="widget wid-about">
							<div class="wid-header">
								<h5>DESPRE MINE</h5>
							</div>
							<div class="wid-content">
								<img src="images/10.jpg" />
								<p>Numele meu este Olteanu Andrei Dumitru, elev al Colegiului National "Tudor Vladimirescu" din Targu-Jiu, in clasa a 12-a B. Pe langa scoala, imi dedic timpul liber pasiunii mele pentru arhitectura, urmand ca in acest an sa pasesc pe holurile Facultatii de Arhitectura si Urbanism din Timisoara. Aceasta pasiune m-a condus spre alegerea temei "Istoria arhitecturii", aceasta captandu-mi privirea si dorinta de cunoastere prin descoperirea mesajului din spatele celor mai mari realizari arhitecturale ale lumii.</p>
							</div>
						</div>














						<div class="widget wid-category">
							<div class="wid-header">
								<h5>CATEGORII</h5>
							</div>
							<div class="wid-content">
								<ul>
									<li><a href="#">Arhitectura antica</a></li>
									<li><a href="#">Arhitectura clasica</a></li>
									<li><a href="#">Arhitectura asiatica</a></li>
									<li><a href="#">Arhitectura islamica</a></li>
									<li><a href="#">Arhitectura medievala</a></li>
								</ul>
							</div>
						</div>






						<div class="widget wid-subcribe">
							<div class="wid-header">
								<h5>ABONATI-VA PRIN E-MAIL</h5>
							</div>
							<div class="wid-content">
								<p>Introduceti adresa de e-mail pentru a va abona la pagina mea:</p>

								<form method="get" action="/search" id="subcribe" >
									<input name="q" type="text" size="40" placeholder="Adresa E-mail" />
								</form>
								<a class="button button03" href="#">ABONATI-VA</a>
							</div>
						</div>







						<div class="widget wid-follow">
							<div class="wid-header">
								<h5>URMARESTE-MI MUNCA PE INSTAGRAM</h5>
							</div>
							<div class="wid-content">
								<div class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/15.jpg" /></a>
											<a href="#"><img src="images/16.jpg" /></a>
											<a href="#"><img src="images/17.jpg" /></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/18.jpg" /></a>
											<a href="#"><img src="images/19.jpg" /></a>
											<a href="#"><img src="images/20.jpg" /></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/21.jpg" /></a>
											<a href="#"><img src="images/22.jpg" /></a>
											<a href="#"><img src="images/23.jpg" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







<footer>
	<div class="zerogrid">
		<div class="wrap-footer t-center">
			<div class="row">
				<div class="full">
					
					<div class="copy-right">
						<p>Istoria arhitecturii - Proiect realizat de Olteanu Andrei Dumitru</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}


		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});


		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');
    });
</script>


</div>
</body></html>
