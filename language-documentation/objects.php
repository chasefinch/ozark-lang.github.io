<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Objects &amp; Pointers";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'objects';
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
										<h1 class='main-heading' id="overview">Objects &amp; Values</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>An <strong>object</strong> is an instance of a class. An object may be referenced by one or more pointers, which associate a name (such as <code>trainConductor</code> or <code>whiteRook</code>) with an object stored in memory. A <strong>value</strong> has a primitive type.</p>

											<a name='Variables'><h2>Values are stored in variables</h2></a>

											<p>Primitive types such as Integers and Booleans are stored in variables of their specific type, which are different from pointers. Declaring a value literal (such as <code>5.3</code> or <code>true</code>) automatically allocates the necessary memory space.</p>

											<p>Ozark uses variables as properties of objects, and as connections between the inputs and outputs of methods. Like in flow-based programming, the programmer focuses on the flow of data rather than creating temporary states. The state is nicely wrapped up in the properties of the objects themselves.</p>

											<a name="Pointers"><h2>Objects are stored in pointer variables</h2></a>

											<p>A <strong>pointer</strong> is a variable that can contain an object, rather than a primitive value.</p>

											<p>When a pointer is set to an object, it maintains a reference to that object. If a pointer is set to another pointer, they are both then pointing to the same object. If that object's properties change, the difference will be reflected no matter from which pointer it is referenced.</p>

											<p>Objects are allocated manually with the <code>create</code> keyword when declaring a pointer, and a method must be executed immediately using the semicolon (<code>;</code>) syntax.</p>


											<div class='code-sample-header'>ChessBoard.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance GameBoard

property @whitePieces: [ChessPiece]
property @blackPieces: [ChessPiece]

method setup
	create [ChessPiece]; assign to @whitePieces; setup | repeat 16 times
	create [ChessPiece]; assign to @blackPieces; setup | repeat 16 times
	create ChessRules; setupBoard white: @whitePieces, black: @blackPieces

method use whitePieces: [ChessPiece], blackPieces: [ChessPiece]
	assign whitePieces to @whitePieces
	assign blackPieces to @blackPieces</pre></div>

											<a name="Optionals"><h2>Optionals</h2></a>

											<p><span itemprop='name'>Ozark</span> uses <strong>optionals</strong> to denote inputs, outputs &amp; properties that are allowed to nave no value. Variables marked as optional have limited capabilities, but can be unpacked for conditional usage with the <code>with</code> keyword.</p>

											<p>You can specify a property, input or output as optional by including a question mark (<code>?</code>) after the type.</p>

											<a name="Generics"><h2>Generics</h2></a>

											<p>Classes that manage objects of a nonspecific type can be built with <strong>generics</strong>. These special types are included in the class definition. You can restrict a generic type to only classes which inherit from a given ancestor with the <code>of</code> keyword.</p>

											<p>Types are separated from the class name and from each other by parenthesis <code>()</code></p>

											<div class='code-sample-header'>BinaryTree.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Collection

type @Type1
type @Type2 of Hashable

property @value: @Type1
property @left: @Type1
property @right: @Type1
property @id: @Type2</pre></div>

											<div class='code-sample-header'>TreeExample.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

extension setup
	create btree: BinaryTree(Integer); setup [1,&nbsp;2,&nbsp;3,&nbsp;4,&nbsp;5]

	btree! 3 -&gt; element

	print element</pre></div>
											<a name='PrimitiveTypes'><h2>Primitive Types</h2></a>

											<p>There are 5 primary <strong>built-in types</strong> that come from the Ozark standard library: <code>Integer</code>, <code>Number</code>, <code>Boolean</code>, <code>Character</code>, and the user-defined <em>enumeration</em>. <a href='collections#Arrays'>Arrays</a> and <a href='collections#Tuples'>tuples</a> are also value-types, even though they may contain pointers.</p>

											<p>The built-in types aren't pointers; Instead they represent types of values that can be stored directly in a fixed-size block of memory. Each built-in type represents a novel way to interpret bits and bytes. Conversely, a pointer holds a value that represents a memory address, and can thus have properties and other things that are stored in that block based on the class definition.</p>

											<p>Primitive values don't themselves have methods, but they can be operated on by stateless <a href='methods#Functions'>functions</a> that are built into the Ozark language.</p>

											<p>Primitive types don't support inheritance, but you can coerce between some primitive value types. For example, you can use an <code>Integer</code> in place of a <code>Number</code>, or check its <code>Boolean</code> truthiness (<code>0</code> evaluates to false, anything else evaluates <code>true</code>.)</p>

											<div class='alert alert-warning'>
												<p><span class='glyphicon glyphicon-alert'></span> <strong>Notice:</strong> Built-in types behave differently than other types.</p>
												<p>Assigning one of the 5 basic types with the <code>assign to</code> phrase creates a copy of the object, rather than having the new pointer reference the same object in memory.</p>
												<p>Also, you cannot create subclasses of the 5 built-in types.</p>
											</div>

											<a name='Integer'><h4>Integer</h4></a>

											<p>An <code>Integer</code> is a number without a fractional component, like <code>0</code>, <code>3</code>, <code>4</code>, <code>-3</code>, or <code>10000</code>. Integers are entered as decimals by default, but can be specified in binary with the prefix <code>0b</code> or in hexadecimal with the prefix <code>0x</code>. <code>0b1101</code> and <code>0x6A43</code> are examples of valid Integers in binary and hexadecimal, respectively.</p>

											<a name='Number'><h4>Number</h4></a>

											<p>A <code>Number</code> is a floating-point number, described by the <a href='https://en.wikipedia.org/wiki/IEEE_floating_point'>IEEE 754 standard</a>. A floating-point number is a number with a fractional component, such as <code>4.14</code>, <code>0.333</code>, or <code>-200.03</code>. By default, these appear in decimal, but are stored in binary, and are subject to common binary floating-point math characteristics. Like Integers, you can specify Number values in binary or hexadecimal using the <code>0b</code> and <code>0x</code> prefixes. <code>0b101101.1101</code> and <code>0x12F2.FF43</code> are examples of valid Numbers in binary and hexadecimal, respectively.</p>

											<p>A floating-point number has both a stored base, and a precision. The default base for a Number is 2, but you can also specify that a Number is in base 10 using <code>`</code> notation, like <code>property @var1:Number`d</code> or <code>0.333`d</code>. This has much slower performance, and is only recommended for scenarios when modeling real-life decimal systems where decimal precision is important, like financial models.</p>

											<p>You can also specify different precision for a Number using <code>_</code>. The default precision is 32, but you can specify 64 and 128. <code>property @var1: Number`d_128</code>, <code>1`10_64 / 3`10</code>.</p>

											<a name='Boolean'><h4>Boolean</h4></a>

											<p>A <code>Boolean</code> can only ever be true or false. Ozark provides two Boolean literals that represent the two values: <code>true</code> and <code>false</code>.</p>

											<a name='Character'><h4>Character</h4></a>

											<p>A <code>Character</code> is a single character from the Unicode character set. A Character literal is surrounded by single quotes, such as <code>'x'</code>, <code>'3'</code>, <code>'^'</code>, or <code>'🙉'</code>.</p>

											<p>Ozark also has a <code>String</code> type, which is treated exactly as an <a href='collections#Arrays'>array</a> of Characters. To specify a string literal, surround the group of Characters with double quotes to denote a string, such as <code>"hello"</code>, <code>"1234"</code>, or <code>"wonderbread!!"</code>.</p>

											<p>The backslash <code>\</code> character is used as an escape character within strings. You can enter a backslash escaped by simply repeating it <code>\\</code>. Other control characters in a string must appear in source code in their escaped form, such as <code>\n</code> (newline) or <code>\t</code> (tab).</p>

											<a name='Enumeration'><h4>Enumeration</h4></a>

											<p>An <strong>enumeration</strong> is a value for which the possibilities are defined in advance. Enumerations are declared programmatically, and appear as a root-level file with the extension <code>.enumeration.en.ozark</code>. Enumerations follow the same naming convention as classes, and must have names unique from other classes and enumerations declared at the same level.</p>

											<p>Possible values for enumerations are declared with the <code>state</code> keyword, must start with a <code>.</code> and a lowercase letter, and are referenced with dot notation.</p>

											<div class='code-sample-header'>Switch.enumeration.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>state .forward
state .off
state .reverse</pre></div>

											<div class='code-sample-header'>ConveyorBelt.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Machine

property @direction: Switch

method start
	assign .forward to @direction

method stop
	assign .off to @direction

method reverse
	assign .reverse to @direction</pre></div>
		
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