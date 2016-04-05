<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Reserved Words";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'reserved';
		require('../includes/header.php');
	?>
	<body itemscope itemtype='http://schema.org/Language'>
		<?php require ('../includes/top.php'); ?>
		<section class='white short'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-3'>
								<?php require('../includes/documentation-nav.php'); ?>
							</div>
							<div class='col-sm-9'>
								<div class='row'>
									<div class='col-sm-7'>
										<h1 class='main-heading' id="overview">Reserved Words</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>Below is a list of reserved words that cannot be used for method or pointer names in <span itemprop='name'>Ozark</span>. Note that these are case sensitive.</p>
											<div class='row'>
												<div class='col-sm-6'>
													<ul>
														<li><code>class</code></li>
														<li><code>clear</code></li>
														<li><code>create</code></li>
														<li><code>enumeration</code></li>
														<li><code>else</code></li>
														<li><code>extension</code></li>
														<li><code>false</code></li>
														<li><code>for</code></li>
														<li><code>identify</code></li>
														<li><code>if</code></li>
														<li><code>inheritance</code></li>
														<li><code>method</code></li>
														<li><code>property</code></li>
													</ul>
												</div>
												<div class='col-sm-6'>
													<ul>
														<li><code>repeat</code></li>
														<li><code>replacement</code></li>
														<li><code>requirement</code></li>
														<li><code>set</code></li>
														<li><code>state</code></li>
														<li><code>true</code></li>
														<li><code>type</code></li>
														<li><code>unless</code></li>
														<li><code>until</code></li>
														<li><code>while</code></li>
														<li><code>with</code></li>
														<li><code>without</code></li>
													</ul>						
										</main>
										<?php require('../includes/documentation-pagination.php'); ?>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require('../includes/back-to-top.php'); ?>
		<?php require('../includes/bottom.php'); ?>
		<?php require('../includes/scripts.php'); ?>
	</body>
</html>