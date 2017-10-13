<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Classes";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'classes';
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
										<h1 class='main-heading' id="overview">Classes</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><strong>Classes</strong> are the primary building blocks of <span itemprop='name'>Ozark</span> applications. With the exception of <a href='objects#Enumeration'>enumerations</a>, a class is the only thing that exists outside of any other context. Building an Ozark application consists entirely of building classes and enumerations.</p>

											<p>Classes correspond to single files within an operating system. Class file names end with <code>.class.en.ozark</code>, with ".ozark" being the technical file extension, ".class" being an identifier that Ozark uses to differentiate between classes and enumerations, and ".en" being the language identifier as described by Ozark's <a href='localization'>localization system</a>.</a></p>

											<p>A class is a compound data type. An instance of a class is called an <a href='objects'>object</a> and that object can be referenced by a <a href='objects#Pointers'>pointer.</a>

											<p>A class may contain any number of the following declarations in this order:</p>

											<ul>
												<li><a href='#Inheritance'><code>inheritance</code></a> - A parent class from which this class inherits all properties and methods</li>
												<li><a href='objects#Generics'><code>type</code></a> - If this class uses generics, a placeholder for a type that is specified on object initialization</li>
												<li><a href='properties'><code>property</code></a> - A pointer or collection within the scope of the object of this class</li>
												<li><a href='methods'><code>method</code></a> - A named subroutine with any number of inputs and outputs</li>
												<li><a href='methods#Extensions'><code>extension</code></a> - A method that extends another from itself or from an inheritance</li>
												<li><a href='methods#Replacements'><code>replacement</code></a> - A method that replaces another from itself or from an inheritance</li>
											</ul>

											<p>A class starts with a capital letter, and everything is declarative within a class definition. Only a method has imperative statements.</p>

											<div class='code-sample-header'>Superhero.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Hero

property @superpower: Superpower
property @strength: Strength

extension setup
	create XRayVision; assign to @superpower; setup
	
	assign .fullStrength to @strength</pre></div>

											<a name="Inheritance"><h2>Inheritance</h2></a>

											<p>Ozark classes can inherit properties and methods from other classes, called <strong>inheritances</strong> or superclasses.</p>

											<p>Ozark supports multiple inheritance. For example, a <code>Cat</code> can be both a <code>Cartoon</code> and an <code>Animal</code>. Method naming conflicts arising from inheritance are not resolved; Instead, the methods are executed one after the other in reverse order in which they are declared. Method implementations are selected using <a href='https://en.wikipedia.org/wiki/Dynamic_dispatch'>dynamic dispatch</a> at runtime.</p>

											<div class='code-sample-header'>Cat.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Cartoon
inheritance Animal

property @whiskers: [Whisker]
property @tail: Tail

extension setup
	create [Whisker]; assign to @whiskers; setup | repeat 6 times
	create Tail; assign to @tail; setup

method catNap
	print "zzzzzzz"</pre></div>
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