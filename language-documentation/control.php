<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Control Flow";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'control';
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
										<h1 class='main-heading' id="overview">Control Flow</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>Ozark has five <strong>control-flow</strong> constructs; <code>if</code>, <code>with</code>, <code>without</code>, <code>for</code>, and <code>repeat</code>. This is an intentionally small set, as each allows predictable patterns for accomplishing specific things within Ozark code.</p>

											<p>These conditional statements have a body that is executed zero or more times based on the result of the conditional. Unlike other languages, these have their own scope; They may access <em>variables</em> and <em>pointers</em> from the method scope, but variables and pointers created inside the body are not available outside of it. When looping, <code>for</code> allows you to define outputs as <em>lists</em>, and set the elements of the lists inside of the loop.</p>

											<a name="If"><h4>If</h4></a>

											<p>The <code>if</code> statement evaluates a <code>Boolean</code> value or expression and, if that expression evaluates to true, executes the body.</p>

											<p>There is no concept of an *else* or a *switch* in Ozark. This makes a single pattern for conditionals, and prevents dangling and confusing multipart conditionals.</p>

											<div class='code-sample-header'>BranchExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

method branch object:Object condition:Boolean
	if condition
		object doSomething
	if not(condition)
		object getConditionA -&gt; conditionA
		object getConditionB -&gt; conditionB

		if conditionA and conditionB
			object doSomething</pre></div>

											<a name="WithAndWithout"><h4>With &amp; Without</h4></a>

											<p>The <code>with</code> statement unpacks an optional <a href='objects#Pointers'>pointer</a> and, if the pointer is set, executes the body. Inside the body, the pointer can be used as though it were not optional.</p>

											<p>The behavior is very similar to an <code>if</code> statement. The <code>without</code> keyword is similar, but executes the body only if the optional pointer is <strong>not</strong> set.</p>
											
											<div class='code-sample-header'>WithExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

method testAndContinue object:ExampleObject? io:StandardIO
	with object:
		object doSomething
	
	without object:
		io print "Cannot continue - no object."</pre></div>

											<a name="For"><h4>For</h4></a>

											<p>The <code>for</code> statement declares a <a href='values#Variables'>variable</a> and takes a <a href='values#CollectionTypes'>list, set, or bag</a> as an argument, executing the body one time for each item in the collection.</p>

											<div class='code-sample-header'>ForExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

requirement Attendee

method printStrings #strings:[String] io:StandardIO
	for string in:strings
		io print string

method printNames attendees:Array|Attendee io:StandardIO
	attendees count -&gt; count

	for i in:range(1, count)
		attendees itemAtIndex i -&gt; item
		item getName -&gt; name
		io print name</pre></div>

											<p>A <code>for</code> loop can also declare any number of outputs as <em>list</em> types. If this is done, each iteration of the loop must set set a variable of the same name as the list type, and that list will be available outside of the loop.</p>

											<p>Otherwise, variables and pointers created within the loop do not exist outside of it.</p>

											<div class='code-sample-header'>ForExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

method reverseStrings #strings:[String] -&gt; reversedStrings:[String] 
	for string in:strings -&gt; new:[String]
		set new &lt;- reverse(string)

	set reversedStrings &lt;- new</pre></div>

											<a name="Repeat"><h4>Repeat</h4></a>

											<p>The <code>repeat</code> statement has a body which repeats indefinitely. It usually contains a <code>while</code> statement that evaluates a <code>Boolean</code> expression and, if it evaluates to <code>false</code>, ends the loop immediately.</p>

											<p>The while statement can appear at any point within the loop.</p>

											<div class='code-sample-header'>RepeatExample.class.ozark</div>
											<div class='code-sample'><pre>inheritance Example

requirement KeyboardInput

method listenForInput io:StandardIO
	repeat
		io getInputFromUser -&gt; input
		while input = 0

method growFileSizeTo2K file:File
	repeat
		file getFileSize -&gt; fileSize
		while fileSize &lt;= 2000
		file appendMoreData</pre></div>
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