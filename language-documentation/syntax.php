<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Ozark Language - Documentation - Literals";
    $description = "Literals in Ozark, the strict, elegant, open-source programming language.";
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
                <?php $submenu = ''; $subpage = 'syntax'; require('../includes/documentation-nav.php'); ?>
              </div>
              <div class='col-sm-9'>
                <div class='row'>
                  <div class='col-sm-7'>
                    <h1 class='main-heading' id="overview">Syntax</h1>
                  </div>
                  <div class='col-sm-5'>
                    <?php require('../includes/documentation-search.php'); ?> 
                  </div>
                </div>
                <p><em>The Ozark documentation is under development. In the meantime, get a feel for Ozark from the notes on this page, along with a demo app which can be downloaded <a href='/download-ozark'>here.</a></em></p>
                <div class='code-sample-header code-sample-header-inline'></div>
                <div class='code-sample code-sample-inline'>
                  <pre>  # values (stored in variables):
  #
  # Integer (+, -, =, >, ...)
  # Ordinal     # 1, 2, 3, 4, @101101, &4A4...
  # Cardinal    # 0, 1, 2, 3, ...
  # Float
  # Boolean (and, not, or, is)
  # Enumeration (is)
  # Character             # '1', 'A'. a string is a tuple of characters, with a literal of "Some String". Regular list literals do not apply.
  # [Integer] (in, =, split, ...) # this is a tuple. [3, var1, 3], [[3, 2], [1]], [true, [false, true]].
  # {{Integer}}           # this is a set. {3, 5, 8} is the same as {8, 3, 5}, {[3, 4, 6], [3, 4], [[2, 5], [6, 1]]}
  # &lt;Boolean&gt;       # this is a bag. &lt;3, 5, 8, 8&gt; is the same as &lt;5, 8, 3, 8&gt;

  # objects (stored in pointers):
  #
  # Application
  # Rifleman
  # HTTPRequest
  # HTTPResponse
  # Dictionary by String of String
  # Array of Rifleman
  # ...




  create spaceships:Array of Spacecraft
  create spaceships:Dictionary by Integer of Spacecraft
  create encyclopedia:Dictionary by String of String
  create tree:CrazyTree of Integer, Spacecraft




  "Some String" # a string


  

  create location:Location initialize

  set location <- currentLocation --    # not allowed

  location setValue currentLocation

  set my location <- currentLocation




  let threads:Integer <- 5




  member possibleSpaceship:Spaceship? # this would have to be a member or the output of a function
  set possibleSpaceship <- actualSpaceship

  unset spaceship

  possibleSpaceship takeoff       # not allowed

  possibleSpaceship! takeoff \
    catch exception:NoValueException

  possibleSpaceship! value -> spaceship \
    catch exception:NoValueException
      exception setMessage 'No value.'
      raise exception

  spaceship takeoff

  unset spaceship       # not allowed




  set my pointer <- newValue
  set output <- my var




  set pointer <- value




  if var1 and (not var2 or var3)
    foo doAction




  someObject doSomethingWithBoolean (var1 and not var2)




  someObject doSomethingWithInteger 3

  someObject doSomethingWithInteger 3 + var1

  someObject doSomethingWithFloat root(3, 3 + var1 % 4)




  # expression literal:

  3 + var1
  3 + var1 % 4
  sqrt(4 + 1)
  sqrt(4)




  loop var1 -> condition
    timer time -> time
    bar testSomething with:time -> result
    set condition <- result




  each foo as f     # valid for tuple, set, bag
    each bar as b
      someObject doSomething to:f and:b




  each range(1, 10) as i    # valid for tuple, set, bag
    io print i



  iterableObjectSet count -> count

  each range(1, count) as i
    iterableObjectSet objectAt i -> object1
    object1 doSomething with:somethingElse




  dictionaryObjectSet keys -> keys

  each keys as k
    dictionaryObjectSet objectWithKey -> object1
    object1 doSomething with:somethingElse



  
  io print value        # prints 2.5</pre>
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