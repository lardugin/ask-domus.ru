<!DOCTYPE html>
<html>
<head>
	<meta id="myViewport" name="viewport" content="width=750">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
	<title>Ремонт и отделка</title>
	<?php include "lessComp/compact.php"; ?>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700&subset=cyrillic" rel="stylesheet">
	<!--[if IE 8]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<div class="white-popup mfp-hide" id="request-popup-draft">
		<div class="popup">
			<div class="popup__header">
				<h5 class="popup__title">
					Заявка на ремонт
					<span>&laquo;Косметический&raquo;</span>
				</h5>
			</div>
			<div class="popup__body">
				<form>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="name" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваше имя:</label>
							<span class="mui-error">Вы ввели неверный формат имени</span>
						</div>
					</div>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="phone" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваш Телефон:</label>
							<span class="mui-error">Вы ввели неверный формат номера телефона</span>
						</div>
					</div>
					<div class="form-row_button">
						<button class="button button_green button_arrow">Отправить</button>
					</div>
				</form>
			</div>
			<div class="popup__footer">
				Ваши контактные данные в безопасности и не будут <br> переданы третьим лицам.
			</div>
		</div>
	</div>

	<div class="white-popup mfp-hide" id="request-popup-working">
		<div class="popup">
			<div class="popup__header">
				<h5 class="popup__title">
					Заявка на ремонт
					<span>&laquo;Капитальный&raquo;</span>
				</h5>
			</div>
			<div class="popup__body">
				<form>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="name" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваше имя:</label>
							<span class="mui-error">Вы ввели неверный формат имени</span>
						</div>
					</div>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="phone" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваш Телефон:</label>
							<span class="mui-error">Вы ввели неверный формат номера телефона</span>
						</div>
					</div>
					<div class="form-row_button">
						<button class="button button_green button_arrow">Отправить</button>
					</div>
				</form>
			</div>
			<div class="popup__footer">
				Ваши контактные данные в безопасности и не будут <br> переданы третьим лицам.
			</div>
		</div>
	</div>

	<div class="white-popup mfp-hide" id="request-popup-full">
		<div class="popup">
			<div class="popup__header">
				<h5 class="popup__title">
					Заявка на ремонт
					<span>&laquo;Эксклюзивный&raquo;</span>
				</h5>
			</div>
			<div class="popup__body">
				<form>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="name" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваше имя:</label>
							<span class="mui-error">Вы ввели неверный формат имени</span>
						</div>
					</div>
					<div class="form-row">
						<div class="mui-input-group">
							<input class="mui-input" type="text" name="phone" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваш Телефон:</label>
							<span class="mui-error">Вы ввели неверный формат номера телефона</span>
						</div>
					</div>
					<div class="form-row_button">
						<button class="button button_green button_arrow">Отправить</button>
					</div>
				</form>
			</div>
			<div class="popup__footer">
				Ваши контактные данные в безопасности и не будут <br> переданы третьим лицам.
			</div>
		</div>
	</div>

<?php include "./header.php"; ?>

<div class="content-box">
	<section class="container">
		<div class="breadcrumbs">
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
			</div>
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="/" itemprop="url"><span itemprop="title">Услуги</span></a>
			</div>
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<span itemprop="title">Ремонт и отделка</span>
			</div>
		</div>

		<h1 class="heading">Ремонт квартир и загородных домов</h1>

		<div class="two-columns inner-page">
			<div class="left-col">
				<div class="left-menu-box">
					<div class="left-menu__heading">Услги</div>
					<ul class="left-menu">
						<li><a href="javascript:;">Дизайн интерьера</a></li>
						<li class="active"><a href="javascript:;">Ремонт и отделка</a></li>
						<li><a href="javascript:;">Авторский надзор</a></li>
						<li><a href="javascript:;">Комплектация</a></li>
						<li><a href="javascript:;">Декорирование</a></li>
						<li><a href="javascript:;">Проектирование</a></li>
					</ul>
				</div>
			</div>
			<div class="right-col">
				<div class="content">
					<p>В т.ч. выдачу ЭП, подбор закупок, анализ аукционной и конкурсной документации, подготовку первых и вторых частей заявок, оказываем юридическое сопровождение и предоставляем интересы в органах надзора, а также содействуем в финансовом обеспечении на всех этапах.</p>
					<p>Разрабатываем документацию и проводим закупки для государственных и муниципальных заказчиков, в т.ч. техническую часть, проект контракта, план закупок, протоколы, а также ведем представительство интересов заказчика в УФАС (ФАС РФ).</p>
					<p><b>Осуществляем тендерное</b> обслуживание участников и сопровождение заказчиков в рамках 223-ФЗ и 44-ФЗ. </p>
				</div>

				<div class="repairs-page">
					<h3 class="heading-min">Цены на ремонт и отделку</h3>
					<table class="price-table_inner table table-striped table-hover">
						<tr>
							<th><span class="price-table__heading">Тариф</span></th>
							<th><span class="price-table__heading">Косметический</span></th>
							<th><span class="price-table__heading">Капитальный</span></th>
							<th><span class="price-table__heading">Эксклюзивный</span></th>
						</tr>
						<tr>
							<td>Замена декоративных покрытий стен и потолков</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Замена отделочных материалов</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Полная или частичная замена инженерных коммуникаций</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Прокладка новых сетей электро- и водоснабжения, кондиционирования и вентиляции</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Перепланировка квартиры</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Перенос стен и перегородок</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Замена напольных и потолочных покрытий</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Разработка индивидуального дизайн-проекта и воплощение его в жизнь</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Подбор элементов декора - обоев, фресок, штукатурки и прочего</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Подбор и расстановка мебели</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Размещение других необходимых деталей интерьера</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<!-- TODO менять цены через админку (Цены в трех местах)-->
						<tr>
							<td></td>
							<td>
								<!-- Вывести но закоментить -->
								<!-- <div class="price-card__price price-card__price_old">
									1 400<span>₽</span> м<sup>2</sup>
								</div> -->
								<div class="price-card__price">
									4 000<span>₽</span> м<sup>2</sup>
								</div>
							</td>
							<td>
								<!-- <div class="price-card__price price-card__price_old">
									1 800<span>₽</span> м<sup>2</sup>
								</div> -->
								<div class="price-card__price">
									8 000<span>₽</span> м<sup>2</sup>
								</div>
							</td>
							<td>
								<!-- <div class="price-card__price price-card__price_old">
									2 000<span>₽</span> м<sup>2</sup>
								</div> -->
								<div class="price-card__price">
									10 000<span>₽</span> м<sup>2</sup>
								</div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="center"><a href="#request-popup-draft" class=" open-popup-link">Заказать</a></td>
							<td class="center"><a href="#request-popup-working" class=" open-popup-link">Заказать</a></td>
							<td class="center"><a href="#request-popup-full" class=" open-popup-link">Заказать</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include "./footer.php"; ?>

</body>
</html>
