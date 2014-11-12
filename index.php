<?php $title = "Ozark - A strict programming language"; $description = "Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software."; require('includes/header.php'); ?>
  <body>
  	<header>
	  	<div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <?php $active = 'home'; require('includes/nav.php'); ?>
          </div>
        </div>
	    </div>
      <div style='clear:both'></div>
  	</header>
    <section class='offset'></section>
    <section class='blue thinker'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-md-7 col-sm-8 col-xs-9'>
                <h1 class='heading'>Ozark is an elegant, open-source programming language. Through strict code standards, Ozark enables new tools for generating software.</h1>
              </div>
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
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Concise<span class='glyphicon glyphicon-align-left'></span></h3>
                  <p>In Ozark, code follows narrow formatting rules and a strict object-oriented methodology. With a carefully curated instruction set, there is generally a single 'correct' way to accomplish just about everything.</p>
                </div>
              </div>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Authoritative<span class='glyphicon glyphicon-ok'></span></h3>
                  <p>Ozark is both a programming language and a file storage format for applications that generate code. This makes it well-suited to development with visual programming tools or by Artificial Intelligence.</p>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Concurrent<span class='glyphicon glyphicon-tasks'></span></h3>
                  <p>Ozark automatically executes code in parallel, based on the inherent safety of the language rules. As the availablility of multi-core processors goes up, software written in Ozark will implicitly take advantage.</p>
                </div>
              </div>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Smart<span class='glyphicon glyphicon-refresh'></span></h3>
                  <p>Ozark differs from other languages in several innovative ways that address key conceptual problems, and is intented to be the "human logic" layer in tomorrow's technology stack.</p>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class="continue">
                  <a href='/about-ozark' class='btn btn-default btn-lg'>Learn more &nbsp; <span class='glyphicon glyphicon-chevron-right'></span></a>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-7'>
                <div class='code-sample-header'>Mountaineer.ozark</div>
                <div class='code-sample'>
                  <pre><span class='declaration'>class</span> <span class='class'>Mountaineer</span> <span class='argument'>superclass:</span><span class='literal'>"Person"</span>

  <span class='declaration'>requirement</span> <span class='literal'>"HikeAbility"</span>
  <span class='declaration'>requirement</span> <span class='literal'>"Mountain"</span>
  <span class='declaration'>requirement</span> <span class='literal'>"Hat"</span>
  <span class='declaration'>requirement</span> <span class='literal'>"Map"</span>

  <span class='class'>HikeAbility</span> <span class='noun'>@hiker</span>
  <span class='class'>Hat?</span> <span class='noun'>@hat</span>
  <span class='class'>Map?</span> <span class='noun'>@map</span>
  <span class='class'>Mountain.Location</span> <span class='noun'>@location</span><!--

  <span class='declaration'>continuation</span> <span class='method'>initialize</span>
    <span class='noun'>map</span> <span class='symbol'>&lt;</span>
    <span class='noun'>hat</span> <span class='symbol'>&lt;</span>-->

  <span class='declaration'>method</span> <span class='method'>prepare</span>
    <span class='class'>Map</span> <span class='noun'>map</span> <span class='method'>initialize</span>
    <span class='class'>Hat</span> <span class='noun'>hat</span> <span class='method'>initialize</span>
    <span class='property'>@map</span> <span class='symbol'>=</span> <span class='noun'>map</span>
    <span class='property'>@hat</span> <span class='symbol'>=</span> <span class='noun'>hat</span>

  <span class='declaration'>method</span> <span class='method'>climbMountain</span> <span class='implicit'>input:</span><span class='class'>Mountain</span>
    <span class='declaration'>mandate</span> <span class='property'>@map</span> * <span class='class'>DoesNotExist</span> <span class='noun'>exception1</span>
      <span class='noun'>exception1</span> <span class='method'>setMessage</span> <span class='literal'>"I'm lost."</span>
      <span class='declaration'>raise</span> <span class='noun'>exception1</span>
    
    <span class='property'>@map</span> <span class='method'>findTrail</span> <span class='argument'>mountain:</span><span class='implicit'>input</span> <span class='symbol'>-&gt;</span> <span class='noun'>trail</span>
    <span class='property'>@hiker</span> <span class='method'>followTrail</span> <span class='noun'>trail</span> <span class='symbol'>-&gt;</span> <span class='argument'>success:</span><span class='noun'>result</span>
    
    <span class='declaration'>if</span> <span class='noun'>result</span>
      <span class='property'>@speaker</span> <span class='method'>shout</span> <span class='literal'>"Hello, world!"</span>
                </pre>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='github'>
                <h3>Contribute</h3>
                <a target="_blank" href='https://github.com/ozark-lang/ozark' class='btn btn-primary btn-lg'>View the GitHub project &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
                <div class='callout'>
                  <p>Ozark is open source under the <a target="_blank" href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>GPL v3 license</a>. It is hosted and developed on GitHub.</p>
                  <p>The Ozark language is still in early development. The compiler is not yet available, and contributors are needed (especially those with compiler expertise.)</p>
                </div>
              </div>
              <div class='documentation'>
                <h3>Learn Ozark!</h3>
                <a class='btn btn-default btn-lg' href='/language-documentation'>Read the documentation &nbsp; <span class='glyphicon glyphicon-chevron-right'></span></a>
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