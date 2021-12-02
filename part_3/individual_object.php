<?php
    include 'inc/individual_object_getdata.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable = no">
    <!-- Metadata for mobile user saves the page -->
    <title>Individual Coffee Shop - Seek Coffee</title>
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
    <!-- Facebook's Open Graph Protocol  -->
    <meta property="og:title" content="Durand Coffee" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="http://3.142.111.3/4ww3project/part_3/individual_object.php" />
    <meta property="og:image" content="http://3.142.111.3/4ww3project/part_3/img/coffee-shop-1.jpg" />
    <meta property="og:site_name" content="Seek Coffee">
    <meta property="og:description" content="A great coffee shop in Hamilton downtown">
    <!-- Twitter summary card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Seek Coffee" />
    <meta name="twitter:title" content="Durand Coffee" />
    <meta name="twitter:description" content="A great coffee shop in Hamilton downtown." />
    <meta name="twitter:image" content="http://3.142.111.3/4ww3project/part_3/img/coffee-shop-1.jpg" />
    <!-- Leaflet CSS file -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Leaflet JavaScript file -->
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <!-- External JavaScript -->
   <script type="text/javascript" src="assets/js/individual_sample_map.js"></script>

</head>

<!-- when load the page, it will call loadMapToIndividualPage function to load the map to the page -->
<body onload="loadMapToIndividualPage(<?php echo $latitude?>, <?php echo $longitude?>);">    
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

        <!-- Begin Body content
	================================================== -->
        <section>
            <div class="individual-obj-container">
                <div>
                    <div>
                        <!-- img with creative comons license, from https://images.app.goo.gl/y3xtUHUSn13LiotM8 -->
                        <div class="coffee-shop-img">
                            <picture>
                               <img src = <?php echo $image_url?>  alt="Coffee Shop" height= "310px" />
                                <source srcset="img/coffee-shop-1-sma.jpg 320w,
                                    img/coffee-shop-1-mid.jpg 800w,
                                    img/coffee-shop-1.jpg 1200w" sizes="(min-width: 60rem) 80vw,
                                   (min-width: 40rem) 90vw, 100vw">                    
                            </picture>
                        </div>
                        <!-- Video provided by Videvo, downloaded from www.videvo.net  -->
                        <div class="coffee-shop-video" >
                            <video controls style="width:100%" height="310px">
                                <source src=<?php echo $video_url?> />
                            </video>
                        </div>
                    </div>
                    <div class="fix"></div>
                    <!-- Coffee shop information, including coffee shop name, description, ratings and the number of reviews -->
                    <div class="coffee-shop-overall-info margin-left-10">
                        <!-- a div for coffee shop name -->
                        <div>
                            <div class="coffee-shop-name"><?php echo $shopname?> </div>
                        </div>
                        <!-- a div for desription -->
                        <div>
                            <strong>Description: </strong><?php echo $description?>
                        </div>
                        <!-- a div for rating and the overal number of reivews -->
                        <div class="flex-left">
                            <div class="rating">
                                <!-- a star icon with filling, check the aveage ranking and show fill the star according to the average ranking -->
                                <span>
                                    <i <?php if($avg_ranking >= 1){echo 'class="fa fa-star"';} else if($avg_ranking >= 0.5) {echo 'class="fa fa-star-half-o"';} 
                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                </span>
                                <span>
                                    <i <?php if($avg_ranking >= 2){echo 'class="fa fa-star"';} else if($avg_ranking >= 1.5){echo 'class="fa fa-star-half-o"';} 
                                     else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                </span>
                                <span>
                                    <i <?php if($avg_ranking >= 3){echo 'class="fa fa-star"';} else if($avg_ranking >= 2.5){echo 'class="fa fa-star-half-o"';} 
                                     else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                </span>
                                <span>
                                    <i <?php if($avg_ranking >= 4){echo 'class="fa fa-star"';} else if($avg_ranking >= 3.5){echo 'class="fa fa-star-half-o"';} 
                                     else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                </span>
                                <span>
                                    <i <?php if($avg_ranking >= 5){echo 'class="fa fa-star"';} else if($avg_ranking >= 4.5){echo 'class="fa fa-star-half-o"';} 
                                     else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="margin-bottom-20">
                                &nbsp;&nbsp;<strong><?php echo count($reviews)?> reviews</strong>
                            </div>
                        </div>
                        <!-- Add review button -->
                        <div class="btn-icon-and-text margin-bottom-20 btn">
                            <div><i class="fa fa-star-o"></i> Write a Review</div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Map and location -->
                <div>
                    <h1 class="margin-left-10">Location & Hours</h1>
                    <div class="location-and-hours">
                        <!-- Place microdata  -->
                        <div class="individual-map" itemscope itemtype="https://schema.org/Place">
                            <!-- add leaflet map -->
                            <div id="mapid" class="mapid"></div>
                            <!-- microdata - geo coordinates of the place   -->
                            <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                                <span class="margin-left-10">Latitude: <?php echo $latitude?></span>
                                <span class="margin-left-10">Longitude: <?php echo $longitude?></span>
                                <meta itemprop="latitude" content="40.75" />
                                <meta itemprop="longitude" content="73.98" />
                            </div>
                        </div>
                        <!-- Civic Structure microdata -->
                        <div class="hours" itemscope itemtype="https://schema.org/CivicStructure">
                            <!--  microdata - opening hours -->
                            <meta itemprop=" openingHours" content="Mo 07:00-17:00">
                            <div class="hour">Mon&nbsp;&nbsp;&nbsp;&nbsp;7:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="Tu 07:00-17:00">
                            <div>Tue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="We 07:00-17:00">
                            <div>Wed&nbsp;&nbsp;&nbsp;&nbsp;7:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="Th 07:00-17:00">
                            <div>Thu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="Fr 07:00-17:00">
                            <div>Fri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="Sa 08:00-17:00">
                            <div>Sat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8:00 AM - 5:00 PM</div>
                            <meta itemprop="openingHours" content="Su 08:00-17:00">
                            <div>Sun&nbsp;&nbsp;&nbsp;&nbsp;8:00 AM - 5:00 PM</div>
                        </div>
                        <div class="fix"></div>
                    </div>
                </div>
                <hr />
                <!-- Review section -->
                <div class="review-lists margin-left-10">
                    <h1>Reviews</h1>
                    <!-- for each review in the array of $reviews, show the username, ranking, date and comments in the review -->
                    <?php
                        if(count($reviews) === 0){                            
                            echo "<div> This is no reviews for this coffee shop!</div>";
                        }else{
                            foreach($reviews as $review){?>
                                <div class="row margin-bottom-20">
                                    <!-- Review microdata -->
                                    <div itemscope itemtype="https://schema.org/Review">
                                        <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <strong itemprop="name"> <?php echo $review['username']?></strong>
                                        </div>
                                        <div class="flex-left">
                                            <div class="rating">
                                                <span>
                                                    <i <?php if($review['ranking'] >= 1){echo 'class="fa fa-star"';} else if($review['ranking'] >= 0.5) {echo 'class="fa fa-star-half-o"';} 
                                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i <?php if($review['ranking'] >= 2){echo 'class="fa fa-star"';} else if($review['ranking'] >= 1.5){echo 'class="fa fa-star-half-o"';} 
                                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i <?php if($review['ranking'] >= 3){echo 'class="fa fa-star"';} else if($review['ranking'] >= 2.5){echo 'class="fa fa-star-half-o"';} 
                                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i <?php if($review['ranking'] >= 4){echo 'class="fa fa-star"';} else if($review['ranking'] >= 3.5){echo 'class="fa fa-star-half-o"';} 
                                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i <?php if($review['ranking'] >= 5){echo 'class="fa fa-star"';} else if($review['ranking'] >= 4.5){echo 'class="fa fa-star-half-o"';} 
                                                    else { echo 'class="fa fa-star-o"'; }?> aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <meta itemprop="reviewRating" content="4">
                                            <meta itemprop="datePublished" content="2021-10-04">
                                            &nbsp; <?php echo substr($review['created_on'], 0, 10)?>
                                        </div>
                                        <span itemprop="reviewBody">  <?php echo $review['comments']?>
                                        </span>

                                    </div>

                                </div>

                            <?php 
                            }                        
                        }                  
                    ?>

                </div>
            </div>
        </section>
    </div>
    <!-- End Body content
	================================================== -->

    <!-- Begin Footer
	================================================== -->
    <footer>
        <hr>
        <p>Page created by: Haoyang Tao, Fang Ye</p>
        <p>Contact information: <a href="mailto:taoh4@mcmaster.ca">click this</a>.</p>
    </footer>
    <!-- End Footer
	================================================== -->
</body>
</html>