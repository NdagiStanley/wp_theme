<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanmd
 */

 get_header(); ?>
<?php
 $intro_img = get_template_directory_uri() . '/assets/img/intro.jpg';
 $you_img = get_template_directory_uri() . '/assets/img/you.png';
?>

	<div class="wrapper">
		<div class="header header-filter intro" style="background-image: url('<?php echo $intro_img;?>');">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="title">Stan_MD™
							<font color="blue">ה</font>
						</h1>
						<br />
						<h3>An Inter-realm BEING, A Global citizen<br><strong><font color="black">KE</font><font color="red">NY</font><font color="green">AN</font></strong>							by nationality
							<br>
						</h3>
						<br />
					</div>
					<div class="col-md-8 col-md-offset-2" align="center">
						<a href="#about_this_young_man" class="btn btn-simple page-scroll">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main main-raised">
			<div class="container">
				<div class="section text-center section-landing">
					<!-- About Section -->
					<section id="about_this_young_man" class="container content-section text-center">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h2 class="title">About this young Man</h2>
								<h4>My name is <strong><u>Stan</u>ley <u>M</u>. n<u>D</u>agi</strong> (alias as Stan_MD). <br>There's much to tell, but
									for starters:</h4>
								<h5 class="description">My Christian faith and <abbr title="schools, colleges and/or universities attended, latin for- Nourishing mother">alma maters</abbr>									have shaped and solidified my life's purpose of serving my generation and impacting our lives positively.<br> I
									find fulfillment by seeing a budded flower slowly but surely unfold to express its radiance and floral essence.
									(figuratively speaking of course :)
									<br><br><abbr title="YOU"><img src='<?php echo $you_img;?>'></abbr><br>&<br>I<br> are somewhere between the budded flower
									and it's unfolding.
								</h5>
								<hr>
								<h5 class="description">Otherwise<br><strong>I AM</strong><br>an (<abbr title="International Computer Driving License">ICDL</abbr> certified)
									<abbr title="Information Technology">IT</abbr> Undergrad | <a href="http://www.andela.com/" target="_blank">Andela</a>									Fellow<br>A member of intelligence in the Kingdom <br>an upcoming UI/UX guru | a techKenyan<br>Mentor / Orator</h5>
								<h5 class="description">Skill wise, I possess a keen designer's eye and touch | Software Engineer <br>Content strategist, creator, translator
									& editor [author-in the making]</h5>
								<h5 class="description">Notable awards and training:<br>Lion Scout badge holder, Gold <abbr title="President's Award (globally known as Duke of Edinburg Award)">P.A.</abbr>									Awardee, ManEnough officer, <br> St. John Ambulance Cadet volunteer, <abbr title="Kenya Red Cross Society">KRCS</abbr>									member</h5>
								<h5 class="description">The outdoors cannot be left out. You are looking at an avid hiker, swimmer, biker, skater who'll one day climb the
									Everest during one of his round-the-globe tours</h5>
							</div>
						</div>
					</section>
				</div>
			</div>

			<!-- Ebenezer Section -->
			<section id="so_far_so_good" class="content-section text-center">
				<div class="ebenezer header-filter">
					<div class="container">
						<div class="col-lg-8 col-lg-offset-2">
							<h3>Ebenezer, Surely this far,<br><em> ni MUNGU TU! </em>[it's God]</h3>
							<h5>A leader serves & a Shepherd is found among the sheep<br>Much's been done, Still much MORE ahead!<br>-> Jer. 29.11
								I know the plans I have for you<br>-> Rom 8.28 All works for good..<br>->1 Cor. 15.58 Give yourself fully to God's
								work
								<br>-> Joshua 1:8 speak it, meditate, observe to be prosperous<br>-> Ecc 12.13 <strong>Conclusion of the matter</strong>:
								the whole duty of man-Fear God, keep his commandments...</h5>
						</div>
					</div>
				</div>
			</section>

			<div class="main">
				<!-- Contact Section -->
				<section id="contact" class="container content-section text-center">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<h2>Contact me</h2>
							<p>Feel free to email MD to provide some feedback on instances you've met, his work, give suggestions for what could
								help him further his inter-realm cause, or to just say hello!</p>
							<a class="btn btn-primary btn-lg" href="mailto:ndagis@gmail.com?Subject=Hello%20Stan" target="_top"><i class="fa fa-pencil-square-o"></i><br><span>Drop MD a line,<br>he'll get back to you<br><abbr title="As soon as possible">ASAP</abbr></span></a>
						</div>
					</div>
				</section>
			</div>

			<!-- Map Section -->
			<section id="locate">
				<div id="map"></div>
				<h5 class="description" align="center">Silicon Savannah is home, the pins is where I've been, the dot is my present location</h5>
				<br>
			</section>
		</div>

	</div>

 <?php get_footer();