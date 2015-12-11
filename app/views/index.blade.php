@extends('_master')

@section('title')
	Welcome to the Kate de Bethune Cello Studio - Cello Lessons with a Suzuki Certified Graduate of Rice University.
@stop

@section('head')

@stop

@section('content')
@yield('nav')
  		{{ HTML::nav_open() }}
  		{{ HTML::nav_index_non_auth() }}
  		{{ HTML::nav_close() }}

<br>
{{-- START OF SHIELD THEME --}}
		<!-- ==== HEADERWRAP ==== -->
	    <!-- div id="headerwrap" id="home" name="home"-->
	    <div id="headerwrap" data-name="home">
	    	<div id="home">
				<header class="clearfix">
						<p>Welcome to the Kate de Bethune Studio</p>
						<h1><span class="glyphicon glyphicon-music"></span></h1>
						<p>Expert Cello Instruction for All Ages</p>
						<p>in Newton, MA</p>
				</header>
			</div><!-- /home -->	    
	    </div><!-- /headerwrap -->

		<!-- ==== ABOUT ==== -->
		<!-- div class="container" id="about" name="about"-->
		<div class="container" data-name="about">
			<div id="about">
				<div class="row white">
				<br>
					<h1 class="centered">ABOUT THE STUDIO</h1>
					<hr>
				
					<div class="col-lg-6">
						<p>The studio is dedicated to musical and personal development through the intensive study of the cello. Individual lessons form the core of studio activities. These are supplemented with a curriculum in theory and musicianship, group classes, chamber music, visits by guest teachers, and performance opportunities. The cello studio is located in Newton, MA and serves students throughout the Greater Boston area.</p>
					</div><!-- col-lg-6 -->
				
					<div class="col-lg-6">
						<h3>Private Lessons</h3>
						<p>Students receive approximately 15 lessons per semester in the fall and 20 lessons in the spring. Beginner and intermediate level students take 30 or 45 minute lessons, while advanced intermediate and advanced students take 60 minute lessons. The private lesson provides time for individualized instruction on technique, tone production, style, musicality, and theory. Lessons are structured around exercises, studies, and solo pieces that create and then build upon a solid physical and intellectual approach. They also involve intensive, interactive, age-appropriate problem solving. Clear practice goals and guidance are provided to both student and parent to ensure success from week to week and consistent progress throughout the year.</p>
					</div><!-- col-lg-6 -->
					<div class="col-lg-6">
						<h3>Group Classes, Recitals, and Other Activities</h3>
						<p>Group classes occur throughout the semester. These classes foster a sense of community through informal group performances of solo and ensemble pieces. Each semester concludes with a recital in which each student plays one or two pieces especially chosen and prepared for public performance. Periodically, guest teachers are invited to work with the studio. There also may be opportunities for students to participate in chamber music ensembles with violin and viola students studying with other teachers in the area.</p>
					</div><!-- col-lg-6 -->
				</div><!-- row -->
			</div><!-- id -->
		</div><!-- container -->
		
		<!-- ==== SECTION DIVIDER1 - APPROACH -->
		<section class="section-divider textdivider divider1">
			<div class="container">
			<h1></h1>
				<!-- <hr> -->
				<p></p>
			</div><!-- container -->
		</section><!-- section -->
		
		
		<!-- ==== APPROACH ==== -->
		<div class="container" data-name="approach">
			<div id="approach">
				<br>
				<br>
				<div class="row">
					<h2 class="centered">APPROACH & METHODS</h2>
					<hr>
					<br>
					<div class="col-lg-6">
						<p>Methods of the master cello pedagogues and the traditional cello repertoire form the basis for a practical approach which integrates hands-on problem solving, theoretical background, development of consistent practice habits, and performance opportunities. For beginner and intermediate students this includes intensive foundation work using materials drawn from the Suzuki Method, Sassmannshaus, Dotzauer, Lee, Kummer, and others. As students progress, they are introduced to increasingly challenging works selected to foster the development of stylistic, tonal, technical, and expressive abilities. </p>
					</div><!-- col-lg-6 -->
					<div class="col-lg-6">
						<h3>Practicing</h3>
						<p>Success studying an instrument requires a long-term commitment to the process of learning. Regular practice and music listening are fundamental to progress. Students need expert guidance to learn what it means to "practice"--how to explore, solve, and master the challenges presented in lessons in a self-directed way. Both student and parent are involved in establishing age-appropriate practice plans and goal setting. My role is to make the process of learning the cello as fun and rewarding as possible, helping students to develop self-confidence, independence, and a joyful approach to practicing and performance.</p>
					</div><!-- col-lg-6 -->
				</div><!-- row -->
			</div><!-- id -->
		</div><!-- container -->
  		

		<!-- ==== SECTION DIVIDER2 - SCHEDULE-->
		<section class="section-divider textdivider divider2">
			<div class="container">
			<h1></h1>
				<!-- <hr> -->
				<p></p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== SCHEDULE ==== -->
		<div class="container"  data-name="schedule_resources">
			<div id="schedule_resources">
			<br>
				<!--div class="row white centered"-->
				<div class="row">
					<h1 class="centered">SCHEDULE & RESOURCES</h1>
					<hr>
					<br>
					<div class="col-lg-offset-2 col-lg-8">
						<p>Fall lessons begin in the first of second week of September and conclude the during the second week of December. Spring lessons begin in the second week of January and conclude a few weeks before public school ends in June. Fees, policies, and a detailed schedule will be made available upon request. Please <a href="mailto:kdebethunecello@gmail.com?Subject=Cello Lesson Inquiry" target="_top"> contact me</a> for more information. </p>
					</div><!-- col-lg -->

					<div class="col-lg-offset-2 col-lg-8">
						<h3>Studio Calendar</h3>
						<iframe src="https://calendar.google.com/calendar/embed?title=debethune%20cello%20studio&amp;height=450&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=kdebethunecello%40gmail.com&amp;color=%2329527A&amp;ctz=America%2FNew_York" style="border-width:0" width="600" height="450" frameborder="0" scrolling="no"></iframe>
					</div>
					<div class="col-lg-offset-2 col-lg-8">
						<h3>Instruments, Supplies, & Sheet Music</h3>
						<p>Beginning students who do not have an instrument are advised to rent. <a href="http://www.johnsonstring.com">Johnson Strings</a> in Newton Upper Falls has built their reputation on providing high-quality, well-adjusted rentals to young students. Johnson's also offers a complete range of sheet music, strings, and accessories for students. Johnson Strings is located on Chestnut Street in Newton Upper Falls (just off Route 9): 617-964-0954 / 1-800-359-9351.</p>
						<p><a href="https://www.sharmusic.com">Shar Music</a> is also a great mail-order source for rental instruments and supplies. They are located in Ann Arbor, Michigan.</p>
						<p><a href="http://www.spectrum-music.com">Spectrum Music</a> (781-862-0088) in Lexington and <a href="http://www.yesterdayservice.com">Yesterday Services</a> (617-547-8263) in Somerville both offer a wide range of sheet music and excellent service.</p>	
					</div><!-- col-lg -->
				</div><!-- row -->
			</div><!-- id -->
		</div><!-- container -->
		<!-- END CATERING MENU -->
		
		
		
		<!-- ==== SECTION DIVIDER4 - BIO -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1></h1>
				<!-- <hr> -->
				<p></p>
			</div><!-- container -->
		</section><!-- section -->
		
		
		<!-- ==== RESOURCES ==== -->
		<div class="container" data-name="bio">
			<div id="bio">
				<br>
				<br>
				<div class="row">
					<h2 class="centered">BIOGRAPHY</h2>
					<hr>
					<br>
					<div class="col-lg-offset-2 col-lg-8">	
						<p>I first heard the sound of the cello at five years of age, in a recording of the Dvorak cello concerto as performed by Jacqueline du Pre. I was captivated--I knew I had to try to make that sound. I have been passionate about the cello and music ever since.
 
My formative studies took place at the New England Conservatory Preparatory School, with the Greater Boston Youth Symphony Orchestra, and at Greenwood Music Camp. Subsequently I studied with George Neikrug at Boston University and Norman Fischer at Rice University. 
 
I have served as teaching assistant to Norman Fischer and as adjunct faculty at Brandeis University and the Phillips-Exeter Academy. I have also taught at Greenwood Music Camp (Cummington, MA), The Music School (Providence, RI), and in the Arlington public schools. In addition, I mentor cello students in the Providence-based Community Music Works program. Previously I maintained a private studio in Portsmouth, RI. 
 
I have performed with the Rhode Island Philharmonic Orchestra, Indian Hill Music, and numerous performing arts organizations throughout New England. 
I am Suzuki certified, having trained with Nancy Hair at the Suzuki School of Newton,  and a member of the Suzuki Association of the Americas.
 
I look forward to sharing my love of music-making with you and your children!</p>
					</div><!-- col-lg -->
				</div><!-- row -->
			</div><!-- id -->
		</div><!-- container -->

		<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1></h1>
				<!-- <hr> -->
				<p></p>
			</div><!-- container -->
		</section><!-- section -->
		
		<div class="container" data-name="contact">
			<div id="contact">
				<div class="row">
				<br>
					<h1 class="centered">GET IN TOUCH WITH THE STUDIO</h1>
					<hr>
					<br>
					<div class="col-lg-offset-2 col-lg-8">
						<p>Email today to set up your first lesson!</p>
					</div><!-- col-lg -->
					<div class="col-lg-4">
						<h3>Contact Information</h3>
						<p>
							<!-- <span class="icon icon-home"></span> xxxx Washington Street, West Newton, MA 02465<br/> -->
							<!-- <span class="icon icon-phone"></span> 617-xxx-xxxx <br/> -->
							<!-- <span class="icon icon-mobile"></span> +34 59855 9853 <br/> -->
							<span class="icon icon-envelop"></span> <a href="mailto:kdebethunecello@gmail.com?Subject=Cello Lesson Inquiry" target="_top"> kdebethunecello@gmail.com</a> <br/>
							<!-- <span class="icon icon-twitter"></span> <a href="#"> @jennys-kitchen </a> <br/> -->
							<!-- <span class="icon icon-facebook"></span> <a href="#"> Jenny's Kitchen </a> <br/> -->
						</p>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- id -->
		</div><!-- container -->

{{-- END OF SHIELD THEME --}}


@stop

