<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Frequently Asked Questions";
		$description = "Frequently asked questions about the Ozark language";
		$active = "faq";
		require('includes/header.php');
	?>
	<body>
		<?php require('includes/top.php'); ?>
		<section class='white'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-10 col-md-offset-1'>
						<div class='row'>
							<div class='col-sm-8'>
								<h1>Frequently Asked Questions</h1>
							</div>
						</div>
						<hr />
						<div class='row'>
							<div class='col-sm-6'>
								<h4>Q. Why strict programming?</h4>
								<p><strong>A.</strong> Limiting style choices in programming makes reliable and future-ready code libraries &ndash; meaning strict code is more powerful, readable, and collaborative.</p>
								<h4>Q. Why is Ozark important?</h4>
								<p><strong>A.</strong> Development tools can generate code in other languages, but that code can't be read back in for further development. Ozark is different; Because of the strict formatting rules, handwritten code can be interpreted and extended by development tools, and vice versa.</p>
								<p>A set of Ozark files serves as both a codebase and a save format for advanced IDEs.
								<h4>Q. Why can't I use variables like I'm used to?</h4>
								<p><strong>A.</strong> Ozark uses pointers and variables as properties of objects, and as connections between the inputs and outputs of methods.</p>
								<p>Like in flow-based programming, the programmer focuses on the flow of data rather than creating temporary states. The state is nicely wrapped up in the properties of the objects themselves.</p>
							</div>
							<div class='col-sm-6'>
								<h4>Q. Why can't an object call its own methods?</h4>
								<p><strong>A.</strong> Almost all "Pure" object-oriented languages still seem to let a sneaky bit of procedural programming called <code>self</code> (or <code>this</code>) hang around. The Ozark philosophy is that an object needs total access to its properties, but it doesn't need to procedurally run its own methods. See <a target="_blank" href='https://r.je/this-keyword-isnt-oop.html'>this article</a> for a great description of the issue.</p>
								<p>For many people, until they work on a truly tall-stack app based on dependency injection, they may not realize how clearly organized object-oriented software can be when objects don't rely on their own spaghetti method calls.</p>
								<h4>Q. How does Ozark get rid of refactoring and technical debt?</h4>
								<p><strong>A.</strong> Ozark enforces organizational principles the first time around. Because there is only one way of doing just about everything, you can be sure that no one (even your past self) left any sloppy work to be redone.</p>
								<h4>Q. When can I use Ozark?</h4>
								<p><strong>A.</strong> You can write Ozark code right now, but you wouldn't be able to use it for much. We are building a compiler, a standard library, a base SDK, and translators to make Ozark available on as many platforms as possible &ndash; and <a href='/contribute-to-ozark'>we could use your help</a>.</p>
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