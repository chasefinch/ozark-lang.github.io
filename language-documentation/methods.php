<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Methods";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'methods';
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
										<h1 class='main-heading' id="overview">Methods &amp; Functions</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>method</strong> is a subroutine, attached to a class, that can have any number of predefined inputs and outputs. A method is executed by passing the method name and arguments to an object. You can't call methods on primitive objects; Instead, they can be transformed with stateless <a href="#Functions">functions</a> that are built into the Ozark language.</p>

											<a name="Methods"><h2>Methods</h2></a>

											<p>A method declaration specifies named inputs, named outputs, and a method body. The body is made of imperative statements. All methods are public (accessible to any context that has reference to the object.)</p>
											
											<div class='code-sample-header'>Conductor.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Musician
	
method begin concerto: Song, orchestra: Orchestra
	concerto movement 1 -&gt; movement1
	orchestra perform movement1

	concerto movement 2 -&gt; movement2
	orchestra perform movement1

	concerto movement 3 -&gt; movement3
	orchestra perform movement3

method conclude concerto: Song, orchestra: Orchestra
	orchestra conclude concerto</pre></div>


											<p>Methods do not have a "return value" like in other object-oriented languages. Statements are not expressions to be evaluated; They are instructions to be executed, and they may or may not have any number of outputs. Separating the concept of evaluable expressions from the that of executable instructions is one of the core uniquenesses of Ozark.</p>

											<p>An object can't call its own methods, as we believe that procedural concept doesn't belong in an object oriented langauge. See <a href='https://r.je/this-keyword-isnt-oop.html'>this article</a> for a discussion of the issue.</p>

											<a name='InputsAndOutputs'><h2>Inputs &amp; outputs</h2></a>

											<p>Methods have any number of predefined inputs and outputs. Within a method, inputs are constant, meaning they cannot have their value changed. The only mutable items are the outputs of the method, the <a href='properties'>properties</a> of the current object, and any <code>defer</code>red inputs to dispatched inline method calls.</p>

											<p>When calling a method, the created outputs are constants that cannot be changed.</p>

											<p>Within a method signature, inputs are declared sequentially after the method name, and outputs are declared after an arrow symbol (<code>-&gt;</code>).</p>

											<p>The types of the variables and collections are defined explicitly in the method signature. Inputs are both named and ordered, allowing verbose method names. A method signature can use the <code>implied</code> keyword to specify that the first input and/or output name should be omitted when calling.</p>

											<div class='code-sample-header'>Sailboat.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Boat

property @location: Location?
property @launch: Launch
property @navigate: Navigate
property @dock: Dock

method setup
	create Launch; assign to @launch; setup
	create Navigate; assign to @navigate; setup
	create Dock; assign to @dock; setup

method sail destination: WaterfrontLocation -&gt; duration: TimeInterval
	@launch!
	destination port -&gt; port
	port location -&gt; location
	@navigate! destination: location -&gt; assign to @location, duration; assign to duration
	@dock! port: port</pre></div>

		
											<a name='Properties'><h2>Properties</h2></a>

											<p>Ozark code operates on one small scope at a time. A method may access the <strong>properties</strong> of the instance object, and the inputs and outputs of the method itself. No other predefined values are available to it.</p>

											<p>Conversely, using a method is the only way of accessing the properties of a given object.</p>

											<a name="Extensions"><h2>Overriding &amp; extending parent methods</h2></a>

											<p>As discussed in <a href='classes#Inheritance'>Inheritance</a>, a class inherits all methods and properties from its parent classes. To override a method in a child class, drop the <code>method</code> keyword and instead declare a <code>replacement</code>.</p>

											<p>To extend a parent method, declare an <code>extension</code> instead. This is commonly used with the <code>setup</code> method. The body declared for the extension will execute after the code declared in the parent method. You can choose to add additional inputs and outputs to the extension.</p>

											<div class='code-sample-header'>Flower.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Plant

property @color: Color

extension setup
	create Color; assign to @color; random</pre></div>

											<p>To add additional input &amp; output parameters to an extension, prefix them with the ampersand (<code>&amp;</code>) symbol.</p>

											<div class='code-sample-header'>Flower.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Plant

property @color: Color

extension setup -&gt; &amp; facing: Direction
	create Direction; assign to facing; random</pre></div>
	
											<a name='Calling'><h2>Calling methods</h2></a>

											<p><strong>Method calls</strong> are the building blocks of other methods. Every line inside a method body is either a method call or a <a href='control'>control flow</a> statement. Call a method by passing the name of the method and the arguments to the object on which the method will be called.</p>

											<p>A method call follows a cadence of:</p>

											<p><em>subject</em>, <em>verb</em>, <em>argument</em>, <em>value</em>, <em>argument</em>, <em>value</em>, ...</p>

											<p>See the <a href='style'>Ozark Style Guide</a> for more information.</p>

											<div class='code-sample-header'>GuitarPlayer.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Musician

property @guitar: writable Guitar

method play string: GuitarString -&gt; note: implied Note
	string play -&gt; assign to note</pre></div>

											<a name="Functions"><h2>Functions</h2></a>

											<p>Ozark includes a number of built-in, stateless functions that can operate on primitive values, collections of any type, and the memory addresses of pointers. These functions loosely represent the logic gates available to the host machine.</p>

											<p>There are two types of functions: <em>prefix</em> and <em>infix</em>. Prefix functions have syntax like a method but with no subject. Infix functions can be chained together according to the basic mathematical order of operations to yield a single output.</p>

											<p>In functions and methods alike, primitive inputs can often receive values of other primitive types. See <a href='objects#PrimitiveTypes'>Primitive Types</a> for more info.</p>

											<p>Note that since a string is an array, all functions that operate on arrays may also operate on strings.</p>

											<p><small><em><strong>Key For Tables Below</strong></em><br /><code>[]</code> An array<br /><code>{}</code> A tuple (note that using a single value is OK here)<br />When calling the methods, actual values are used in place of unnamed input types, and the function yields outputs of the unnamed types listed.</small></p>

											<h4>Infix Functions</h4>


											<h4>Prefix Functions</h4>
											<table class='reference'>
											<tr class='flag'><th colspan=2>Prefix Functions</th></tr>
												<tr><td><code>flip Boolean -> Boolean</code></td></tr>
												<tr><td><code>reverse [@Type] -> [@Type]</code></td></tr>
												<tr><td><code>round Number -> Integer</code></td></tr>
												<tr><td><code>roundUp Number -> Integer</code></td></tr>
												<tr><td><code>roundDown Number -> Integer</code></td></tr>
												<tr><td><code>stepTo Integer, step: Integer? -> [Integer]</code></td></tr>
												<tr><td><code>join [@Type] glue: [@Type] -> [@Type]</code></td></tr>
												<tr><td><code>zip array: [[@Type]] -> [[@Type]]</code></td></tr>
												<tr><td><code>zip tuple: [{}] -> [{}]</code></td></tr>
												<tr><td><code>split [@Type], [@Type] -> [@Type], [@Type]</code></td></tr>
												<tr><td><code>extract [@Type], @Type -> [@Type], [@Type]</code></td></tr>
												<tr><td><code>interpret String -> Number</code></td></tr>
												<tr><td><code>interpret String -> integer: Number</code></td></tr>
												<tr><td><code>serialize {} -> String</code></td></tr>
												<tr><td><code>open String</code></td></tr>
												<tr><td><code>close String</code></td></tr>
												<tr><td><code>run String</code></td></tr>
												<tr><td><code>print String</code></td></tr>
											</table>

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