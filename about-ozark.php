<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Ozark Language - About";
    $description = "Ozark is designed to be the highest level programming language of sequential declarations, serving as the only layer between machine language and the abstract software development tools of tomorrow.";
    require('includes/header.php');
  ?>
  <body>
    <section class="ribbon">
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $site = 'ozark'; require('includes/site-nav.php'); ?>
          </div>
        </div>
      </div>
    </section>
  	<header>
	  	<div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $active = 'about'; require('includes/nav.php'); ?>
          </div>
        </div>
	    </div>
  	</header>
    <section class='blue chop'>
      <div class='container'>
        <div class='row'>
          <div class='col-sm-6 col-md-5 col-md-offset-1'>
            <h1>Fall in love with Ozark.</h1>
            <p class='lead'>Ozark code is a joy to write; Beautiful, straightforward, and future-proof. You can easily see the purpose of each method &ndash; And so can your IDE.</p>
            <p class='lead'>This makes software development faster and easier to learn. It also welcomes a new generation of smart software-writing tools.</p>
            <div style='clear:both;'></div>
          </div>
          <div class='col-sm-5 col-sm-offset-1'>
            <div class='bg-pad'>
              <div class='row'>
                <div class='col-md-9'>
                  <h6>Examples</h6>
                  <p>Get a feel for Ozark. Download a sample app to get started.</p>
                  <ul class='clean'><li><a href='https://github.com/ozark-lang/demo-rifle-range/archive/master.zip' class='download'><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Rifle Range</a></li></ul>
                </div>
              </div>
              <div class='code-sample-header'>Rifleman.ozark</div>
              <div class='code-sample'>
                <pre><span class='declaration'>class</span> <span class='class'>Rifleman</span>
  <span class='declaration'>inheritance</span> <span class='class'>Person</span> <span class='argument'>source:</span><span class='literal'>"Person"</span>

  <span class='declaration'>requirement</span> <span class='class'>StandardIO</span> <span class='argument'>reference:</span><span class='literal'>"StandardIO"</span>
  <span class='declaration'>requirement</span> <span class='class'>Location</span> <span class='argument'>reference:</span><span class='literal'>"Location"</span>
  <span class='declaration'>requirement</span> <span class='class'>Rifle</span> <span class='argument'>source:</span><span class='literal'>"Rifle"</span>
  <span class='declaration'>requirement</span> <span class='class'>Boot</span> <span class='argument'>source:</span><span class='literal'>"Boot"</span>

  <span class='declaration'>member</span> <span class='property'>io:</span><span class='class'>StandardIO</span>
  <span class='declaration'>member</span> <span class='property'>location:</span><span class='class'>Location</span>
  <span class='declaration'>member</span> <span class='property'>leftBoot:</span><span class='class'>Boot</span> 
  <span class='declaration'>member</span> <span class='property'>rightBoot:</span><span class='class'>Boot</span>
                </pre>
              </div>
            </div>
            <div style='clear:both;'></div>
          </div>
          <div style='clear:both;'></div>
        </div>
      </div>
    </section>
    <section class='white'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-9'>
                <h1>Core Concepts</h1>
                <p class='lead'>In high-level programming languages, code is an expression of logic. Each higher-level language limits the programmer's options in exchange for readibility, reusability, and standardization.</p>
                <p class='lead'>Ozark is designed to be the highest-level programming language of sequential declarations, serving as the only layer between machine language and the abstract software development tools of tomorrow.</p>
              </div>
            </div>
            <hr />
            <div class='row'>
              <div class='col-sm-6'>
                <h4>No expressions, just instructions</h4>
                <p>Lines of code don't have a value to be computed behind the scenes. Instead, you clearly see and define what steps the processor will take during execution.</p>
                <p>Code is verbose and clear, and each line has only one instruction.</p>
                <div class='code-sample-header code-sample-header-inline'></div>
                <div class='code-sample code-sample-inline'>
                  <pre><span class='declaration'>method</span> <span class='method'>processScene</span>
    <span class='property'>scene</span> <span class='method'>evaluateActions</span>
    <span class='property'>scene</span> <span class='method'>simulatePhysics</span>
    <span class='property'>scene</span> <span class='method'>update</span></pre>
                </div>
                <h4>Declarative, not imperitive</h4>
                <p>Other object-oriented programming languages start imperitively. An Ozark program reads the classes first, and begins with an instance method. It's objects and message passing, all the way down.</p>
                <p>Everything is a declaration, and instructions are found only inside of methods. All methods are public instance methods. All properties are private. Only properties and outputs are mutable. Literals are objects, there is no reference to self or super, and all method calls use Smalltalk-style message passing.</p>
                <h4>Small scopes</h4>
                <p>Every non-control line of a method is a call to another method; So, a method is often only a few straightforward instructions, and the inheritance tree becomes tall and verbose.</p>
                <p>There are no global variables. This means the entire scope of available data is small, and could be seen visually during development.</p>
              </div>
              <div class='col-sm-6'>
                <h4>Parallelism is automatic</h4>
                <p>Ozark apps use multi-core processors automatically. The strict scopes and decoupling give clear separation of concerns, so the compiler is able to run code in parallel.</p>
                <h4>Clean &amp; strict formatting rules</h4>
                <p>Ozark is strongly typed and explicit about code structure; So, Ozark apps have code consistency and one-to-one correspondence with a visual graph.</p>
                <p>The instruction set is small, leaving almost all tasks to instance methods.</p>
                <div class='code-sample-header code-sample-header-inline'></div>
                <div class='code-sample code-sample-inline'>
                  <pre><span class='declaration'>each</span> <span class='noun'>range(1, foo)</span> <span class='declaration'>as</span> <span class='noun'>f</span>
    <span class='declaration'>each</span> <span class='noun'>bar</span> <span class='declaration'>as</span> <span class='noun'>b</span>
        <span class='noun'>print</span> <span class='noun'>f</span> + <span class='noun'>b</span>
                </div>
                <h4>No return types, just inputs and outputs</h4>
                <p>Rather than evaluating like an expression, a method is an action by an object, and has any number of inputs and/or outputs.</p>
                <h4>One way to do everything</h4>
                <p>Whether written by an expert, an amateur, or generated by software: Code is correct the first time, and logic can be figured out by looking at the code.</p>
                <p>Because of the principles of Ozark, entire categories of potential errors have been removed, and many best-practice factoring principles are actually enforced.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class='top'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='to-top'>
              <a class='link-to-top' href='#'>Back to top &nbsp; <span class='glyphicon glyphicon-chevron-up'></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php require('includes/footer-nav.php'); ?>
            <?php require('includes/copyright.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    <?php require('includes/scripts.php'); ?>
  </body>
</html>