   
   <!DOCTYPE html>

 
 
   <head>

	   <meta charset="utf-8">
	   <title>MOON - Absolute Coming Soon Template</title>
	   <meta name="description" content="The description should optimally be between 150-160 characters.">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <meta name="author" content="Madeon08">

	   <!-- ================= Favicon ================== -->
	   <!-- Standard -->
	   <link rel="shortcut icon" href="img/favicon.png">
	   <!-- Retina iPad Touch Icon-->
	   <link rel="apple-touch-icon" sizes="144x144" href="lock/img/favicon-retina-ipad.png">
	   <!-- Retina iPhone Touch Icon-->
	   <link rel="apple-touch-icon" sizes="114x114" href="lock/img/favicon-retina-iphone.png">
	   <!-- Standard iPad Touch Icon--> 
	   <link rel="apple-touch-icon" sizes="72x72" href="lock/img/favicon-standard-ipad.png">
	   <!-- Standard iPhone Touch Icon--> 
	   <link rel="apple-touch-icon" sizes="57x57" href="lock/img/favicon-standard-iphone.png">

	   <!-- ============== Resources style ============== -->
	   <link rel="stylesheet" href="lock/css/style-electric.css" />

   </head>

   <body>

	   <div id="container">
		   <div id="output" class="back-fss"></div>
	   </div>

	   <span class="full-overlay on-canvas"></span>

	   <!-- LOADING -->
	   <div id="loading">
		   <div class="loader">
			   <div class="loader__row">
				   <div class="loader__arrow up inner inner-6"></div>
				   <div class="loader__arrow down inner inner-5"></div>
				   <div class="loader__arrow up inner inner-4"></div>
			   </div>
			   <div class="loader__row">
				   <div class="loader__arrow down inner inner-1"></div>
				   <div class="loader__arrow up inner inner-2"></div>
				   <div class="loader__arrow down inner inner-3"></div>
			   </div>
		   </div>
		   <span>BABAK</span>
	   </div>

	   <!-- START - FULLPAGE -->
	   <div id="fullpage">

		   <!-- HOME SECTION -->
		   <div class="section active" id="section0">

			   <div class="inside-section">

				   <div class="inside-content">

					   <img src="lock/img/logo.png" class="brand-logo" alt="My logo" />

					   <h1 class="cd-headline zoom">
						   <span class="cd-words-wrapper">

							   <b class="is-visible">
									 نحن نفخر بتوفير تجربة مستخدم فائقة السلاسة<br/>
								   <span class="highlight"> نحو مستقبل أفضل لشركتك 
									  
							   </b>




							   <b>اشترك الآن في سيستم بابك لخدمات  
								   <span class="highlight">الشركات</span> <br/>
								   
							   </b>

							   <b>Babak System &<br/>
								   <span class="highlight">fully</span> responsive<br/>
								   on everything
							   </b>

						   </span>
					   </h1>

					   <div class="text">

						   <h2 class="home-h2">Unlock All Features Now With One  Click</h2>

					   </div>

				   </div>
			   </div>

			   {{-- <a class="ibtn light-btn blink" href="#2">Notify me!</a> --}}


			   <form action="/locked/session" method="POST">
				   <input type="hidden" name="_token" value="{{csrf_token()}}">
				  <input type='hidden' name="total" value="10000">
				  <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
				  <button class="ibtn light-btn blink" type="submit" id="checkout-live-button">
				   <i class="fa fa-money"></i> {{__('Subscribe Now')}}
			   </button>                   </form>


			  

		   </div>

		   <!-- ABOUT SECTION -->
		   <div class="section" id="section1">

			   <div class="inside-section">

				   <div class="inside-content double-col container">

					   <div class="row">

						   <div class="col-xs-12 col-md-6 col-lg-5 with-border">

							   <h2>1<span class="number">.</span> Read<small>Being apart of this awesome venture</small></h2>

							   <div class="text">

								   <p class="subtitle">
									   Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  It is a paradisematic country, in which roasted parts of sentences fly into your mouth.

									   <br><br>

									   <strong>Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.
								   </p>

							   </div>
						   </div>

						   <div class="col-xs-12 col-md-6 col-md-push-0 col-lg-6 col-lg-push-1">

							   <h2>2<span class="number">.</span> Get in<small>Get your exclusive notification</small></h2>

							   <div class="text">

								   <ul>
									   <li><i class="fa fa-check"></i> Free access to the Grand Opening</li>
									   <li><i class="fa fa-check"></i> Save up to 60% on the real price</li>
									   <li><i class="fa fa-check"></i> Never miss an update again</li>
								   </ul>

								   <!-- Newsletter Form -->
								   <div id="subscribe">

									   <form action="php/notify-me-2.php" id="notifyMe" method="POST">

										   <div class="form-group">

											   <div class="controls">
												   
												   <!-- Field  -->
												   <input type="text" id="mail-sub" name="email" placeholder="Click here to type your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to type your email'" class="form-control email srequiredField" />

												   <!-- Button -->
												   <button id="submit-form" class="btn btn-lg submit">Get notified</button>

												   <div class="clear"></div>

											   </div>

										   </div>

									   </form>

									   <p class="spam-news"><i class="fa fa-lock"></i> We hate spam just as much as you do. Your email will stay secret.</p>

								   </div>
								   <!-- /. Newsletter Form -->
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>	

			   <a class="ibtn light-btn hidden-xs hidden-sm" href="#3">Contact us!</a>

		   </div>

		   <!-- CONTACT SECTION -->
		  
	   </div>
	   <!-- END - FULLPAGE -->

	   <!-- START - Answer for the contact form is displayed in the next div, do not remove it. -->       
	   <div id="block-answer" class="">

		   <div id="answer"></div>

	   </div>
	   <!-- END - Answer... -->

	   <!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
	   <div class="block-message">

		   <div class="message">

			   <p class="notify-valid"></p>

		   </div>

	   </div>

	   <!-- Social Media -->
	   <div class="social-nav">
		   <ul>
			   <li>
				   <a href="https://www.facebook.com/themehelite" target="_blank"><i class="fa fa-facebook"></i></a>
			   </li>

			   <li>
				   <a href="https://twitter.com/themehelite" target="_blank"><i class="fa fa-twitter"></i></a>
			   </li>

			   <li>
				   <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			   </li>

			   <li>
				   <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
			   </li>
		   </ul>
	   </div>

	   <div class="copyright">
		   <p>
			   <strong>Babak System</strong><br>
			   UAE<br>
			   <a href="http://BABAK.AE" target="_blank">BABAK</a> © 2017-2024 | Made for you.
		   </p>
	   </div>

	   <!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	   <script src="lock/js/jquery.min.js"></script>
	   <script src="lock/js/jquery.easings.min.js"></script>
	   <script src="lock/js/bootstrap.min.js"></script>

	   <!-- Fullpage plugin -->
	   <script src="lock/js/jquery.fullpage.js"></script>

	   <!-- Contact form plugin -->
	   <script src="lock/s/contact-me.js"></script>

	   <!-- Newsletter plugin -->
	   <script src="lock/js/notifyMe.js"></script>

	   <!-- Flat Surface Shader colors -->
	   <script>
		   var ambient_value = '#1F222E'; // ambient color
		   var diffuse_value = '#2B2D35'; // diffuse color
	   </script> 

	   <!-- Flat Surface Shader effect -->
	   <script src="lock/js/fss.js"></script> 
	   <script src="lock/js/custom-fss.js"></script>

	   <!-- Text rotator plugin -->
	   <script src="lock/js/animated-headlines.js"></script>

	   <!-- Main JS File -->
	   <script src="lock/js/main.js"></script>

   </body>
</html>
  