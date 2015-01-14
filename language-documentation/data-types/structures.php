<?php $title = "Ozark Language - Documentation"; $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software."; require('../../includes/header.php'); ?>
  <body>
    <section class="ribbon">
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $site = 'ozark'; require('../../includes/site-nav.php'); ?>
          </div>
        </div>
      </div>
    </section>
  	<header>
	  	<div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $active = 'documentation'; require('../../includes/nav.php'); ?>
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
                <?php $submenu = 'data-types'; $subpage = 'structures'; require('../../includes/documentation-nav.php'); ?>
              </div>
              <div class='col-sm-9'>
                <div class='row'>
                  <div class='col-sm-8'>
                    <h1 class='main-heading' id="overview">Structures</h1>
                  </div>
                  <div class='col-sm-4'>
                    <?php require('../../includes/documentation-search.php'); ?> 
                  </div>
                </div>
                <p><em>This article is incomplete.</em></p>
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
            <?php require('../../includes/footer-nav.php'); ?>
            <?php require('../../includes/copyright.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    <?php require('../../includes/scripts.php'); ?>
  </body>
</html>