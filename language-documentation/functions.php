<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Functions &amp; Expressions";
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

											<p>Most functions in Ozark are called with their parenthesis syntax. For example, the function <code>reverse(String)</code>, which takes a String of Characters and returns a String with the Characters in reverse order, or the function <code>not(Boolean)</code>, which takes a Boolean value and returns its opposite.</p>

											<p>Some functions take the form of infix operators that operate exactly like functions, but with infix syntax and on exactly two values.</p>

											<p>Ozark has a rich library of functions that operate on all of the basic value types. Those functions are listed here.</p>

											<a name="IntegerFunctions"><h3>Integer Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>boolean(Integer)</code></td><td>Return <code>true</code> if the Integer is anything other than zero, otherwise return <code>false</code></td></tr>
												<tr><td><code>character(Integer)</code></td><td>Convert an Integer to the Character defined by the unicode code point that the Integer represents</td></tr>
												<tr><td><code>number(Integer)</code></td><td>Return the Number representation of an Integer</td></tr>
												<tr><td><code>product([Integer])</code></td><td>Apply the <code>*</code> operator between all Integers in a list and return the Integer product</td></tr>
												<tr><td><code>string(Integer)</code></td><td>Return the String representation of an Integer</td></tr>
												<tr><td><code>sum([Integer])</code></td><td>Apply the <code>+</code> operator between all Integers in a list and return the Integer sum</td></tr>
												<tr><td><code>range(Integer)</code></td><td>For an Integer <em>n</em>, return a list of every Integer from 0 to <em>n-1</em></td></tr>
												<tr><td><code>range(Integer, Integer)</code></td><td>For Integers <em>x</em> and <em>y</em>, return a list of every Integer from <em>x</em> to <em>y-1</em></td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>+</code></td><td>Add two Integers and return their Integer sum</td></tr>
												<tr><td><code>-</code></td><td>Subtract two Integers and return their Integer difference</td></tr>
												<tr><td><code>/</code></td><td>Divide an Integer by another and return their Number quotient</td></tr>
												<tr><td><code>*</code></td><td>Multiply two Integers and return their Number product</td></tr>
												<tr><td><code>%</code></td><td>Return the remainder Integer of one Integer divided by another</td></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two Integers are equal in value</td></tr>
												<tr><td><code>&gt;</code></td><td>Return a Boolean that represents whether an Integer is greater than another Integer in value</td></tr>
												<tr><td><code>&gt;=</code></td><td>Return a Boolean that represents whether an Integer is greater than or equal to another Integer in value</td></tr>
												<tr><td><code>&lt;</code></td><td>Return a Boolean that represents whether one Integer is less than another Integer in value</td></tr>
												<tr><td><code>&lt;=</code></td><td>Return a Boolean that represents whether one Integer is less than or equal to another Integer in value</td></tr>
											</table>

											<a name="NumberFunctions"><h3>Number Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>boolean(Number)</code></td><td>Return <code>true</code> if the Number is anything other than 0.0, otherwise return <code>false</code></td></tr>
												<tr><td><code>cieling(Number)</code></td><td>Return the Integer formed by rounding the fractional component of a Number up to the next whole number</td></tr>
												<tr><td><code>product([Number])</code></td><td>Apply the <code>*</code> operator between all Numbers in a list and return the Number product</td></tr>
												<tr><td><code>round(Number)</code></td><td>Return the Integer formed by rounding the fractional component of a Number up or down</td></tr>
												<tr><td><code>string(Number)</code></td><td>Return the String representation of a Number</td></tr>
												<tr><td><code>sum([Number])</code></td><td>Apply the <code>+</code> operator between all Numbers in a list and return the Number sum</td></tr>
												<tr><td><code>truncate(Number)</code></td><td>Return the Integer formed by removing the fractional component of a Number</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>+</code></td><td>Add two Number and return their Number sum</td></tr>
												<tr><td><code>-</code></td><td>Subtract two Numbers and return their Number difference</td></tr>
												<tr><td><code>/</code></td><td>Divide a Number by another and return their Number quotient</td></tr>
												<tr><td><code>*</code></td><td>Multiply two Numbers and return their Number product</td></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two Numbers are equal in value</td></tr>
												<tr><td><code>&gt;</code></td><td>Return a Boolean that represents whether a Number is greater than another Number in value</td></tr>
												<tr><td><code>&gt;=</code></td><td>Return a Boolean that represents whether a Number is greater than or equal to another Number in value</td></tr>
												<tr><td><code>&lt;</code></td><td>Return a Boolean that represents whether a Number is less than another Number in value</td></tr>
												<tr><td><code>&lt;=</code></td><td>Return a Boolean that represents whether a Number is less than or equal to another Number in value</td></tr>
											</table>

											<a name="CharacterFunctions"><h3>Character Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>capital(Character)</code></td><td>Return the Character formed by capitalizing a lowercase Character</td></tr>
												<tr><td><code>equal([Character])</code></td><td><em>Note: A [Character] is denoted as a string</em> &ndash; Apply the <code>=</code> operator between all elements of the list and return the Boolean result</td></tr>
												<tr><td><code>integer(Character)</code></td><td>Return the Integer representation of a numeric Character</td></tr>
												<tr><td><code>lowercase(Character)</code></td><td>Return the Character formed by converting a capital letter to lowercase Character</td></tr>
												<tr><td><code>range(Character, Character)</code></td><td>Return a set of the Characters in Unicode with point values between a Character up to and including another Character</td></tr>
												<tr><td><code>unicode(Character)</code></td><td>Return the Integer code point for a Unicode character</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two Characters are the same</td></tr>
												<tr><td><code>&gt;</code></td><td>Return a Boolean that represents whether a Character's Unicode code point is greater than that of another Character</td></tr>
												<tr><td><code>&gt;=</code></td><td>Return a Boolean that represents whether a Character's Unicode code point is greater than or equal to that of another Character</td></tr>
												<tr><td><code>&lt;</code></td><td>Return a Boolean that represents whether a Character's Unicode code point is less than that of another Character</td></tr>
												<tr><td><code>&lt;=</code></td><td>Return a Boolean that represents whether a Character's Unicode code point is less than or equal to that of another Character</td></tr>
											</table>

											<a name="BooleanFunctions"><h3>Boolean Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>all([Boolean])</code></td><td>Apply the <code>and</code> operator between all elements in the list and return the Boolean result</td></tr>
												<tr><td><code>equal([Boolean])</code></td><td>Apply the <code>=</code> operator between all elements in the list and return the Boolean result</td></tr>
												<tr><td><code>not(Boolean)</code></td><td>Return the opposite of a Boolean</td></tr>
												<tr><td><code>one([Boolean])</code></td><td>Apply the <code>or</code> operator between all elements in the list and return the Boolean result</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two Booleans are equal in value</td></tr>
												<tr><td><code>and</code></td><td>Return a Boolean that represents whether two Booleans are both true</td></tr>
												<tr><td><code>or</code></td><td>Return a Boolean that represents whether at least one of two Booleans is true</td></tr>
											</table>

											<a name="EnumerationFunctions"><h3>Enumeration Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two Booleans are equal in value</td></tr>
											</table>

											<a name="ListFunctions"><h3>List / String Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>bag([])</code></td><td>Return the bag representation of a list or String</td></tr>
												<tr><td><code>concatenate([[]])</code></td><td>Apply the <code>+</code> operator between all elements of a nested list and return the list result</td></tr>
												<tr><td><code>length([])</code></td><td>Return the length of a list or String</td></tr>
												<tr><td><code>set([])</code></td><td>Return the bag representation of a list or String</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>+</code></td><td>Return a list created by concatenating a second list or String onto a given list or String</td></tr>
												<tr><td><code>*</code></td><td>Return a list created by concatenating a list or String onto itself a number of times specified by an Integer</td></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two lists or Strings are equivalent</td></tr>
											</table>

											<a name="SetFunctions"><h3>Set Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>bag({})</code></td><td>Return the bag representation of a set</td></tr>
												<tr><td><code>size({})</code></td><td>Return the number of elements in the set</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two sets are equivalent</td></tr>
											</table>

											<a name="BagFunctions"><h3>Bag Functions</h3></a>

											<table class='reference'>
												<tr class='flag'><th style='width:40%;'>Function</th><th>Description</th></tr>
												<tr><td><code>set(&lt;&gt;)</code></td><td>Return the set representation of a bag with no duplicates</td></tr>
												<tr><td><code>size(&lt;&gt;)</code></td><td>Return the number of elements in the bag</td></tr>
											</table>
											<table class='reference'>
												<tr class='flag'><th style='width:20%;'>Operator</th><th>Description</th></tr>
												<tr><td><code>=</code></td><td>Return a Boolean that represents whether two bags are equivalent</td></tr>
											</table>

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