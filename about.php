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
                <p class="aboutIntro__text--paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
                <img src="images/influencers-polaroid.png" alt="Influencers in action" class="aboutIntro__img">
        </section>
        <h2 class="moreInformationHeader">More Information</h2>
        <section class="moreInformation">
            <span></span>
            <article class="moreInformation__DYK">
                <h3 class="moreInformation__DYK--h3">Did you know that</h3>
                <p class="moreInformation__DYK--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <article class="moreInformation__optimize">
                <h3 class="moreInformation__optimize--h3">Optimize your marketing</h3>
                <p class="moreInformation__optimize--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
        <section class="founders">
            <article class="founders__Kasper">
                <span></span>
                <img src="images/kasper-bondegaard-petersen.jpg" alt="Kasper Bondegaard Petersen" class="founders__Kasper--img">
                <article>
                    <h3 class="founders__Kasper--h3">Kasper Bondegaard Petersen</h3>
                    <p class="founders__Kasper--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </article>
            <article class="founders__Rasmus">
                <span></span>
                <img src="images/rasmus-bruus-larsen.jpg" alt="Rasmus Bruus Larsen" class="founders__Rasmus--img">
                <article>
                    <h3 class="founders__Rasmus--h3">Rasmus Bruus Larsen</h3>
                    <p class="founders__Rasmus--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </article>
        </section>
        <?php include'include/footer.php'?>
    </div>
    
</body>
</html>