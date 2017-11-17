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
											<p>Below is a list of reserved words and symbols that cannot be used for method or pointer names in <span itemprop='name'>Ozark</span>. Note that these are case sensitive.</p>
											<div class='row'>
												<div class='col-sm-4'>
													<ul>
														<li><code>all</code></li>
														<li><code>any</code></li>
														<li><code>assign</code></li>
														<li><code>at</code></li>
														<li><code>clear</code></li>
														<li><code>create</code></li>
														<li><code>dependency</code></li>
														<li><code>else</code></li>
														<li><code>extension</code></li>
														<li><code>extract</code></li>
														<li><code>false</code></li>
														<li><code>if</code></li>
														<li><code>implied</code></li>
														<li><code>in</code></li>
														<li><code>is</code></li>
														<li><code>inheritance</code></li>
														<li><code>method</code></li>
														<li><code>nil</code></li>
														<li><code>not</code></li>
													</ul>
												</div>
												<div class='col-sm-4'>
													<ul>
														<li><code>of</code></li>
														<li><code>property</code></li>
														<li><code>public</code></li>
														<li><code>print</code></li>
														<li><code>readable</code></li>
														<li><code>repeat</code></li>
														<li><code>replacement</code></li>
														<li><code>run</code></li>
														<li><code>split</code></li>
														<li><code>state</code></li>
														<li><code>times</code></li>
														<li><code>to</code></li>
														<li><code>true</code></li>
														<li><code>type</code></li>
														<li><code>until</code></li>
														<li><code>while</code></li>
														<li><code>with</code></li>
														<li><code>writable</code></li>
													</ul>
												</div>
												<div class='col-sm-4'>
													<ul>
														<li><code>&amp;</code></li>
														<li><code>-&gt;</code></li>
														<li><code>"</code></li>
														<li><code>'</code></li>
														<li><code>|</code></li>
													</ul>
												</div>
											</div>					
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