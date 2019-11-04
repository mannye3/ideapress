<?php
include"inc/header2.php";

?>

		<main id="main" class="site-main">
			<div class="page-title background-cart">
				<div class="container">
					<h1>Checkout</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>Checkout</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="container">
				<div class="main-content">
					<div class="billing-detail">
						<form action="payment.php" method="POST" class="clearfix">
							<div class="row">
								<div class="col-lg-6">
									<h2>Donation  Detail</h2>

									<div class="field">
						  					<label for="lname">Enter your donation:*</label>
						  					<input type="text" disabled="" value="10,000"  id="lname"  />
						  				</div>

					  				<!-- <div class="field">
					  					<label for="country">Country:*</label>
					  					<div class="field-select">
						  					<select name="s" id="country">
						  						<option value="">United States</option>
						  						<option value="">Fulham</option>
						  					</select>
					  					</div>
					  				</div> -->
					  				<div class="field clearfix">
						  				<div class="align-left">
						  					<label for="fname">First Name:*</label>
						  					<input type="text" disabled=""  name="s" value="Joe" />
						  				</div>
						  				<div class="align-right">
						  					<label for="lname">Last Name:*</label>
						  					<input type="text" disabled=""   name="s" value="Doe" />
						  				</div>
					  				</div>
					  				<div class="field clearfix">
						  				<div class="align-left">
						  					<label for="fname">Email:*</label>
						  					<input type="text" disabled="" value="test@payment.com" id="fname" name="s"  />
						  				</div>
						  				<div class="align-right">
						  					<label for="lname">Phone:*</label>
						  					<input type="text" disabled="" value="0908649746" id="lname" name="s"  />
						  				</div>
					  				</div>
					  				
					  				
									<button type="submit" value="Place Order" class="btn-primary">Place Order</button>
					  				
					  			</div>
					  			<div class="col-lg-6">
					  				<div class="cart-totals">
						  				<h2>Campaign Details</h2>
						  				<ul>
											<li><p>The Oreous Pillow</p><p class="price"></p></li>
											<li><p>funding goal</p><p class="price">$10000</p></li>
											<li><p>backers</p><p class="price">39</p></li>
											<li><p>Duration</p><p class="price">23 days</p></li>
											
										</ul>
									</div>

					  			</div>
				  			</div>
					  	</form>
					</div><!-- billing-detail -->
				</div><!-- .main-content -->
			</div>	
		</main><!-- .site-main -->

<?php
include"inc/footer2.php";

?>