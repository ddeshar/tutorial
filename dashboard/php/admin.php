<?php
	include 'include/_header.php';
	include 'include/_navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<br>
			<br>
			<h1>ยินดีต้อนรับคุณ <?=$s_login_username?></h1>
			<div class="row" >

				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading dark-blue">
												<i class="fa fa-users fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content dark-blue">
										<div class="circle-tile-description text-faded">
												Users
										</div>
										<div class="circle-tile-number text-faded">
												265
												<span id="sparklineA"></span>
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading green">
												<i class="fa fa-money fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content green">
										<div class="circle-tile-description text-faded">
												Revenue
										</div>
										<div class="circle-tile-number text-faded">
												$32,384
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading orange">
												<i class="fa fa-bell fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content orange">
										<div class="circle-tile-description text-faded">
												Alerts
										</div>
										<div class="circle-tile-number text-faded">
												9 New
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading blue">
												<i class="fa fa-tasks fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content blue">
										<div class="circle-tile-description text-faded">
												Tasks
										</div>
										<div class="circle-tile-number text-faded">
												10
												<span id="sparklineB"></span>
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading red">
												<i class="fa fa-shopping-cart fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content red">
										<div class="circle-tile-description text-faded">
												Orders
										</div>
										<div class="circle-tile-number text-faded">
												24
												<span id="sparklineC"></span>
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
				<div class="col-lg-2 col-sm-6">
						<div class="circle-tile">
								<a href="#">
										<div class="circle-tile-heading purple">
												<i class="fa fa-comments fa-fw fa-3x"></i>
										</div>
								</a>
								<div class="circle-tile-content purple">
										<div class="circle-tile-description text-faded">
												Mentions
										</div>
										<div class="circle-tile-number text-faded">
												96
												<span id="sparklineD"></span>
										</div>
										<a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
								</div>
						</div>
				</div>
			</div>
		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>