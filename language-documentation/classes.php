<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Classes";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'classes';
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
										<h1 class='main-heading' id="overview">Classes</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>As you've seen in the examples thus far, <strong>classes</strong> are the primary building blocks of <span itemprop='name'>Ozark</span> applications. With the exception of <a href='objects#Enumeration'>enumerations</a>, a class is the only thing that exists outside of any other context. In fact, building an Ozark application consists entirely of building classes and enumerations.</p>

											<p>Root-level classes correspond to single files within an operating system. Class file names end with <code>.class.ozark</code>, with ".ozark" being the technical file extension, and ".class" being an identifier that Ozark uses to differentiate between classes and enumerations. Nested classes are declared with the <code>class</code> keyword. See <a href='files'>file structure</a> for more details about Ozark files.</p>

											<p>A class is a compound data type. An instance of a class is called an <a href='objects'>object</a> and that object can be referenced by a <a href='objects#Pointers'>pointer.</a>

											<p>A class may contain any number of the following declarations in this order:</p>

											<ul>
												<li><a href='#Inheritance'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><a href='objects#Generics'><code>type</code></a> - If this class uses generics, a placeholder for a type that is specified on object initialization</li>
												<li><a href='#Inheritance'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><code>class</code> - A nested class declaration on which this class depends</li>
												<li><a href='values#Enumeration'><code>enumeration</code></a> - A nested enumeration declaration on which this class depends</li>
												<li><a href='properties'><code>property</code></a> - A pointer or collection within the scope of the object of this class</li>
												<li><a href='methods#extensions'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><a href='methods'><code>method</code></a> - A named subroutine with any number of inputs and outputs</li>
											</ul>

											<p>A class starts with a capital letter, and everything is declarative within a class definition. Only a method has imperative statements.</p>

											<div class='code-sample-header'>Superhero.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Hero

enumeration Strength
	state fullStrength
	state prettyStrong
	state beatenUp
	state veryWeak

property @superpower:Superpower
property @strength:Strength

extension initialize
	create power:XRayVision initialize

	set @power &lt;- power
	set @strength &lt;- Strength.fullStrength</pre></div>

											<a name="Inheritance"><h2>Inheritance</h2></a>

											<p>Most classes other than the <code>Object</code> class (from the Ozark standard library) should have at least one <strong>inheritance</strong>. Making a class a descendant of the <code>Object</code> class allows you to use it in various collection types, and gives standard functionality out of the box.</p>

											<p>Ozark supports multiple inheritance. For example, a <code>Cat</code> can be both a <code>Cartoon</code> and an <code>Animal</code>. Method naming conflicts are resolved by using the method from the first-declared inheritance.</p>

											<div class='code-sample-header'>Cat.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Cartoon
inheritance Animal

property @whiskers:[Whisker]
property @tail:Tail

method catNap io:StandardIO
	io print "zzzzzzz"</pre></div>

											<a name='Nesting'><h2>Nesting</h2></a>

											<p>Classes can be <strong>nested</strong> inside other classes. This lets you group supporting classes with the class they support. Since an object can't call it's own methods, classes must have related supporting classes to implement most of their functionality. A common pattern is to name nested classes after capabilities. This forces a pattern of dependency injection while keeping classes neatly grouped together.</p>

											<p>Consider this example class from the RifleRange demo app. The <code>Rifleman</code> class has a <code>ShootAbility</code> and a <code>CelebrateAbility</code>, and both of those classes are nested within the <code>Rifleman</code> class.</p>

											<div class='code-sample-header'>Rifleman.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Soldier

class ShootAbility
	inheritance Ability

	enumeration SkillLevel
		state novice
		state intermediate
		state expert

	property @skill:SkillLevel

	extension initialize		
		set @skill &lt;- SkillLevel.novice

	extension initialize &amp;skill:SkillLevel
		set @skill &lt;- skill

	method fireGun gun:Gun target:Target -&gt; $casing:Bullet.Casing $smoke:Smoke
		gun shoot target -&gt; casing:casing smoke:smoke

		set $casing &lt;- casing
		set $smoke &lt;- smoke

class CelebrateAbility
	inheritance Ability

	class HatTipAbility
		inheritance Ability

		method tipHat _hat:Hat
			hat getTipped

	property @io:StandardIO
	property @hatTipper:HatTipAbility

	extension initialize
		create io:StandardIO; initialize
		create hatTipper:HatTipAbility; initialize

		set @io &lt;- io
		set @hatTipper &lt;- hatTipper

	extension initialize &amp;io:StandardIO
		create hatTipper:HatTipAbility; initialize

		set @io &lt;- io
		set @hatTipper &lt;- hatTipper

	method showOffForTheCrowd hat:Hat
		@hatTipper tipHat hat
		@io print "Hello,&nbsp;ladies."

property @io:StandardIO
property @shooter:ShootAbility
property @celebrator:CelebrateAbility
property @gun:Gun
property @hat:Hat
property @mood:Mood

extension initialize
	create io:StandardIO; initialize
	create shooter:ShootAbility; initialize
	create celebrator:CelebrateAbility; initialize io:io
	create gun:Gun; initialize
	create hat:Hat; initialize

	set @io &lt;- io
	set @shooter &lt;- shooter
	set @celebrator &lt;- celebrator
	set @gun &lt;- gun
	set @hat &lt;- hat
	set @mood &lt;- Mood.happy

extension initialize &amp;io:StandardIO
	create shooter:ShootAbility; initialize
	create celebrator:CelebrateAbility; initialize io:io
	create gun:Gun; initialize
	create hat:Hat; initialize

	set @io &lt;- io
	set @shooter &lt;- shooter
	set @celebrator &lt;- celebrator
	set @gun &lt;- gun
	set @hat &lt;- hat
	set @mood &lt;- Mood.happy

method shootEveryOtherTarget _targets:[Target] -&gt; $casings:[Bullet.Casing] $smoke:Smoke $success:Boolean
	create smoke:Smoke; initialize
	create success:Boolean; initialize true
	create testShotCasing1:Bullet.Casing; initialize
	create testShotCasing2:Bullet.Casing; initialize

	identify testCasings:[testShotCasing1, testShotCasing2]

	for target:targets[2%2] -&gt; casings:[Bullet.Casing]
		shooter shootTarget target -&gt; success:success1 casing:casing smoke:smoke1
		success and success1
		smoke add smoke1
		set casings[$] &lt;- casing

	unless someVar
		@celebrator showOffForTheCrowd hat:@hat
	
	else; if someOtherVar
		set @mood &lt;- Mood.happy

	else
		set @mood &lt;- Mood.tired

	set $casings &lt;- testCasings + casings
	set $smoke &lt;- smoke
	set $success &lt;- success</pre></div>

											<p>From outside of the parent class, nested classes and enumerations are referenced with dot notation. For example, a class making use of the <code>Rifleman</code> class but wishing to declare an independent <code>ShootAbility</code> would reference the class as <code>Rifleman.ShootAbility</code></p>

											<p>Note that nested classes cannot be subclasses of the parent class; Subclasses should be defined separately. Nesting is for supporting classes only.</p>
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