<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark - A strict programming language";
		$description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software.";
		$active = '404';
		require('includes/header.php');
	?>
	<body>
		<?php require('includes/top.php'); ?>
		<section class='white'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-6 col-md-offset-1'>
						<div class='page-not-found'>
							<h6>404: Page Not Found</h6>
							<h1>Oops!</h1>
							<p class='lead'>The page you were looking for isn't here. Visit <a href='/'>the homepage</a> or <a href='https://github.com/ozark-lang/ozark'>Ozark on GitHub</a> for more information.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require('includes/bottom.php'); ?>
		<?php require('includes/scripts.php'); ?>
	</body>
</html>