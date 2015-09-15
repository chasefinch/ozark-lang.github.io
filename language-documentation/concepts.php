<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Basic Features";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'concepts';
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
										<h1 class='main-heading' id="overview">Basic Features</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>The root of Ozark is a class. Everything outside of a method is declarative, and everything inside of a method is imperative.</p>

											<p>Running a program in Ozark consists of creating an instance of a class, and then calling a method on that instance. See <a href='files'>File Structure</a> for more details about how files are structured in Ozark.</p>

											<p>Though Ozark is fully object-oriented, it differentiates <em>objects</em> from <em>values</em>. The number 5 is NOT an object with state or capabilities; It's a value that can be transformed, a representation of a state, and it can't *do* anything itself. Transformation of values in Ozark is done with built-in <a href='functions'>functions</a> that combine to form <em>expressions</em>.</p>

											<p>There are no global pointers, variables, or import statements. Pointers &amp; variables can only exist within a method, or as a <em>member</em> or <em>property</em> of a class. Other classes are imported via the <code>requirement</code> keyword.</p>

											<div class='code-sample-header'>Accountant.class.ozark</div>
											<div class='code-sample'><pre>inheritance BusinessPerson

requirement Calculator
requirement Telephone

member calculator:Calculator
member cellPhone:Telephone

extension initialize ~calculator:Calculator ~cellPhone:Telephone
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
											<div class='code-sample'><pre>inheritance SportsPlayer

class OffensiveAbility
	inheritance SportsAbility

	method swing pitch:Pitch -&gt; #hit:Boolean
		pitch getBall -&gt; ball
		ball getHit probability:0.3

class DefensiveAbility
	inheritance SportsAbility

	member ball:Ball?

	method throw target:BaseballPlayer
		target catch @ball
		clear @ball

	method catch #ball:Ball
		set @ball &lt;- ball

member offense:OffensiveAbility
member defense:DefensiveAbility

extension initialize
	create offensive:OffensiveAbility initialize
	create defensive:DefensiveAbility initialize
	set @offense &lt;- offensive
	set @defense &lt;- defensive

method bat pitcher:Pitcher
	pitcher pitch -&gt; pitch
	@offense swing pitch:pitch</pre></div>

											<a name='Declarative'><h2>Declarative</h2></a>

											<p>Many object-oriented languages define their classes through a set of imperative statements. In Ozark, the only imperative  statements you'll find are inside of a <a href='methods'>method</a>; Everything else is written as a declaration.</p>

											<div class='code-sample-header'>RaceCarDriver.class.ozark</div>
											<div class='code-sample'><pre>inheritance Driver
		
requirement RaceCar
requirement RaceAbility
requirement RaceTrack

member car:RaceCar
member raceAbility:RaceAbility

extension initialize car:RaceCar
	create ability:RaceAbility initialize
	set @raceAbility &lt;- ability
	set @car &lt;- car

method race track:RaceTrack start:StartEvent
	@raceAbility moveToTrack track
	@raceAbility turnKey car:@car
	@raceAbility beginRace startEvent:start</pre></div>

											<a name='Compiled'><h2>Compiled</h2></a>

											<p>Ozark is compiled to run on the Java Virtual Machine (JVM). This means great performance with the flexibility of being able to run on all major platforms.</p>

											<p>Plans are also in place to build an Ozark interpreter for ease of use in web development and other script-based environments.</p>

											<a name='StrictProgramming'><h2>Strict programming</h2></a>

											<p>Ozark is based on the philosophy of Strict Programming. This means that declaration order, whitespace (including line breaks and indentation), and naming conventions are all enforced. It also means no syntactic sugar; Each operation has exactly one syntax.</p>

											<p>Ozark code always looks the same, which makes it readable. It also means that an IDE can quickly parse Ozark into a logical model.</p>

											<p>A code-generating application can use an Ozark file as a save format, much like Adobe Photoshop uses .psd files, or Microsoft Word uses .docx files. Even better, this saved Ozark file can be opened, read, and edited by hand, then saved and read back into the code-generating application!</p>

											<a name="Parallel"><h2>Parallel</h2></a>

											<p>Because of the strict language rules, the Ozark compiler is able to see a lot of situations where it makes sense to execute code on a new thread. It implicitly introduces new threads behind the scenes to make the most of the available CPU resources.</p>

											<a name="StronglyTyped"><h2>Strongly typed with no casting</h2></a>

											<p>Ozark is a strongly-typed language, and all collection types are homogenous. There's no typecasting; Values should be explicitly converted, and objects cannot be assumed to be of a given class.</p>

											<p>This improves readability and reduces the amount of errors that aren't caught at compile time. If you get a value or an object from a collection, you can be assured of its type.</p>

											<div class='code-sample-header'>BrandSpecificBlue.class.ozark</div>
											<div class='code-sample'><pre>inheritance Color 
		
extension rgbValue -&gt; red:Number green:Number blue:Number
	set red &lt;- 0.0
	set green &lt;- 0.0
	set blue &lt;- 1.0</pre></div>

											<div class='code-sample-header'>Printer.class.ozark</div>
											<div class='code-sample'><pre>inheritance Object

requirement Paper

property paperTray:Array|Paper

method rgbPrint color:Color -&gt; document:Paper?
	@paperTray pop -&gt; sheet

	with sheet
		color rgbValue -&gt; red:red green:green blue:blue
		sheet rgbFill red:red green:green blue:blue
		set document &lt;- sheet</pre></div>
			
											<a name='SmallScopes'><h2>Small scopes with no globals</h2></a>

											<p>When coding in Ozark, the current working scope is always very small. The only mutable pointers/variables are either members/properties of a class, or outputs of the current method, and there are no globals. Pointers &amp; variables only exist to store the state of an object, and to connect the inputs &amp; outputs of methods. Think of them as values and objects that are handed from one method call to another until they are stored safely as properties or members of objects.</p>
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