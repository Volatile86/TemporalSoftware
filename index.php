<?php
$errName="";
$errEmail="";
$errMessage="";
$result="";
if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'temporalsoftwarellc@gmail.com';
		$subject = 'Inquiry Message ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
}
?>


<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="assets/topIcon.ico">
  <title>Temporal Software</title>
  <meta name="description" content="Temporal Software">
  <meta name="keywords" content="Temporal Software">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="https://d33wubrfki0l68.cloudfront.net/js/12e3ca424c3c55e3d306e6423ed9e81f260dd657/aquamarine/js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="https://d33wubrfki0l68.cloudfront.net/js/fe6311b3c294cba469a3939f21603640522c41e5/aquamarine/js/animate-in.js"></script>
</head><body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Temporal Software</a>

<!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> -->

      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">


      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="pt-5 bg-primary">
    <div class="container pb-4">
      <div class="row">
        <div class="col-md-6 my-2 text-lg-left text-center align-self-center">
          <h1 class="display-3">Temporal Software<br></h1>
          <p class="lead">App and Web Development</p>

        </div>
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="assets/brain_purp2.jpg" width="400"> </div>
      </div>
    </div>
  </div>
  <!-- Article style section -->
  <div class="py-3">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-5 order-2 order-md-1">
          <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/devCamp.png"> </div>
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
          <h2>Current Projects: DevCamp</h2>
          <p class="my-2">Launch Date: <b>TBA</b>&nbsp;</p>
          <p class="my-2">Status: <b>Early Stages of Development</b>&nbsp;</p>
          <p class="my-2 text-muted"><b>DevCamp</b> is aimed at bringing web development to the masses.&nbsp;</p>
          <!--<a class="btn btn-outline-primary" href="#features">Learn more</a> -->
        </div>
      </div>
      <div class="row py-3">
        <div class="col-md-5 order-2 order-md-1">
          <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/henryAndFriends.png"> </div>
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
          <h2>Current Projects: Henry And Friends</h2>
          <p class="my-2">Launch Date: <b>TBA</b>&nbsp;</p>
          <p class="my-2">Status: <b>Development Nearing Completion</b>&nbsp;</p>
          <p class="my-2 text-muted"><b>Henry And Friends</b> hopes to bring a fun spin on learning back to the classroom.&nbsp;</p>
          <!--<a class="btn btn-outline-primary" href="#features">Learn more</a> -->
        </div>
      </div>
        <div class="row py-3">
        <div class="col-md-5 order-2 order-md-1">
          <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/crimsonWavesBanner.jpg"> </div>
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
          <h2>New Release: Crimson Waves</h2>
          <p class="my-2"><b>OUT NOW!</b>&nbsp;</p>
          <p class="my-2 text-muted"><b>Crimson Waves</b> is an old school arcade experience brought to your phone!&nbsp;</p>
          <p class="my-2 text-muted">Also Coming Soon to iOS!&nbsp;</p>
          <a style="background-color: 5c2b4f;border-color: 5c2b4f;margin-bottom: 10px;" href="https://play.google.com/store/apps/details?id=ralSoftware.CrimsonWavesmsonWaves" class="btn btn-primary">Click Here</a>
        </div>
      </div>
      <div class="row pt-3 pb-3">
        <div class="align-self-center col-lg-7 text-md-left text-center">
          <h2>Battle Of Memory 2</h2>
          <p class="my-4 text-muted">The sequel to <b>The Battle Of Memory</b> out now on Google Play!</p>
               <a style="background-color: 5c2b4f;border-color: 5c2b4f;margin-bottom: 10px;" href="https://play.google.com/store/apps/details?id=com.temporalsoftware.battleofmemory2" class="btn btn-primary">Click Here</a>
        </div>
        <div class="align-self-center col-lg-5">
          <img style="max-height: 250px;border-radius: 35px;" class="img-fluid d-block my-3 mx-auto animate-in-right" src="assets/battleOfMemory2.png"> </div>
      </div>
        <div class="row pt-3 pb-3">
        <div class="align-self-center col-lg-7 text-md-left text-center">
          <h2>Battle Of Memory</h2>
          <p class="my-4 text-muted">Check Out <b>The Battle Of Memory</b> on Google Play Today!</p>
               <a style="background-color: 5c2b4f;border-color: 5c2b4f;margin-bottom: 10px;" href="https://play.google.com/store/apps/details?id=com.TemporalSoftware.BattleOfMemory" class="btn btn-primary">Click Here</a>
        </div>
        <div class="align-self-center col-lg-5">
          <img class="img-fluid d-block my-3 mx-auto animate-in-right" src="assets/battleOfMemory.png"> </div>
      </div>
			<div class="row pt-3 pb-3">
				<div class="align-self-center col-lg-7 text-md-left text-center">
					<h2>Laravel</h2>
					<p class="my-4 text-muted">We are currently expanding into Laravel development.</p>
				</div>
				<div class="align-self-center col-lg-5">
					<img class="img-fluid d-block my-3 mx-auto animate-in-right" style="max-height: 230px;" src="assets/laravel.png"> </div>
			</div>
      <div class="row py-3">
        <div class="col-md-3 order-2 order-md-1">
          <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/android.png" width="200"> </div>
        <div class="col-md-7 offset-md-1 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
          <h2>New Face In App Development</h2>
          <p class="my-4 text-muted">Temporal Software is quickly becoming Northeast Arkansas's most trusted development companies. Let us bring your web application vision to life.&nbsp;</p>
          <!--<a class="btn btn-outline-primary" href="#features">Learn more</a> -->
        </div>
      </div>
      <div class="row pt-3 pb-3">
        <div class="align-self-center col-lg-7 text-md-left text-center">
          <h2>Completely Responsive</h2>
          <p class="my-4 text-muted">We use the latest Bootstrap framework in our web applications to ensure that the content is streamlined and elegant on both desktop and mobile.</p>
        </div>
        <div class="align-self-center col-lg-5">
          <img class="img-fluid d-block my-3 mx-auto animate-in-right" src="assets/bootstrap.png"> </div>
      </div>
      <div class="row py-3">
        <div class="col-md-3 order-2 order-md-1">
          <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="assets/Steam-logo.png" width="200"> </div>
        <div class="col-md-7 offset-md-1 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
          <h2>Indie Game Development</h2>
          <p class="my-4 text-muted">We are dedicated in breathing new life into the Indie game community.&nbsp;</p>
        </div>
      </div>
       </div>
  </div>
  <div class="pt-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Contact Us</p>
<form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"
			value="<?php if(isset($_POST['name'])){ echo htmlspecialchars($_POST['name']); }?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"
			value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php if(isset($_POST['message'])){echo htmlspecialchars($_POST['message']);}?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input style="background-color: 5c2b4f;border-color: 5c2b4f;margin-bottom: 10px;" id="submit" name="submit" type="submit" 					value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>
		</div>
	</div>
</form>
        </div>
        <div class="col-4 col-md-1 align-self-center my-3">
          <a href="https://www.facebook.com/temporalsoftware" target="blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center my-3">
          <a href="https://twitter.com/TemporalSoftwa1" target="blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center my-3">
          <a href="https://www.instagram.com" target="blank"><i class="fa fa-fw fa-instagram fa-3x text-white"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 my-3 text-center">
          <p class="text-muted">2019 Temporal Software</p>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="javascript/smooth-scroll.js"></script>
</body></html>
