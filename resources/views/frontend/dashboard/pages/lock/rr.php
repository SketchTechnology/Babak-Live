  
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
		<style>

			/* Wave text loader made by: csozi | Website: english.csozi.hu*/

.text {
  color: white;
  font-weight: bolder;
}

@keyframes letter {
  0% {
    font-size: 30px;
  }

  50% {
    font-size: 40px;
  }

  100% {
    font-size: 30px;
  }
}

.letter {
  animation: letter 1s infinite;
}

.letter1 {
  animation-delay: 0s;
}

.letter2 {
  animation-delay: -0.9s;
}

.letter3 {
  animation-delay: -0.8s;
}

.letter4 {
  animation-delay: -0.7s;
}

.letter5 {
  animation-delay: -0.6s;
}

.letter6 {
  animation-delay: -0.5s;
}

.letter7 {
  animation-delay: -0.4s;
}

.letter8 {
  animation-delay: -0.3s;
}

.letter9 {
  animation-delay: -0.2s;
}

.letter10 {
  animation-delay: -0.1s;
}
			.card {
 width: 400px;
 height: 400px;
 --border-radius: 15px;
 --border-width: 4px;
 appearance: none;
 position: relative;
 padding: 1em 2em;
 border: 0;
 background: rgb(5, 5, 22);
 font-size: 18px;
 font-weight: 500;
 color: #fff;
 z-index: 2;
 border-radius: 15px;
}

.card::after {
 --m-i: linear-gradient(#000, #000);
 --m-o: content-box, padding-box;
 content: "";
 position: absolute;
 left: 0;
 top: 0;
 width: 100%;
 height: 100%;
 padding: var(--border-width);
 border-radius: var(--border-radius);
 background-image: conic-gradient(
		#488cfb,
		#29dbbc,
		#ddf505,
		#ff9f0e,
		#e440bb,
		#655adc,
		#488cfb
	);
 -webkit-mask-image: var(--m-i), var(--m-i);
 mask-image: var(--m-i), var(--m-i);
 -webkit-mask-origin: var(--m-o);
 mask-origin: var(--m-o);
 -webkit-mask-clip: var(--m-o);
 mask-composite: exclude;
 -webkit-mask-composite: destination-out;
 filter: hue-rotate(0);
 animation: rotate-hue linear 500ms infinite;
 animation-play-state: paused;
}

.card:hover::after {
 animation-play-state: running;
}

@keyframes rotate-hue {
 to {
  filter: hue-rotate(1turn);
 }
}

.card,
.card::after {
 box-sizing: border-box;
}

.card:active {
 --border-width: 5px;
}


		</style>

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

 
						<h1 class="cd-headline zoom">
						 
 	<div class="card"> 
		<div class="loader">
			<p class="text">
			<span class="letter letter1">B</span>
			<span class="letter letter2">A</span>
			<span class="letter letter3">B</span>
			<span class="letter letter4">E</span>
			<span class="letter letter5">K</span>
			 
			</p>
		  </div>
 	</div>

 
 
 
	        		</div>
				</div>

				{{-- <a class="ibtn light-btn blink" href="#2">Notify me!</a> --}}


                <form action="/locked/session" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type='hidden' name="total" value="10000">
                   <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                   <button class="ibtn light-btn blink" type="submit" id="checkout-live-button">
                    <i class="fa fa-money"></i> {{__('Subsribe Now')}}
                </button>                   </form>


               

		    </div>

		    <!-- ABOUT SECTION -->
		    

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
   