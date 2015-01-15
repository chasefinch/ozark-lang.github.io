<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Ozark - A strict programming language";
    $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software.";
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
            <?php $active = '404'; require('includes/nav.php'); ?>
          </div>
        </div>
	    </div>
      <div style='clear:both'></div>
  	</header>
    <section class='white'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-6 col-md-offset-1'>
            <div class='page-not-found'>
              <h6>404: Page Not Found</h6>
              <h1>Oops!</h1>
              <p class='lead'>The page you were looking for isn't here. Visit <a href='/'>the homepage</a> or <a href='https://github.com/ozark-lang/ozark'>Ozark on GitHub</a> for more information.</p>
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