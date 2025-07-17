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
								<a href="start.php" class="menu-link" >Начат тест</a>
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
					<div class="col mb-5">
						<div class="col-12 headerTextTest px-3 mt-5 pt-5">
							<p class="text-left mt-5 mb-5">
							Внимательно прочитайте (и прочувствуйте) свое отношение к каждой из ценностей, приведенных на 1м этапе теста. Выберите только те ценности, которые для вас реально важны.
							<b>Карточек может быть не более 30!</b>
							</p>
							
						</div>
			
					</div>
				</div>
			</div>
		</header>
		<!-- * * * * * * * * * * * * HEADER  End-->
		<section class="container py-5" id="massiveCard">
			<div class="row card1 py-5">
				<?
					$data = $db->getAll("SELECT * FROM quiz ORDER BY quiz.tr ASC"); 
					if(isset($_COOKIE["username"])){
						$cookie = explode(",",$_COOKIE["username"]);
					}
					else{
						$cookie = [];
					}
					
					if (count($cookie)>0){
						foreach ($data as $key1 => $value1) {
							if (in_array($value1['id'], $cookie)){
								echo '
								<div id="'.$value1['id'].'" class="col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex mb-5 justify-content-center">
									<div id="'.$value1['img'].'" class="content_card justify-content-center" id="${element.filename}" style="display: flex; align-items: center; justify-content: center;" data-tilt>
										<span>
											<h1>'.$value1['title'].'</h1>
											<p class="text-left">'.$value1['content'].'</p>
										</span>
									</div>
								</div>						
								';
							}
							
						}
					}
					else{
						foreach ($data as $key1 => $value1) {
							
								echo '
								<div id="'.$value1['id'].'" class="col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex mb-5 justify-content-center">
									<div id="'.$value1['img'].'" class="content_card justify-content-center" id="${element.filename}" style="display: flex; align-items: center; justify-content: center;" data-tilt>
										<span>
											<h1>'.$value1['title'].'</h1>
											<p class="text-left">'.$value1['content'].'</p>
										</span>
									</div>
								</div>						
								';
						}
					}
					
					
				?>
			</div>
			<!-- fixed -->
			<div
				class="fixedBar fixed-bottom text-center mt-4"
				style="box-shadow: 0 0 10px black; z-index: 9999; background: white"
			>
				<div class="container">
					<div class="row">
						<!-- col-4 -->
						<div class="col-1"></div>
						<div class="col-11 d-flex justify-content-evenly align-items-center" style="height: 70px">
							<h5 class="pt-3">Выбранные значения: <b id="selectedValue">0</b></h5>
							<button id="selectButton" class="btn btn-darken" style="border-radius: 30px">
							Выберите 10 или более
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
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
		<script src="src/js/script.js"></script>
		<!-- * * Vanilla Js -->
		<script src="src/js/vanila.js"></script>
		<!-- home js -->
		<script src="src/js/home.js"></script>
	</body>
</html>
