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

											<p>Classes correspond to single files within an operating system. Class file names end with <code>.class.ozark</code>, with ".ozark" being the technical file extension, and ".class" being an identifier that Ozark uses to differentiate between classes and enumerations.</p>

											<p>A class is a compound data type. An instance of a class is called an <a href='objects'>object</a> and that object can be referenced by a <a href='objects#Pointers'>pointer.</a>

											<p>A class may contain any number of the following declarations in this order:</p>

											<ul>
												<li><a href='#Inheritance'><code>inheritance</code></a> - A parent class from which this class inherits all features</li>
												<li><a href='objects#Generics'><code>type</code></a> - If this class uses generics, a placeholder for a type that is specified on object initialization</li>
												<li><a href='properties'><code>property</code></a> - A pointer or collection within the scope of the object of this class</li>
												<li><a href='methods'><code>method</code></a> - A named subroutine with any number of inputs and outputs</li>
												<li><a href='methods#Extensions'><code>extension</code></a> - A method that extends another from itself or from an inheritance</li>
												<li><a href='methods#Replacements'><code>replacement</code></a> - A method that replaces another from itself or from an inheritance</li>
											</ul>

											<p>A class starts with a capital letter, and everything is declarative within a class definition. Only a method has imperative statements.</p>

											<div class='code-sample-header'>Superhero.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Hero

property @superpower:Superpower
property @strength:Strength

extension setup
	make @power:XRayVision; setup
	set @strength &lt;- Strength.fullStrength</pre></div>

											<a name="Inheritance"><h2>Inheritance</h2></a>

											<p>Ozark classes can inherit properties and methods from other classes, called <strong>inheritances</strong> or superclasses.</p>

											<p>Ozark supports multiple inheritance. For example, a <code>Cat</code> can be both a <code>Cartoon</code> and an <code>Animal</code>. Method naming conflicts are not resolved; Instead, the methods are executed one after the other in reverse order in which they are declared. Method implementations are selected using <a href='https://en.wikipedia.org/wiki/Dynamic_dispatch'>dynamic dispatch</a> at runtime.</p>

											<div class='code-sample-header'>Cat.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Cartoon
inheritance Animal

property @whiskers:[Whisker]
property @tail:Tail

extension setup
	make @whiskers:[Whisker]; setup | repeat 6 times
	make @tail:Tail; setup

method catNap
	print "zzzzzzz"</pre></div>

											<a name='Features'><h2>Features</h2></a>

											<p><strong>Features</strong> are special types of classes that are actually part of another class. They often represent abilities or parts of the parent (e.g. a <code>Human</code> might have a <code>Body</code> and be able to <code>Run</code>.) You can create a feature class by naming the file with dot notation (e.g. <code>Human.Run.class.ozark</code>) and attach a feature with the <code>use</code> keyword. Since an object can't call it's own methods, classes must have related feature classes to implement most of their functionality. This forces a pattern of dependency injection while keeping classes neatly grouped together.</p>

											<p>To call a method on a feature, reference your feature set with the <code>@</code> symbol. If multiple features have methods with the same name, they will be executed one after the other in the order in which the features were attached.</p>

											<p>Consider this example class from the RifleRange demo app. The <code>Rifleman</code> class has <code>Shoot</code> and <code>Celebrate</code> features, and both of those classes are designated as features within the <code>Rifleman</code> class.</p>

											<div class='code-sample-header'>Rifleman.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Soldier

class

inheritance Soldier

property @gun:Gun
property @hat:Hat
property @mood:Mood

extension setup
	make @gun:Gun; setup
	make @hat:Hat; setup

	set @mood &lt;- Mood.happy

	make @:Shoot; setup
	make @:CelebrateAbility; setup mood:Mood.happy

method shootEveryOther targets:[Target] -&gt; casings:[Bullet.Casing], smoke:Smoke, success:Boolean
	make smoke:Smoke; setup
	make success:Boolean; setup true

	@ shoot each target:targets[2%2] -&gt; success:successValue, casing; set casings, smoke:someSmoke

	success andFilter each boolean:successes
	smoke add each smoke:someSmoke

	if success is ...
	... true
		@ showOffForTheCrowd hat:@hat, mood:@mood

	... false
		set @mood &lt;- Mood.sad</pre></div>


											<div class='code-sample-header'>Rifleman.Shoot.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance RiflemanAbility

property @skill:SkillLevel

extension setup
	set @skill &lt;- SkillLevel.novice

extension setup &amp;skill:SkillLevel
	set @skill &lt;- skill

method fireGun gun:Gun target:Target -&gt; casing:Bullet.Casing, smoke:Smoke
	gun shoot target -&gt; casing; set casing, smoke; set smoke</pre></div>

											<div class='code-sample-header'>Rifleman.Celebrate.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance RiflemanAbility

extension setup
	make @:HatTipAbility; setup

method showOffForTheCrowd hat:Hat
	@ tip hat:hat
	print "Hello,&nbsp;ladies."</pre></div>

											<div class='code-sample-header'>Rifleman.Celebrate.HatTip.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance RiflemanAbility

method tip hat:Hat
	print "&laquo;Raise&nbsp;hat&raquo;"</pre></div>

											<p>From outside of the parent class, nested classes and enumerations are referenced with dot notation. For example, a class making use of the <code>Rifleman</code> class but wishing to declare an independent <code>ShootAbility</code> would reference the class as <code>Rifleman.ShootAbility</code></p>

											<div class='alert alert-warning'>
												<p><span class='glyphicon glyphicon-alert'></span> <strong>Notice:</strong> Nested classes cannot be subclasses of the parent class; Subclasses should be defined separately. Nesting is for supporting classes only.</p>
											</div>
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