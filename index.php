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
					<div class='col-md-10 col-md-offset-1 col-lg-9'>
						<h1 class='heading'>Simple, readable code.</h1>
						<p class='lead'>Ozark is an open-source programming language currently under construction. Code written in Ozark has elegant syntax and is purely object-oriented. Ozark is used with <a href='https://madewithobjects.com'>Objects&nbsp;<small><span class='glyphicon glyphicon-new-window'></span></small></a>, a visual IDE for web and native software development.</p>
					</div>
				</div>
			</div>
		</section>
		<section class='news'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1 col-lg-8' itemscope itemtype="http://schema.org/NewsArticle">
						<strong class='category'>Latest News</strong> Sample app update for the working Ozark specification <a itemprop="url" href='https://groups.google.com/d/msg/ozark-lang/Nw4CeO353iw/ou4rYmXiAQAJ'>See&nbsp;Announcement&nbsp;&rarr;</a>
					</div>
				</div>
			</div>
		</section>
		<section class='white'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='snippet'>
							<div class='row'>
								<div class='col-sm-7' itemscope itemtype="http://schema.org/SoftwareSourceCode">

									<div class='code-sample-header'>Mountaineer.class.ozark</div>
									<div class='code-sample'><meta itemprop="language" content="Ozark" />
										<pre>inheritance Person

property @hat:Hat
property @map:Map
property @radio:Radio

extension setup
	make @:Hike; setup
	make @hat:Hat; setup
	make @map:Map; setup
	make @radio:Radio; setup

method climb mountain:Mountain
	@map findTrail mountain:mountain -&gt; trail; set trail
	@ follow trail:trail -&gt; location:result

	mountain -> trailhead:startingPoint
	mountain -> peak:destination

	if result is ...
	... destination
		print "Hello,&nbsp;world!"
	
	... startingPoint
		print "Oh&nbsp;no!"
	
	... none
		@radio callForHelp</pre></div>
								</div>
								<div class='col-sm-5'>
									<div class='github'>
										<a target="_blank" href='https://github.com/ozark-lang/ozark' class='btn btn-primary btn-lg'>View the GitHub project &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
										<div class='callout'>
											<p>Ozark is open source under the <a target="_blank" href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>GPL v3 license</a>. It's hosted and developed on GitHub.</p>
											<p>The Ozark language is still in early development, and the interpreter isn't available yet.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require('includes/bottom.php'); ?>
		<?php require('includes/scripts.php'); ?>
	</body>
</html>