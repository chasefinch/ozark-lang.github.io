<div class='pages'>
	<?php if($document == 'overview') {
		echo "<span class='next'><a href='concepts'>Next: Basic Features &rarr;</a></span>";
	} else if($document == 'concepts') {
		echo "<span class='prev'><a href='./'>&larr; Previous: Overview</a></span><span class='next'><a href='style'>Next: Style Requirements &rarr;</a></span>";
	} else if($document == 'style') {
		echo "<span class='prev'><a href='concepts'>&larr; Previous: Basic Features</a></span><span class='next'><a href='classes'>Next: Classes &rarr;</a></span>";
	} else if($document == 'classes') {
		echo "<span class='prev'><a href='style'>&larr; Previous: Style Requirements</a></span><span class='next'><a href='properties'>Next: Properties &rarr;</a></span>";
	} else if($document == 'properties') {
		echo "<span class='prev'><a href='classes'>&larr; Previous: Classes</a></span><span class='next'><a href='methods'>Next: Methods &rarr;</a></span>";
	} else if($document == 'methods') {
		echo "<span class='prev'><a href='properties'>&larr; Previous: Properties</a></span><span class='next'><a href='control'>Next: Control Flow &rarr;</a></span>";
	} else if($document == 'control') {
		echo "<span class='prev'><a href='methods'>&larr; Previous: Methods</a></span><span class='next'><a href='objects'>Next: Objects &amp; Pointers &rarr;</a></span>";
	} else if($document == 'objects') {
		echo "<span class='prev'><a href='control'>&larr; Previous: Control Flow</a></span><span class='next'><a href='collections'>Next: Collections &rarr;</a></span>";
	} else if($document == 'collections') {
		echo "<span class='prev'><a href='objects'>&larr; Previous: Objects &amp; Pointers</a></span><span class='next'><a href='files'>Next: File Structure &rarr;</a></span>";
	} else if($document == 'files') {
		echo "<span class='prev'><a href='collections'>&larr; Previous: Collections</a></span><span class='next'><a href='reserved'>Next: Reserved Words &rarr;</a></span>";
	} else if($document == 'reserved') {
		echo "<span class='prev'><a href='files'>&larr; Previous: File Structure</a></span></span>";
	} ?>
</div>