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
        <section class="businessIntro">
            <span></span>
            <article class="businessIntro__businessIntroContent">
                <h1 class="businessIntro__businessIntroContent--heading">Business header</h1>
                <p>Lorem ipsum dolor sit amet, nam te mnesarchum liberavisse, dolor consulatu consectetuer et per. Paulo bonorum labores ad duo, pri ex odio melius, vix in justo audiam. His fuisset epicurei aliquando in, legere semper saperet ea cum, per solum habemus et.<br/><br/>

                Abhorreant signiferumque an vel, hinc aliquid conclusionemque sit in. Eum tractatos consequuntur at, mea brute decore an. Cu sed altera eirmod, nec ei omnium accommodare.<br/><br/>

                Le consequuntur at, mea brute decore an. Cu sed altera eirmod, nec ei omnium accommodare.</p>
            </article>
            <img src="images/dashboard-graph.jpg" alt="Business dashboard with graph statistics">
        </section>
        <section class="businessMoreInfoContainer">
            <h2>More information</h2>
            <section class="businessMoreInfo">
                <div></div>
                <article class="businessMoreInfo__moreInfoLeft">
                    <h3>Did you know that</h3>
                    <p>Lorem ipsum dolor sit amet, nam te mnesarchum liberavisse, dolor consulatu consectetuer et per. Paulo bonorum labores ad duo, pri ex odio melius, vix in justo audiam. His fuisset epicurei aliquando in, legere semper saperet ea cum, per solum habemus et. 
                    <br/><br/>
                    Abhorreant signiferumque an vel, hinc aliquid conclusionemque sit in. Eum tractatos consequuntur at, mea brute decore an.</p>
                </article>
                <article class="businessMoreInfo__moreInfoRight">
                    <h3>Did you know that</h3>
                    <p>Lorem ipsum dolor sit amet, nam te mnesarchum liberavisse, dolor consulatu consectetuer et per. Paulo bonorum labores ad duo, pri ex odio melius, vix in justo audiam. His fuisset epicurei aliquando in, legere semper saperet ea cum, per solum habemus et. 
                    <br/><br/>
                    Abhorreant signiferumque an vel, hinc aliquid conclusionemque sit in. Eum tractatos consequuntur at, mea brute decore an.</p>
                </article>
            </section>
        </section>
        <section class="businessServicesContainer">
            <h2>Our services</h2>
            
            <section class="services">
                <article class="serviceLeft">
                    <h4>Basic</h4>
                    <strong>29€ <span class="dark-color">/ month</span></strong>
                    <hr/>
                    <ul>
                        <li><span class="dark-color">Track 5 sales per day</span></li>
                        <li><span class="dark-color">Basic analytics</span></li>
                        <li><span class="dark-color">Social Media insight</span></li>
                    </ul>
                    <button>Get basic</button>
                </article>
                <article class="serviceMiddle">
                    <h4>Basic</h4>
                    <h5>Most popular</h5>
                    <strong>29€ <span class="dark-color">/ month</span></strong>
                    <hr/>
                    <ul>
                        <li><span class="dark-color">Track unlimited sales</span></li>
                        <li><span class="dark-color">Advanced analytics</span></li>
                        <li><span class="dark-color">Social media insight</span></li>
                        <li><span class="dark-color">Real time monitoring</span></li>
                    </ul>
                    <button>Get premium</button>
                </article>
                <article class="serviceRight">
                    <h4>Basic</h4>
                    <strong>29€ <span class="dark-color">/ month</span></strong>
                    <hr/>
                    <ul>
                        <li><span class="dark-color">Track 5 sales per day</span></li>
                        <li><span class="dark-color">Basic analytics</span></li>
                        <li><span class="dark-color">Social Media insight</span></li>
                    </ul>
                    <button>Get basic</button>
                </article>
            </section>
        </section>
        <?php include'include/footer.php'?>
    </div>


<!-- Scripts -->
<script src="#"></script>
</body>
</html>