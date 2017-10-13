<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Collections";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'collections';
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
										<h1 class='main-heading' id="overview">Collections</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><strong>Collections</strong> in Ozark come in three flavors. There are <em>arrays</em> and <em>tuples</em>, which offer powerful subscript-based access to groups of pointers, and there are other pointer-based collection types that can be built with <em>generics.</em></p>

											<a name="Arrays"><h2>Arrays</h2></a>

											<p>An <strong>Array</strong> is an immutable, nestable, homogeneous, 1-based ordered list of non-optional objects or values. Arrays can be specified literally using square bracket (<code>[]</code>) notation, or created sequentially as the output of a <a href='control#Repeat'>repeat loop</a> or <a href='control#All'>repeating "all" statement</a>.</p>

											<p>Eligible variables that store arrays may be marked as optional.</p>

											<div class='code-sample-header'>ArrayExample.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method setup helper: ComplexObject
	create bananas: [Banana]; setup | repeat 12 times

	helper doSomething twoBananas: bananas[1~2]</pre></div>

											<p>Anywhere an array is needed, you can use subscript-based expressions to split and combine arrays.</p>

											<table class='reference'>
											<tr class='flag'><th>Example</th><th>Meaning</th></tr>
											<tr><td><code>someArray[1]</code></td><td>First element</td></tr>
											<tr><td><code>someArray[4]</code></td><td>Fourth element</td></tr>
											<tr><td><code>someArray[-1]</code></td><td>Last element</td></tr>
											<tr><td><code>someArray[2~5]</code></td><td>An array containing the 2nd through 5th elements</td></tr>
											<tr><td><code>someArray[*]</code></td><td>The number of elements in the array</td></tr>
											<tr><td><code>someArray[1/2]</code></td><td>An array representing the first section of the array when divided into two sections</td></tr>
											<tr><td><code>someArray[3/3]</code></td><td>An array representing the third section of the array when divided into three sections</td></tr>
											<tr><td><code>someArray[2%3]</code></td><td>An array representing the 2nd item in each section of the array when divided into sections with 3 parts in each</td></tr>
											<tr><td><code>someArray[2/4+3/4]</code></td><td>An array representing the 2nd and 3rd sections of the array when divided into four sections</td></tr>
											<tr><td><code>someArray[2/4-2/5]</code></td><td>An array representing the 2nd section of the array when divided into four sections, except for the elements in the 2nd section of the array when divided into five sections</td></tr>
											<tr><td><code>someArray[5*2]</code></td><td>An array representing two copies of the 5th element in the array</td></tr>
											<tr><td><code>someArray[*6]</code></td><td>An array representing the array repeated 6 times</td></tr>
											</table>

											<a name="Tuples"><h2>Tuples</h2></a>

											<p>A <strong>Tuple</strong> is an immutable, nestable, heterogenous, 1-based ordered group that may include both values and/or objects. Tuples can be specified literally by separating the values with a comma (<code>,</code>). Eligible variables that store tuples may be marked as optional, but individual elements of a tuple may not (because that would make it a different tuple). A tuple with only one element is identical to the element itself.</p>

											<p>Tuples can be nested or stored in arrays using curly bracket syntax (<code>{</code> and <code>}</code>)</p>

											<p>Tuples are often used as method inputs and/or outputs, which gives the effect of allowing positional parameters side-by-side with named ones.</p>

											<div class='code-sample-header'>TupleExample.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

@property1: Integer
@property2Copy1: Integer
@property2Copy2: Integer

method instigate helper: HelperObject, value: SomeObject, Integer, Integer
	value[1] processIntegerTuple value[2], value[3], finalInstruction: false

	helper getIntegerTuple -> assign to @property1, assign to [@property2Copy1, @property2Copy2]
</pre></div>

											<p>You can use subscript access on tuples just like on arrays.</p>

											<a name="Extract"><h2>Extract &amp; Split</h2></a>

											<p>You can use the <strong>extract</strong> and <strong>split</strong> keywords on a property or output that contains an array or a tuple. This returns a 2-tuple of the extracted portion and the remaining portion, respectively. <code>split</code> removes multiple elements, where <code>extract</code> removes only one.</p>

											<div class='code-sample-header'>ArrayExample.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

property @elements: [Element]

extension setup helper: ComplexObject
	extract @elements, @elements[2] -&gt; secondElement

	helper process secondElement

extension setup -&gt; element: Element
	extract @elements, @elements[2] -&gt; assign to element, assign to @elements

extension setup helper: ComplexObject -&gt; element: Element
	extract @elements, @elements[2] -&gt; assign to element, assign to @elements

	helper process element</pre></div>

											<a name="Strings"><h2>Strings</h2></a>

											<p>A <strong>String</strong> is an array of <a href='objects#Character'>Characters</a>. It functions exactly as an array, but has quotation-based syntax (<code>"Hello"</code>, <code>"Goodbye!"</code>) when printing and describing it literally.</p>

											<a name="Generics"><h2>Generics</h2></a>

											<p>Arrays &amp; tuples are the only collection types that include subscript-based, direct element access. To build a pointer-based data structure accessible through instance methods, use <strong>generics</strong>.</p>

											<p>Generics allow a class to make use of a type that's not known in advance. The type is specified when the instance of the class is created. See <a href='objects#Generics'>Generics</a> for more information on their syntax and usage.</p>
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