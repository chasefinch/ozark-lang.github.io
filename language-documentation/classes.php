<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Classes";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'classes';
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
										<h1 class='main-heading' id="overview">Classes</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>As you've seen in the examples thus far, <strong>classes</strong> are the primary building blocks of Ozark applications. With the exception of <a href='functions#Libraries'>libraries</a> and <a href='values#Enumeration'>enumerations</a>, a class is the only thing that exists outside of any other context. In fact, building an Ozark application consists entirely of building classes, enumerations and libraries.</p>

											<p>Root-level classes correspond to single files within an operating system. Class file names end with <code>.class.ozark</code>, with ".ozark" being the technical file extension, and ".class" being an identifier that Ozark uses to differentiate between classes, enumerations, and libraries. Nested classes are declared with the <code>class</code> keyword. See <a href='files'>file structure</a> for more details about Ozark files.</p>

											<p>A class is a compound data type. An instance of a class is called an <a href='objects'>object</a> and that object can be referenced by a <a href='objects#Pointers'>pointer.</a>

											<p>A class may contain any number of the following declarations in this order:</p>

											<ul>
												<li><a href='#Inheritance'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><a href='#Requirements'><code>requirement</code></a> - Another class, enumeration, or library of which this class must be aware</li>
												<li><code>class</code> - A nested class declaration on which this class depends</li>
												<li><a href='values#Enumeration'><code>enumeration</code></a> - A nested enumeration declaration on which this class depends</li>
												<li><a href='members'><code>member</code></a> - A pointer within the scope of an object of this class</li>
												<li><a href='properties'><code>property</code></a> - A variable within the scope of the object of this class</li>
												<li><a href='methods#extensions'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><a href='methods'><code>method</code></a> - A named subroutine with any number of inputs and outputs</li>
											</ul>

											<p>A class starts with a capital letter, and everything is declarative within a class definition. Only a method has imperative statements.</p>

											<div class='code-sample-header'>Superhero.class.ozark</div>
											<div class='code-sample'><pre>inheritance Hero

requirement Superpower
requirement XRayVision

enumeration Strength
	case fullStrength
	case prettyStrong
	case beatenUp
	case veryWeak

member superpower:Superpower

property strength:Strength

extension initialize
	create power:XRayVision initialize
	set @superpower &lt;- power
	set @strength &lt;- Strength.fullStrength</pre></div>

											<a name="Requirements"><h2>Requirements</h2></a>

											<p>Any classes or enumerations used by a class that aren't nested must be explicitly declared as <strong>requirements</strong>. Additionally, all libraries used must be declared as requirements. The <code>requirement</code> declaration will find the class, enumeration, or library in the current project scope, which includes the file's current directory and the system-wide libraries linked in the Ozark compiler. See <a href='files'>File Structure</a> for more information.</p>

											<div class='code-sample-header'>TruckDriver.class.ozark</div>
											<div class='code-sample'><pre>inheritance Driver

requirement Truck
requirement Road
requirement BinaryTree</pre></div>

											<a name="Inheritance"><h2>Inheritance</h2></a>

											<p>Most classes other than the <code>Object</code> class (from the Ozark standard library) should have at least one <strong>inheritance</strong>. Making a class a descendant of the <code>Object</code> class allows you to use it in various collection types, and gives standard functionality out of the box.</p>

											<p>Ozark supports multiple inheritance. For example, a <code>Cat</code> can be both a <code>Cartoon</code> and an <code>Animal</code>. Method naming conflicts are resolved using a depth-first search with the <a target="_blank" href='https://en.wikipedia.org/wiki/C3_linearization'>C3 linearization algorithm.</a> Other naming conflicts are not allowed, and produce a compile-time error.</p>

											<div class='code-sample-header'>Cat.class.ozark</div>
											<div class='code-sample'><pre>inheritance Cartoon
inheritance Animal

requirement Whisker
requirement Tail

member whiskers:Array|Whisker
member tail:Tail

method catNap io:StandardIO
	io print "zzzzzzz"</pre></div>

											<a name='Nesting'><h2>Nesting</h2></a>

											<p>Classes can be <strong>nested</strong> inside other classes. This lets you group supporting classes with the class they support. Since an object can't call it's own methods, classes must have related supporting classes to implement most of their functionality. A common pattern is to name nested classes after capabilities. This forces a pattern of dependency injection while keeping classes neatly grouped together.</p>

											<p>Consider this example class from the RifleRange demo app. The <code>Rifleman</code> class has a <code>ShootAbility</code> and a <code>CelebrateAbility</code>, and both of those classes are nested within the <code>Rifleman</code> class.</p>

											<div class='code-sample-header'>Rifleman.class.ozark</div>
											<div class='code-sample'><pre>inheritance Soldier

requirement StandardIO
requirement Gun
requirement Bullet.Casing
requirement Smoke
requirement Target
requirement Mood
requirement Hat

class ShootAbility
	inheritance Ability

	requirement Gun
	requirement Target
	requirement Bullet.Casing
	requirement Smoke
	requirement Calculus

	enumeration SkillLevel
		state Novice
		state Intermediate
		state Expert

	member skill:SkillLevel

	extension initialize ~skill:SkillLevel
		set @skill &lt;- skill

	method fireGun #gun:Gun target:Target -&gt; casing:Bullet.Casing smoke:Smoke
		gun shootTarget target -&gt; casing:casing1 smoke:smoke1

		set casing &lt;- casing1
		set smoke &lt;- smoke1

class CelebrateAbility
	inheritance Ability

	requirement StandardIO
	requirement Hat

	class HatTipAbility
		inheritance Ability

		requirement Hat

		method tipHat #hat:Hat
			hat getTipped

	member io:StandardIO
	member hatTipper:HatTipAbility

	extension initialize
		@io initialize
		@hatTipper initialize

	extension initialize ~io:StandardIO
		set @io &lt;- io
		@hatTipper initialize

	method showOffForTheCrowd hat:Hat
		@hatTipper tipHat hat
		@io print "Hello, ladies."

member io:StandardIO
member shooter:ShootAbility
member celebrator:CelebrateAbility
member gun:Gun
member hat:Hat

property mood:Mood
property fieldGuides:Dictionary\String|String

extension initialize
	create io:StandardIO initialize
	create shooter:ShootAbility initialize
	create celebrator:CelebrateAbility initialize io:io
	create gun:Gun initialize
	create hat:Hat initialize

	set @io &lt;- io
	set @shooter &lt;- shooter
	set @celebrator &lt;- celebrator
	set @mood &lt;- Mood.happy
	set @gun &lt;- gun
	set @hat &lt;- hat

extension initialize ~io:StandardIO
	create shooter:ShootAbility initialize
	create celebrator:CelebrateAbility initialize io:io
	create gun:Gun initialize
	create hat:Hat initialize

	set @io &lt;- io
	set @shooter &lt;- shooter
	set @celebrator &lt;- celebrator
	set @mood &lt;- Mood.happy
	set @gun &lt;- gun
	set @hat &lt;- hat

method shootEveryOtherTarget #targets:Array|Target -&gt; casings:Array|Bullet.Casing smoke:Smoke success:Boolean
	create theCasings:Array|Bullet.Casing initialize
	create theSmoke:Smoke initialize

	input getOddItems -&gt; oddItems
	oddItems getKeys -&gt; keys

	for k in:keys -&gt; success:[Boolean]
		oddItems lookup k -&gt; i
		shooter shootTarget i -&gt; result
		set success &lt;- result

	if all(success)
		@celebrator showOffForTheCrowd hat:@hat
		set @mood &lt;- Mood.happy

	set casings &lt;- theCasings
	set smoke &lt;- theSmoke
	set success &lt;- all(successes)</pre></div>

											<p>From outside of the parent class, subclasses can be imported via the <code>requirement</code> declaration and referenced with dot notation. For example, a class making use of the <code>Rifleman</code> class but wishing to declare an independent <code>ShootAbility</code> would reference the class as <code>Rifleman.ShootAbility</code></p>

											<p>Note that nested classes cannot be subclasses of the main class; Subclasses should be defined separately. Nesting is for supporting classes only.</p>
										</main>
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