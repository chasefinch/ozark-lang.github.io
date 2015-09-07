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
										<h1 class='main-heading' id="overview">Functions &amp; Libraries</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><strong>Functions</strong> are sequences of expressions that operate only on <em>values</em>. In contrast to <em>methods</em>, they have no state, and produce the same single output when given the same set of inputs. Because of this we can say that functions are *deterministic.*</p>

											<p>Functions are a mathematical concept, similar to their counterparts in functional programming languages. They take values as inputs, and produce an output value based on a transformation. To learn more about values and how they differ from objects, read <a href='values'>Values &amp; Variables</a>.</p>

											<p>Each line in a function is an assignment of an expression to a new variable (with the <code>let</code> keyword), or the completion of the function by returning an expression with the <code>return</code> statement.</p>

											<div class='code-sample-header'>Miscellaneous.library.ozark</div>
											<div class='code-sample'><pre>function multiplyTwice(x:Integer, y:Float):Float
	return x * y * y

function union(x:[Boolean]):Boolean
	TODO: Solve this equation. y for y in x ?</pre></div>

											<p>TODO: Need more info: How to do mapping? Pass expressions or named functions? List comprehension? Conditionals? Loops? Preconditions? Maybe leading zeroes and such are okay as input. No biggie, plus functions are interchangeable so that's what it is.</p>

											<a name='BuiltInFunctions'><h2>Built-in functions</h2></a>

											<p>Most functions in Ozark are called with their parenthesis syntax, and there are several built in functions. For example, the function <code>all([Boolean])</code>, which takes a list of booleans and returns whether or not they are all true, or the function <code>not(Boolean)</code>, which takes a Boolean value and returns its opposite.</p>

											<p>There are, however, infix operators that operate exactly like functions, but with infix syntax and on exactly two values. Those operators are:</p>

											<p><ul>
												<li><code>+</code> &nbsp; &ndash; &nbsp; add</li>
												<li><code>-</code> &nbsp; &ndash; &nbsp; subtract</li>
												<li><code>/</code> &nbsp; &ndash; &nbsp; divide</li>
												<li><code>*</code> &nbsp; &ndash; &nbsp; multiply</li>
												<li><code>%</code> &nbsp; &ndash; &nbsp; modulus, or remainder</li>
												<li><code>=</code> &nbsp; &ndash; &nbsp; equals</li>
												<li><code>&gt;</code> &nbsp; &ndash; &nbsp; greater than</li>
												<li><code>&gt;=</code> &nbsp; &ndash; &nbsp; greater than or equal to</li>
												<li><code>&lt;</code> &nbsp; &ndash; &nbsp; less than</li>
												<li><code>&lt;=</code> &nbsp; &ndash; &nbsp; less than or equal to</li>
												<li><code>and</code></li>
												<li><code>or</code></li>
												<li><code>in</code></li>
											</ul></p>

											<div class='code-sample-header'>FunctionExamples.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

requirement StandardIO

method demo io:StandardIO
	if all([true, true, true])
		io print "Test 1 Passed"

	if not(false) and (1 + 5) > 7
		io print "Test 2 Passed"

	io print average([3, 4, 5])</pre></div>

											<a name="Libraries"><h2>Libraries</h2></a>

											<p>Named functions are defined within <strong>Libraries</strong>, which are simply groups of named functions that can be used by a class when imported with the <code>requirement</code> keyword.</p>

											<p>Because functions and libraries of functions are inherently global (that is, they apply to all values), they cannot be nested within classes. They only need to be referenced.</p>

											<div class='code-sample-header'>Miscellaneous.library.ozark</div>
											<div class='code-sample'><pre>multiplyTwice(x:Integer, y:Float)
	return x * y * y

function union(x:{Integer}, y:{Integer}):{Integer}
	return TODO: Solve this method</pre></div>

											<div class='code-sample-header'>FunctionExamples.class.ozark</div>
											<div class='code-sample'><pre>multiplyTwice(x:Integer, y:Float)

inheritance Example

requirement Miscellaneous

method demo io:StandardIO
	io print multiplyTwice(5, 7.3)
	io dump setOfIntegers:union({3, 4, 5}, {4, 5, 6})</pre></div>

											<a name="Expressions"><h2>Expressions</h2></a>

											<p>TODO: Write this section once I decide what's available</p>
											<p>...Syntax with parenthesis... Building blocks of functions... chained functions...</p>
										</main>
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