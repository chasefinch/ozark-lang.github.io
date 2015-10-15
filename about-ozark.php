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
					<div class='col-sm-6 col-md-5 col-md-offset-1'>
						<h1>Fall in love with <span itemprop='name'>Ozark</span>.</h1>
						<p class='lead'>Ozark code is a joy to write; Beautiful, straightforward, and collaborative. You can easily see the purpose of each method &ndash; And so can the next person who works on your code.</p>
						<p class='lead'>This makes software development faster and easier to learn. It also welcomes a new generation of smart software-writing tools.</p>
						<div style='clear:both;'></div>
					</div>
					<div class='col-sm-5 col-sm-offset-1'>
						<div class='bg-pad'>
							<div class='row'>
								<div class='col-md-9'>
									<h6>Examples</h6>
									<p>Get a feel for Ozark. Download a sample app to get started.</p>
									<ul class='clean'><li><a href='https://github.com/ozark-lang/demo-rifle-range/archive/master.zip' class='download'><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Rifle Range</a></li></ul>
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
					</div>
					<div style='clear:both;'></div>
				</div>
			</div>
		</section>
		<section class='white'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-9'>
								<h1>Core Concepts</h1>
								<p class='lead'>In high-level programming languages, code is an expression of logic. Each higher-level language limits the programmer's options in exchange for readibility, reusability, and standardization.</p>
								<p class='lead'>Ozark is designed to be the highest-level programming language that still declares every implementation detail, so it bridges the gap between machine language and the abstract software development tools of tomorrow.</p>
							</div>
						</div>
						<hr />
						<div class='row'>
							<div class='col-sm-6'>
								<h4>Instructions aren't expressions</h4>
								<p>Lines of code don't have a value to be computed behind the scenes. Instead, you clearly see and define what steps the processor will take during execution.</p>
								<p>Code is verbose and clear, and each line has only one instruction.</p>
								<div class='code-sample-header code-sample-header-inline'>GameLevel.class.ozark</div>
								<div class='code-sample code-sample-inline' itemscope itemtype="http://schema.org/SoftwareSourceCode"><meta itemprop="language" content="Ozark" />
									<pre>inheritance GameAsset

requirement GameScene

property scene:GameScene

method processScene
	@scene evaluateActions
	@scene simulatePhysics
	@scene update</pre></div>
								<h4>Declarative, not imperitive</h4>
								<p>Other object-oriented programming languages start imperitively. An Ozark program reads the classes first, and begins with an instance method.</p>
								<p>Everything is a declaration, and instructions are found only inside of methods. All methods are public instance methods. All instance variables (in Ozark, <strong>properties</strong>) are private. Only properties and method outputs are mutable. There is no reference to self or super, and all method calls use Smalltalk-style message passing.</p>
								<h4>No return types for methods, just inputs and outputs</h4>
								<p>Rather than evaluating like an expression, a method is an action by an object, and has any number of inputs and/or outputs.</p>
							</div>
							<div class='col-sm-6'>
								<h4>Parallelism is automatic</h4>
								<p>Ozark apps are ready to make use of multi-core processors automatically. The strict scopes and decoupling give clear separation of concerns, so the compiler is able to run code in parallel.</p>
								<h4>Clean &amp; strict formatting rules</h4>
								<p>Ozark is strongly typed and explicit about code structure; So, Ozark apps have code consistency and one-to-one correspondence with a visual graph.</p>
								<p>The instruction set is small, leaving almost all tasks to instance methods.</p>
								<div class='code-sample-header code-sample-header-inline'>Calculation.class.ozark</div>
								<div class='code-sample code-sample-inline' itemscope itemtype="http://schema.org/SoftwareSourceCode"><meta itemprop="language" content="Ozark" />
									<pre>inheritance Routine

method printSums foo:Integer bar:Integer io:StandardIO
	for x:foo
		for y:bar
			x add y -> z

			io print z</pre></div>
								<h4>Small scopes</h4>
								<p>Every non-control line of a method is a call to another method; So, a method is often only a few straightforward instructions, and the inheritance tree becomes tall and verbose.</p>
								<p>There are no global variables. This means the entire scope of available data is small, and could be seen visually during development.</p>
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