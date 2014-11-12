<?php $title = "Ozark Language - About"; $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software."; require('includes/header.php'); ?>
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
    <section class='blue airplane'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-7'>
                <h1>Fall in love with Ozark.</h1>
                <p class='lead'>Ozark code is a joy to write; Beautiful, straightforward, and future-proof. You can easily see the purpose of each method &ndash; And so can your IDE.</p>
                <p class='lead'>This makes software development faster and easier to learn. It also welcomes a new generation of smart software development tools.</p>
                <div style='clear:both;'></div>
              </div>
              <div class='col-sm-4 col-sm-offset-1'>
                <div class='bg-pad'>
                  <h3>See for yourself</h3>
                  <p>The best way to get a feel for Ozark is to explore it yourself. Download a sample app to get started.</p>
                  <ul class='clean'><li><a href='https://github.com/ozark-lang/demo-rifle-range/archive/master.zip' class='download'><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Rifle Range</a></li></ul>
                </div>
                <div style='clear:both;'></div>
              </div>
              <div style='clear:both;'></div>
            </div>
          </div>
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
                <p class='lead'>In high-level programming languages, software development is an expression of logic. Each higher-level language limits the programmer's implementation options in favor of readibility, reusability, and standardization.</p>
                <p class='lead'>Ozark is designed to be the highest level programming language of sequential declarations, serving as the only layer between machine language and the abstract software development tools of tomorrow.</p>
              </div>
            </div>
            <hr />
            <div class='row'>
              <div class='col-sm-6'>
                <h4>No expressions, just instructions</h4>
                <p>Lines of code don't have a value to be computed behind the scenes. Instead, you clearly see and define what steps the processor will take during execution.</p>
                <p>Code is verbose and clear, and each line has only one instruction.</p>
                <h4>Declarative, not imperitive</h4>
                <p>Other object-oriented programming languages start imperitively. An Ozark program interprets the classes first, and begins with an instance method. It's object oriented, all the way down.</p>
                <p>Everything is a declaration, and the only instructions are declared inside of methods. All methods are public instance methods. All properties are private. Only properties and outputs are mutable. Literals are objects, there is no reference to self or super, and all method calls use Smalltalk-style message passing.</p>
                <h4>Small scopes</h4>
                <p>Every non-control line of a method is a call to another method. As a result, a method is often only a few straightforward sequential instructions, and the inheritance tree becomes tall and verbose.</p>
                <p>There are no global variables. The only mutable variables are object properties and function outputs. This means the entire scope of available data is small, and could be seen visually during the development process.</p>
              </div>
              <div class='col-sm-6'>
                <h4>Parallelism is automatic</h4>
                <p>Modern machines include multi-core processors, and Ozark code takes advantage implicitly. The strict scopes and decoupling allow clear separation of concerns, and the compiler is able to automatically run code in parallel.</p>
                <h4>Clean &amp; strict formatting rules</h4>
                <p>Ozark is strongly typed and explicit about code structure, which leads to complete code consistency and one-to-one correspondence between code and a visual graph.</p>
                <p>The instruction set is minimal, leaving almost all tasks to instance methods.</p>
                <h4>No return types, just inputs and outputs</h4>
                <p>Rather than evaluating like an expression, a method is an action by a given object with any number of inputs and/or outputs.</p>
                <h4>One way to do everything</h4>
                <p>Whether written by an expert, by an amateur, or generated by software, code is correct the first time. This means that program logic can be deduced directly from examining the code.</p>
                <p>Because of the principles of Ozark, entire categories of potential errors have been removed, and completed software needs no refactoring.</p>
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
    </footer>
    <?php require('includes/scripts.php'); ?>
  </body>
</html>