<?php
	Session_start();
	include "src/class.php";
	$db = new SafeMySQL();

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- * * Meta Tegs AND SEO -->
    <meta name="description" content="Тест поможет вам расставить приоритеты в жизни, определить ваши главные ценности и научиться принимать осознанные решения. С помощью психологии и коучинга вы сможете улучшить личную и профессиональную жизнь, развить навыки личной эффективности, лидерства, саморазвития и научиться управлять стрессом." />
    <meta name="keywords" content="Ольга Молина, коучинг, психология, личные ценности, эффективное управление, коуч для карьеры, тренер, личностный рост, развитие личности, профессиональный рост, саморазвитие, коучинг для предпринимателей, психология успеха, тренинг по лидерству, коучинг для бизнеса, консультирование, психология в управлении, работа с личными убеждениями, постановка целей" />
    <meta name="robots" content="index, follow" />
    
    <!-- Canonical link -->
    <link rel="canonical" href="https://molinacoach.com/" />
    <!-- Google Verification Code -->
    <meta name="google-site-verification" content="8MfylAdX9ijTNxdOVPsEnBiwGOsOT2HIpVikBUFu6fQ">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R6CYHGW97P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-R6CYHGW97P');
    </script>
		<!-- * * Google Font  -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />
		<!-- * * Font Awesome -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
			integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- * * Bootstrap Link -->
		<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
		<!-- favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="src/faviconImg/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="src/faviconImg/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="src/faviconImg/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<!-- * * Css Link -->
		<!--  -->
		<link rel="stylesheet" href="src/style/main.css" />
		<title>COACH OLGA MOLINA | Начать тест</title>
	</head>

	<body>
		<!-- * * * * * * * * * * * * HEADER  Start -->
		<header style="background: transparent; padding-bottom:10px !important ;">
			<!-- Header Section -->
			<block class="header" id="header">
				<nav class="navbar container d-flex justify-content-sm-between d-flex justify-content-between px-3">
					<!-- Brand Logo -->
					<a href="/" class="brand d-inline-block" id="logo"> COACH OLGA MOLINA </a>
					<!-- navbar menu  -->
					<div class="menu" id="menu">
						<ul class="menu-inner">
							<li class="menu-item">
								<a
									href=" http://olgamolinacoach.tilda.ws"
									class="menu-link"
									target="_blank"
								>
									Сайт-визитка
								</a>
							</li>
							<li class="menu-item">
								<a href="main.php" class="menu-link" >Начат тест</a>
							</li>
							<li class="menu-item">
								<a href="values.php" class="menu-link">Список ценностей</a>
							</li>
							<li class="menu-item d-lg-none d-md-none d-block" id="contact">
								<a href="https://t.me/olgawellbeing" class="menu-link">Контакты</a>
							</li>
						</ul>
					</div>
					<a href="https://t.me/olgawellbeing" class="menu-block d-lg-inline-block" target="_blank" id="startTest"
						>Контакты</a
					>
					<!-- burger menu start -->
					<div class="burger" id="burger">
						<span class="burger-line"></span>
						<span class="burger-line"></span>
						<span class="burger-line"></span>
					</div>
					<!-- burger menu end -->
				</nav>
			</block>
			<!-- Main Section -->
			<div class="header_text container pt-3">
				<div class="row">
					<div class="col">
						<div class="col-12 headerTextTest text-left mt-5 pt-4">
							<h1 class="text-center mt-5">Приветствую вас!</h1>
							<p class=" mt-5 mb-4"> <b>Приветствую вас!</b> Знать ценности, наиболее значимые для вас, будет полезно не только для лучшего понимания себя. Это важно, когда вы ставите цели, когда принимаете важные для себя решения, и даже когда вы начинаете многообещающие отношения.</p>
							<p class=" mt-3 mb-4">Я предлагаю пройти тест и за несколько минут определить, что для вас на данном этапе жизни важно. Картина может меняться со временем, поэтому рекомендую не реже раза в год (например, когда вы ставите новые цели) проходить этот тест.</p>
							<p class=" mt-3 mb-4">Выделите себе время для прохождения теста, не отвлекайтесь, вдумайтесь на каждом этапе, что для вас истинно важно. Время прохождения теста не ограничено. Надеюсь, вы получите и удовольствие от погружения в работу с ценностями, и важные инсайты. В работе с клиентами многие психологи и коучи рекомендуют начинать именно с ценностей.</p>
                            <h2 class="text-center mb-5">Удачи!</h2>
							<div class="center justify-content-center mx-auto text-center align-items-center">
								<a href="main.php">
									<button class="btn btn-darken ">
										Начать тест
										<i class="fa-solid fa-angles-right"></i>
									</button>
								</a>
							</div>
						</div>
						<!-- Start Test BTN -->
						<div class="btn_block d-flex align-items-center justify-content-center gap-3 pb-3">
							
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- * * * * * * * * * * * * HEADER  End-->
		<!-- * * Bootstrap Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Jquery -->
		<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
		></script>
		<!--  * * Js Script -->
		<!-- <script src="src/js/script.js"></script> -->
		<!-- * * Vanilla Js -->
		<script src="src/js/vanila.js"></script>
		<!-- home js -->
		<script src="src/js/home.js"></script>
        <script>
		    if (document.cookie!==undefined){
               document.cookie.split(';').forEach(function(c) {
                  document.cookie = c.trim().split('=')[0] + '=;' + 'expires=Thu, 01 Jan 1970 00:00:00 UTC;';
                }); 
            }
		</script>
	</body>
</html>
