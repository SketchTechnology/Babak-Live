  
   <!DOCTYPE html>

 
 
	<head>

		<meta charset="utf-8">
        <title>BABEK SYSTEM</title>
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
@import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

* {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */
 
h1 {
  text-align: center;
  font-size: 2.4em;
  color: #f2f2f2;
}
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh; /* This ensures that the container takes up the full height of the viewport */
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}

/*
    Don't look at this last part. It's unnecessary. I was just playing with pixel gradients... Don't judge.
*/
/*
@media screen and (max-width: 601px) {
  .rwd-table tr {
    background-image: -webkit-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -moz-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -o-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -ms-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
  }
  .rwd-table tr:nth-child(odd) {
    background-image: -webkit-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -moz-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -o-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -ms-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
  }
}*/
button[disabled] {
      background-color: #ccc; /* Grey background color */
      color: #666; /* Darker grey text color */
      cursor: not-allowed; /* Change cursor to indicate it's not clickable */
    }


    #checkout-live-button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
      background-color: #4CAF50; /* Green background color */
      color: #fff; /* White text color */
      border: 2px solid #4CAF50; /* Green border */
      transition: background-color 0.3s, color 0.3s, border 0.3s;
    }

    #checkout-live-button:hover {
      background-color: #45a049; /* Darker green on hover */
      color: #fff; /* White text color on hover */
      border: 2px solid #45a049; /* Darker green border on hover */
    }
   </style>

	</head>

	<body>
 
    @php
$user = auth()->user();

// Get the first company associated with the user
$company = $user->companies->first();

@endphp
		<div id="container">
      <div style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 100%;">
        <h3 style="margin: 0;">BABEK SYSTEM</h3>
      </div>
 <div class="container">
  <table class="rwd-table">
    <tbody>
      <tr>
        <th>ID</th>
        <th>Company Owner</th>
        <th>Company Name</th>
        <th>Status</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
      <tr>
        <td data-th="ID">
        1
        </td>
        <td data-th="Company Name">
          {{$company->user->name}} 

        </td>
        <td data-th="Owner Name">
            {{$company->name}}

        </td>

     


@if($company && $company->registration_price == 0)

        <td data-th="Status">
          Waiting
        </td>
        <td data-th="Price">
          Waiting
        </td>
        <td data-th="Pay">
         <button disabled>Pay Now</button>
        </td>


        @elseif ($company->registration_price > 0 && $company->paid === 0)

        <td data-th="Status">
          In Progress
        </td>
        <td data-th="Price">
          ${{$company->registration_price }}
        </td>
        <td data-th="Pay">
          <form action="pending/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="{{ intval($company->registration_price) }}">
            <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
             <button  type="submit" id="checkout-live-button">
              {{__('Pay Now')}}
          </button>                   </form>
        </td>
        @elseif($company->paid === 1 && $company->completed === 0)

        <td data-th="Status">
          Admin Working On it
        </td>
        <td data-th="Price">
          ${{$company->registration_price}}
        </td>
        <td data-th="Pay">
          <form action="" method="get">
           
              <button  type="submit" id="" disabled>
              {{__('Next')}}
          </button>                   </form>
        </td>

        @else
        <td data-th="Status">
          Complted
        </td>
        <td data-th="Price">
          ${{$company->registration_price}}
        </td>
        <td data-th="Pay">
          <form action="/locked" method="get">
           
              <button  type="submit" id="checkout-live-button">
              {{__('Next')}}
          </button>                   </form>
        </td>

@endif
      </tr>
     
      
      
    </tbody>
  </table>
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
   