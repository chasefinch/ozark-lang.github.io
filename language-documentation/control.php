<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Control Flow";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'control';
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
										<h1 class='main-heading' id="overview">Control Flow</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p><span itemprop='name'>Ozark</span> has three <strong>control-flow</strong> constructs:</p>

											<ul>
												<li><code>if</code>/<code>unless</code>/<code>with</code>/<code>without</code>/<code>else</code></li>
												<li><code>for</code></li>
												<li><code>repeat</code></li>
											</ul>

											<p>This is an intentionally small set, as each allows predictable patterns for accomplishing specific things within Ozark code.</p>

											<p>These conditional statements have a body that is executed zero or more times based on the result of the conditional. Unlike other languages, these have their own scope; They may access <em>variables</em> and <em>pointers</em> from the method scope, but variables and pointers created inside the body are not available outside of it. When looping, <code>for</code> allows you to define outputs as <em>arrays</em>, and set the elements of the arrays inside of the loop.</p>

											<a name="If"><h4>If / Unless / Else</h4></a>

											<p>The <code>if</code> statement evaluates a <code>Testable</code> value and, if that value is <code>true</code>, executes the body. Objects that inherit from <code>Testable</code> include <code>Boolean</code> objects, as well as the other primitives. Custom classes can also inherit from <code>Testable</code>, and can overwrite the <code>isTrue -> _value:Boolean</code> method, which by default returns true if the two pointers are referencing the same object.</p>

											<p>The <code>unless</code> statement is the opposite of <code>if</code>, executing only if the passed value returns <code>false</code> for the test function.</p>

											<p>The <code>else</code> executes if the previously chained statements did not. <code>if</code>, <code>unless</code>, and <code>else</code> can be chained with the semicolon (<code>;</code>) operator.</p>

											<div class='code-sample-header'>BranchExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method branch object:Object condition1:Boolean condition2:Boolean
	if condition1
		object doSomething

	else; unless condition2
		object doSomethingElse

	else
		object reset</pre></div>

											<a name="With"><h4>With / Without / Else</h4></a>

											<p>The <code>with</code> statement unpacks an optional <a href='objects#Pointers'>pointer</a> and, if the pointer is set, executes the body. Inside the body, the pointer can be used as though it were not optional.</p>

											<p>The behavior is very similar to an <code>if</code> statement. The <code>without</code> keyword is similar, but executes the body only if the optional pointer is <strong>not</strong> set.</p>

											<p>The <code>else</code> keyword can be used just like in an <a href='#If'>if</a> statement, and in fact all 5 conditionals can be chained together.</p>
											
											<div class='code-sample-header'>WithExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method testAndContinue object:ExampleObject? objectNeeded:Boolean io:StandardIO
	with object
		object doSomething
	
	else; if objectNeeded
		io print "Cannot&nbsp;continue&nbsp;-&nbsp;no&nbsp;object."

	else
		io print "Continuing&nbsp;without&nbsp;object."</pre></div>

											<a name="For"><h4>For</h4></a>

											<p>The <code>for</code> statement declares a <a href='objects#Pointers'>pointer</a> and takes an <a href='collections#Arrays'>array</a> as an argument, executing the body one time for each item in the collection.</p>

											<div class='code-sample-header'>ForExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

requirement Attendee

method printCount count:Integer io:StandardIO
	for i:[1~count]
		io print i

method printNames attendees:[Attendee] io:StandardIO
	for attendee:attendees
		attendee getName -&gt; name
		io print name</pre></div>

											<p>A <code>for</code> loop can also declare any number of outputs as <em>array</em> types. If this is done, each iteration of the loop must set a pointer with the <code>[$]</code> syntax, and that list will be available outside of the loop.</p>

											<p>Otherwise, variables and pointers created within the loop do not exist outside of it.</p>

											<div class='code-sample-header'>ForExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method reverseStrings _strings:[String] -&gt; $reversedStrings:[String] 
	for string:strings -&gt; new:[String]
		set new[$] &lt;- string[-1~1]

	set reversedStrings &lt;- new</pre></div>

											<a name="Repeat"><h4>Repeat</h4></a>

											<p>The <code>repeat</code> statement has a body which repeats indefinitely. It usually contains a <code>while</code> or <code>until</code> statement that checks a <code>Testable</code> value and, if the <code>while</code> condition is <code>false</code> or the <code>until</code> condition is <code>true</code>, ends the loop immediately.</p>

											<p>The <code>while</code> or <code>until</code> statements can appear at any point within the loop.</p>

											<div class='code-sample-header'>RepeatExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

requirement KeyboardInput

method listenForInput io:StandardIO
	repeat
		io getInputFromUser -&gt; input

		until input

method growFileSizeTo2K file:File
	repeat
		file getFileSize -&gt; fileSize
		filesize &lt; 2000 -> check

		while check
		
		file appendMoreData</pre></div>
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