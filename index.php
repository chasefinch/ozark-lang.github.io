<!DOCTYPE html>
<html lang="en">
	<?php
		$title = "Ozark - A readable programming language";
		$description = "Ozark is a readable open-source programming language. Through strict code standards, Ozark enables new tools for building software.";
		$active = 'home';
		require('includes/header.php');
	?>
	<body>
		<?php require('includes/top.php'); ?>
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
						<strong class='category'>Latest News</strong> Sample app for version 0.2.1 of the Ozark specification <a href='https://groups.google.com/d/msg/ozark-lang/ScHtG-z6gRo/1nkjWLE3AgAJ'>See&nbsp;Announcement&nbsp;&rarr;</a>
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
									<p>In Ozark, code has tight formatting rules and is strictly object-oriented. It has a narrow instruction set, and there's a single 'correct' way to accomplish just about everything.</p>
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
									<p>Ozark blends the structure of object-oriented programming for objects (such as <code>systemIO</code> and <code>myHat</code>) with the elegance of reusable expressions for values (such as <code>5.3</code> and <code>true</code>).</p>
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

								<div class='code-sample-header'>Mountaineer.class.ozark</div>
								<div class='code-sample'><pre>inheritance Person

requirement HikeAbility
requirement Hat
requirement Map
requirement Mountain

member hiker:HikeAbility
member hat:Hat?
member map:Map?

method prepare
	create map:Map initialize
	create hat:Hat initialize
	set @map &lt;- map
	set @hat &lt;- hat

method climbMountain #mountain:Mountain
	with @map
		@map findTrail mountain:mountain -&gt; trail
		@hiker followTrail trail -&gt; success:result
	
		if result
			@speaker shout "Hello, world!"</pre></div>
							</div>
							<div class='col-sm-5'>
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
		<?php require('includes/back-to-top.php'); ?>
		<?php require('includes/bottom.php'); ?>
		<?php require('includes/scripts.php'); ?>
	</body>
</html>