<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark - A readable programming language";
		$description = "Ozark is a readable open-source programming language. Through strict code standards, Ozark enables new tools for building software.";
		$active = 'home';
		require('includes/header.php');
	?>
	<body itemscope itemtype='http://schema.org/Language'>
		<?php require('includes/top.php'); ?>
		<section class='blue thinker'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-7'>
								<h1 class='heading' itemprop='description'>Ozark is a readable, open-source programming language for building software that lasts. <a href='/about-ozark'>Learn more</a></h1>
								<div class='row'>
									<div class='col-sm-10'>
										<form action="//ozark.us9.list-manage.com/subscribe/post?u=db19e11de3ec47da1da91149f&amp;id=13de2cb1c6" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
											<div class='form-group'>
												<label for="mce-EMAIL">Ozark is evolving. Stay in the loop:</label>
												<div class='row'>
													<div class='col-sm-10'>
														<div class='input-group input-block input-group-large'>
															<input type="email" id="mce-EMAIL" value="" name="EMAIL" class="email form-control input-lg" placeholder="your email address..." required /><div class='input-group-addon'><input itemscope itemtype="http://schema.org/SubscribeAction" type="submit" value="Go" name="subscribe" /></div>
														</div>
													</div>
												</div>
											</div>
											<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
											<div style="position: absolute; left: -5000px;"><input type="text" name="b_db19e11de3ec47da1da91149f_13de2cb1c6" tabindex="-1" value=""></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class='news'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1' itemscope itemtype="http://schema.org/NewsArticle">
						<strong class='category'>Latest News</strong> Sample app for version 0.2.2 of the Ozark specification <a itemprop="url" href='https://groups.google.com/d/msg/ozark-lang/ScHtG-z6gRo/1nkjWLE3AgAJ'>See&nbsp;Announcement&nbsp;&rarr;</a>
					</div>
				</div>
			</div>
		</section>
		<section class='white pull'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='snippet'>
							<div class='row'>
								<div class='col-sm-7' itemscope itemtype="http://schema.org/SoftwareSourceCode">

									<div class='code-sample-header'>Mountaineer.class.ozark</div>
									<div class='code-sample'><meta itemprop="language" content="Ozark" />
										<pre>inheritance Person

	property hiker:HikeAbility
	property hat:Hat?
	property map:Map?

	method prepare
		create map:Map; initialize
		create hat:Hat; initialize
		set @map &lt;- map
		set @hat &lt;- hat

	method climbMountain _mountain:Mountain
		with map:@map!
			map findTrail mountain:mountain -&gt; trail
			@hiker followTrail trail -&gt; success:result
		
			if result
				@speaker shout "Hello,&nbsp;world!"</pre></div>
								</div>
								<div class='col-sm-5'>
									<div class='github'>
										<h3>Contribute</h3>
										<a target="_blank" href='https://github.com/ozark-lang/ozark' class='btn btn-primary btn-lg'>View the GitHub project &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
										<div class='callout'>
											<p>Ozark is open source under the <a target="_blank" href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>GPL v3 license</a>. It's hosted and developed on GitHub.</p>
											<p>The Ozark language is still in early development. The compiler isn't available yet, and contributors are needed (especially people with compiler expertise).</p>
										</div>
									</div>
									<div class='documentation'>
										<h3>Learn Ozark!</h3>
										<a class='btn btn-default btn-lg' href='/language-documentation'>Read the documentation &nbsp; <span class='glyphicon glyphicon-chevron-right'></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require('includes/back-to-top.php'); ?>
		<?php require('includes/bottom.php'); ?>
		<?php require('includes/scripts.php'); ?>
	</body>
</html>