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
											<p><span itemprop='name'>Ozark</span> is an object-oriented language for building software that's readable and reusable. It uses ideas from flow-based programming so that code can closely model real-world scenarios. Ozark is strict, which means that code only works when written according to tight guidelines. Strictness allows Ozark code to be read and edited by other software.</p>

											<p>Ozark uses the subject &rarr; verb &rarr; direct object(s) pattern from natural human language. Each line inside of a method follows that pattern, except for conditional clauses like "if" or loops.</p>

											<p>All variables in Ozark are <em>pointers</em>. Unlike other languages, pointers are not modified on the fly. Instead, pointers connect the output of a method to the input of another method. The only mutable pointers are an object's <em>properties</em>, which are similar to instance variables in other languages.</p>

											<p>Ozark code is always operating on a small scope. There are no global pointers, so often the entire scope is visible during method design.</p>

											<div class='code-sample-header'>Vegetable.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Food

requirement Plant
requirement Seed

property @plant:Plant
property @weight:Number
property @size:Number

extension initialize &amp;seed:Seed
	seed sprout -&gt; plant

	set @plant &lt;- plant
	set @size &lt;- 0.0
	set @weight &lt;- 0.0

method grow days:Number rate:Number
	days multiply rate -> size
	size multiply 0.25 -> weight

	set @size &lt;- size
	set @weight &lt;- weight</pre></div>
	
											<p>Ozark's strengths are standardization and collaboration. Multiple developers of varying skill levels may work on a project using different tools, yet will produce similar code that is easy to read.</p>

											<p>Similarly, Ozark files are a suitable save format for applications that generate code. This means that artificial intelligence or visual development tools produce correct Ozark and can parse existing code into a working model.</p>
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