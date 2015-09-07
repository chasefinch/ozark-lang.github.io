<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Properties";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'properties';
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
										<h1 class='main-heading' id="overview">Properties</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>A <strong>property</strong> is a <a href='values#Variables'>variable</a> that is attached to a class. Properties are the only mutable variables. They are similar to <a href='members'>members</a>, except that members are <em>pointers</em>, not <em>variables</em>. A class can have any number of properties.</p>

											<p>Like members, all properties are private (only accessible to an object of that class.) An object's state is accessed purely through <em>methods</em> which may make use of the properties, but they are not directly accessible in any other context.</p>

											<div class='code-sample-header'>Location.class.ozark</div>
											<div class='code-sample'><pre>inheritance Object
	
property latitude:Float
property longitude:Float

extension initialize ~latitude:Float ~longitude:Float
	set @latitude &lt;- latitude
	set @longitude &lt;- longitude

method getCoordinates -> latitude:Float longitude:Float
	set latitude &lt;- @latitude
	set longitude &lt;- @longitude

method setLocation latitude:Float longitude:Float
	set @latitude &lt;- latitude
	set @longitude &lt;- longitude</pre></div>
		
											<p>Within a method, properties (like members) are denoted by <code>@</code>. This prevents naming conflicts with the method's inputs &amp; outputs.</p>

											<a name="PropertiesAreVariables"><h2>Properties are variables</h2></a>

											<p>Properties are <a href='values#Variables'>variables</a>, not <a href='objects#Pointers'>pointers</a>. Variables store <a href='values'>values</a>, whereas pointers signify <a href='objects'>objects</a>. Ozark differentiates between the two.

											<p>Variables (and therefore properties) cannot be declared as <em>optionals</em>; That concept exists only for objects. If you need to have an optional property, create a class based on the real-world use case you are modeling. For example, if a Person may or may not have an ID badge with a <code>String</code> as an ID, don't store the ID as a <code>String</code> variable on the <code>Person</code> class. Instead, create an <code>IDBadge</code> class that is an optional member of the <code>Person</code> class. That way, an <code>IDBadge</code> must have a <code>String</code>, but a Person may have an optional ID Badge.</p>
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