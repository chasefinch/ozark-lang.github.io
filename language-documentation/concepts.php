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
											<p>The root of <span itemprop='name'>Ozark</span> is a class. Everything outside of a method is declarative, and everything inside of a method is imperative.</p>

											<p>Running a program in Ozark consists of creating an instance of a class, and then calling a method on that instance. See <a href='files'>File Structure</a> for more details about how files are structured in Ozark.</p>

											<p>There are no global pointers or import statements. Pointers can only exist within a method or as a <em>property</em> of a class.</p>

											<div class='code-sample-header'>Accountant.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance BusinessPerson

property @calculator:Calculator
property @cellPhone:Telephone

extension initialize &amp;calculator:Calculator &amp;cellPhone:Telephone
	set @calculator &lt;- calculator
	set @cellPhone &lt;- cellPhone

method clockIn time:Time
	@timeLog addEntry time type:EntryType.clockIn

method clockOut time:Time
	@timeLog addEntry time type:EntryType.clockOut</pre></div>

											<p>All methods are instance methods. The object-oriented philosophy suggests that state be tightly integrated with functionality and stored within objects, and within Ozark, that's always the case.</p>

											<p>These object-oriented constraints are uniquely valuable to Ozark. Developers who inherit legacy code in other languages often find that the underlying object-oriented structure was abandoned in certain places for convenience, maybe with a global variable or misuse of the singleton pattern. When you inherit Ozark code, you can be sure that's not the case. This is one of the ways that Ozark has been built for readability.</p>

											<p>Ozark also avoids techniques that are commonly considered to be object-oriented, but don't truly adhere to the principles that govern OO development. Static methods are one example of such a technique. Another is an object's ability to call its own methods with a reference to itself.</p>

											<p>The lack of a <em>self</em> reference forces Ozark inheritance stacks to be tall, and it forces all Ozark software to be built purely with dependency injection. This results in a lot of small, hyper-focused classes. <a href='classes#Nesting'>Nesting classes and enumerations</a> is the Ozark way of keeping these related classes organized.</p>

											<div class='code-sample-header'>BaseballPlayer.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance SportsPlayer

class OffensiveAbility
	inheritance SportsAbility

	method swing pitch:Pitch
		pitch getBall -&gt; ball
		ball getHit probability:0.3

class DefensiveAbility
	inheritance SportsAbility

	property @ball:Ball?

	method throw target:BaseballPlayer
		target catch @ball

		clear @ball

	method catch _ball:Ball
		set @ball &lt;- ball

property @offense:OffensiveAbility
property @defense:DefensiveAbility

extension initialize
	create offense:OffensiveAbility; initialize
	create defense:DefensiveAbility; initialize

	set @offense &lt;- offense
	set @defense &lt;- defense

method bat pitcher:Pitcher
	pitcher pitch -&gt; pitch
	@offense swing pitch:pitch</pre></div>

											<a name='Instructions'><h2>Instructions aren't expressions</h2></a>

											<p>Lines of code don't have a value to be computed behind the scenes. Instead, you clearly see and define what steps the processor will take during execution.</p>
											<p>Code is verbose and clear, and each line has only one instruction.</p>
								
											<div class='code-sample-header code-sample-header-inline'>GameLevel.class.ozark</div>
											<div class='code-sample code-sample-inline' itemscope itemtype="http://schema.org/SoftwareSourceCode"><meta itemprop="language" content="Ozark" />
												<pre>inheritance GameAsset

property scene:GameScene

method processScene
	@scene evaluateActions
	@scene simulatePhysics
	@scene update</pre></div>
											<a name='Declarative'><h2>Declarative</h2></a>

											<p>Many object-oriented languages define their classes through a set of imperative statements. In Ozark, the only imperative  statements you'll find are inside of a <a href='methods'>method</a>; Everything else is written as a declaration.</p>

											<div class='code-sample-header'>RaceCarDriver.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Driver
		
property @car:RaceCar
property @raceAbility:RaceAbility

extension initialize car:RaceCar
	create raceAbility:RaceAbility; initialize
	
	set @raceAbility &lt;- raceAbility
	set @car &lt;- car

method race track:RaceTrack start:StartEvent
	@raceAbility moveToTrack track
	@raceAbility turnKey car:@car
	@raceAbility beginRace startEvent:start</pre></div>

											<a name="Return"><h2>No return types for methods, just inputs and outputs</h2></a>
											
											<p>Rather than evaluating like an expression, a method is an action by an object, and has any number of inputs and/or outputs.</p>

											<a name='StrictProgramming'><h2>Strict programming</h2></a>

											<p>Ozark is based on the philosophy of <em>Strict Programming</em>. This means that declaration order, whitespace (including line breaks and indentation), and naming conventions are all enforced. It also means no syntactic sugar; Each operation has exactly one syntax.</p>

											<p>Ozark code always looks the same, which makes it readable. It also means that an IDE can quickly parse Ozark into a logical model.</p>

											<p>A code-generating application can use an Ozark file as a save format, much like Adobe Photoshop uses .psd files, or Microsoft Word uses .docx files. Even better, this saved Ozark file can be opened, read, and edited by hand, then saved and read back into the code-generating application!</p>

											<a name="StronglyTyped"><h2>Strongly typed with no casting</h2></a>

											<p>Ozark is a strongly-typed language. There's no typecasting; Values should be explicitly converted, and objects cannot be assumed to be of a given class.</p>

											<p>This improves readability and reduces the amount of errors that aren't caught at compile time. If you get an object from an array, you can be assured of its type.</p>

											<div class='code-sample-header'>BrandSpecificBlue.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Color 
		
method rgbValue -&gt; $red:Number $green:Number $blue:Number
	set $red &lt;- 0.0
	set $green &lt;- 0.0
	set $blue &lt;- 1.0</pre></div>

											<div class='code-sample-header'>Printer.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Object

property @paperTray:[Paper]

method rgbPrint color:Color -&gt; $document:Paper?
		with sheet:@paperTray[-1]
			color rgbValue -&gt; red:red green:green blue:blue
			sheet rgbFill red:red green:green blue:blue
			set $document &lt;- sheet
			set @paperTray &lt;- @paperTray[1~-1]</pre></div>
			
											<a name='SmallScopes'><h2>Small scopes with no globals</h2></a>

											<p>When coding in Ozark, the current working scope is always very small. The only mutable pointers are either properties of a class, or outputs of the current method, and there are no globals. Pointers only exist to store the state of an object, and to connect the inputs &amp; outputs of methods. Think of them as values that are handed from one method call to another until they are stored safely as properties of objects.</p>
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