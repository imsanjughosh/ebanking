<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>INTERNET BANKING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		

	<?php include ('header.php');


	if(isset($_SESSION['ardent'])) {
		header('Location:profile.php');
	}

	 ?>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>INTERNET BANKING</h1>
					<p>Welcome to Internet Banking<br />
					<!--designed by <a href="#">K&S</a></p>-->
				</div>
				<!-- <video autoplay loop muted playsinline src="images/banner.mp4"></video> -->
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Sem turpis amet semper</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Feugiat consequat</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Ante sem integer</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Ipsum consequat</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3>Interdum gravida</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Faucibus consequat</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<h3>Accumsan viverra</h3>
								</header>
								<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>Curabitur ullamcorper ultricies</h2>
					<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
				</div>
			</section>

		<!-- Testimonials -->
			
		<!-- Footer -->
			<?php include('footer.php') ?>

	</body>
</html>