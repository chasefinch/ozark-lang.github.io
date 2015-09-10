<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Values &amp; Variables";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'values';
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
										<h1 class='main-heading' id="overview">Values &amp; Variables</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>value</strong> is the most primitive type of information in Ozark. It can be stored in a <em>variable</em>, and passed to a <em>function</em> or a <em>method</em>. It can appear as part of an <em>expression</em>, which then evaluates to another value.</p>

											<p>Variables are specified and initialized with the <code>let</code> keyword, and are not mutable unless they are properties of an object.</p>

											<div class='code-sample-header'>ValueExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

enumeration Directions
	case north
	case east
	case south
	case west

extension initialize
	let someInt &lt;- 5
	let aList &lt;- [6, 12, 4]
	let aSet &lt;- {42.4, 303.6, -0.112}
	let aBoolean &lt;- true
	let anEnumeration:Directions &lt;- Directions.north</pre></div>

											<a name='Types'><h2>Value Types</h2></a>

											<p>There are 5 <strong>value types</strong> in Ozark: <code>Integer</code>, <code>Float</code>, <code>Boolean</code>, <code>Character</code>, and the user-defined <em>enumeration</em>. These values can be stored in variables, and are sized implicitly. Value types are available in every scope, and do not need to be declared as <em>requirements</em>.</p>

											<p>Each one of the 5 value types can appear as part of a <em>list</em>, a <em>set</em>, or a <em>bag</em>. These types can also be nested (you can have a list of lists of Integers, for example.) They also do not need to be declared as requirements.</p>

											<a name='Integer'><h4>Integer</h4></a>

											<p>An <code>Integer</code> is the most basic of types. It's a number without a fractional component, like <code>0</code>, <code>3</code>, <code>4</code>, <code>-3</code>, or <code>10000</code>. Integers appear in Ozark as decimal numbers. They must start with a nonzero number.</p>

											<a name='Float'><h4>Float</h4></a>

											<p>A <code>Float</code> is the Ozark representation of a floating-point number. A floating-point number is a number with a fractional component, such as <code>4.14</code>, <code>0.333</code>, or <code>-200.03</code>. These appear in decimal in Ozark, but are stored in binary behind the scenes, and are subject to common binary floating-point math characteristics.</p>

											<a name='Boolean'><h4>Boolean</h4></a>

											<p>A <code>Boolean</code> can only ever be true or false. Ozark provides two Boolean literals that represent the two values: <code>true</code> and <code>false</code>.</p>

											<a name='Character'><h4>Character</h4></a>

											<p>A <code>Character</code> is a single character from the Unicode character set. A Character literal is surrounded by single quotes, such as  <code>'x'</code>, <code>'3'</code>, <code>'^'</code>, or <code>'🙉'</code>.</p>

											<p>Ozark also has a <code>String</code> type, which is treated exactly as a <a href='#List'>list</a> of Characters. You can't use the standard list syntax for a string; Instead, you surround the list of Characters with double quotes to denote a string, such as <code>"hello"</code>, <code>"1234"</code>, or <code>"wonderbread!!"</code>.</p>

											<a name='Enumeration'><h4>Enumeration</h4></a>

											<p>An <strong>enumeration</strong> is a value for which the possibilities are defined in advance. Enumerations are declared by the user, and can be nested within a class or can appear as a root-level file with the extension <code>.enumeration.ozark</code>. Enumerations follow the same naming convention as classes, and must have names unique from other classes and enumerations declared at the same level.</p>

											<p>Possible values for enumerations are declared with the <code>case</code> keyword, must start with a lowercase letter, and are referenced with dot notation.</p>

											<div class='code-sample-header'>Switch.enumeration.ozark</div>
											<div class='code-sample'><pre>case forward
case off
case reverse</pre></div>

											<div class='code-sample-header'>ConveyorBelt.class.ozark</div>
											<div class='code-sample'><pre>inheritance Machine

requirement Switch

property direction:Switch

method start
	set @direction &lt;- Switch.forward

method stop
	set @direction &lt;- Switch.off

method reverse
	set @direction &lt;- Switch.reverse</pre></div>
		
											<a name='CollectionTypes'><h2>Collection Value Types</h2></a>

											<p>There are 3 <strong>collection types for values</strong> in Ozark: <em>list</em>, <em>set</em>, and <em>bag</em>. These structures are homogeneous, meaning they can only contain one type of value, and that a list of Boolean values is different from a list of Character values. These collection types can also contain other collections; For example, you can have a list of sets of characters (but not a list of sets of different types.)</p>

											<p>Each one of the 5 value types can appear as part of a list, a set, or a bag.</p>

											<a name='List'><h4>List</h4></a>

											<p>A <strong>list</strong> is a group of ordered, repeatable values. The list literal is denoted by square braces, and the values are separated by a comma and a space. <code>[1, 2, -1]</code> is an example of a list of Integers. Other valid examples of lists are:</p>

											<p><code>[true, true, false, true]</code><br /><code>[[2, 3], [], [3, 5, 5]]</code><br /><code>["apple", "banana", "orange"]</code><br /><code>[]</code></p>

											<p>The <code>String</code> is a list of characters, and it has special syntax. Surround a grouping of Characters by double quotes (<code>""</code>) to denote a string.</p>

											<p>Lists are indexed by Integers, starting with position zero. You can specify an element in a list using the square bracket notation, like <code>someList[3]</code> or <code>someNestedList[13][4]</code>.</p>

											<a name='Set'><h4>Set</h4></a>

											<p>A <strong>set</strong> is a group of unordered, non-repeatable values. A set may not contain the same value twice. The set literal is denoted by curly braces, and the values are separated by a comma and a space. <code>{1, 2, -1}</code> is an example of a set of Integers. Other valid examples of sets are <code>{"apple", "orange", "banana"}</code> and <code>{[1, 2], [4, 5, 6]}</code>.</p>

											<a name='Bag'><h4>Bag</h4></a>

											<p>A <strong>bag</strong> is a group of unordered, repeatable values. It is like a <em>set</em>, except that it is allowed to contain the same value twice. The bag literal is denoted by angle braces, and the values are separated by a comma and a space.  <code>&lt;1, 2, -1&gt;</code> is an example of a bag of Integers. Other valid examples of bags are:</p>

											<p><code>&lt;"apple", "orange", "orange", "banana"&gt;</code><br /><code>&lt;[1, 2], [4, 5, 6]&gt;</code></p>

											<a name='Variables'><h2>Values can be stored in variables</h2></a>

											<p>A value can be stored in a <strong>variable</strong>, which is different from a <em>pointer</em> in that each variable has a value independent of any other.</p>

											<p>A variable is created and initialized with the <code>let</code> keyword, added as a property to a class, or used as an input or output for a method.</p>

											<div class='code-sample-header'>ValueExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

requirement SomeClass

method encodeAndContinue someObject:SomeClass value1:Integer value2:Integer value3:[Boolean] value4:String
	if value1 + value2 &gt; 55 and all(value3)
		someObject doSomethingWithString reverse(value3)</pre></div>

											<a name='ValuesAndFunctions'><h2>Values are part of expressions</h2></a>

											<p>Values are mathematical concepts that can be part of <strong>expressions</strong>. In Ozark as in mathematics, values cannot change; The value <code>5</code> cannot be changed to the value <code>8</code>. Values don't have a physical representation; instead, they are states used to describe objects.</p>

											<p><a href='functions'>Functions</a> are built-in expressions that evaluate to a single value. You'll notice that in Ozark, methods aren't "evaluated", but instead they are simply subroutines with any number of inputs and outputs. Expressions, on the other hand, do evaluate to a single output, but they have no state. This means that an expression with the same set of values will produce the same output, every time. This is also true for a function, which is simply a named expression that can be used in other expressions.</p>
											
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