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
		<link
			rel="preconnect"
			href="https://fonts.googleapis.com"
		/>
		<link
			rel="preconnect"
			href="https://fonts.gstatic.com"
			crossorigin
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap"
			rel="stylesheet"
		/>
		<!-- * * Font Awesome -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
			integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- * * Bootstrap Link -->
		<link
			rel="stylesheet"
			href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		/>
		<!-- favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="src/faviconImg/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="src/faviconImg/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="src/faviconImg/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<!-- * * Css Link -->
		<!--  -->
		<link
			rel="stylesheet"
			href="src/style/main.css"
		/>
		<title>COACH OLGA MOLINA | Список ценностей</title>
	</head>

	<body>
		<!-- * * * * * * * * * * * * HEADER  Start -->
		<header style="background: transparent; padding-bottom:10px !important ; ">
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
			<div class="header_text container pt-5">
				<div class="row">
					<div class="col">
						<h1 class="text-center mt-5">Список всех ценностей теста.</h1>
					</div>
				</div>
			</div>
		</header>
		<!-- * * * * * * * * * * * * HEADER  End-->
		<section class="container my-5">
			<div class="row card1">
				<!-- card block -->
				<?
					// $data = $db->getAll("SELECT * FROM quiz ORDER BY quiz.tr DESC");
					// Ma'lumotlarni bazadan olish

					// $data = $db->getAll("SELECT * FROM quiz ORDER BY quiz.tr ASC"); 
					// $data = array_reverse($data); 

					$data = $db->getAll("SELECT * FROM quiz ORDER BY quiz.tr ASC"); 


					foreach ($data as $key1 => $value1) {
						echo '
						<div id="'.$value1['id'].'" class="col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex mb-5 justify-content-center">
							<div id="'.$value1['img'].'" class="content_card justify-content-center" id="${element.filename}" style="display: flex; align-items: center; justify-content: center;" data-tilt >
								<span>
									<h1>'.$value1['title'].'</h1>
									<p class="text-left">'.$value1['content'].'</p>
								</span>
							</div>
						</div>
						
						';
					}
					
				?>
			</div>
		</section>
		<!-- Footer -->
		<footer class="footer py-3 text-center" style="box-shadow: 0 0 1px black">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<span style="font-size: 12px !important"
							>This website Created by
							<a href="https://kwork.ru/user/avliyoqulovbaxrom99">
								<b style="font-size: 14px !important">Baxrom_Dev</b>
							</a>
							&copy; &nbsp; All rights reserved.
						</span>
					</div>
				</div>
			</div>
		</footer>
		<!-- Jquery -->
		<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
		></script>
		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<!--  * * Js Script -->
	    <script src="src/js/home.js"></script>
		<!-- for navbar script -->
		<script src="vanila.js"></script>
		<!-- vanila Js -->
		<script>
			const cardElements = document.querySelectorAll(".content_card");
			cardElements.forEach((cardElement, index) => {
				const filename = cardElement.id;
				cardElement.style.backgroundImage = `url('src/img/${filename}')`;
			});
	
		    if (document.cookie!==undefined){
               document.cookie.split(';').forEach(function(c) {
                  document.cookie = c.trim().split('=')[0] + '=;' + 'expires=Thu, 01 Jan 1970 00:00:00 UTC;';
                }); 
            }
		</script>
	</body>
</html>
