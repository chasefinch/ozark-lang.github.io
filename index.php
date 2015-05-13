<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Ozark - A readable programming language";
    $description = "Ozark is a readable open-source programming language. Through strict code standards, Ozark enables new tools for building software.";
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
            <?php $active = 'home'; require('includes/nav.php'); ?>
          </div>
        </div>
	    </div>
      <div style='clear:both'></div>
  	</header>
    <section class='blue thinker'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-7'>
                <h1 class='heading'>Ozark is a readable open-source programming language. Through strict code standards, Ozark enables new tools for building software.</h1>
                <div class='row'>
                  <div class='col-sm-10'>
                    <form action="//ozark.us9.list-manage.com/subscribe/post?u=db19e11de3ec47da1da91149f&amp;id=13de2cb1c6" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div class='form-group'>
                        <label for="mce-EMAIL">Enter your email address for regular updates<br />(We won't give it to anyone else.)</label>
                        <div class='row'>
                          <div class='col-sm-10'>
                            <div class='input-group input-block input-group-large'>
                              <input type="email" id="mce-EMAIL" value="" name="EMAIL" class="email form-control input-lg" placeholder="email address..." required /><div class='input-group-addon'><input type="submit" value="Go" name="subscribe" /></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;"><input type="text" name="b_db19e11de3ec47da1da91149f_13de2cb1c6" tabindex="-1" value=""></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class='news'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <strong class='category'>Latest News</strong> Sample app for version 0.2.0 of the Ozark specification <a href='https://groups.google.com/d/msg/ozark-lang/TINK6zXMMNI/w_-c1TZjc1MJ'>See&nbsp;Announcement&nbsp;&rarr;</a>
          </div>
        </div>
      </div>
    </section>
    <section class='white pull'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-10 col-md-offset-1'>
            <div class='row'>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Concise<span class='glyphicon glyphicon-align-left'></span></h3>
                  <p>In Ozark, code has tight formatting rules and is strictly object oriented. It has a narrow instruction set, so there's a single 'correct' way to accomplish just about everything.</p>
                </div>
              </div>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Authoritative<span class='glyphicon glyphicon-ok'></span></h3>
                  <p>Ozark is both a programming language and a file-storage format for applications that write code. That makes it great for development with visual programming tools or by Artificial Intelligence.</p>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Concurrent<span class='glyphicon glyphicon-tasks'></span></h3>
                  <p>Ozark automatically runs code in parallel whenever possible. Thanks to the built-in safety of the language rules, software written in Ozark will take full advantage of the multi-core processors in modern computers.</p>
                </div>
              </div>
              <div class='col-sm-6'>
                <div class='portal'>
                  <h3>Smart<span class='glyphicon glyphicon-refresh'></span></h3>
                  <p>Ozark is different from other languages in ways that tackle key conceptual problems, and is ready to be the "human logic" layer of tomorrow's technology stack.</p>
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
                  <pre><span class='declaration'>class</span> <span class='class'>Mountaineer</span>
  <span class='declaration'>inheritance</span> <span class='class'>Person</span> <span class='argument'>source:</span><span class='literal'>"Person"</span>

  <span class='declaration'>requirement</span> <span class='class'>HikeAbility</span> <span class='argument'>source:</span><span class='literal'>"HikeAbility"</span>
  <span class='declaration'>requirement</span> <span class='class'>Hat</span> <span class='argument'>source:</span><span class='literal'>"Hat"</span>
  <span class='declaration'>requirement</span> <span class='class'>Map</span> <span class='argument'>source:</span><span class='literal'>"Map"</span>
  <span class='declaration'>requirement</span> <span class='class'>Mountain</span> <span class='argument'>source:</span><span class='literal'>"Mountain"</span>

  <span class='declaration'>member</span> <span class='noun'>hiker:</span><span class='class'>HikeAbility</span>
  <span class='declaration'>member</span> <span class='noun'>hat:</span><span class='class'>Hat?</span>
  <span class='declaration'>member</span> <span class='noun'>map:</span><span class='class'>Map?</span>

  <span class='declaration'>method</span> <span class='method'>prepare</span>
    <span class='declaration'>create</span> <span class='noun'>map:</span><span class='class'>Map</span> <span class='method'>initialize</span>
    <span class='declaration'>create</span> <span class='noun'>hat:</span><span class='class'>Hat</span> <span class='method'>initialize</span>
    <span class='declaration'>set</span> <span class='property'>my</span> <span class='noun'>map</span> <span class='symbol'>&lt;-</span> <span class='noun'>map</span>
    <span class='declaration'>set</span> <span class='property'>my</span> <span class='noun'>hat</span> <span class='symbol'>&lt;-</span> <span class='noun'>hat</span>

  <span class='declaration'>method</span> <span class='method'>climbMountain</span> <span class='implicit'>input:</span><span class='class'>Mountain</span>
    <span class='property'>my</span> <span class='noun'>map</span> <span class='method'>findTrail</span> <span class='argument'>mountain:</span><span class='implicit'>input</span> <span class='symbol'>-&gt;</span> <span class='noun'>trail</span> <span class='symbol'>\</span>
      <span class='declaration'>catch</span> <span class='argument'>e:</span><span class='class'>UnpackedEmptyOptionalException</span>
        <span class='noun'>e</span> <span class='method'>setMessage</span> <span class='literal'>"I'm lost."</span>
        <span class='declaration'>throw</span> <span class='noun'>e</span>

    <span class='property'>my</span> <span class='noun'>hiker</span> <span class='method'>followTrail</span> <span class='noun'>trail</span> <span class='symbol'>-&gt;</span> <span class='argument'>success:</span><span class='noun'>result</span>
    
    <span class='declaration'>if</span> <span class='noun'>result</span>
      <span class='property'>my</span> <span class='noun'>speaker</span> <span class='method'>shout</span> <span class='literal'>"Hello, world!"</span>
                  </pre>
                </div>
              </div>
              <div class='col-sm-4'>
                <div class='github'>
                  <h3>Contribute</h3>
                  <a target="_blank" href='https://github.com/ozark-lang/ozark' class='btn btn-primary btn-lg'>View the GitHub project &nbsp; <span class='glyphicon glyphicon-new-window'></span></a>
                  <div class='callout'>
                    <p>Ozark is open source under the <a target="_blank" href='https://github.com/ozark-lang/ozark/blob/master/LICENSE'>GPL v3 license</a>. It's hosted and developed on GitHub.</p>
                    <p>The Ozark language is still in early development. The compiler isn't available yet, and contributors are needed (especially people with compiler expertise).</p>
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