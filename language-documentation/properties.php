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
											<p>A <strong>property</strong> is a <a href='objects#Variables'>variable</a> attached to a class. Because there is no global scope, they are the primary vehicle for storing state in <span itemprop='name'>Ozark</span>. A class can have any number of properties.</p>

											<p>Unlike other languages, all properties are technically private (only accessible to an object of that class.) An object's state is accessed purely through <em>methods</em> which may make use of properties, and they are not directly accessible in any other context. However, you can mark a property <code>readable</code>, <code>writable</code>, or <code>public</code> and then referencing methods can use the variable name (without the <code>@</code>) as a getter method, setter method, or both. Methods cannot otherwise share a name with properties.</p>

											<div class='code-sample-header'>HumanBody.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Body

property @head: readable Head
property @leftArm: readable Arm
property @rightArm: readable Arm
property @leftLeg: readable Leg
property @rightLeg: readable Leg
property @torso: readable Torso

extension setup
	create Head; assign to @head; setup
	create Arm; assign to @leftArm; setup
	create Arm; assign to @rightArm; setup
	create Leg; assign to @leftLeg; setup
	create Leg; assign to @rightLeg; setup
	create Torso; assign to @torso; setup</pre></div>

											<p>Property names start with <code>@</code>. This prevents naming conflicts with a method's inputs, outputs, and other variables.</p>

											<p>Properties do not use dynamic dispatch or linearization, because they are not overridable. In a multiple inheritance situation, the property selected is the one from the first-declared inheritance, unless the object is currently stored in a pointer with one of the other inheritances' types.</p>
	
											<div class='code-sample-header'>Location.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Object
	
property @coordinates: public Number, Number
property @name: String?

extension setup &amp; coordinates: Number, Number, name: String
	assign coordinates to @coordinates
	assign name to @name

method update latitude: Number, longitude: Number
	assign latitude, longitude to @coordinates

	print "Update&nbsp;complete."</pre></div>
											<a name="Optionals"><h2>Optionals</h2></a>

											<p>Ozark uses <strong>optionals</strong> to denote variables that are allowed not to have a value. You can read more about that in <a href='objects#Optionals'>Optionals</a>. Properties can be declared as optionals with the question mark (<code>?</code>) symbol, they can be "unpacked" via <code>with</code>, and they can be emptied with <code>clear</code>.</p>

											<div class='alert alert-warning'>
												<p><span class='glyphicon glyphicon-alert'></span> <strong>Notice:</strong> *Uninitialized* and *nil* are not different concepts.</p>
												<p>A non-optional property will cause an error if it's not set at the end of the first method called on a new object; However, an optional property that has not been <code>set</code> or <code>clear</code>ed will not throw an error.</p>
											</div>

											<div class='code-sample-header'>BookContents.class.en.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Contents

property @prologue: TextBlock?
property @chapters: [TextBlock]
property @epilogue: TextBlock?

method removePrologueAndEpilogue
	clear @prologue
	clear @epilogue

method asString -&gt; printableString: implied String
	create block: TextBlock; setup

	with @prologue
		@prologue asString -&gt; text
		block append text
	
	block append all @chapters

	with @epilogue
		@epilogue asString -&gt; text
		block append text

	block text -&gt; assign to printableString</pre></div>
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