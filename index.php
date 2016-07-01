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
		<section class='white'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-10 col-md-9'>
								<h1 class='heading'>Boring, readable code.</h1>
								<p class='lead'>Ozark is an open-source programming language currently in development. Code written in Ozark is readable and reliable due to strict syntax rules. Ozark is used with <a target="_blank" href='https://madewithobjects.com'>Objects&nbsp;<small><span class='glyphicon glyphicon-new-window'></span></small></a>, a visual IDE, for web and native software development.</p>
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
							<h3>Example code in Ozark:</h3>
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
				@speaker shout "Hello,&nbsp;world!"
				</pre></div>
								</div>
								<div class='col-sm-5'>
									<div class='github'>
										<a target="_blank" href='https://github.com/ozark-lang/ozark' class='btn btn-primary btn-lg'>View the GitHub project &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
										<div class='callout'>
											<p>Ozark is open source under the <a target="_blank" href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>GPL v3 license</a>. It's hosted and developed on GitHub.</p>
											<p>The Ozark language is still in early development. The compiler isn't available yet, and contributors are needed (especially people with compiler expertise).</p>
										</div>
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