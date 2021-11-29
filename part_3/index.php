<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable = no">
    <!-- Metadata for mobile user saves the page -->
    <title>Home - Seek Coffee</title>
    <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="192x192" href="img/icon.png">
    <!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>    -->
	<!-- Goolge fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- External style -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
		<!-- Begin Header and menu
	================================================== -->
    <div class="placeholder">
      <div class="header" style="background-image: url('img/title-pic copy.jpg'); background-repeat: no-repeat;">
        <div class="header-inner">
          <div class="header-side">
            <h1 class="header-side-title">Seek Coffee</h1>
            <h6 class="header-side-description">find your coffee shop</h6>
          </div>
        </div>
        <nav class="nav-bar">
          <ul class="nav-ul">
            <li class="nav-li"><a href="index.php" class="nav-link active">Home</a></li>
            <li class="nav-li"><a href="submission_object.php" class="nav-link">Submission</a></li>
            <li class="nav-li"><a href="registration.php" class="nav-link">Registration</a></li>
			<li class="nav-li"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-li"><a href="search.php" class="nav-link">Search</a></li>
          </ul>
        </nav>
      </div>
    </div>
		<!-- End Header and menu
	================================================== -->

	<!-- Start of Welcome section
================================================== -->
    <main>
      <header class="welcome-section">
				<div class="title">
				<?php echo $_SESSION['username'] . ","; ?><span>Welcome to</span>
					<span class="colored-title">Seek Coffee</span>
			</div>
      </header>
			<!-- End of Welcome section
		================================================== -->

			<!-- Sample Objects -->
			<div class="obj-container">
				<div class="objects">
					<a class="img-ref" href="individual_object.php">
						<!-- img with no copy right, from https://unsplash.com/photos/XtUd5SiX464 -->
						<img src="img/gallery/default.jpg" class="sample-img" alt="Coffee Shop Picture"/>
					</a>
					<div class="description">
						<h4 class="des-title">Durand Coffee</h4>
						<p class="des-text">A great coffee shop in Hamilton downtown</p>
						<div class="rating-container">
								<div class="rating">
										<!-- a star icon with filling -->
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<!-- a star icon with half filling -->
										<span>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
								</div>
						</div>
					</div>
				</div>

				<div class="objects">
					<a class="img-ref" href="individual_object.php">
						<!-- img with no copy right, from https://unsplash.com/photos/XtUd5SiX464 -->
						<img src="img/gallery/default.jpg" class="sample-img" alt="Coffee Shop Picture"/>
					</a>
					<div class="description">
						<h4 class="des-title">Second Fake Coffee Shop</h4>
						<p class="des-text">This coffee shop is Nil.</p>
						<div class="rating-container">
								<div class="rating">
										<!-- a star icon with filling -->
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<!-- a star icon with half filling -->
										<span>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
								</div>
						</div>
					</div>
				</div>

				<div class="objects">
					<a class="img-ref" href="individual_object.php">
						<!-- img with no copy right, from https://unsplash.com/photos/XtUd5SiX464 -->
						<img src="img/gallery/default.jpg" class="sample-img" alt="Coffee Shop Picture"/>
					</a>
					<div class="description">
						<h4 class="des-title">Third Coffee Shop</h4>
						<p class="des-text">This coffee shop is an empty set.</p>
						<div class="rating-container">
								<div class="rating">
										<!-- a star icon with filling -->
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<!-- a star icon with half filling -->
										<span>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
								</div>
						</div>
					</div>
				</div>

				<div class="objects">
					<a class="img-ref" href="individual_object.php">
						<!-- img with no copy right, from https://unsplash.com/photos/XtUd5SiX464 -->
						<img src="img/gallery/default.jpg" class="sample-img" alt="Coffee Shop Picture"/>
					</a>
					<div class="description">
						<h4 class="des-title">Super Expensive Coffee Shop</h4>
						<p class="des-text">This coffee shop is really expensive.</p>
						<div class="rating-container">
								<div class="rating">
										<!-- a star icon with filling -->
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<!-- a star icon with half filling -->
										<span>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
								</div>
						</div>
					</div>
				</div>

				<div class="objects">
					<a class="img-ref" href="individual_object.php">
						<!-- img with no copy right, from https://unsplash.com/photos/XtUd5SiX464 -->
						<img src="img/gallery/default.jpg" class="sample-img" alt="Coffee Shop Picture"/>
					</a>
					<div class="description">
						<h4 class="des-title">Super Duper Fake Coffee Shop</h4>
						<p class="des-text">This coffee shop is super fake.</p>
						<div class="rating-container">
								<div class="rating">
										<!-- a star icon with filling -->
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<span>
												<i class="fa fa-star" aria-hidden="true"></i>
										</span>
										<!-- a star icon with half filling -->
										<span>
												<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</span>
								</div>
						</div>
					</div>
				</div>
			</div>
    </main>


		<!-- End of page
	================================================== -->
		<div class="end-of-page">
			<div class="end-of-page-text">
				<h3 class="des-title">That's the end of the home page!</h3>
				<p> Didn't find your loved one? <a href="submission_object.php">Add it!</a></p>
			</div>
		</div>
	</div>

		<footer>
			<hr>
  		<p>Page created by: Haoyang Tao, Fang Ye</p>
  		<p>Contact information: <a href="mailto:taoh4@mcmaster.ca">click this</a>.</p>
		</footer>
</body>

</html>