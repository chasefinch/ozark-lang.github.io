<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Properties";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'properties';
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
										<h1 class='main-heading' id="overview">Properties</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>property</strong> is a <a href='objects#Pointers'>pointer</a> that is attached to a class. Because properties are the only mutable pointers, they are the primary vehicle for storing state in <span itemprop='name'>Ozark</span>. A class can have any number of properties.</p>

											<p>Unlike other languages, all properties are private (only accessible to an object of that class.) An object's state is accessed purely through <em>methods</em> which may make use of the properties, but they are not directly accessible in any other context.</p>

											<div class='code-sample-header'>HumanBody.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Body

property @head:Head
property @leftArm:Arm
property @rightArm:Arm
property @leftLeg:Leg
property @rightLeg:Leg
property @torso:Torso

extension initialize
	create head:Head; initialize
	create leftArm:Arm; initialize
	create rightArm:Arm; initialize
	create leftLeg:Leg; initialize
	create rightLeg:Leg; initialize
	create torso:Torso; initialize

	set @head &lt;- head
	set @leftArm &lt;- leftArm
	set @rightArm &lt;- rightArm
	set @leftLeg &lt;- leftLeg
	set @rightLeg &lt;- rightLeg
	set @torso &lt;- torso</pre></div>

											<p>Properties are denoted by <code>@</code>. This prevents naming conflicts with the method's inputs &amp; other pointers.</p>
	
											<div class='code-sample-header'>Location.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Object
	
property @latitude:Number
property @longitude:Number

extension initialize &amp;latitude:Number &amp;longitude:Number
	set @latitude &lt;- latitude
	set @longitude &lt;- longitude

method getCoordinates -&gt; $latitude:Number $longitude:Number
	set $latitude &lt;- @latitude
	set $longitude &lt;- @longitude

method setLocation latitude:Number longitude:Number
	set @latitude &lt;- latitude
	set @longitude &lt;- longitude</pre></div>
											<a name="Optionals"><h2>Optionals</h2></a>

											<p>There is no concept of "nil" - Instead, Ozark uses <strong>optionals</strong> to denote pointers that are allowed not to have a value. You can read more about that in <a href='objects#Optionals'>Optionals</a>. Properties can be declared as optionals with the question mark (<code>?</code>) symbol, they can be "unpacked" via the <code>with</code> or <code>without</code> statements, and they can be stripped of their value with the <code>clear</code> statement.</p>

											<div class='alert alert-warning'>
												<p><span class='glyphicon glyphicon-alert'></span> <strong>Notice:</strong> *Uninitialized* and *cleared* are not different concepts.</p>
												<p>A non-optional property will throw a compile-time error if it's used before being initialized; However, an optional property that has been marked as empty with the command <code>clear</code> will behave accordingly.</p>
											</div>

											<div class='code-sample-header'>BookContents.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Contents

property @prologue:TextBlock?
property @chapters:[TextBlock]
property @epilogue:TextBlock?

method removePrologueAndEpilogue
	clear @prologue
	clear @epilogue

method getStringForPrinting -&gt; $printable:String
	create string:TextBlock; initialize

	with @prologue
		@prologue textAsString -&gt; text
		string append text
	
	for chapter:@chapters
		string append chapter

	with @epilogue
		@epilogue textAsString -&gt; text
		string append text

	string getText -&gt; text
	
	set $printable &lt;- text</pre></div>
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