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
											<p><strong>Collections</strong> in Ozark come in two flavors. There are <em>arrays</em>, which offer powerful subscript-based access to groups of pointers, and there are other collection types which are themselves pointers that can be built with <em>generics.</em></p>

											<a name="Arrays"><h2>Arrays</h2></a>

											<p>An <strong>Array</strong> is an immutable, nestable, homogeneous, 1-based ordered list of pointers. Arrays can be specified literally using square bracket (<code>[]</code>) notation, or created sequentially as the output of a <a href='control#Repeat'>repeat loop</a> or <a href='control#Each'>repeating "each" statement</a>.</p>

											<div class='code-sample-header'>ArrayExample.class.ozark</div>
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
											<tr><td><code>someArray[#]</code></td><td>The number of elements in the array</td></tr>
											<tr><td><code>someArray[1/2]</code></td><td>An array representing the first section of the array when divided into two sections</td></tr>
											<tr><td><code>someArray[3/3]</code></td><td>An array representing the third section of the array when divided into three sections</td></tr>
											<tr><td><code>someArray[2%3]</code></td><td>An array representing the 2nd item in each section of the array when divided into sections with 3 parts in each</td></tr>
											<tr><td><code>someArray[2/4+3/4]</code></td><td>An array representing the 2nd and 3rd sections of the array when divided into four sections</td></tr>
											<tr><td><code>someArray[2/4-2/5]</code></td><td>An array representing the 2nd section of the array when divided into four sections, except for the elements in the 2nd section of the array when divided into five sections</td></tr>
											<tr><td><code>someArray[5*2]</code></td><td>An array representing two copies of the 5th element in the array</td></tr>
											<tr><td><code>someArray[*6]</code></td><td>An array representing the array repeated 6 times</td></tr>
											</table>

											<a name="Split"><h2>Split</h2></a>

											<p>You can use the <strong>split</strong> keyword on a property or output that contains an array. This removes a subset of the array and loads it into an output variable for future use.</p>

											<div class='code-sample-header'>ArrayExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

property @elements: [Element]

extension setup helper: ComplexObject
	split @elements[2] -> secondElement

	helper doSomethingToElement: secondElement

extension setup -> element: Element
	split @elements[2]; set element

extension setup helper: ComplexObject -> element: Element
	split @elements[2] -> secondElement; set element

	helper doSomethingToElement: secondElement</pre></div>

											<a name="Strings"><h2>Strings</h2></a>

											<p>A <strong>String</strong> is an array of <a href='objects#Character'>Characters</a>. It functions exactly as an array, but has quotation-based syntax (<code>"Hello"</code>, <code>"Goodbye!"</code>) when printing and describing it literally.</p>

											<a name='Generics'><h2>Generics</h2></a>

											<p>Arrays are the only collection type that includes subscript-based, direct element access. To build a more classic data structure that is accessed through instance methods, Ozark offers <strong>generics</strong>.</p>

											<p>Generics allow a class to make use of a type that is not known in advance. The type is specified when the instance of the class is created. See <a href='objects#Generics'>Generics</a> for more information on their syntax and usage.</p>
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