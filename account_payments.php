
<?php include"inc/user_header.php";  ?>
		<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>Payments</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>Payments</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="account-wrapper">
				<div class="container">
					<div class="row">
						<?php include"inc/user_nav.php";  ?>
						<div class="col-lg-9">
							<div class="account-content payments account-table">
								<h3 class="account-title">Payments</h3>
								<div class="account-main">
									<table>
										<thead>
											<tr>
												<th>Order</th>
												<th>Date</th>
												<th>Status</th>
												<th>Total</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>#1145</td>
												<td>July 21, 2017</td>
												<td>Pending</td>
												<td>$250 for 1 item</td>
												<td><a href="#">View</a></td>
											</tr>
										
										</tbody>
									</table>
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