<?php include"inc/user_header.php";  ?>

		<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>My Campaigns</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>My Campaigns</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="account-wrapper">
				<div class="container">
					<div class="row">
						<?php include"inc/user_nav.php";  ?>
						<div class="col-lg-9">
							<div class="account-content my-campaigns account-table">
								<h3 class="account-title">My Campaigns</h3>
								<div class="account-main">
									<div class="campaign-item">
										<a class="campaign-image" href="#"><img src="images/my-campaigns-01.jpg" alt=""></a>
										<div class="campaign-box">
											<div class="campaign-category"><a href="#">Tecnology</a></div>
											<div class="campaign-title"><a href="#">Redefine Your VR Experience</a></div>
											<div class="campaign-desc">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</div>
										</div>
									</div>
									<div class="campaign-item">
										<a class="campaign-image" href="#"><img src="images/my-campaigns-02.jpg" alt=""></a>
										<div class="campaign-box">
											<div class="campaign-category"><a href="#">Tecnology</a></div>
											<div class="campaign-title"><a href="#">Smart Wallet with Solar Charge</a></div>
											<div class="campaign-desc">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies.</div>
										</div>
									</div>
									<a href="#" class="btn-primary">Add Campaigns</a>
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
