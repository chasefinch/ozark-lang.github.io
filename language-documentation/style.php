<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Style Requirements";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'style';
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
										<h1 class='main-heading' id="overview">Style</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><span itemprop='name'>Ozark</span> is verbose, and made to match the readability of natural English. Imperative statements within methods have a simple cadence:</p>

											<p><em>subject</em>, <em>verb</em>, <em>argument</em>, <em>value</em>, <em>argument</em>, <em>value</em>, ...</p>

											<p>In some cases (when specified in the method declaration), the argument is implied. In the case of system commands (like <code>create</code>) the subject is implied to be the system itself. However, as all lines are either method calls or control flow statements, the same cadence is followed very consistently.</p>

											<p>Ozark uses indentation to denote blocks. Whitespace is important, and indentation uses ASCII tabs. Elements should be separated, when appropriate, by a single space. Trailing whitespace on a line is not allowed.</p>

											<div class='code-sample-header'>Chef.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Person

property @knife: ChefsKnife?

extension setup
	create ChefsKnife; set @knife; setup

extension setup &amp;knife: ChefsKnife
	set @knife &lt;- knife

method chop vegetable: Vegetable -&gt; success: Boolean
	with @knife ...
		vegetable chop knife: @knife
		set success &lt;- true
		
	... else
		set success &lt;- false</pre></div>
		
											<p>Many stylistic characteristics of the code are enforced. For example, type names begin with a capital letter (<code>Color</code>, <code>Integer</code>, <code>GameScene</code>) and noun and verb names begin with a lowercase letter. All words are camelCased and can include (but not start with) numbers <code>0</code>&ndash;<code>9</code>. No underscores are allowed.<p>

											<p>You can also use the <code>!</code> character as a method name. In this case, the method name should appear after the subject name without a space. This is for two primary uses:</p>
											<ul>
												<li>Classes named for verbs (e.g. <code>Fly</code>) that have a method that would be sufficiently described by the class name and a semantic variable name, e.g. <code>@fly!</code></li>
												<li>Methods whose input parameters are sufficient to describe the method, e.g. <code>@binaryTree! index: 3 -> element: element</code></li>
											</ul>

											<p>In addition to camelCased letter/number combinations, the following characters are used as method names on primitive Ozark types:</p>

											<ul>
												<li><code>+</code></li>
												<li><code>-</code></li>
												<li><code>&gt;</code></li>
												<li><code>&lt;</code></li>
												<li><code>≥</code></li>
												<li><code>≤</code></li>
												<li><code>^</code></li>
												<li><code>¬</code></li>
												<li><code>*</code></li>
												<li><code>÷</code></li>
												<li><code>√</code></li>
												<li><code>∫</code></li>
												<li><code>∑</code></li>
												<li><code>=</code></li>
												<li><code>≠</code></li>
											</ul>
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