<!DOCTYPE html>
<html>
<head>
	<meta id="myViewport" name="viewport" content="width=750">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
	<title>Контакты</title>
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
				<span itemprop="title">Контакты</span>
			</div>
		</div>

		<h1 class="heading">Адрес Архитектурно строительной компании Домус в г. Москва</h1>

		<div class="contactss-page">

			<h3 class="heading-min center">Адрес, время работы и контакты</h3>
			<div class="contacts-list">
				<div class="contacts-list__item">
					<h6 class="contact-item__heading">Адрес:</h6>
					<div class="contact-item__text">
						г.Москва, ул. Проспект мира,<br>
						дом 102, стр. 12, офис 0.3
					</div>
				</div>
				<div class="contacts-list__item">
					<h6 class="contact-item__heading">Время работы:</h6>
					<div class="contact-item__text hidden-sm">с 9:00 до 21:00 — понедельник - пятница</div>
					<div class="contact-item__text hidden-sm">с 10:00 до 19:00 — суббота - воскресенье</div>

					<div class="contact-item__text hidden-md hidden-lg">с 9:00 до 21:00 — Пн - Пт</div>
					<div class="contact-item__text hidden-md hidden-lg">с 10:00 до 19:00 — Сб - Вс</div>
				</div>
				<div class="contacts-list__item">
					<h6 class="contact-item__heading">Контакты:</h6>
					<div class="contact-item__text">+7 (495) 220-38-44</div>
					<div class="contact-item__text">+7 (985) 220-38-44</div>
					<div class="contact-item__text"><a href="mailto:info@ask-domus.ru">info@ask-domus.ru</a></div>
				</div>
			</div>

			<h3 class="heading-min center">Формы обратной связи</h3>
			<div class="contacts-list">
				<div class="contacts-list__item">
					<div class="contact-item__text"><a href="javascript:;">Задать нам вопрос</a></div>
				</div>
				<div class="contacts-list__item">
					<div class="contact-item__text"><a href="javascript:;">Оставить отзыв</a></div>
				</div>
				<div class="contacts-list__item">
					<div class="contact-item__text"><a href="javascript:;">Заказать обратный звонок</a></div>
				</div>
			</div>

			<br>

			<h3 class="heading-min center">Наши реквизиты</h3>
			<table class="table table-bordered box-shadow">
				<tbody>
				<tr>
					<td colspan="2" align="center" valign="middle">Наименование организации</td>
					<td style="text-align: center;">ООО «АСК Домус»</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle"> Фактический адрес</td>
					<td align="center" valign="middle">107051&nbsp;&nbsp; г. Москва, ул.Проспект мира дом. 102 стр.12 офис 0.3</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle">
						 Телефон по фактическому адресу (с кодом города)</td>
					<td align="center" valign="middle">8 /495/ 220-38-44, 625-40-85</td>
				</tr>
				<tr>
					<td colspan="2" align="center" style="width: 734px;" valign="middle">
						 Основной Государственный Регистрационный номер (ОГРН)*</td>
					<td align="center" valign="middle">1117746274634</td>
				</tr>
				<tr>
					<td colspan="2" align="center" style="width: 734px;" valign="middle">
						 &nbsp;Идентификационный номер (ИНН)/код причины постановки (КПП)&nbsp;</td>
					<td align="center" valign="middle">7701914260/770101001</td>
				</tr>
				<tr>
					<td colspan="3" align="center" valign="middle">Платежные реквизиты</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle">Расчетный счет</td>
					<td align="center" valign="middle">40702810200060016589</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle"> Полное наименование банка</td>
					<td align="center" valign="middle">ОАО АКБ "АВАНГАРД" г. Москва</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle">Корреспондентский счет</td>
					<td align="center" valign="middle">30101810000000000201</td>
				</tr>
				<tr>
					<td colspan="2" align="center" valign="middle">БИК</td>
					<td align="center" valign="middle">044525201</td>
				</tr>
				</tbody>
			</table>

			<br>

			<h3 class="heading-min center">Удобство расположения студии</h3>
			<img src="images/contacts.png">

			<div id="map"></div>

<!-- 			<div class="content-form-box">
				<div class="heading-min">Оставьте свой отзыв, Ваше мнение для нас очень важно.</div>
				<form class="content-form">
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
							<input class="mui-input" type="text" name="email" required>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваш email:</label>
							<span class="mui-error">Вы ввели неверный Email</span>
						</div>
					</div>
					<div class="form-row">
						<div class="mui-input-group">      
							<textarea class="mui-input" required></textarea>
							<span class="mui-highlight"></span>
							<span class="mui-bar"></span>
							<label class="mui-label">Ваш отзыв:</label>
							<span class="mui-error">Вы не ввели ни одного символа!</span>
						</div>
					</div>
					<div class="form-row_button">
						<button class="button button_green button_arrow">Отправить</button>
					</div>
				</form>
			</div> -->

		</div>
	</section>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<?php include "./footer.php"; ?>

</body>
</html>
