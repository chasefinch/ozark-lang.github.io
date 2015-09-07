<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Style Requirements";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'style';
		require('../includes/header.php');
	?>
	<body>
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
										<h1 class='main-heading' id="overview">Style Requirements</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>Ozark is verbose, and made to match the readability of natural English. Imperative statements within methods have a simple cadence:</p>

											<p><em>subject</em>, <em>verb</em>, <em>argument</em>, <em>value</em>, <em>argument</em>, <em>value</em>, ...</p>

											<p>In some cases (when specified in the method declaration), the argument is implied. In the case of system commands (like <code>create</code> and <code>catch</code>) the subject is implied to be the system. However, as all lines are either method calls or control flow statements, the same cadence is followed very consistently.</p>

											<p>Ozark is an indentation-based language; Whitespace is important, and indentation uses ASCII tabs. Elements should be separated, when appropriate, by a single space. Trailing whitespace on a line is not allowed.</p>

											<p>Many stylistic characteristics of the code are enforced. For example, type names begin with a capital letter (<code>Color</code>, <code>Dictionary</code>, <code>Array</code>) and noun and verb names begin with a lowercase letter. All words are camelCase and can include(but not start with) numbers <code>0</code>&ndash;<code>9</code>. No underscores are allowed.<p>

											<p>Another example of enforced style is whitespace; Single-line spacing with padding around control flow statements and between sets of statement types is checked at compile-time and enforced. (A good Ozark IDE will clean this up for you.) The correct order of declarations within a class (inheritances &rarr; requirements &rarr; classes &rarr; enumerations &rarr; members &rarr; properties &rarr; extensions &rarr; methods) is also a compiling requirement.</p>

											<p>The suggested naming convention is to name methods as though they are an action performed by the subject; For example, <code>chef chop</code> and <code>celery getChopped</code> instead of <code>celery chop</code>.</p>

											<div class='code-sample-header'>Chef.class.ozark</div>
											<div class='code-sample'><pre>inheritance Person

requirement Knife

member knife:ChefsKnife?

extension initialize
	create knife:ChefsKnife initialize
	set @knife &lt;- knife

extension initialize ~knife:ChefsKnife ~kitchen:Kitchen
	set @knife &lt;- knife

method chop #vegetable:Vegetable -&gt; success:Boolean
	with @knife
		vegetable getChopped
		set success &lt;- true
		
	without @knife
		set success &lt;- false</pre></div>
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