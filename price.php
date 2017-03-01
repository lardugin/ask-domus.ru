<!DOCTYPE html>
<html>
<head>
	<meta id="myViewport" name="viewport" content="width=750">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
	<title>Цены</title>
	<?php include "lessComp/compact.php"; ?>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700&subset=cyrillic" rel="stylesheet">
	<!--[if IE 8]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php include "./header.php"; ?>


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

<div class="content-box">
	<section class="container">
		<div class="breadcrumbs">
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
			</div>
			<div class="breadcrumbs__item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<span itemprop="title">Цены</span>
			</div>
		</div>

		<h1 class="heading">Цены</h1>

		<div class="price-page">

			<table class="price-table table table-striped">
				<tr>
					<th><span class="price-table__heading">Эскизный</span></th>
					<th>
						<span class="price-table__heading">
							Рабочий
							<sup>рекомендуем</sup>
						</span>
					</th>
					<th><span class="price-table__heading">Полный</span></th>
				</tr>
				<tr>
					<td>Выезд на объект для тестирования</td>
					<td>Выезд на объект для тестирования</td>
					<td>Выезд на объект для тестирования</td>
				</tr>
				<tr>
					<td>Обмерный план помещения</td>
					<td>Обмерный план помещения</td>
					<td>Обмерный план помещения</td>
				</tr>
				<tr>
					<td>Составление технического задания</td>
					<td>Составление технического задания</td>
					<td>Составление технического задания</td>
				</tr>
				<tr>
					<td>Планировочные решения (1 вариант по желанию)</td>
					<td>Планировочные решения (2-3 варианта)</td>
					<td>Планировочные решения (2-3 варианта)</td>
				</tr>
				<tr>
					<td>План монтажа / демонтажа перегородок (стен)</td>
					<td>План монтажа / демонтажа перегородок (стен)</td>
					<td>План монтажа / демонтажа перегородок (стен)</td>
				</tr>
				<tr>
					<td>Ведомость отделки (передается в сметный отдел)</td>
					<td>Ведомость отделки (передается в сметный отдел)</td>
					<td>Ведомость отделки (передается в сметный отдел)</td>
				</tr>
				<tr>
					<td>Смета на выполнение ремонтно – отделочных работ</td>
					<td>Смета на выполнение ремонтно – отделочных работ</td>
					<td>Смета на выполнение ремонтно – отделочных работ</td>
				</tr>
				<tr>
					<td>3D визуализация (1 ракурс общий для понимания стиля и цветового решения)</td>
					<td>3D визуализация (1 ракурс на помещение)</td>
					<td>3D визуализация (2-3 ракурса на каждое помещение)</td>
				</tr>
				<tr>
					<td>Распечатанный и сброшюрованный проект (в электронном виде)</td>
					<td>Распечатанный и сброшюрованный проект</td>
					<td>Распечатанный и сброшюрованный проект</td>
				</tr>
				<tr>
					<td></td>
					<td>План полов (с указанием типа покрытий, площади и расположением теплых полов)</td>
					<td>План полов (с указанием типа покрытий, площади и расположением теплых полов)</td>
				</tr>
				<tr>
					<td></td>
					<td>План потолков (с указанием типа покрытий и материалов)</td>
					<td>План потолков (с указанием типа покрытий и материалов)</td>
				</tr>
				<tr>
					<td></td>
					<td>Схема открывания дверей</td>
					<td>Схема открывания дверей</td>
				</tr>
				<tr>
					<td></td>
					<td>Расстановка светильников и выключателей с привязками</td>
					<td>Расстановка светильников и выключателей с привязками</td>
				</tr>
				<tr>
					<td></td>
					<td>Расстановка розеток/выводов с привязками</td>
					<td>Расстановка розеток/выводов с привязками</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Расстановка сантехнических приборов и радиаторов отопления</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Схема вентиляции и кондиционирования (по необходимости)</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Развертки по стенам, разрезы (по необходимости), раскладка плитки</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>Спецификация чистовых материалов, оборудования, мебели и аксессуаров</td>
				</tr>
				<tr>
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
					<td class="center"><a href="#request-popup-draft" class="button button_green open-popup-link">Заказать проект</a></td>
					<td class="center"><a href="#request-popup-working" class="button button_green open-popup-link">Заказать проект</a></td>
					<td class="center"><a href="#request-popup-full" class="button button_green open-popup-link">Заказать проект</a></td>
				</tr>
			</table>
			<div class="price__action-text">
				<p>Скидка дейсвует в период с 5.02.17 по 31.03.17</p>
			</div>

		</div>

		<div class="content">
			<p>В т.ч. выдачу ЭП, подбор закупок, анализ аукционной и конкурсной документации, подготовку первых и вторых частей заявок, оказываем юридическое сопровождение и предоставляем интересы в органах надзора, а также содействуем в финансовом обеспечении на всех этапах.</p>
			<p>Разрабатываем документацию и проводим закупки для государственных и муниципальных заказчиков, в т.ч. техническую часть, проект контракта, план закупок, протоколы, а также ведем представительство интересов заказчика в УФАС (ФАС РФ).</p>
			<p><b>Осуществляем тендерное</b> обслуживание участников и сопровождение заказчиков в рамках 223-ФЗ и 44-ФЗ. </p>
			<h3>Курьерист - это скорая курьерская помощь.</h3>
			<p>В т.ч. выдачу ЭП, подбор закупок, анализ аукционной и конкурсной документации, подготовку первых и вторых частей заявок, оказываем юридическое сопровождение и предоставляем интересы в органах надзора, а также содействуем в финансовом обеспечении на всех этапах.</p>
			<p>Уважаемые коллеги, обращаем ваше внимание, что мы зафиксировали ряд компаний и недобросовестных конкурентов, которые представляются сотрудниками нашей <i>компании и предлагают "серые" банковские гарантии!</i></p>
			<p> Подготовить рабочее место может практически любой опытный системный администратор. Компании, не имеющие в штате подобного сотрудника, вынуждены прибегать к сторонней помощи.</p>
		</div>
	</section>
</div>

<?php include "./footer.php"; ?>

</body>
</html>
