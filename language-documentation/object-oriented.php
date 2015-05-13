<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Ozark Language - Documentation - Object Orientation";
    $description = "Object orientation in Ozark, the readable open-source programming language.";
    require('../includes/header.php');
  ?>
  <body>
    <section class="ribbon">
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $site = 'ozark'; require('../includes/site-nav.php'); ?>
          </div>
        </div>
      </div>
    </section>
  	<header>
	  	<div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $active = 'documentation'; require('../includes/nav.php'); ?>
          </div>
        </div>
	    </div>
  	</header>
    <section class='white short'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-3 hidden-xs'>
                <?php $submenu = ''; $subpage = 'object-oriented'; require('../includes/documentation-nav.php'); ?>
              </div>
              <div class='col-sm-9'>
                <div class='row'>
                  <div class='col-sm-7'>
                    <h1 class='main-heading' id="overview">Object Orientation</h1>
                  </div>
                  <div class='col-sm-5'>
                    <?php require('../includes/documentation-search.php'); ?> 
                  </div>
                </div>
                <p>Ozark is a purely object-oriented and declarative programming language. It is, in many ways, special because of what
                    it leaves out. Within Ozark code, imperitive statements can't exist outside of a method, a method can't exist
                    outside of a class, and a variable can only exist within a method or as a property of a class.</p>
                <p><em>Code example coming soon.</em></p>
                <p>Thus, all methods are instance methods, and there are no global variables. The object-oriented philosophy suggests
                    that state be tightly integrated with functionality and stored within objects, and within Ozark, that is always the
                    case.</p>
                <p><em>Code example coming soon.</em></p>
                <p>This constraint is uniquely valuable to Ozark. Developers who inherit legacy code often find that the underlying
                    object-oriented structure was abandonded in certain places for convenience, maybe with a global variable or
                    misuse of the singleton pattern. When you inherit Ozark code, you can be sure that's not the case. This is one of
                    the ways that Ozark has been built for readability.</p>
                <p>Ozark also abandons techniques that are often considered to be object-oriented, but don't truly adhere to the
                    principles that govern OO development. Static methods are one example of such a technique. Another is an object's
                    ability to call its own functions with a <code>self</code> reference.</p>
                <p><em>Code example coming soon.</em></p>
                </div>
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
            <?php require('../includes/footer-nav.php'); ?>
            <?php require('../includes/copyright.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    <?php require('../includes/scripts.php'); ?>
  </body>
</html>