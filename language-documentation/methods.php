<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Methods";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'methods';
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
										<h1 class='main-heading' id="overview">Methods</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>method</strong> is a subroutine, attached to a class, that can have any number of predefined inputs and outputs. A method is executed by passing the method name and arguments to an object.</p>

											<p>A method declaration specifies named inputs, named outputs, and a method body. The body is made of imperative statements.</p>

											<p>All methods are public (accessible to any context that has reference to the object) &ndash; but in Ozark, an object cannot call its own methods.</p>
											
											<div class='code-sample-header'>Conductor.class.ozark</div>
											<div class='code-sample'><pre>inheritance Musician
	
requirement Concerto
requirement Orchestra

method beginConcerto #concerto:Concerto orchestra:Orchestra
	concerto getFirstMovement -&gt; movement
	orchestra perform movement
	concerto getSecondMovement -&gt; movement2
	concerto perform movement2
	concerto getFinalMovement -&gt; movement3
	concert perform movement3

method concludeConcerto #concerto:Song orchestra:Orchestra
	orchestra concludeConcerto concerto</pre></div>


											<p>Methods do not have a "return value" like in other object-oriented languages. Statements are not expressions to be evaluated; They are instructions to be executed, and they may or may not have any number of outputs. Separating the concept of evaluable expressions from the concept of executable instructions is one of the core uniquenesses of Ozark.</p>

											<p>Methods are executable instructions that can operate on <em>objects</em> and using both <em>objects</em> and <em>values</em>, where as evaluable <em>expressions</em> consist of only values and built-in functions.</p>

											<a name='InputsAndOutputs'><h2>Inputs &amp; outputs</h2></a>

											<p>Methods have any number of predefined inputs and outputs.</p>

											<p>Within a method, outputs are final, meaning they can only be pointed to an object (or assigned a value) once during a method, and inputs are constant, meaning they cannot have their object/value changed at all. The only other mutable items are <a href='classes#Members'>members</a> and <a href='classes#Properties'>properties</a>, which are also final within a method.</p>

											<p>When calling a method, the inputs are final (meaning they can only be assigned once), and the outputs are constant and cannot be changed.</p>

											<p>Within a method signature, inputs are declared sequentially after the method name, and outputs are declared after an arrow (<code>-&gt;</code>) symbol.</p>

											<p>Both pointers and variables can be defined as inputs and outputs. The type and name of the pointers and variables is defined explicitly in the method signature. Inputs are both named and ordered, allowing verbose method names. An input prefixed with a hash (<code>#</code>) is not mentioned explicitly when called.</p>

											<div class='code-sample-header'>Sailboat.class.ozark</div>
											<div class='code-sample'><pre>inheritance Boat

requirement WaterfrontLocation

member location:Location
member launcher:LaunchAbility
member navigator:NavigateAbility
member docker:DockAbility

method sailTo #destination:WaterfrontLocation -&gt; duration:TimeInterval
	@launcher launch
	destination getPort -&gt; port
	port getLocation -&gt; location
	@navigator navigate destination:location -&gt; finalLocation:final
	@docker dock port:port

	set @location &lt;- final</pre></div>

		
											<a name='Properties'><h2>Properties &amp; members</h2></a>

											<p>Ozark has very small scopes. A method may access the <strong>properties</strong> &amp; <strong>members</strong> of the instance object, and the inputs and outputs of the method itself. No other predefined value are available to it.</p>

											<p>A method is, however, the only way of accessing the properties and members of a given object. Those properties and members are not accessible to other objects.</p>


											<a name="Extensions"><h2>Overriding &amp; extending parent methods</h2></a>

											<p>As discussed in <a href='classes#Inheritance'>Inheritance</a>, a class inherits all methods, members, and properties from its parent classes. It also has access to declared <em>requirements</em>, nested classes, and nested <em>enumerations</em>. To redeclare a method in a child class, simply declare it as usual. An object will use the new method definition instead of the inherited one.</p>

											<p>To extend a parent method, drop the <code>method</code> keyword and instead declare an <code>extension</code>. This is commonly seen with the <code>initialize</code> method.</p>

											<div class='code-sample-header'>Flower.class.ozark</div>
											<div class='code-sample'><pre>inheritance Plant

requirement Color

member color:Color

extension initialize
	create color:Color initializeRandom

	set @color &lt;- color</pre></div>

											<p>To add additional input &amp; output parameters to an extension, prefix them with the tilde (<code>~</code>) symbol.</p>

											<div class='code-sample-header'>Flower.class.ozark</div>
											<div class='code-sample'><pre>inheritance Plant

requirement Color
requirement Direction

member color:Color

extension initialize ~color:Color -&gt; ~facing:Direction
	set @color &lt;- color

	create direction:Direction initializeRandom

	set facing &lt;- direction</pre></div>
	
											<a name='Calling'><h2>Calling methods</h2></a>

											<p><strong>Method calls</strong> are the building blocks of other methods. Every line inside of a method body is either a method call or a <a href='control'>control flow</a> statement. A method is called by passing the name of the method and the arguments to the object on which the method will be called.</p>

											<p>An Ozark method call follows a cadence of:</p>

											<p><em>subject</em>, <em>verb</em>, <em>argument</em>, <em>value</em>, <em>argument</em>, <em>value</em>, ...</p>

											<p>See the <a href='style'>Ozark Style Guide</a> for more information.</p>

											<a name="NestedTypes"><h2>Using nested types</h2></a>

											<p><strong>Nested types</strong> can be used within the primary class as named. From outside a class, dot notation is used to identify the class name. This example contains a few of each situation:</p>

											<div class='code-sample-header'>Guitar.class.ozark</div>
											<div class='code-sample'><pre>inheritance Instrument

class GuitarString
	inheritance Instrument.PlayableComponent

member string1:GuitarString
member string2:GuitarString
member string3:GuitarString
member string4:GuitarString
member string5:GuitarString
member string6:GuitarString

method initialize
	create string1:GuitarString initialize
	create string2:GuitarString initialize
	create string3:GuitarString initialize
	create string4:GuitarString initialize
	create string5:GuitarString initialize
	create string6:GuitarString initialize

	set @string1 &lt;- string1
	set @string2 &lt;- string2
	set @string3 &lt;- string3
	set @string4 &lt;- string4
	set @string5 &lt;- string5
	set @string6 &lt;- string6</pre></div>

											<div class='code-sample-header'>GuitarPlayer.class.ozark</div>
											<div class='code-sample'><pre>inheritance Musician

requirement Guitar
requirement Guitar.GuitarString

member guitar

method setGuitar #guitar:Guitar
	set @guitar &lt;- guitar

method playString #string:Guitar.GuitarString -&gt; note:Note
	string play -&gt; note:note
	
	set note &lt;- note</pre></div>
	
											<p>The robust nested-type system in Ozark is intended to keep code neat, since dependency injection is required by the built-in language rules.</p>
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