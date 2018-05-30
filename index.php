<!DOCTYPE html>
<html>
<head>
	<!-- Title -->
	<title>MakeInfluence - We connect brands and influencers</title>
	
	<!-- Description -->
	<meta charset="UTF-8">
	<meta name="Description" content="MakeInfluence connects brands with influencers. We are a growing platform with a lot of interesting influencers and businesses!">

	<!-- Keywords -->
	<meta name="keywords" content="influencer marketing, branding, promote, business, influencer, company, social media, affiliate">

	<!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Css and fonts-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Favicons -->
	<link rel="icon" type="image/png" href="images/favicon32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon16x16.png" sizes="16x16" />
</head>
<body>

    <div class="gridContainer">
        <?php include'include/header.php'?>
        <section class="intro">
            <article class="intro__welcome">
                <h1 class="intro__welcome--welcomeTxt">We connect brands and influencers</h1>
                <p class="intro__welcome--welcomeParagraph">MakeInfluence's platform brings businesses and influencers together. Through our platform you can find a perfect match for your next campaign! </p>
                <a href="#"><button><i class="fas fa-user"></i> I am an influencer</button></a>
                <a href="#"><button><i class="fas fa-building"></i> I am a business</button></a>
            </article>
            <article class="intro__welcomeImg">
                <img src="images/iphone-instagram.png" class="iphoneInstagram" alt="Influencer marketing on Instagram">
                <img src="images/likes-and-hearts.png" class="likesAndHearts animated zoomIn" alt="Likes and hearts - social media reactions">
            </article>
        </section>
        <section class="videoContainer">
            <h2 class="videoContainer__videoHeading">Meet an influencer</h2>
            <iframe src="https://www.youtube.com/embed/SrC3bwgwQ4A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="videoContainer__video"></iframe>
        </section>
        <section class="keyFeaturesContainer">
            <article class="keyFeaturesContainer__keyFeaturesLeft">
                <h3>Campaigns</h3>
                <p>The MakeInfluence app has a realtime dashboard that contains campaigns from various brands looking for influencers.</p>
                <h3>Rating</h3>
                <p>Both businesses and influencers have a profile rating. This can help you decide what business you want to work with.</p>
                <h3>Schedule</h3>
                <p>Having a hard time remembering when to upload something for a brand? MakeInfluence will remind you whenever you have to promote a product.</p>
            </article>
            <article class="keyFeaturesContainer__keyFeatures">
                <h2 class="keyFeaturesContainer__keyFeaturesHeading">Key features</h2>
                <img src="images/app-assignments.png"><br/>
                <a href="http://www.appstore.com" target="_blank"><img src="images/app-store.png"></a>
                <a href="http://play.google.com" target="_blank"><img src="images/google-play.png"></a>
                
            </article>
            <article class="keyFeaturesContainer__keyFeaturesRight">
                <h3>Payment</h3>
                <p>All payments go through the MakeInfluence app. We make sure that you won't have to deal with brands being late on payday.</p>
                <h3>Message</h3>
                <p>Get in direct contact with your business partner through MakeInfluence's own messaging system.</p>
                <h3>Analytics</h3>
                <p>Keep track of your jobs and income. Optimize your social media posts based on statistics and create different strategies for your work.</p>
            </article>
        </section>
        <section class="dashboardContainer"><div></div>
            <img src="images/dashboard-statistics.jpg" alt="Dashboard with statistics" class="dashboardContainer__dashboardIndex">
            <article class="dashboardContainer__dashboardInformation">
                <h3 class="dashboardContainer__dashboardHeading">Effective business dashboard</h3>
                <h4>Analytics</h4>
                <p>Keep track of your revenue, impressions, clicks and much more.</p>
                <h4>Influencer value</h4>
                <p>MakeInfluence gives you data about the influencers with the highest and lowest value for you.</p>
                <h4>Export</h4>
                <p>Export your data and use it for anything you want.</p>
                <a href="business.php"><button>Learn more</button></a>
            </article>
            <div></div>
        </section>
        <?php include'include/footer.php'?>
    </div>


<!-- Scripts -->
<script src="#"></script>
</body>
</html>