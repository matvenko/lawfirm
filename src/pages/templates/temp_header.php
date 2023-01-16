<?php

	if(isset($_POST['lang'])){
		$lang = $_POST['lang'];
		$_SESSION['lang'] = $_POST['lang'];
	}elseif(isset($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
	}else{
		$lang = 'eng';
		$_SESSION['lang'] = $lang;
	}

	if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "imigration") {
		$titleTag = 'Second Passport: Citizenship and Residency Programs';
		$descrTag = 'Visa, Residence Permit, Citizenship of Georgia, Tax Residency in Georgia, immigration lawyers in Tbilisi, immigration to Georgia, Georgia immigration services, second passport, nationality, country Georgia, moving to Georgia, invest in Georgia, investment residency.';
	}elseif(isset($_GET["mainPage"]) && $_GET["mainPage"] == "business"){
		$titleTag = 'Tbilisi Law Firm: Georgia Company Formation & Registration';
		$descrTag = 'Company Formation in Tbilisi Georgia, Company Registration in Tbilisi, Georgia, Open a company in Georgia, incorporate in georgia country, Setting up a Company in Georgia, Business set up in Tbilisi, Offshore Company, Free Zone Company, FIZ Tbilisi, Poti, Batumi.';
	}elseif(isset($_GET["mainPage"]) && $_GET["mainPage"] != "business" && $_GET["mainPage"] != "imigration"){
		$titleTag = 'Company Formation in Tbilisi, Georgia | '.$_GET["mainPage"];
		$descrTag = 'Company Formation in Tbilisi, Georgia, ' . $_GET["mainPage"] . ', Georgia, Open a company in Georgia, Company incorporation in Tbilisi, Setting up a Company in Georgia, Business set up in Tbilisi, Offshore Company, Free Zone Company, FIZ Tbilisi, Poti, Batumi.';
	}else{
		$titleTag = 'Archil Mchedlidze’s Law Practice LLC | Law Firm in Tbilisi Georgia ';
		if($lang == "eng"){
			$titleTag = 'Archil Mchedlidze’s Law Practice LLC | Law Firm in Tbilisi Georgia';
			$descrTag = 'Business Lawyers in Tbilisi, Law Firms in Tbilisi, Company Formation in Georgia, Company Registration in Tbilisi, Lawyers, law office, Immigration, Law service';
		}else{
			$titleTag = 'Law Firm - Юридическая фирма в Грузии с полным спектром услуг';
			$descrTag = 'Регистрация компании в Грузии, Вид на жительство ВНЖ/ПМЖ в Грузии, Открытие банковских счетов в Грузии, Регистрация компании/ИП в Грузии';
		}
	}


?>
<!DOCTYPE html>
          <html oncontextmenu="return false" lang="en">
          <head>
          <title> Archil Mchedlidze’s Law Practice LLC | Law Firm in Tbilisi Georgia </title>
          <link rel="icon" href="https://lawfirm.ge/images/logolin.png" />
          <meta name="description" content="Business Lawyers in Tbilisi, Law Firms in Tbilisi, Company Formation in Georgia, Company Registration in Tbilisi, Lawyers, law office, Immigration, Law service" />
          <meta name="keywords" content="Registration, formation,  lawyer, Georgia, Tbilisi, Immigration" />


          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- <meta name="viewport" content="initial-scale=1.0, width=device-width"> -->

          <meta property="og:title" content="Registration, formation,  lawyer, Georgia, Tbilisi, Immigration" />
          <meta property="og:image" content="https://lawfirm.ge/images/logo.svg" />
          <meta property="og:description" content="Business Lawyers in Tbilisi, Law Firms in Tbilisi, Company Formation in Georgia, Company Registration in Tbilisi, Lawyers, law office, Immigration, Law service" />
          <meta property="og:type" content="profile.lawyer" />
          <meta property="og:url" content="https://lawfirm.ge/" />
          <meta property="og:site_name" content="lawfirm" />

          <meta name="twitter:card" content="Archil Mchedlidze Law Firm">
          <meta name="twitter:url" content="https://lawfirm.ge/">
          <meta name="twitter:title" content="Registration, formation,  lawyer, Georgia, Tbilisi, Immigration">
          <meta name="twitter:description" content="Business Lawyers in Tbilisi, Law Firms in Tbilisi, Company Formation in Georgia, Company Registration in Tbilisi, Lawyers, law office, Immigration, Law service">
          <meta name="twitter:image" content="https://lawfirm.ge/images/logo.svg">

          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

          <script type="application/x-javascript">
              addEventListener("load", function() {
                setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1);
              }
          </script>
          <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
          <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
          <link rel="stylesheet" type="text/css" href="css/style.css" media="all" >
          <link rel="stylesheet" type="text/css" href="css/ffonts.css" media="all" >
          <link rel="stylesheet" type="text/css" href="css/<?php echo $lang; ?>_style.css" media="all" >

          <script src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.js"></script>
          <div style="position:absolute;">
          </div>
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114515939-1"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

          	function changelang(lang)
          	{
          		document.getElementById("lang").value=lang;
          		document.getElementById("testlang").submit();
          	}

            gtag('config', 'UA-114515939-1');
          </script>


          <script type="application/ld+json">
          {
          	"@context": "http://schema.org",
          	"@type": "Organization",
          	"name": "Moore Abc",
          	"description": "Business Lawyers in Tbilisi, Law Firms in Tbilisi, Company Formation in Georgia, Company Registration in Tbilisi, Lawyers, law office, Immigration, Law service",
          	"url": "https://lawfirm.ge/",
          	"sameAs": ["https://www.facebook.com/lawfirm.ge",
          	"https://ge.linkedin.com/in/archil-mchedlidze-66b64098",
          	"https://twitter.com/archilmchedlidz?lang=en"]
          }

          </script>


          </head>
          <body class="lang_<?php echo $lang; ?>">

          	<div itemscope itemtype="http://schema.org/Offer" style="display: none;">
          	  <span itemprop="name">Archil mchedlidze</span>
          	  <img src="images/archil2.jpg" alt="Archil mchedlidze" />
          	   Managing Partner and founder of Law Practice LLC
          	</div>

          	<!--header-top-starts-->
          	<div class="header-top">
          		<div class="container">
          			<div class="head-main">
          				<a href="index.php" title="lawfirm logo">
          					<img src="images/logo.svg" alt="lawpractice logo">
          				</a>
          			</div>

          			<div class="hea-rgt">
                          <div class="header-top-right">
                              <a href="mailto:info@lawfirm.ge" class="email" title="Send E-Mail">info@lawfirm.ge</a>
                              <div class="clearer"></div>
          					<a href="#" class="mobile" title="lawfirm mobile"> + (995)  599 999 007 </a>
                          </div>
          			</div>

          			<div class="navigation">
          				<nav class="navbar navbar-default">
          				<div class="navbar-header">
          					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          						<span class="sr-only">Toggle navigation</span>
          						<span class="icon-bar"></span>
          						<span class="icon-bar"></span>
          						<span class="icon-bar"></span>
          					</button>
          				</div>
          				<!-- .navbar-header -->
          				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          					<ul class="nav navbar-nav">
          						<li <?php if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "homepage") { echo 'class="active"'; } ?>><a href="?mainPage=homepage" title="HomePage"><?php echo MTAVARI ?></a></li>
          						<li class="nav-item dropdown <?php if(isset($_GET["mainPage"]) && ($_GET["mainPage"] == "firmOverview" || $_GET["mainPage"] == "archil")) { echo ' active'; } ?>">
          							<a class="nav-link dropdown-toggle" href="#" title="About Us" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ABOUT_US ?></a>
          							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          							<a class="dropdown-item" href="?mainPage=firmOverview" title="Firm Overview"><?php echo PRACTICE ?></a>
          							<a class="dropdown-item" href="?mainPage=archil" title="Archil Mchedlidze"><?php echo ARCHIL ?></a>
          							</div>
          						</li>
          						<li <?php if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "services") { echo 'class="active"'; } ?>><a href="?mainPage=services" title="Services"><?php echo SERVICES ?></a></li>
          						<li <?php if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "immigration") { echo 'class="active"'; } ?>><a href="?mainPage=immigration" title="Immigration"><?php echo IMIGRATION ?></a></li>
          						<li class="nav-item dropdown <?php if(isset($_GET["mainPage"]) && ($_GET["mainPage"] == "business" || $_GET["mainPage"] == "accounting")) { echo ' active'; } ?>">
          						<a class="nav-link dropdown-toggle" href="#" title="Business" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo BUSINES ?></a>
          							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          							<a class="dropdown-item" href="?mainPage=business" title="Company Formation"><?php echo COMPANY_FORMATION ?></a>
          							<a class="dropdown-item" href="?mainPage=accounting" title="accounting"><?php echo ACCOUNTING ?></a>
          							</div>

          						</li>
          						<!-- <li <?php // if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "business") { echo 'class="active"'; } ?>><a href="?mainPage=business" title="Business">Business</a></li> -->
          						<li <?php if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "estate") { echo 'class="active"'; } ?>><a href="?mainPage=estate" title="real estate"><?php echo REAL_ESTATE ?></a></li>
          						<li <?php if(isset($_GET["mainPage"]) && $_GET["mainPage"] == "contact") { echo 'class="active"'; } ?>><a href="?mainPage=contact" title="Contact"><?php echo CONTACT ?></a></li>
          						<li>
          							<!-- Load Facebook SDK for JavaScript -->
          							<div id="fb-root"></div>
          							<script>(function(d, s, id) {
          							var js, fjs = d.getElementsByTagName(s)[0];
          							if (d.getElementById(id)) return;
          							js = d.createElement(s); js.id = id;
          							js.src = "https://lawfirm.ge/js/sdk.js#xfbml=1";
          							fjs.parentNode.insertBefore(js, fjs);
          							}(document, 'script', 'facebook-jssdk'));</script>

          							<!-- Your like button code -->
          							<div class="fb-like"
          							data-href="https://lawfirm.ge/"
          							data-layout="standard"
          							data-action="like"
          							data-show-faces="true">
          							</div>
          						</li>
                                  <li>
                                      <div class="languageBar">
                                          <p>
                                              <?php
                                              if($lang == "eng"){
                                                  ?>
                                                  <a href="#" onclick="changelang('rus')" title="language">RUS</a>
                                                  <?php
                                              }  else { ?>
                                                  <a href="#" onclick="changelang('eng')" title="language">ENG</a>
                                                  <?php
                                              }
                                              ?>

                                          </p>

                                      </div>
                                  </li>
          					</ul>
          				</div>
          				<!-- /.navbar-collapse -->
          			</nav>
          			</div>
          			<div class="clearfix"></div>

          		</div>
                  <!-- header-top-end -->
                  <!-- start-header -->
          	</div>

	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->