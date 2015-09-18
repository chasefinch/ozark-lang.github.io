<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark Language - Documentation - Objects &amp; Pointers";
		$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
		$active = 'documentation';
		$document = 'objects';
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
										<h1 class='main-heading' id="overview">Objects &amp; Pointers</h1>
									</div>
									<div class='col-sm-5'>
										<?php require('../includes/documentation-search.php'); ?> 
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-10'>
										<main>
											<p>An <strong>object</strong> is a generic term for describing an instance of a class. An object may be referenced by one or more pointers, which associate a name (such as <code>trainConductor</code> or <code>whiteRook</code>) with an object stored in memory.</p>

											<a name='ObjectsAreNotValues'><h2>Objects are not values</h2></a>

											<p>While most everything is represented by an object, it's important to distinguish what is NOT an object. The number 5 and the Boolean state "True" are not objects that reside within the program space; They are mathematical values that exist to describe the state of something else.</p>

											<p>Objects are allocated manually with the <code>create</code> keyword when declaring a pointer. <em>Values</em>, on the other hand, are stored in variables and do not have to be initialized. Objects are deallocated behind the scenes in automatic garbage collection.</p>

											<a name="Pointers"><h2>Objects are stored in pointers</h2></a>

											<p>When a <strong>pointer</strong> is set to an object, it maintains a reference to that object. If a pointer is set to the value of another pointer, they are both then pointing to the same object. This differs from <em>variables</em>, which store values; If a variable is set to the value of another variable, the variables then each have a copy of the same value, which may change independently of each other.</p>

											<div class='code-sample-header'>ChessBoard.class.ozark</div>
											<div class='code-sample'><pre>inheritance GameBoard

requirement ChessPiece

member whitePieces:ArrayOfChessPieces
member blackPieces:ArrayOfChessPieces

method initialize
	create whitePieces ArrayOfChessPieces initializeSet
	create blackPieces ArrayOfChessPieces initializeSet

	set @whitePieces &lt;- whitePieces
	set @blackPieces &lt;- blackPieces

method setPieces whitePieces:ArrayOfChessPieces blackPieces:ArrayOfChessPieces
	@whitePieces &lt;- whitePieces
	@blackPieces &lt;- blackPieces</pre></div>

											<a name="Optionals"><h2>Optionals</h2></a>

											<p>There is no concept of "nil" - Instead, Ozark uses <strong>optionals</strong> to denote pointers that are allowed to nave no value. Pointers marked as optional have limited capabilities, but can be unpacked for conditional usage with the <code>with</code> keyword.</p>

											<a name="Collections"><h2>Collection Objects</h2></a>

											<p>Some classes are defined as <strong>collections</strong> of other objects. These objects use special syntax for <em>generics</em> (see below) to operate on values of a given type. Collections can be created, and two such collections exist in the Ozark standard library: A <code>Dictionary</code>, and an <code>Array</code>.</p>

											<p>Note that elsewhere in this documentation, you'll see custom collections that operate on a specific type (i.e. <code>CollectionOfChessPieces</code>). These are user-defined classes for the purpose of providing common initializers and methods. Such a class would likely use an <code>Array</code> in the implementation, but they are no different than any other class, and they do not make use of generics externally.</p>

											<p>Collections differ from <em>list</em>, <em>set</em>, and <em>bag</em>, all of which are mathematical concepts surrounding values. You can read more about that in <a href='values#CollectionTypes'>Values</a>.</p>

											<a name="Generics"><h2>Generics</h2></a>

											<p>Collection types are built with <strong>generics</strong>. These special types are included in the class definition.</p>

											<p>Generic types come in two flavors; <em>Index Types</em>, which must be a value type, and <em>Item Types</em>, which can be either a value type or a class. A collection class definition can include any number of these types.</p>

											<p>Index Types are preceded by a backslash (<code>\</code>) and separated with an ampersand (<code>&amp;</code>), while Item Types are preceded by a pipe (<code>|</code>) and also separated with ampersands.</p>

											<p>See the definition of the <code>Array</code> and <code>Dictionary</code> types from the Ozark standard library below. They use the <code>index</code> and <code>type</code> keywords to represent the placeholder types that will be specified on initialization.</p>

											<div class='code-sample-header'>Array.class.ozark</div>
											<div class='code-sample'><pre>inheritance Collection

type ValueType</pre></div>

											<div class='code-sample-header'>Dictionary.class.ozark</div>
											<div class='code-sample'><pre>inheritance Collection

index ValueType

type ItemType</pre></div>

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