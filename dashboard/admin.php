<?php
	include 'include/_header.php';
	include 'include/_navbar.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php include 'include/_menuleft.php'; ?>

		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1>ยินดีต้อนรับคุณ <?=$s_login_username?></h1>
			อีเมล์<?=$s_login_email?>

		</main>
	</div>
</div>

<?php include 'include/_footer.php'; ?>
