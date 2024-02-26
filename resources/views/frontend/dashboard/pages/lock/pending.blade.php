  
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
.loading-bar {
  position: relative;
  width: 110px;
  height: 110px;
  background: transparent;
  border: px solid #3c3c3c;
  border-radius: 50%;
  text-align: center;
  line-height: 111px;
  font-family: sans-serif;
  font-size: 15px;
  color: #fff000;
  letter-spacing: 3px;
  text-transform: uppercase;
  text-shadow: 0 0 20px #fff000;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

.loading-bar:before {
  content: "";
  position: absolute;
  top: -3px;
  left: -3px;
  width: 100%;
  height: 100%;
  border: 3px solid transparent;
  border-top: 5px solid #fff000;
  border-right: 5px solid #fff000;
  border-radius: 50%;
  animation: animateC 2s linear infinite;
}

@keyframes animateC {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate {
  0% {
    transform: rotate(45deg);
  }

  100% {
    transform: rotate(405deg);
  }
}
.card {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content horizontally */
    justify-content: center; /* Align content at the top */
    height: 100vh; /* Adjust the height of the card as needed */
}

.loading-bar-container {
    margin-bottom: 20px; /* Add margin between loading bar and other content */
}

.loading-bar {
    /* Add your styling for the loading bar */
    background-color: #3498db;
    color: #fff;
    padding: 10px;
}

.loader {
  font-size: 4rem;
  font-family: sans-serif;
  font-variant: small-caps;
  font-weight: 900;
  background: conic-gradient(
    #dff2ae 0 25%,
    #ff904f 25% 50%,
    #feefe7 50% 75%,
    #ffde2b 75%
  );
  background-size: 200% 200%;
  animation: animateBackground 4.5s ease-in-out infinite;
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
}

@keyframes animateBackground {
  25% {
    background-position: 0 100%;
  }

  50% {
    background-position: 100% 100%;
  }

  75% {
    background-position: 100% 0%;
  }

  100% {
    background-position: 0 0;
  }
}

.loading-bar,
.company-info {
	
    /* Add your styling for the loading bar and company info */
     color: #fff;
    padding: 10px;
    text-align: center;
}

.company-name {
    font-weight: bold;
}

.status {
    color: #f39c12; /* Adjust color for the status */
	margin-top: 200px ;
	font-weight: bold;
	font-size: 50px;
	margin-bottom: 20px


}

.pay {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  width: 400px;
  height: 500px;
  padding: 20px 1px;
  margin: 10px 0;
  text-align: center;
  position: relative;
   box-shadow: 0 10px 15px -3px rgba(33,150,243,.4),0 4px 6px -4px rgba(33,150,243,.4);
  border-radius: 10px;
  background-color: #6B6ECC;
  background: linear-gradient(45deg, #04051dea 0%, #2b566e 100%);
}

.content {
  padding: 20px;
}

.content .price {
  color: white;
  font-weight: 800;
  font-size: 50px;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
}

.content .description {
  color: rgba(255, 255, 255, 0.6);
  margin-top: 40px;
  font-size: 14px;
}

.content .title {
  font-weight: 800;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.64);
  margin-top: 10px;
  font-size: 25px;
  letter-spacing: 1px;
}

button {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: none;
  outline: none;
  color: rgb(255 255 255);
  text-transform: uppercase;
  font-weight: 1000;
  font-size: 2rem;
  padding: 0.75rem 1.5rem;
  background-color: rgb(33 150 243);
  border-radius: 0.5rem;
  width: 90%;
  text-shadow: 0px 4px 18px #2c3442;
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
@php
	$user = auth()->user();

// Get the first company associated with the user
$company = $user->companies->first();

@endphp
		<!-- START - FULLPAGE -->
		<div id="fullpage">

		    <!-- HOME SECTION -->
		    <div class="section active" id="section0">

		    	<div class="inside-section">

					<div class="inside-content">

 
						<h1 class="cd-headline zoom">
							@if($company && $company->registration_price == 0)

							<div class="card">
								<div class="loading-bar-container">
									<div class="loader">
										BABEK
									  </div> 
									  <div class="company-info">
 										 
										<div class="status">Pending</div>
										<span style="	font-weight: bold;
										">Please Wait For Approval</span>
									</div>
 								</div>
								
 							</div>
							
							 @else
							 <div class="pay">
								<div class="content">
								  <div class="title">Special Offer</div>
								  <div class="price">${{$company->registration_price}}</div>
								  <div class="description">"Embark on a transformative journey with our Babek System Special Offer – a unique opportunity to experience cutting-edge features, personalized support, and unmatched performance. Elevate your business today with an exclusive deal crafted for your success."</div>
								</div>
								<form action="pending/session" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<input type='hidden' name="total" value="{{ intval($company->registration_price) }}">
									<input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
								   <button  type="submit" id="checkout-live-button">
									  {{__('Subscribe Now')}}
								</button>                   </form>
				 
							</div>
 						@endif
 
 
 
	        		</div>
				</div>

				{{-- <a class="ibtn light-btn blink" href="#2">Notify me!</a> --}}


               

               

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
   