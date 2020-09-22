<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>first task</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="bbody">
	<!--navbar-->
	<nav class="navbar navbar1">
		<!--container for wrapping whole content in a desired width-->
		<div class="container">
			<!--left DD brandname-->
			<div class="navbar-header">
				<a class="navbar-brand navbar2" href="#"><b>DD</b></a>
			</div>
			<!--list of items residing in navbar-->
			<ul class="list-inline mb-0">
				<li class="list-inline-item"><a href="#">PRODUCTEN</a></li>
				<li class="list-inline-item"><a href="#">ABONERREN</a></li>
				<li class="list-inline-item"><a href="#">OVER ONS</a></li>
				<li class="list-inline-item"><a href="#">VAGEN</a></li>
			</ul>
		</div>
	</nav>
	<!--card section for covering the middle section of body-->
	<section>
		<!-- second container for wrapping whole content inside a fixed width-->
		<div class="container">
			<!--blue div at the right-->

			<div class="nonusa-div">
				<img class="cart-img" src="images\images\shopping-cart.png">
				<p class="p1">29.96 (2)</p>
			</div><br><br><br>
			<!--centred paragraph-->
			<div class="row">
				<div class="p2 col-md-12 text-center">
					Sneg el voordelig bestellen<br>Lorem ipsum dollar sit amet,consectatur edipicing elit.<br>Maecenas aliquer feugiet odio at mollis.
				</div>
			</div><br><br>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="cardproduct">
						<div class="left_div p-4 text-center mb-4 ">
							<h2 class="text-success">Abonneren</h2>
							<hr class="bg-success w-50">
							<p class="p3">Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat.</p>
							<button class="btn btn-primary">MEER INFO</button>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="row">
						<?php
						for ($i=0; $i < 6; $i++)
						{
							?>					
							<div class="col-md-4">
								<div class="cardproduct mb-4 text-center">
									<div class="bluediv">
										<h5 class="pt-2 pb-2">Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="m-2" />
									<br>
									<button class="btn btn-success mb-2">KOPEN</button>
									<br>
									<button class="btn btn-primary mb-3">ABONNEREN</button>
								</div>
							</div>
						<?php 
						} 
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

						<!--	<div class="col-md-4">
								<div class="cardproduct">
									<div class="">
										<div class="bluediv">
											<h5 class="text-center">Nutrilon<br>Pronultrat</h5>
										</div>
										<img src="images\images\website_list_page\package.png" class="img3" />
										<br>
										<button class="btn2 btn btn-success">KOPEN</button>
										<br>
										<button class="btn3 btn btn-primary">ABONNEREN</button>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="cardproduct">
									<div class="">
										<div class="bluediv">
											<h5 class="text-center">Nutrilon<br>Pronultrat</h5>
										</div>
										<img src="images\images\website_list_page\package.png" class="img3" />
										<br>
										<button class="btn2 btn btn-success">KOPEN</button>
										<br>
										<button class="btn3 btn btn-primary">ABONNEREN</button>
									</div>
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="cardproduct">
									<div class="">
										<div class="bluediv">
											<h5 class="text-center">Nutrilon<br>Pronultrat</h5>
										</div>
										<img src="images\images\website_list_page\package.png" class="img3" />
										<br>
										<button class="btn2 btn btn-success">KOPEN</button>
										<br>
										<button class="btn3 btn btn-primary">ABONNEREN</button>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="cardproduct">
									<div class="left_div">
										<div class="bluediv">
											<h5 class="text-center">Nutrilon<br>Pronultrat</h5>
										</div>
										<img src="images\images\website_list_page\package.png" class="img3" />
										<br>
										<button class="btn2 btn btn-success">KOPEN</button>
										<br>
										<button class="btn3 btn btn-primary">ABONNEREN</button>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="cardproduct">
									<div class="outerdiv">
										<div class="bluediv">
											<h5 class="text-center">Nutrilon<br>Pronultrat</h5>
										</div>
										<img src="images\images\website_list_page\package.png" class="img3" />
										<br>
										<button class="btn2 btn btn-success">KOPEN</button>
										<br>
										<button class="btn3 btn btn-primary">ABONNEREN</button>
									</div>
								</div>
							</div>-->







			<!--leftmost div
			<div class="row">
				<div class="col-md-4">
					<div class="left_div">
						<h2 class="text-center text-success h2_1">Abonneren</h2>
						<hr>
						<p class="p3">Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat.</p>
						<button class="btn1">MEER INFO</button>
					</div>
				</div>	
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card outerdiv">
								<div class="card-body">
									<div class="bluediv">
										<h5>Nutrilon<br>Pronultrat</h5>
									</div>
									<img src="images\images\website_list_page\package.png" class="img3" />
									<br>
									<button class="btn2">KOPEN</button>
									<br>
									<button class="btn3">ABONNEREN</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
	<!-- Footer -->
	<div style="background-color: beige;color:#596e79;"> 
		<div class="container text-center" style="background-color: beige;color:#596e79;">
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-4 ">
					<ul class="list-unstyled"><li class="mb-3"><b><h3 class="text-left ddhead" style="margin-top: 0px;">DD</h3></b></li></ul>	
				</div>
				<div class="col-md-2 text-center">
					<ul class="list-unstyled"><li class="mb-3 contact">Contact</li></ul>
				</div>
				<div class="col-md-2 text-center">
					<ul class="list-unstyled  ">
						<li class="">Tel</li>
						<li class="">123-456-7890</li><br>
						<li class="">Address.</li>
						<li class="">Kavi Nagar,<br>Ghaziabad</li>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<ul class="list-unstyled ">
						<li class="">E-mail.</li>
						<li class="">abc@gmail.com</li><br>
						<li class="">Website</li>
						<li class="">abc.com</li>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<ul class="list-unstyled ">
						<li class="">Siteamp.</li>
						<li class="">PRODUCTEN</li>
						<li class="">ABONNEREN</li>
						<li class="">OVER ONS</li>
						<li class="">VAGEN</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>