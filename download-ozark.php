<?php $title = "Ozark Language - Download"; $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software."; require('includes/header.php'); ?>
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
            <?php $active = 'download'; require('includes/nav.php'); ?>
          </div>
        </div>
	    </div>
  	</header>
    <section class='white'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-8'>
                <h1>Downloads</h1>
                <p class='lead'>The Ozark language is still in early development. The compiler is not yet complete, and contributors are needed (especially those with compiler expertise.) If the Ozark project seems valuable to you, please consider <a href='/contribute-to-ozark'>getting involved</a>.</p>
              </div>
              <div class='col-sm-4'>
                <div class='ornament disabled'>
                  <a href='javascript:void(0);'><span class='glyphicon glyphicon-remove-circle'></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class='white'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='downloads'>
              <div class='row'>
                <div class='col-sm-4'>
                  <h4>Ozark compiler</h4>
                  <p>The Ozark compiler is in early development. View the <a target="_blank" href='https://github.com/ozark-lang/ozark'>Github project</a> for more information.</p>
                  <a href='javascript:void(0);' class='btn btn-disabled'>Download unavailable &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
                </div>
                <div class='col-sm-4'>
                  <h4>Sublime Text 3 plugin</h4>
                  <p>The Ozark plugin for Sublime Text is in early development. View the <a target="_blank" href='https://github.com/ozark-lang/sublime-text'>Github project</a> for more information.</p>
                  <a href='javascript:void(0);' class='btn btn-disabled'>Download unavailable &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
                </div>
                <div class='col-sm-4'>
                  <h4>Sample applications</h4>
                  <p>The best way to get a feel for Ozark is to explore it yourself. Download a sample app to get started.</p>
                  <ul class='clean'><li><a href='https://github.com/ozark-lang/demo-rifle-range/archive/master.zip' class='download'><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Rifle Range</a></li></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class='white'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
              <div class='row'>
                <div class='col-sm-8'>
                  <h3>Licensing</h3>
                  <p>Ozark is released for public use under the GPL v3 license, which maintains "copyleft" status for the Ozark project and any derivatives. Please see the <a href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>full text</a> for more information.</p>
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
            <?php require('includes/footer-nav.php'); ?>
            <?php require('includes/copyright.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    <?php require('includes/scripts.php'); ?>
  </body>
</html>