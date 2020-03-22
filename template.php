<!DOCTYPE html>
<html>
<?php
$vars = parse_ini_file("vars.ini");
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Friends of <?php echo $vars['location']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body> 

	<div class="container">
	<!-- Top box -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $vars['headerPicture']; ?>">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-2 col-12">
							<div class="tm-site-text-box">
 								<h1 class="tm-site-title">Local Food & Services</h1> 
								<h6 class="tm-site-description">A quick guide to local restaurants, pubs, cafes and other local businesses who are providing delivery, takeaway or other services.  Also happy to add any local businesses who are offering assistance in other ways.</h6>	
								<p class="tm-site-description">We're trying to keep this site as up to date as possible but things change quickly!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Helping out all friends in <?php echo $vars['location']; ?></h2>
				 <p class="col-12 text-center">The aim of this site is to promote local establishments who are going above and beyond their usual services.  <br><b>It's not a free advertising site!</b> </p>
				<p class="col-12 text-center">If you would like to add an entry then please click <a href="<?php echo $vars['emailContact']; ?>">HERE</a> to drop me an email and I'll get the site updated.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active"><?php echo $vars['subject1']; ?></a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link"><?php echo $vars['subject2']; ?></a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link "><?php echo $vars['subject3']; ?></a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link"><?php echo $vars['subject4']; ?></a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery cafe -->
			<div class="row tm-gallery">
		<div id="tm-gallery-page-cafes" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Cafe Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
				</div> 
					<!-- gallery cafe -->		
				
				
<div id="tm-gallery-page-restaurants" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Restaurant Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pubs" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pub Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery pubs -->
								
				<!-- gallery page other -->
				<div id="tm-gallery-page-other" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>

					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/dummy-img.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Other Title</h4>
								<p class="tm-gallery-description">Description</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="#">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJtV5bzSAFdkgRpwLZFPWrJgo&key=XXXXXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>


				</div> <!-- gallery other -->				
				
			</div>

			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 chrisj.co.uk 
				<p class="smallText">Last Updated: Sunday 22nd March 07:44 </p>
            		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>