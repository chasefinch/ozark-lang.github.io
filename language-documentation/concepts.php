<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Basic Features";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'concepts';
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
										<h1 class='main-heading' id="overview">Basic Features</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>The root of <span itemprop='name'>Ozark</span> is a class. Everything outside a method is declarative, and everything inside is imperative.</p>

											<p>Strictly speaking, Ozark is a file type definition schema paired with a language for expressing imperitive instructions within a method.</p>

											<p>Running a program in Ozark consists of creating an instance of a class, and then calling a method on that instance. See <a href='files'>File Structure</a> for more details about how files are structured in Ozark.</p>

											<p>There are no global pointers or import statements. Pointers only exist within a method or as a <em>property</em> of a class.</p>

											<div class='code-sample-header'>Employee.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Person

property @calculator: Calculator
property @cellPhone: Telephone

extension setup &amp; calculator: Calculator, &amp; cellPhone: Telephone
	assign calculator to @calculator
	assign cellPhone to @cellPhone

method clockIn time: implied Time
	@timeLog addEntry time, type: .clockIn

method clockOut time: implied Time
	@timeLog addEntry time, type: .clockOut</pre></div>

											<p>All methods are instance methods. The object-oriented philosophy suggests that state be tightly integrated with functionality and stored within objects, and within Ozark, that's always the case.</p>

											<p>These object-oriented constraints are uniquely valuable to Ozark. Developers who inherit legacy code in other languages often find that the underlying object-oriented structure was abandoned in certain places for convenience, maybe with a global variable or misuse of the singleton pattern. When you work on someone else's Ozark code, you won't worry about that. This is one of the ways that Ozark has been built for readability.</p>

											<p>Ozark also avoids techniques that don't truly adhere to the principles of OO development. Static methods are one example. Another is the noticable lack of an object's ability to call its own methods.</p>

											<p>The lack of a <em>self</em> reference and of unnamed code blocks forces inheritance stacks to be tall, methods to be short, and software to be built with dependency injection. This results in a lot of small, hyper-focused classes.</p>

											<div class='code-sample-header'>Offense.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>
method swing pitch: Pitch
	pitch ball -&gt; ball
	ball getHit probability: 0.3</pre></div>

											<div class='code-sample-header'>Defense.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>
property @ball: Ball?

method throw target: BaseballPlayer
	target catch @ball

	clear @ball

method catch ball: implied Ball
	assign ball to @ball</pre></div>

											<div class='code-sample-header'>BaseballPlayer.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance SportsPlayer

property @offense: Offense
property @defense: Defense

extension setup
	create Offense; assign to @offense; setup
	create Defense; assign to @defense; setup

method bat pitcher: Pitcher
	pitcher pitch -&gt; pitch
	@offense swing pitch</pre></div>

											<a name='Instructions'><h2>Instructions aren't expressions</h2></a>

											<p>Lines of code don't have a value to be computed behind the scenes. Instead, you explicitly define all steps in the order of execution. With this constraint, it's easier to visualize complexity of a method.</p>
								
											<div class='code-sample-header code-sample-header-inline'>GameLevel.class.en.ozark</div>
											<div class='code-sample code-sample-inline' itemscope itemtype="http://schema.org/SoftwareSourceCode"><meta itemprop="language" content="Ozark" />
												<pre>inheritance GameAsset

property @scene: GameScene

extension setup
	create GameScene; assign to @scene; setup

method processScene
	@scene evaluateActions
	@scene simulatePhysics
	@scene update</pre></div>
											<a name='Declarative'><h2>Declarative</h2></a>

											<p>Many object-oriented languages define their classes through a set of imperative statements. In Ozark, the only imperative statements you'll find are inside of a <a href='methods'>method</a>; Everything else is written as a declaration.</p>

											<div class='code-sample-header'>RaceCarDriver.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Driver
		
property @car: RaceCar
property @race: Race

extension setup car: RaceCar
	create Race; assign to @race; setup

	assign car to @car

method race track: RaceTrack, start: StartEvent
	@race enter track
	@race start @car
	@race! start</pre></div>

											<a name="Return"><h2>No return types for methods, just inputs and outputs</h2></a>
											
											<p>Rather than evaluating like an expression, a method is an action by an object, and has any number of inputs and/or outputs.</p>

											<a name='StrictProgramming'><h2>Strict programming</h2></a>

											<p>In Ozark, declaration order, indentation, spacing and naming conventions are all important.</p>

											<p>Ozark code looks uniform, which makes it readable. It also means that an IDE can quickly parse Ozark into a logical model.</p>

											<p>A code-generating application can use an Ozark file as a save format, much like Adobe Photoshop uses .psd files. Even better, this saved Ozark file can be opened, read, and edited by hand, then saved and read back into the code-generating application!</p>

											<a name="StronglyTyped"><h2>Strongly typed with no casting</h2></a>

											<p>Ozark is a strongly-typed language. There's no typecasting, only coersion between some primitive types like <code>Integer</code> and <code>Number</code>.</p>

											<div class='code-sample-header'>BrandSpecificBlue.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Color 
		
method rgbValue -&gt; rgbValue: implied Number, Number, Number
	assign 0.0, 0.0, 0.7 to rgbValue</pre></div>

											<div class='code-sample-header'>Print.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>
method ! color: Color, sheet: Paper -&gt; document: implied Paper
	color rgbValue -&gt; rgbValue
	sheet rgbFill rgbValue
	assign sheet to document</pre></div>

											<div class='code-sample-header'>Printer.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Appliance

property @paperTray: [Paper]
property @print: Print

extension setup
	create Print; assign to @print; setup
	create [Paper]; assign to @paperTray; setup | repeat 100 times

method rgbPrint color: Color -&gt; document: Paper?
	with @paperTray
		extract @paperTray[-1] -&gt; sheet, assign to @paperTray
		@print! color: color, sheet: sheet -&gt; assign to document</pre></div>
			
											<a name='SmallScopes'><h2>Small scopes with no globals</h2></a>

											<p>When coding in Ozark, the current working scope is always small. The only mutable pointers are either properties of a class, outputs of the current method, or deferred inputs to a dispatched method. There are no globals. Pointers only exist to store the state of an object, and to connect the inputs &amp; outputs of methods. Think of them as values that are handed from one method call to another until they are stored safely as properties of objects.</p>
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