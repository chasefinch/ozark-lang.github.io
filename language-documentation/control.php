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
												<li><code>if</code>/<code>with</code>/<code>else</code></li>
												<li><code>each</code></li>
												<li><code>repeat</code></li>
											</ul>

											<p>This is an intentionally small set, as each allows predictable patterns for accomplishing specific things within Ozark code.</p>

											<a name="If"><h4>If / With / Else</h4></a>

											<p>The <code>if</code> statement evaluates a Boolean value and, if that value is <code>true</code>, executes the body.</p>

											<p>The <code>if</code> statement body that is executed, or not, based on the result of the conditional. For more complex <code>if</code> statements that involve pattern matching, the powerful ... notation can be used. The <code>with</code> keyword unpacks an optional <a href='objects#Pointers'>pointer</a>, and is forced shorthand for <code>if &laquo;someOptional&raquo; is not nil</code>.</p>

											<p>Conditions following an <code>else</code> execute only if none of the previously chained statements have executed.</p>

											<div class='code-sample-header'>BranchExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method branch object: Object, condition1: Boolean, condition2: Boolean
	if condition1, condition2 is
	... true, 3
		object doSomething

	... any, 4
		object doSomethingElse

	... else any, in [1, 2, 5]
		object doAnotherThing

	... else
		object reset</pre></div>
											
											<div class='code-sample-header'>WithExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method testAndContinue object: ExampleObject?
	with object
		object doSomething

		print "Success"

	... else
		print "Cannot&nbsp;continue&nbsp;-&nbsp;no&nbsp;object."</pre></div>

											<a name="Each"><h4>Each</h4></a>

											<p>The <code>each</code> keyword indicates that an array is being used in place of an object, and that the given statement will be executed one time for every element in the array.</p>
											
											<p>This can be used with multi-dimensional arrays.</p>

											<div class='code-sample-header'>EachExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method printRange count: Integer
	print all [1~count]

method printNames attendees: [Attendee]
	all attendees name -&gt; names
	
	print all names</pre></div>

											<a name="Repeat"><h4>Repeat</h4></a>

											<p>The <code>repeat</code> clause is appended to a statement using the pipe <code>|</code>. It indicates that the given statement should be repeated based on the type and parameters of the clause. Valid <code>repeat</code> clauses follow one of these formats:</p>

											<ul>
												<li><code>repeat X times</code></li>
												<li><code>repeat while someCondition</code></li>
												<li><code>repeat until someCondition</code></li>
											</ul>

											<p>In the above examples, someCondition indicates an output of the statement, where X can represent any Integer or pointer of type Integer.</p>

											<div class='code-sample-header'>RepeatExample.class.ozark</div>
											<div class='code-sample' itemscope itemtype="http://schema.org/Code"><meta itemprop="language" content="Ozark" /><pre>inheritance Example

method listenForInput io: StandardIO
	io getInputFromUser -&gt; input | repeat until input is not nil

method growTo2KB _file: File
	@fileManager appendToFile file chunk: 1000 -&gt; size | repeat until size is 2000000</pre></div>
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