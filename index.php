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
							<img src="img/gallery/carshalton-mooAndBean.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Moo and Bean</h4>
								<p class="tm-gallery-description">Open for takeaways only</p>
								<p class="tm-gallery-price"><a tabindex="_blank" href="https://www.facebook.com/pages/Moo-Bean/1698424767110327">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJx-VIX8EHdkgR91x0dXYNIQ4&key=XXXXXXXXXXX" allowfullscreen></iframe>								
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/cafe.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Yew Cafe</h4>
								<p class="tm-gallery-description">Takeways by order.  Please call 020 8669 8521 with payment on collection.</p>
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq6omHsAHdkgRqGqyhekGIv4&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/dottys-teahouse-logo.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dotty's Tea House</h4>
								<p class="tm-gallery-description">Takeaways available and looking in to local deliveries.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.dottysteahouse.co.uk/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ8YfUR7kHdkgRcnsrSbQEZLs&key=XXXXXXXXXXX" allowfullscreen></iframe>

							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gingerFrog.jpg " alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Ginger Frog</h4>
								<p class="tm-gallery-description">We can no longer function as a cafe/restaurant but will continue to provide takeaway meals and drinks as long as people want them, you can call and order on 
07368 290665.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/gingerfrogwallington/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTaWiJqQHdkgRCPftCG93CeU&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/theBrook.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">The Brook</h4>
								<p class="tm-gallery-description"> Delivery will be starting from 12pm on Saturday 21st March. You may be able to collect tonight.  If you want delivery you must ADD THE £2 DELIVERY CHARGE TO YOUR CART ON THE SHOP PAGE (it’s showing as if it was a product).
We can only deliver in the Wallington & Carshalton area, and deliveries will happen as fast as we can (WED-SUN ONLY)</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/489553784417827/posts/2996286763744504/?d=n">Link to Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ2V8T3pkHdkgRXHrUvortKIc&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pavillionCafe.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pavilion Cafe</h4>
								<p class="tm-gallery-description">The Pavilion Cafe in Beddington Park are now offering takeaways and are open 7 days a week from 0900-1630.  You can pre-order on 0208 773 4349 </p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/Beddingtonparkpavilioncafe/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJn7wQIKIHdkgRTZGZJdEC3Og&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/food.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">JJ Pie & Mash</h4>
								<p class="tm-gallery-description">Currently open and providing takeaway only.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/pages/category/British-Restaurant/Jj-cafe-pie-mash-373849266341942/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSde0rpUHdkgRej56WBcvkIU&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/sassis.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Sassis</h4>
								<p class="tm-gallery-description">Operating a full takeaway menu. Lots of open space and benches and you can order upfront on the <a target=_blank href="https://apps.apple.com/gb/app/your-places/id1448098801">app</a>.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/pages/category/British-Restaurant/Jj-cafe-pie-mash-373849266341942/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJfVZ1pJUHdkgRzlCFicihOwA&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>				</div> 
					<!-- gallery cafe -->		
				
				
<div id="tm-gallery-page-restaurants" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/carshalton-gingerItalian.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">The Ginger Italian</h4>
								<p class="tm-gallery-description">Providing delivery and takeway services.  Fully stocked up and takeaway menu on their website.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://thegingeritalian.co.uk/takeaway-delivery/">Website </a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ9QT4o8YHdkgR3bjkv04ygEI&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/rest.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/rest.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/rest.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/rest.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/rest.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pubs" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/carshalton-thesun.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">The Sun</h4>
								<p class="tm-gallery-description">Takeaway menu being developed and possibly introducing a delivery service for those self-isolating or in vulnerable groups.  More information from 25th March. </p>
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJR2_JsOoHdkgRBuZEv1KgniY&key=XXXXXXXXXXX" allowfullscreen></iframe>
								<p class="tm-gallery-price"><a target=_blank href="http://www.thesuncarshalton.com/">Website</a></p>

 							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/pub.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price">Link to Website</p>	
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery pubs -->
								
				<!-- gallery page other -->
				<div id="tm-gallery-page-other" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/fish.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Wrythe Green Fishbar</h4>
								<p class="tm-gallery-description">A free meal to NHS staff with id.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.wrythegreenfishbar.com/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJrwClwFgHdkgRPy1HH89Ra30&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>

					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/melvinclarke.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Melvin Clarke</h4>
								<p class="tm-gallery-description">Local deliveries over £20.  Call 020 8647 9842 or email <a href="mailto:info@melvynclarke.co.uk">info@melvynclarke.co.uk</a>.</p>
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ719JSsEHdkgRCsIX_5wufF0&key=XXXXXXXXXXX" allowfullscreen></iframe>
								<p class="tm-gallery-price"><a target=_blank href="">Website</a></p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/jp.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">JP Decorating Services</h4>
								<p class="tm-gallery-description">Each time we go shopping we will buy 2 of the essentials where possible like sugar, milk, bread, cleaning products, toiletries and either take to the local food bank or deliver to the elderly and vulnerable in our area</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.facebook.com/jpdecoratingserviceswallington/">Website</p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyZ9RX4UHdkgR3f2DRlty5_w&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/garage.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Look after you car!</h4>
								<p class="tm-gallery-description">We are mainly concentrating on looking after people but forget that people still need to get places! Below is some advice and links to local garages who are currently open.</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.autotrader.co.uk/content/features/coronavirus-advice-for-car-owners">Car Advice</a></p>	
								<p class="tm-gallery-price"><a target=_blank href="http://www.gmgmotors.co.uk/">GMG Motors</a></p>	
								<p class="tm-gallery-price"><a target=_blank href="https://www.theteststation.co.uk/">The Test Station</a></p>	
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/scotts.png" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Scotts of Carshalton</h4>
								<p class="tm-gallery-description">Offering a free delivery service to people over 60.  Give them a ring in 020 8647 9859 (they are very busy so please bare with them!)</p>
								<p class="tm-gallery-price"><a target=_blank href="https://www.scottsofcarshalton.co.uk/">Website</a></p>	
<iframe width="200" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJz0JFS8EHdkgRTjGT2N0pQQM&key=XXXXXXXXXXX" allowfullscreen></iframe>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/food.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">To Be Added</h4>
								<p class="tm-gallery-description">General description of the services</p>
								<p class="tm-gallery-price"><a target=_blank href="#">Website</a></p>	
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