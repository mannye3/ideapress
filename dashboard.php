<?php include"inc/user_header.php";  ?>

		<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>Dashboard</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>Dashboard</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="account-wrapper">
				<div class="container">
					<div class="row">
							<?php include"inc/user_nav.php";  ?>
						<div class="col-lg-9">
							<div class="account-content dashboard">
								<h3 class="account-title">Dashboard</h3>
								<div class="account-main">
									<div class="author clearfix">
										<a class="author-avatar" href="#"><img src="images/dashboard-avatar.png" alt=""></a>
										<div class="author-content">
											<div class="author-title"><h3><a href="#">Melvin Martinez</a></h3><a class="edit-profile" href="#">Edit Profile</a></div>
											<div class="author-info">
												<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85e8e0e9f3ecebc5f1ede0e8e0e2eae4e9f6abe6eae8">[email&#160;protected]</a></p>
												<p>IdeaPress Member since July 2017</p>
											</div>
										</div>
									</div>
									<div class="dashboard-latest">
										<h3>My Latest Campaigns</h3>
										<ul>
											<li>
												<a href="#"><img src="images/my-campaigns-01.jpg" alt=""></a>
												<div class="dashboard-latest-box">
													<div class="category"><a href="#">Film & Video</a></div>
													<h4><a href="#">Space Odyssey - The Video Game</a></h4>
												</div>
											</li>
											<li>
												<a href="#"><img src="images/my-campaigns-02.jpg" alt=""></a>
												<div class="dashboard-latest-box">
													<div class="category"><a href="#">Box</a></div>
													<h4><a href="#">Unbuonded: A Feature Documentary</a></h4>
												</div>
											</li>
										</ul>
									</div>
									<div class="payment-info">
										<p>Payment Info:</p>
										<p>Paypal Receiver Email: <a href="#"><span class="__cf_email__" data-cfemail="d8a8b9a1b5bdb6ac98acb0bdb5bdbfb7b9b4abf6bbb7b5">[email&#160;protected]</span></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .account-content -->
		</main><!-- .site-main -->
<?php
include"inc/footer2.php";

?>