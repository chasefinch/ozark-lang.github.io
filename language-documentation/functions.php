<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Functions &amp; Libraries";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'functions';
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
										<h1 class='main-heading' id="overview">Functions &amp; Expressions</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><strong>Functions</strong> are built-in transformations that can be applied to <em>values</em>. In contrast to <em>methods</em>, they have no state, and produce the same single output when given the same set of inputs. Because of this we can say that functions are *deterministic.*</p>

											<p>Functions are a mathematical concept, similar to their counterparts in functional programming languages. They take values (or variables) as inputs, and produce an output value based on a transformation. To learn more about values and how they differ from objects, read <a href='values'>Values &amp; Variables</a>.</p>

											<a name="Expressions"><h2>Expressions</h2></a>

											<p>Anywhere in Ozark that accepts a value will also accept an <strong>expression</strong> that evaluates to the expected value type. An expression is simply a chain of values (or variables) and functions that evaluates to a single value.</p>

											<p>Parenthesis can be used to group infix value/function combinations to denote a specific order of operations.</p>

											<div class='code-sample-header'>ExpressionExamples.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

requirement StandardIO

method demo io:StandardIO
	if all([true, true, true])
		io print "Test 1 Passed"

	if not(false) and (1 + 5) > 7
		io print "Test 2 Passed"

	io print average([3, 4, 5])</pre></div>

											<a name="FunctionList"><h2>Function Reference</h2></a>

											<p>Most functions in Ozark are called with their parenthesis syntax. For example, the function <code>reverse(String)</code>, which takes a String of Characters and returns a string with the Characters in reverse order, or the function <code>not(Boolean)</code>, which takes a Boolean value and returns its opposite.</p>

											<p>There are, however, infix operators that operate exactly like functions, but with infix syntax and on exactly two values. Those operators are listed here.</p>

											<h4>Infix Operators</h4>

											<p><ul>
												<li><code>+</code> &nbsp; &ndash; &nbsp; add</li>
												<li><code>-</code> &nbsp; &ndash; &nbsp; subtract</li>
												<li><code>/</code> &nbsp; &ndash; &nbsp; divide</li>
												<li><code>*</code> &nbsp; &ndash; &nbsp; multiply</li>
												<li><code>%</code> &nbsp; &ndash; &nbsp; modulus, or remainder</li>
												<li><code>=</code> &nbsp; &ndash; &nbsp; equals</li>
												<li><code>^</code> &nbsp; &ndash; &nbsp; raise to a power</li>
												<li><code>&gt;</code> &nbsp; &ndash; &nbsp; greater than</li>
												<li><code>&gt;=</code> &nbsp; &ndash; &nbsp; greater than or equal to</li>
												<li><code>&lt;</code> &nbsp; &ndash; &nbsp; less than</li>
												<li><code>&lt;=</code> &nbsp; &ndash; &nbsp; less than or equal to</li>
												<li><code>and</code></li>
												<li><code>or</code></li>
												<li><code>in</code></li>
											</ul></p>

											<p>In addition to the infix operators, Ozark has a rich library of functions that operate on all of the basic value types. Those functions are listed here.</p>


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