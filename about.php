<!DOCTYPE html>
<html lang="en">
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
        <section class="aboutIntro">
            <article class="aboutIntro__text">
                <h1 class="aboutIntro__text--header">How it all started</h1>
                <p class="aboutIntro__text--paragraph">We are two young entrepreneurs who both own webshops and have a lot of experience in social media and influencer marketing. Whenever we had to get in contact with influencers, it would require a lot of research browsing through Instagram and other social media sites. We needed a platform, where we could easily find influencers and have them apply for our jobs. This is why we created MakeInfluence - to help us solve this problem and save us a lot of time.</p>
            </article>
                <img src="images/influencers-polaroid.png" alt="Influencers in action" class="aboutIntro__img">
        </section>
        <h2 class="moreInformationHeader">More Information</h2>
        <section class="moreInformation">
            <span></span>
            <article class="moreInformation__DYK">
                <h3 class="moreInformation__DYK--h3">Did you know that</h3>
                <p class="moreInformation__DYK--p">30% consumers are more likely to buy a product recommended by a non-celebrity blogger?<br/>
                Consumers can relate more to these influencers and value their opinions more than that of celebrity influencers.</p>
            </article>
            <article class="moreInformation__optimize">
                <h3 class="moreInformation__optimize--h3">Optimize your marketing</h3>
                <p class="moreInformation__optimize--p">If you choose influencers based solely on their number of followers, you’ll end up with people who can boost your brand’s visibility, without improving conversions. Make sure you find an influencer that fits your brand.</p>
            </article>
        </section>
        <section class="founders">
            <article class="founders__Kasper">
                <span></span>
                <img src="images/kasper-bondegaard-petersen.jpg" alt="Kasper Bondegaard Petersen" class="founders__Kasper--img">
                <article>
                    <h3 class="founders__Kasper--h3">Kasper Bondegaard Petersen</h3>
                    <p class="founders__Kasper--p">
                        Kasper is a passionated entrepreneur and has started several online businesses. He has been a part of 4 different webshops in the last 4 years and is now the co-owner of Trendday.  
                    </p>
                </article>
            </article>
            <article class="founders__Rasmus">
                <span></span>
                <img src="images/rasmus-bruus-larsen.jpg" alt="Rasmus Bruus Larsen" class="founders__Rasmus--img">
                <article>
                    <h3 class="founders__Rasmus--h3">Rasmus Bruus Larsen</h3>
                    <p class="founders__Rasmus--p">Rasmus is a young entrepreneur with a lot of energy. He is the owner of the home interior webshop Bekko and also works part time as a photographer. </p>
                </article>
            </article>
        </section>
        <?php include'include/footer.php'?>
    </div>
    
</body>
</html>