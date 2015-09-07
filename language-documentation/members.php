<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Members";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'members';
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
										<h1 class='main-heading' id="overview">Members</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>member</strong> is a <a href='objects#Pointers'>pointer</a> that is attached to a class. Because members are the only mutable pointers, they are the primary vehicle for storing state in Ozark. They are similar to <a href='properties'>properties</a>, except that properties are <em>variables</em>, not <em>pointers</em>. A class can have any number of members.</p>

											<p>Unlike other languages, all members are private (only accessible to an object of that class.) An object's state is accessed purely through <em>methods</em> which may make use of the members, but they are not directly accessible in any other context.</p>

											<div class='code-sample-header'>HumanBody.class.ozark</div>
											<div class='code-sample'><pre>inheritance Body

requirement Head
requirement Arm
requirement Leg
requirement Torso

member head:Head
member leftArm:Arm
member rightArm:Arm
member leftLeg:Leg
member rightLeg:Leg
member torso:Torso

property age:Cardinal
property weight:Float

extension initialize
	create aHead:Head initialize
	create arm1:Arm initialize
	create arm2:Arm initialize
	create leg1:Leg initialize
	create leg2:Leg initialize
	create aTorso:Torso initialize
	set @head &lt;- aHead
	set @leftArm &lt;- arm1
	set @rightArm &lt;- arm2
	set @leftLeg &lt;- leg1
	set @rightLeg &lt;- leg2
	set @torso &lt;- aTorso</pre></div>

											<p>Within a method, members (like properties) are denoted by <code>@</code>. This prevents naming conflicts with the method's inputs &amp; outputs.</p>
	
											<a name="MembersArePointers"><h2>Members are pointers</h2></a>

											<p>Members are <a href='objects'>pointers</a>, not <a href='values'>variables</a>. Pointers signify <a href='objects'>objects</a>, whereas variables store <a href='values'>values</a>. Ozark differentiates between the two.</p>

											<a name="Optionals"><h2>Optionals</h2></a>

											<p>There is no concept of "nil" - Instead, Ozark uses <strong>optionals</strong> to denote pointers that are allowed not to have a value. You can read more about that in <a href='objects#Optionals'>Optionals</a>. Members can be declared as optionals with the question mark (<code>?</code>) symbol, and then later "unpacked" via the <code>with</code> or <code>without</code> statements.</p>

											<p>Note that *uninitialized* and *cleared* are not different concepts. A non-optional member will throw a compile-time error if it's used before being initialized; However, an optional member that has been marked as empty with the command <code>clear</code> will behave accordingly.</p>

											<div class='code-sample-header'>BookContents.class.ozark</div>
											<div class='code-sample'><pre>inheritance Contents

member prologue:TextBlock?
member chapters:Array|TextBlock
member epilogue:TextBlock?

extension initialize
	create chapters:Array|TextBlock initialize
	set @chapters &lt;- chapters

method removePrologueAndEpilogue
	clear @prologue
	clear @epilogue

method getStringForPrinting -&gt; printable:String
	create string:TextBlock initialize

	with @prologue
		@prologue textAsString -&gt; text
		string append text

	@chapters getItemCount -&gt; count
	
	for i in:range(1, count)
		@chapters getItemAt i -&gt; chapter
		string append chapter

	with @epilogue
		@epilogue textAsString -&gt; text
		string append text

	string getText -&gt; text
	set @printable &lt;- text</pre></div>
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