<!DOCTYPE html>
<html>
<head>
	<!-- Title -->
	<title>Title here</title>
	
	<!-- Description -->
	<meta charset="UTF-8">
	<meta name="Description" content="Insert your description here">

	<!-- Keywords -->
	<meta name="keywords" content="HTML,CSS,JavaScript">

	<!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Css and fonts-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Favicons -->
	<link rel="icon" type="image/png" href="#" sizes="32x32" />
	<link rel="icon" type="image/png" href="#" sizes="16x16" />
</head>
<body>

    <div class="gridContainer">
        <?php include'include/header.php'?>
        <section class="intro">
            <article class="intro__welcome">
                <h1 class="intro__welcome--welcomeTxt">We connect brands and influencers</h1>
                <p class="intro__welcome--welcomeParagraph">Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an. </p>
                <a href="#"><button><i class="fas fa-user"></i> I am an influencer</button></a>
                <a href="#"><button><i class="fas fa-building"></i> I am a business</button></a>
            </article>
            <article class="intro__welcomeImg">
                <img src="images/iphone-instagram.png" class="iphoneInstagram" alt="Influencer marketing on Instagram">
                <img src="images/likes-and-hearts.png" class="likesAndHearts animated zoomIn" alt="Likes and hearts - social media reactions">
            </article>
        </section>
        <section class="videoContainer">
            <h2 class="videoContainer__videoHeading">Our video</h2>
            <iframe src="https://www.youtube.com/embed/WbsZnsr0lI4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="videoContainer__video"></iframe>
        </section>
        <section class="keyFeaturesContainer">
            <article class="keyFeaturesContainer__keyFeaturesLeft">
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
            </article>
            <article class="keyFeaturesContainer__keyFeatures">
                <h2 class="keyFeaturesContainer__keyFeaturesHeading">Key features</h2>
                <img src="images/app-assignments.png"><br/>
                <a href="http://www.appstore.com" target="_blank"><img src="images/app-store.png"></a>
                <a href="http://play.google.com" target="_blank"><img src="images/google-play.png"></a>
                
            </article>
            <article class="keyFeaturesContainer__keyFeaturesRight">
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
                <h3>Heading</h3>
                <p>Lorem ipsum dolor sit amet, duo simul audire an. Est cu sapientem sadipscing, duis legimus eum. Me it ipsum sit amet, duo simul audire an.</p>
            </article>
        </section>
        <footer class="item3">footer</footer>
    </div>


<!-- Scripts -->
<script src="#"></script>
</body>
</html>