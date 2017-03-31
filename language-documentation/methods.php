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

											<p>All methods are public (accessible to any context that has reference to the object) &ndash; but in <span itemprop='name'>Ozark</span>, an object cannot call its own methods.</p>
											
											<div class='code-sample-header'>Conductor.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Musician
	
method begin concerto: Concerto, orchestra: Orchestra
	concerto movement number:1 -&gt; movement: movement1
	orchestra perform movement1

	concerto movement number:2 -&gt; movement: movement2
	orchestra perform movement1

	concerto movement number:3 -&gt; movement: movement3
	orchestra perform movement3

method conclude concerto: Song, orchestra: Orchestra
	orchestra conclude concerto: concerto</pre></div>


											<p>Methods do not have a "return value" like in other object-oriented languages. Statements are not expressions to be evaluated; They are instructions to be executed, and they may or may not have any number of outputs. Separating the concept of evaluable expressions from the concept of executable instructions is one of the core uniquenesses of Ozark.</p>

											<a name='InputsAndOutputs'><h2>Inputs &amp; outputs</h2></a>

											<p>Methods have any number of predefined inputs and outputs. Within a method, inputs are constant, meaning they cannot have their value changed. The only mutable items are the outputs of the method, and the <a href='properties'>properties</a> of the current object.</p>

											<p>When calling a method, the created outputs are constants that cannot be changed.</p>

											<p>Within a method signature, inputs are declared sequentially after the method name, and outputs are declared after an arrow symbol (<code>-&gt;</code>).</p>

											<p>The types of the pointers and collections are defined explicitly in the method signature. Inputs are both named and ordered, allowing verbose method names. If a method has no inputs, one output, and the output is of the same name as the method, the method name is omitted when called.</p>

											<div class='code-sample-header'>Sailboat.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Boat

property @location: Location?
property @launch: Launch
property @navigate: Navigate
property @dock: Dock

method setup
	create Launch; set @launch; setup
	create Navigate; set @navigate; setup
	create Dock; set @dock; setup

method sail destination: WaterfrontLocation -&gt; duration: TimeInterval
	@launch!
	destination -&gt; port: port
	port -&gt; location: location
	@navigate! destination:location -&gt; finalLocation; set @location, duration; set duration
	@dock! port:port</pre></div>

		
											<a name='Properties'><h2>Properties</h2></a>

											<p>Ozark has very small scopes. A method may access the <strong>properties</strong> of the instance object, and the inputs and outputs of the method itself. No other predefined value are available to it.</p>

											<p>A method is, however, the only way of accessing the properties of a given object. Those properties are not accessible to other objects.</p>

											<a name="Extensions"><h2>Overriding &amp; extending parent methods</h2></a>

											<p>As discussed in <a href='classes#Inheritance'>Inheritance</a>, a class inherits all methods and properties from its parent classes. It also has access to classes and enumerations from other files in the same directory. To redeclare a method in a child class, drop the <code>method</code> keyword and instead declare a <code>replacement</code>.</p>

											<p>To extend a parent method, drop the <code>method</code> keyword and instead declare an <code>extension</code>. This is commonly seen with the <code>setup</code> method. The body declared for the extension will execute after the code declared in the parent method. You can choose to add additional inputs and outputs to the extension.</p>

											<div class='code-sample-header'>Flower.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Plant

property @color: Color

extension setup
	create Color; set @color; random</pre></div>

											<p>To add additional input &amp; output parameters to an extension, prefix them with the ampersand (<code>&amp;</code>) symbol.</p>

											<div class='code-sample-header'>Flower.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Plant

property @color: Color

extension setup -&gt; &amp;facing: Direction
	create Direction; set facing; random</pre></div>
	
											<a name='Calling'><h2>Calling methods</h2></a>

											<p><strong>Method calls</strong> are the building blocks of other methods. Every line inside of a method body is either a method call or a <a href='control'>control flow</a> statement. A method is called by passing the name of the method and the arguments to the object on which the method will be called.</p>

											<p>An Ozark method call follows a cadence of:</p>

											<p><em>subject</em>, <em>verb</em>, <em>argument</em>, <em>value</em>, <em>argument</em>, <em>value</em>, ...</p>

											<p>See the <a href='style'>Ozark Style Guide</a> for more information.</p>

											<div class='code-sample-header'>GuitarPlayer.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Musician

property @guitar

method set guitar: Guitar
	set @guitar &lt;- guitar

method play string: GuitarString -&gt; note: Note
	string play -&gt; note; set note</pre></div>
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