<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - About";
		$description = "Ozark is designed to be the highest level programming language of sequential declarations, serving as the layer between machine language and the abstract software development tools of tomorrow.";
		$active = 'about';
		require('includes/header.php');
	?>
	<body itemscope itemtype='http://schema.org/Language'>
		<?php require('includes/top.php'); ?>
		<section class='blue chop'>
			<div class='container'>
				<div class='row'>
					<div class='col-xs-12 col-md-6 col-md-offset-1'>
						<h1>Deny your code its personality.<span class='accent'><span class='glyphicon glyphicon-thumbs-down'></span></span></h1>
						<p style='clear:both;' class='lead'>Ozark code abides by a strict set of syntax rules. It has a narrow instruction set, and there's a single 'correct' way to use each programming tactic.</p>
						<p class='lead'>Since everyone's code looks the same, it's easy to share and to pick up where someone else left off. This is also good for abstract software development tools, which can depend on Ozark's strictness to easily import valid code.</p>
						<h6>Further reading</h6>
						<p><a class='btn btn-lg' href='/language-documentation'>Ozark documentation&nbsp; <span class='glyphicon glyphicon-chevron-right'></span></a>
						<div style='clear:both;'></div>
					</div>
					<div class='col-xs-12 col-md-4 col-md-offset-1'>
						<div class='bg-pad'>
							<div class='row'>
								<div class='col-md-9'>
									<h6>Examples</h6>
									<p>Get a feel for Ozark. Download a sample app to get started.</p>
									<ul class='clean'><li><a href='https://github.com/ozark-lang/demo-rifle-range/archive/master.zip' class='download'><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Rifle Range</a></li></ul>
								</div>
							</div>
						</div>
						<div class='code-sample-header'>Rifleman.class.ozark</div>
						<div class='code-sample' itemscope itemtype="http://schema.org/SoftwareSourceCode"><meta itemprop="language" content="Ozark" />
							<pre>inheritance Person

requirement StandardIO
requirement Location
requirement Rifle
requirement Boot

property io:StandardIO
property location:Location
property leftBoot:Boot
property rightBoot:Boot</pre></div>
					</div>
					<div style='clear:both;'></div>
					<div style='clear:both;'></div>
				</div>
			</div>
		</section>
		<section class='white tall'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-9'>
								<h1>Where can I use Ozark?</h1>
								<p class='lead'>Ozark code will compile to .jar files, runnable on the JVM. This means that it can be used to create applications for any machine that supports the JVM - which is practically everywhere.</p>
								<p class='lead'>It will also be interpretable by a webserver like Apache through CGI, which makes it a fine language for the development of web applications.</p>
								<p class='lead'>Currently, Ozark is merely a language prototype, and neither of these options are available. You can find information about contributing to the project here:</p>
								<p><a href='/contribute-to-ozark' class='btn btn-default btn-lg'>Contributing to Ozark&nbsp; <span class='glyphicon glyphicon-chevron-right'></span></a>
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