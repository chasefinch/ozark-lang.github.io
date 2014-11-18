<?php $title = "Ozark Language - Documentation"; $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software."; require('../includes/header.php'); ?>
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
                <?php $subpage = 'index'; require('../includes/documentation-nav.php'); ?>
              </div>
              <div class='col-sm-9'>
                <div class='row'>
                  <div class='col-sm-8'>
                    <h1 class='main-heading' id="overview">Overview</h1>
                  </div>
                  <div class='col-sm-4'>
                    <div class='documentation-search'>
                      <form action="/language-documentation" method="get">
                        <div class='form-group'>
                          <div class='input-group'>
                            <input type="search" value="" name="q" class="form-control input-md" id="q" placeholder="search documentation..." required /><div class='input-group-addon'><input type="submit" value="Go" /></div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <p>Ozark is a purely object-oriented programming language designed to build software with maximum modularity, inherent clarity of purpose, and a long lifespan. Where other languages rush to add features, Ozark provides simple, yet high-performance implementations of core concepts in ways that let the code speak for itself.</p>
                <p>This brings about many benefits. For one, code is readable. Methods are short and have descriptive names, clear inputs, and clear outputs. Variables exist only to connect the inputs and outputs of functions and as properties of objects. Everything is object-oriented, and the small scopes are strictly enforced.</p>
                <p>Another benefit is collaborative. Multiple developers of varying skill levels may work on a project using different tools, yet will produce the same code line-for-line.</p>
                <p>Similarly, Ozark files are a suitable save format for applications that generate code. This means that AI software or visual development tools not only produce correct Ozark code, but are able to parse existing code into a working copy.</p>
                <h1>Object-Oriented</h1>
                <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa.</p>
                <h1>Declarative</h1>
                <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa.</p>
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
    </footer>
    <?php require('../includes/scripts.php'); ?>
  </body>
</html>