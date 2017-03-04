<!DOCTYPE html>
<html>
<head>
	<meta id="myViewport" name="viewport" content="width=750">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
	<title>Дом в люберцах</title>
	<?php include "lessComp/compact.php"; ?>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700&subset=cyrillic" rel="stylesheet">
	<!--[if IE 8]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php include "./header.php"; ?>

<div class="content-box">
	<section class="container">
		<div class="breadcrumbs">
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
			</div>
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="/" itemprop="url"><span itemprop="title">Портфолио</span></a>
			</div>
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<span itemprop="title">Дом в люберцах</span>
			</div>
		</div>

		<h1 class="heading">Дом в люберцах</h1>

		<!-- TODO Внутряк только у Квартир и Загородных домов (добавится еще 1 катетегория позже) -->
		<div class="inner-page">
			<div class="portfolio-inner-page">
				<div class="object-slider">
					<ul id="object-slider">
						<li><img src="images/portfolio/room/luberci/1.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/2.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/3.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/4.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/5.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/6.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/7.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/8.jpg" alt="Люберцы"></li>
						<li><img src="images/portfolio/room/luberci/9.jpg" alt="Люберцы"></li>
					</ul>
					<div class="object-slider_control"></div>
				</div>
			</div>
			<div class="portfolio-inner-description">
				<h5 class="heading-min">Люберцы</h5>
				<div class="portfolio-inner-description__param">Квартира - 80 м<sup>2</sup></div>
			</div>

			<div class="content">
				<p>
					Тут будет рыба текст, шаблонный для каждого проекта, но с уникальными ключами из названия проекта. Не большой по длинне на 4-5 строк.
					Тут будет рыба текст, шаблонный для каждого проекта, но с уникальными ключами из названия проекта. Не большой по длинне на 4-5 строк.
					Тут будет рыба текст, шаблонный для каждого проекта, но с уникальными ключами из названия проекта. Не большой по длинне на 4-5 строк.
				</p>
			</div>

			<div class="other-objects">
				<a href="javascript:;" class="prev-object">&laquo; Предыдущая работа</a>
				<a href="javascript:;" class="next-object">Следующая работа &raquo;</a>
			</div>

			<div class="objects-page__portfolio">
				<h3 class="heading-min center">Другие наши проекты</h3>
				<div class="portfolio">
					<div class="portfolio__item">  <!-- Рандомно 3 объекта из данной категроии -->
						 <a href="javascript:;"> 		<!--Будут вести на страничку объекта -->
							<img src="images/portfolio/room/luberci/0.jpg" alt="Люберцы">
							<div class="portfolio-mask">
								<div class="mask__inner">
									<div class="portfolio-mask__heading">Люберцы</div>
									<div class="portfolio-mask__square">Квартира - 80 м<sup>2</sup></div>
									<div class="portfolio-mask__price">м<sup>2</sup></div>
								</div>
							</div>
						</a>
					</div>
					<div class="portfolio__item">
						<a href="javascript:;">
							<img src="images/portfolio/room/balashiha/0.jpg" alt="Балашиха">
							<div class="portfolio-mask">
								<div class="mask__inner">
									<div class="portfolio-mask__heading">Балашиха</div>
									<div class="portfolio-mask__square">Квартира - 100 м<sup>2</sup></div>
									<div class="portfolio-mask__price">м<sup>2</sup></div>
								</div>
							</div>
						</a>
					</div>
					<div class="portfolio__item">
						<a href="javascript:;">
							<img src="images/portfolio/room/lublinskaya/0.jpg" alt="Люблинская">
							<div class="portfolio-mask">
								<div class="mask__inner">
									<div class="portfolio-mask__heading">Люблинская</div>
									<div class="portfolio-mask__square">Квартира - 70 м<sup>2</sup></div>
									<div class="portfolio-mask__price">м<sup>2</sup></div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include "./footer.php"; ?>

</body>
</html>
