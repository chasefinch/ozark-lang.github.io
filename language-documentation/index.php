<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'overview';
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
										<h1 class='main-heading' id="overview">Overview</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><span itemprop='name'>Ozark</span> is a compiled object-oriented language for building software that's readable and reusable. It builds on ideas from flow-based programming so that code can closely model real-world scenarios. Ozark has a simple, elegant syntax and is statically typed. The simplicity and uniformity allows Ozark code to be read and edited by other software.</p>

											<h4>Why another language?</h4>

											<p>While building <a href="https://www.madewithobjects.com">Objects</a>, a tool for visual programming, we ran into issues with the freeform nature of modern programming languages. An ideal language for visual development would have only one way to represent each possible instruction. Some communities (Python is a good example) limit the freeform nature by using idioms and linting their code, but to work with a visual tool, those constraints need to be built into the language.</p>

											<p>Beyond 1-to-1 correspondence between code and a visual graph, we found other ways to improve on the modern object-oriented programming language. For example, Ozark code is optimized for readability by English speakers. Eventually, it will include code transation such that two people who speak different languages can work on the same code with everything (method names, control structures, EVERYTHING) represented in their native language, while producing structured code that's understandable by an advanced IDE (or... AI?)</p>

											<p>Another upcoming feature is GO-like concurrency and parallelism, except in Ozark it's even simpler; Just <code>dispatch</code> a method call, and then you can defer the assignment of specific inputs &amp; outputs, thus blocking any parallel execution until those variables are given a value.</p>

											<h2>Structure</h2>

											<p>Ozark uses the subject &rarr; verb &rarr; direct object(s) pattern from natural human language. Each line inside a method follows that pattern, except for conditional clauses (e.g. <code>if</code>.)</p>

											<p>All variables in Ozark are <em>pointers</em>. Unlike other languages, inline pointers are not mutable. Instead, pointers connect the output of a method to the input of another method. The only mutable pointers are an object's <em>properties</em> (similar to instance variables in other languages), the expected outputs of the current method, and any deferred inputs to a dispatched method.</p>

											<p>Ozark code is always operating on a small scope. There are no global pointers, so often the entire scope is visible during method design.</p>

											<div class='code-sample-header'>Vegetable.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Food

property @plant: Plant
property @weight: Number
property @size: Number

extension setup &amp; seed: Seed
	seed sprout -&gt; assign to @plant

	assign 0.0 to @size
	assign 0.0 to @weight

method grow days: Number, rate: Number
	days * rate -&gt; assign to @size
	size * 0.25 -&gt; assign to @weight</pre></div>
	
											<p>Ozark does not have nested trees of indentation. Loops are declared on a single line, and conditional statements cannot be nested. Instead, a robust matching construct keeps logic trees simple.</p>

											<p>Ozark's strengths are standardization and collaboration. Multiple developers of varying skill levels may work on a project using different tools, yet will produce similar code that is easy to read.</p>

											<p>Similarly, Ozark files are a suitable save format for applications that generate code. This means that artificial intelligence or visual development tools can parse existing code into a working model.</p>
											
											<a name='Execution'><h2>Execution</h2></a>

											<p>A compiler can be invoked via command line with the <code>ozark build</code> command, specifying the initial class file and method. Upon execution, an instance of the class is created, and the method is invoked.</p>

											<pre>ozark create Gunshow.ozark.class --method begin</pre>
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