<!DOCTYPE html>
<html>
<head>
	<meta id="myViewport" name="viewport" content="width=750">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
	<title>Дизайн интерьера</title>
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
					Заявка на дизайн-проект
					<span>&laquo;Эскизный&raquo;</span>
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
					Заявка на дизайн-проект
					<span>&laquo;Рабочий&raquo;</span>
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
					Заявка на дизайн-проект
					<span>&laquo;Полный&raquo;</span>
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
				<span itemprop="title">Дизайн интерьера</span>
			</div>
		</div>

		<h1 class="heading">Дизайн интерьера</h1>

		<div class="two-columns inner-page">
			<div class="left-col">
				<div class="left-menu-box">
					<div class="left-menu__heading">Услги</div>
					<ul class="left-menu">
						<li class="active"><a href="javascript:;">Дизайн интерьера</a></li>
						<li><a href="javascript:;">Ремонт и отделка</a></li>
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

				<div class="interior-design-page">
					<h3 class="heading-min">Цены на дизайн проект</h3>
					<table class="price-table_inner table table-striped table-hover">
						<tr>
							<th><span class="price-table__heading">Тариф</span></th>
							<th><span class="price-table__heading">Эскизный</span></th>
							<th><span class="price-table__heading">Рабочий</span></th>
							<th><span class="price-table__heading">Полный</span></th>
						</tr>
						<tr>
							<td>Выезд на объект для тестирования</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Обмерный план помещения</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Составление технического задания</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Планировочные решения (2-3 варианта)</td>
							<td>1 вариант</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>План монтажа / демонтажа перегородок (стен)</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Ведомость отделки (передается в сметный отдел)</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Смета на выполнение ремонтно – отделочных работ</td>
							<td>+</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>3D визуализация (2-3 ракурса на каждое помещение)</td>
							<td>1 ракурс</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Распечатанный и сброшюрованный проект</td>
							<td>В электронном виде</td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>План полов (с указанием типа покрытий, площади и расположением теплых полов)</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>План потолков (с указанием типа покрытий и материалов)</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Схема открывания дверей</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Расстановка светильников и выключателей с привязками</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Расстановка розеток/выводов с привязками</td>
							<td></td>
							<td>+</td>
							<td>+</td>
						</tr>
						<tr>
							<td>Расстановка сантехнических приборов и радиаторов отопления</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Схема вентиляции и кондиционирования (по необходимости)</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Развертки по стенам, разрезы (по необходимости), раскладка плитки</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<tr>
							<td>Спецификация чистовых материалов, оборудования, мебели и аксессуаров</td>
							<td></td>
							<td></td>
							<td>+</td>
						</tr>
						<!-- TODO менять цены через админку (Цены в трех местах)-->
						<tr>
							<td></td>
							<td>
								<div class="price-card__price price-card__price_old">
									1 400<span>₽</span> м<sup>2</sup>
								</div>
								<div class="price-card__price">
									1 200<span>₽</span> м<sup>2</sup>
								</div>
							</td>
							<td>
								<div class="price-card__price price-card__price_old">
									1 800<span>₽</span> м<sup>2</sup>
								</div>
								<div class="price-card__price">
									1 600<span>₽</span> м<sup>2</sup>
								</div>
							</td>
							<td>
								<div class="price-card__price price-card__price_old">
									2 000<span>₽</span> м<sup>2</sup>
								</div>
								<div class="price-card__price">
									1 800<span>₽</span> м<sup>2</sup>
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
					<div class="price__action-text">
						<p>Скидка дейсвует в период с 5.02.17 по 31.03.17</p> <!-- TODO менять дату через админку -->
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include "./footer.php"; ?>

</body>
</html>
