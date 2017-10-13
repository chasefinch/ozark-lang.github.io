<!DOCTYPE html>
<html lang="en">
<?php
$title = "Ozark Language - Documentation - File Structure";
$description = "Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan.";
$active = 'documentation';
$document = 'files';
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
									<h1 class='main-heading' id="overview">File Structure</h1>
								</div>
								<div class='col-sm-5'>
									<?php require('../includes/documentation-search.php'); ?> 
								</div>
							</div>
							<div class='row'>
								<div class='col-lg-10'>
									<main>
										<p>In <span itemprop='name'>Ozark</span>, every root-level class and enumeration is contained in a separate file on the file system. You don't have to declare these classes at the top of the file; Their name and type is included within the filename.</p>

										<p>The two types of Ozark files are <em>classes</em> and <em>enumerations</em>. Classes have filenames that end with <code>.class.en.ozark</code> and enumerations end with <code>.enumeration.en.ozark</code>.

										<p><pre>SomeClass.class.en.ozark
AnEnumeration.enumeration.en.ozark</pre></p>

										<p>The Ozark compiler searches for files in the same directory as the source file. In essence, every directory with an Ozark file in it can be compiled or edited as an Ozark project.</p>

										<p>Classes in other directories can be declared as dependencies, and then used with forward slash notation.</p>

										<div class='code-sample-header'>SomeClass.class.en.ozark</div>
										<div class='code-sample'><meta itemprop="language" content="Ozark" />
											<pre>dependency Module at "../NestedModule"

inheritance Module/ParentClass</pre></div>
										<p>Ozark can import and work with supporting files in any directory, but a common pattern is to keep the source files in a directory separate from the project assets and other supporting files.</p>

										<p>Ozark file names must follow the same conventions as the classes and enumerations that they represent; Beginning with a capital letter, CamelCased and with no underscores or special characters.</p>

										<pre>/some_project/
/assets/
	img1.jpg
	img2.png

/configuration/
	config.ini

/source/
	Class1.class.en.ozark
	Class2.class.en.ozark
	Class3.class.en.ozark</pre>
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