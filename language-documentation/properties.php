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

property @head: Head
property @leftArm: Arm
property @rightArm: Arm
property @leftLeg: Leg
property @rightLeg: Leg
property @torso: Torso

extension setup
	create Head; set @head; setup
	create Arm; set @leftArm; setup
	create Arm; set @rightArm; setup
	create Leg; set @leftLeg; setup
	create Leg; set @rightLeg; setup
	create Torso; set @torso; setup</pre></div>

											<p>Properties are denoted by <code>@</code>. This prevents naming conflicts with the method's inputs &amp; other pointers.</p>

											<p>Properties do not use dynamic dispatch or linearization, because they are not overridable. In a multiple inheritance situation, the property selected is the one from the first-declared inheritance, unless the object is currently stored in a pointer with one of the other inheritances' types.</p>
	
											<div class='code-sample-header'>Location.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Object
	
property @coordinates: {Number, Number}
property @name: String?

extension setup &amp;coordinates: {Number, Number}, name: String
	set @coordinates &lt;- coordinates
	set @name &lt;- name

method coordinates -&gt; _coordinates: Number
	set coordinates -&gt; @coordinates

method update _coordinates: {Number, Number}
	set @coordinates &lt;- coordinates

method update latitude: Number, longitude: Number
	set @coordinates &lt;- latitude, longitude</pre></div>
											<a name="Optionals"><h2>Optionals</h2></a>

											<p>Ozark uses <strong>optionals</strong> to denote pointers that are allowed not to have a value, which means they are set to <code>nil</code>. You can read more about that in <a href='objects#Optionals'>Optionals</a>. Properties can be declared as optionals with the question mark (<code>?</code>) symbol, they can be "unpacked" via the <code>with</code> statement, and they can be set to <code>nil</code>.</p>

											<div class='alert alert-warning'>
												<p><span class='glyphicon glyphicon-alert'></span> <strong>Notice:</strong> *Uninitialized* and *nil* are not different concepts.</p>
												<p>A non-optional property will cause an error if it's not set at the end of the first method called on a new object; However, an optional property that has not been set to <code>nil</code> will behave just as if it had been explicitly set, and will not throw an error.</p>
											</div>

											<div class='code-sample-header'>BookContents.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Contents

property @prologue: TextBlock?
property @chapters: [TextBlock]
property @epilogue: TextBlock?

method removePrologueAndEpilogue
	set @prologue &lt;- nil
	set @epilogue &lt;- nil

method asString -&gt; _printableString: String
	create block: TextBlock; setup

	with @prologue
		@prologue asString -&gt; text
		block append text
	
	block append all @chapters

	with @epilogue
		@epilogue asString -&gt; text
		block append text

	block text -&gt; set printableString</pre></div>
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