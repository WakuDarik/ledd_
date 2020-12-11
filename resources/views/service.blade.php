@extends('layouts/master')

@section('title', 'ilve - Кухонна техніка та меблі')
@section('keywords','ilve, кухонні прилади ilve, кухонна техніка Ilve')
@section('descr','Готувати з любов`ю означає покращення якості життя: важлива обіцянка, яку ILVE завжди дотримується.')


@section('content')
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/owl.carousel.min.css">
<link rel="stylesheet" href="/css/owl.theme.default.css">
<link rel="stylesheet" href="/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/css/owl.theme.green.css">
<link rel="stylesheet" href="/css/owl.theme.green.min.css">
<link rel="stylesheet" href="/css/owl.video.play.png">

<div class="videoWrap">
	<div id="video-bg">
		<div class="shadowBG"></div>
		<video width="100%" height="auto" autoplay="autoplay" autobuffer="" preload="" playsinline="" muted="" loop="">
			<source src="/media/video-service-2.mp4" type="video/mp4">
		</video>
	</div>
	<div class="container withOffset">
		<hr style="opacity: 1; width: 100%;">
		<h1 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Умный дом</h1>
		<span class="service-slogan" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">новый уровень комфорта
			<br> и качества вашей жизни</span>
		<div class="btn-wrap" style="opacity: 1;">
			<a href="#modalCalculation" class="green-arrowed-btn" data-toggle="modal"><span>Расчет
					стоимости</span><i></i></a>
		</div>
		<a href="#sect2" class="scroll-bottom-link js_scrollToLink">
			<div class="downPulseWrap">
				<img src="https://une-com.ru/wp-content/themes/unecom-theme/images/arrow-right.svg" alt=""
					class="img-responsive">
			</div>
		</a>
	</div>
</div>
<section class="withMargin">
	<div class="container">
		<div class="row">
			<p class="has-text-align-center has-small-font-size">сердце вашего дома</p>
			<p class="has-text-align-center has-big-text">Умный дом — автоматизация инженерных систем. Умный дом
				самостоятельно
				контролирует все процессы: освещение и управление шторами, кондиционирование и вентиляцию, обогрев пола,
				электроснабжение, системы безопасности, системы протечек воды и многие другие – для создания идеальной
				атмосферы. Сценарии настраиваются под вас и вашу семью и при желании, возможно изменить их в любое
				удобное время.</p>
		</div>
	</div>
</section>

<section class="withMargin">
	<div class="container">
		<div class="row">
			<h2 class="has-text-align-center bigStile">Функции</h2>
			<div class="funcContent">
				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv01.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Управление освещением</span>
						<p>Оборудование жилья интеллектуальным освещением — самый популярный элемент системы Умный дом.
						</p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv12.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Управление шторами/жалюзи</span>
						<p>Система Умный дом позволит вам закрывать и открывать шторы одним нажатием клавиши на
							выключателе, смартфоне или планшете.</p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv09.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Защита от протечек</span>
						<p>Благодаря датчикам защиты от протечек, установленным в «мокрых» зонах, система вовремя
							перекроет только то место, где возникла аварийная ситуация.</p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv02.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Климат-контроль</span>
						<p>Система климат-контроля отвечает за работу обогревателей, теплых полов, кондиционеров,
							ионизаторов, увлажнителей и осушителей воздуха. </p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv08.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Аудио-мультирум</span>
						<p>Технология мультирум, так называемая «подзвучка» помещений, предназначена для создания
							фоновой музыки и отличного настроения.</p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv10.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Беспроводная компьютерная сеть</span>
						<p>Установленная сеть Wi-Fi позволит функционировать вашему оборудованию в любой точке дома,
							квартиры и даже участка возле дома.</p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv05.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Видеонаблюдение</span>
						<p>Система видеонаблюдения – трансляция передается как с камер наружного наблюдения, так и камер
							установленных внутри всех помещений. </p>
					</div>
				</div>

				<div class="item">
					<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/serv07.svg" alt=""
							class="img-responsive"></div>
					<div class="slide-text">
						<span class="name">Контроль доступа</span>
						<p>Видеодомофон передает изображение гостя на любой монитор, планшет, панель управления или даже
							на спортивный тренажер.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="withMargin">
	<div class="container rowContent">
		<div class="row">
			<div class="col-md-6 col">
				<h3>УДОБСТВО</h3>
				<p>Выходя из дома, вам не придется вспоминать выключили ли свет или не забыли ли отключить от
					электропитания какой-то бытовой прибор — вы сможете управлять всеми вашими устройствами со
					смартфона, даже находясь в другой стране.</p>
			</div>
			<div class="col-md-6 col">
				<figure class="size-large">
					<img src="https://une-com.ru/wp-content/uploads/2020/03/smart-pic01.jpg" alt="" class="figureImg"
						srcset="https://une-com.ru/wp-content/uploads/2020/03/smart-pic01.jpg 1433w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic01-300x200.jpg 300w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic01-768x511.jpg 768w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic01-24x16.jpg 24w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic01-150x100.jpg 150w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic01-48x32.jpg 48w"
						sizes="(max-width: 1433px) 100vw, 1433px">
				</figure>
			</div>
		</div>
		<div class="row rowRewers">
			<div class="col-md-6 col">
				<h3>КОМФОРТ</h3>
				<p>Вы не будет спотыкаться ночью о ножку стула и искать рукой выключатель — датчик движения можно
					настроить таким образом, что ночью свет плавно включаться на 20-30% и не слепил вас</p>
			</div>
			<div class="col-md-6 col">
				<figure class="size-large">
					<img src="https://une-com.ru/wp-content/uploads/2020/03/smart-pic02.jpg" alt="" class="figureImg"
						srcset="https://une-com.ru/wp-content/uploads/2020/03/smart-pic02.jpg 1429w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic02-300x200.jpg 300w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic02-768x512.jpg 768w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic02-24x16.jpg 24w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic02-150x100.jpg 150w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic02-48x32.jpg 48w"
						sizes="(max-width: 1429px) 100vw, 1429px">
				</figure>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col">
				<h3>БЕЗОПАСНОСТЬ</h3>
				<p>Вы можете открыть двери одним касанием и дистанционно впустить в дом гостей. Или смоделировать
					присутствие с помощью умного дома, а также обеспечить защиту устройств таких как телевизор,
					холодильник или компьютер.</p>
			</div>
			<div class="col-md-6 col">
				<figure class="size-large">
					<img src="https://une-com.ru/wp-content/uploads/2020/03/smart-pic03.jpg" alt="" class="figureImg"
						srcset="https://une-com.ru/wp-content/uploads/2020/03/smart-pic03.jpg 1429w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic03-300x200.jpg 300w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic03-768x512.jpg 768w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic03-24x16.jpg 24w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic03-150x100.jpg 150w, https://une-com.ru/wp-content/uploads/2020/03/smart-pic03-48x32.jpg 48w"
						sizes="(max-width: 1429px) 100vw, 1429px">
				</figure>
			</div>
		</div>
	</div>
</section>
<section class="withMargin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span class="circ-title">Экономьте до 30% <br> и заботьтесь об экологии</span>

			</div>
			<div class="col-md-12">
				<div class="sk-circles">
					<div class="item inEffect">
						<div class="circle-wrap">
							<div class="js_RadialProgressAnim radial-progress" data-min="0" data-max="100"
								data-value="35" data-size="70" data-border="5" data-color-start="#088C38"
								data-color-end="#088C38">
								<div class="radial-inside"><span class="number"><i>35</i>%</span></div><canvas
									width="187" height="187" style="width: 150px; height: 150px;"></canvas>
							</div>
							<div class="feat-pic"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/SVG/smart-feat01.svg"
									alt=""></div>
						</div>
						<div class="feat-text"><span class="featname">Экономия электричества</span></div>
					</div>
					<div class="item inEffect">
						<div class="circle-wrap">
							<div class="js_RadialProgressAnim radial-progress" data-min="0" data-max="100"
								data-value="29" data-size="70" data-border="5" data-color-start="#088C38"
								data-color-end="#088C38">
								<div class="radial-inside"><span class="number"><i>29</i>%</span></div><canvas
									width="187" height="187" style="width: 150px; height: 150px;"></canvas>
							</div>
							<div class="feat-pic"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/SVG/smart-feat02.svg"
									alt=""></div>
						</div>
						<div class="feat-text"><span class="featname">Экономия газа</span></div>
					</div>
					<div class="item inEffect">
						<div class="circle-wrap">
							<div class="js_RadialProgressAnim radial-progress" data-min="0" data-max="100"
								data-value="36" data-size="70" data-border="5" data-color-start="#088C38"
								data-color-end="#088C38">
								<div class="radial-inside"><span class="number"><i>36</i>%</span></div><canvas
									width="187" height="187" style="width: 150px; height: 150px;"></canvas>
							</div>
							<div class="feat-pic"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/SVG/smart-feat03.svg"
									alt=""></div>
						</div>
						<div class="feat-text"><span class="featname">Экономия воды</span></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h3 class="has-text-align-center">Управляйте <br> удобным способом</h3>
				<div class="quad-feats-box">
					<div class="quad-item">
						<div class="quad-textbox">
							<p><b><strong>Персональные гаджеты</strong></b>Настенные или настольные сенсорные экраны,
								представляющие доступ ко всем функциям вашего дома</p>
						</div>
						<div class="pic"><img
								src="https://une-com.ru/wp-content/themes/unecom-theme/images/smarthouse-feat01.png"
								alt="" class="img-responsive jsTitleAnimeFade" style="opacity: 1;"></div>
					</div>
					<div class="quad-item">
						<div class="quad-textbox">
							<p><strong>панели управления</strong>Элегантная замена выключателей с подсветкой клавиш и
								возможностью нанесения любых надписей</p>
						</div>
						<div class="pic"><img
								src="https://une-com.ru/wp-content/themes/unecom-theme/images/smarthouse-feat02.png"
								alt="" class="img-responsive jsTitleAnimeFade" style="opacity: 1;"></div>
					</div>
					<div class="quad-item">
						<div class="quad-textbox">
							<p><strong>сенсорные и кнопочные выключатели</strong><span><span
										style="font-weight: normal; color: rgb(114, 114, 114); font-size: 15px; text-transform: none; background-color: rgb(255, 255, 255);">
									</span></span>Простое нажатие открывает доступ к централизованному управлению
								множеством устройств на базе KNX, в том числе, освещением, жалюзи, температурой в
								помещении, развлекательными и многими другими системами. </p>
						</div>
						<div class="pic"><img
								src="https://une-com.ru/wp-content/themes/unecom-theme/images/smarthouse-feat03.jpg"
								alt="" class="img-responsive jsTitleAnimeFade" style="opacity: 1;"></div>
					</div>
					<div class="quad-item">
						<div class="quad-textbox">
							<p><strong>голосовое управление</strong>Управление всеми функциями умного дома с помощью
								голосовго помошника Яндекс. Алиса</p>
						</div>
						<div class="pic"><img
								src="https://une-com.ru/wp-content/themes/unecom-theme/images/smarthouse-feat04.png"
								alt="" class="img-responsive jsTitleAnimeFade" style="opacity: 1;"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="pops-box">
					<div class="pops-left"><span class="pops-title">Популярные <br>приложения</span></div>
					<div class="pop-apps-list">
						<div class="item">
							<div class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/app-icon01.jpg" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/app-icon01.jpg 2x">
							</div><span class="app-name">Яндекс алиса</span>
						</div>
						<div class="item">
							<div class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/app-icon02.jpg" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/app-icon02.jpg 2x">
							</div><span class="app-name">apple homepod</span>
						</div>
						<div class="item">
							<div class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/app-icon03.jpg" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/app-icon03.jpg 2x">
							</div><span class="app-name">Apple HomeKit</span>
						</div>
						<div class="item">
							<div class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/app-icon04.jpg" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/app-icon04.jpg 2x">
							</div><span class="app-name">google home</span>
						</div>
						<div class="item">
							<div class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/app-icon05.jpg" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/app-icon05.jpg 2x">
							</div><span class="app-name _mod-siri">SIRI</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="withMargin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="bigStile">сценарии</h2>
			</div>
			<div class="lefted-text-row">
				<div class=" lefted-column">
					<p class="has-small-font-size">вы заслужили новый уровень комфорта</p>
				</div>
				<div class="main-column">
					<p>управляйте своим домом одним касанием</p>
				</div>
			</div>

			<div class="com-md-12">
				<div class="owl-carousel">

					<div href="/img/P70426-184414.jpg">
						<img srcset="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1-830x580.jpg"
							data-large="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1-1650x800.jpg"
							data-size="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1-1200x600.jpg"
							data-scrolled="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1-830x580.jpg"
							data-url="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1-1200x600.jpg"
							alt="" data-id="3928"
							data-link="https://une-com.ru/wp-content/uploads/2020/03/scenario-slide01-1.jpg"
							class="img-responsive wp-image">
						<figcaption class="blockgallery--caption slide-title"> <strong> я дома</strong>Загорается секция
							освещения в коридоре и прихожей, активируется автоматическое управление климатом с помощью
							кондиционеров и вентиляции, закрываются шторы, если за окном стемнело, включается
							аудио-мультирум, активируется теплый пол.</figcaption>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="fucking_block withMargin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="">Оборудование</h2>
			</div>
			<div class="lefted-text-row">
				<div class="lefted-column hidden-xs">
					<p class="subtitle">Мы поможем вам выбрать лучшее </p>
				</div>
				<div class="main-column text-col"><span class="lined-title">Мировые бренды</span>
					<div class="main-text">
						<p>Наша задача предложить вам – то, что подходит по всем требованиям Технического задания, по
							безопасности работы, эстетическим и функциональным свойствам.&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="withMargin">
	<div class="full-devices-carousel js_GaleryCarousel" data-fakescroll="true">
		<div class="swiper-pagination"></div>
		<div class="swiper-wrap">
			<div class="swiper-container swiper-container-initialized swiper-container-horizontal"
				style="cursor: grab;">
				<div class="fakeCarouselScroll" data-scrollbar="true" tabindex="1"
					style="overflow: hidden; outline: none;">
					<div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
						<div class="fakeslider" style="width: 2030px;"></div>
					</div>
					<div class="scrollbar-track scrollbar-track-x" style="display: block;">
						<div class="scrollbar-thumb scrollbar-thumb-x"
							style="width: 481.833px; transform: translate3d(0px, 0px, 0px);"></div>
					</div>
					<div class="scrollbar-track scrollbar-track-y" style="display: none;">
						<div class="scrollbar-thumb scrollbar-thumb-y"
							style="height: 375px; transform: translate3d(0px, 0px, 0px);"></div>
					</div>
				</div>
				<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
					<div class="wp-block-sk-service-brand-item swiper-slide swiper-slide-active"><span
							class="cat-name">премиум класс</span>
						<div class="image-holder">
							<figure class="image"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/brand01.jpg" alt=""
									class="img-responsive"></figure>
							<figcaption>ABB</figcaption>
							<div class="device-desc">
								<p>швейцарская компания, специализирующаяся в области электротехники и энергетического
									машиностроения.</p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide swiper-slide-next"><span
							class="cat-name"></span>
						<div class="image-holder">
							<figure class="image"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/brand02.jpg" alt=""
									class="img-responsive"></figure>
							<figcaption>CRESTRON</figcaption>
							<div class="device-desc">
								<p>американская компания, производитель аудиовизуального оборудования для автоматизации
									зданий</p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide"><span class="cat-name"></span>
						<div class="image-holder">
							<figure class="image"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/brand03.jpg" alt=""
									class="img-responsive"></figure>
							<figcaption>GIRA</figcaption>
							<div class="device-desc">
								<p>немецкая компания производитель розеток, выключателей, а также домофонных систем,
									световых, аудио и видео устройств.</p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide"><span class="cat-name">бизнес класс</span>
						<div class="image-holder">
							<figure class="image"><img src="https://une-com.ru/wp-content/uploads/2020/03/brand04.jpg"
									alt="" class="img-responsive"></figure>
							<figcaption>BERKER</figcaption>
							<div class="device-desc">
								<p>немецкая компания, производитель электронных компонентов для инсталляционных
									технологий, KNX / EIB </p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide"><span class="cat-name"></span>
						<div class="image-holder">
							<figure class="image"><img src="https://une-com.ru/wp-content/uploads/2020/03/brand06.jpg"
									alt="" class="img-responsive"></figure>
							<figcaption>EKINEX</figcaption>
							<div class="device-desc">
								<p>итальянский производитель дизайнерских сенсорных панелей, клавишных модулей и
									щитового оборудования для KNX</p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide"><span class="cat-name"></span>
						<div class="image-holder">
							<figure class="image"><img src="https://une-com.ru/wp-content/uploads/2020/03/brand05.jpg"
									alt="" class="img-responsive"></figure>
							<figcaption>BTicino</figcaption>
							<div class="device-desc">
								<p>головное предприятие концерна Legrand в Италии.</p>
							</div>
						</div>
					</div>



					<div class="wp-block-sk-service-brand-item swiper-slide"><span class="cat-name"></span>
						<div class="image-holder">
							<figure class="image"><img src="https://une-com.ru/wp-content/uploads/2020/03/device08.jpg"
									alt="" class="img-responsive"></figure>
							<figcaption>JUNG</figcaption>
							<div class="device-desc">
								<p>Немецкая компания, производитель электротехнического оборудования, занимающая
									лидирующее место среди всемирно известных производителей дизайнерских
									электроустановочных изделий.</p>
							</div>
						</div>
					</div>
				</div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
			</div>
		</div>
		<div class="swiper-scrollbar">
			<div class="swiper-scrollbar-drag"
				style="width: 461.371px; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"></div>
		</div>
	</div>
</section>

<section class="withMargin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="alternative">Умный дом под ключ</h2>
			</div>
			<div class="col-md-12">
				<img src="https://une-com.ru/wp-content/uploads/2020/03/Снимок-экрана-2020-10-12-в-15.44.27-scaled.jpg"
					alt="" class="img-responsive asd-img" data-skarallax-image-y=""
					style="transform: translate3d(0px, 0px, 0px);">

				<div class="main-column" style="
				text-align: center;
			">
					<div class="text">
						<p>ваш Умный дом от проектирования и до финального запуска</p>
					</div><span class="list-title">Что мы делаем</span>
					<ul class="wp-block-sk-wedo-list smart-list">
						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon01.svg"
									alt="" class="img-responsive"></div><span class="title">МЫ СОСТАВЛЯЕМ ТЕХНИЧЕСКОЕ
								ЗАДАНИЕ</span>
						</li>



						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon02.svg"
									alt="" class="img-responsive"></div><span class="title">ПРОЕКТИРУЕМ ИНЖЕНЕРНЫЕ
								СЕТИ</span>
						</li>



						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon03.svg"
									alt="" class="img-responsive"></div><span class="title">ПОСТАВЛЯЕМ
								ОБОРУДОВАНИЕ</span>
						</li>



						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon04.svg"
									alt="" class="img-responsive"></div><span class="title">ВЫПОЛНЯЕМ МОНТАЖ</span>
						</li>



						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon05.svg"
									alt="" class="img-responsive"></div><span class="title">программирование и
								ПУСКО-НАЛАДКА СИСТЕмы</span>
						</li>



						<li class="wp-block-sk-wedo-item">
							<div class="icon"><img src="https://une-com.ru/wp-content/uploads/2020/03/smart-icon06.svg"
									alt="" class="img-responsive"></div><span class="title">СЕРВИСНОЕ И ПЛАНОВОЕ
								ОБСЛУЖИВАНИЕ</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="withMargin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="alternative">решения</h2>
				<div class="text-box" style="text-align: center;">
					<p>Умный дом успешно применяется:</p>
				</div>
			</div>
			<div class="col-md-12 smart-about-box">
				<div class="sol-list">
					<div><a href="#modalSmartHouse" data-toggle="modal"><span class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/sol01.png" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/sol01.png 2x"></span><span
								class="title">ДОМ</span></a></div>
					<div><a href="#modalSmartFlat" data-toggle="modal"><span class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/sol02.png" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/sol02.png 2x"></span><span
								class="title">квартира</span></a></div>
					<div><a href="#modalSmartOffice" data-toggle="modal"><span class="icon"><img
									src="https://une-com.ru/wp-content/themes/unecom-theme/images/sol03.png" alt=""
									srcset="https://une-com.ru/wp-content/themes/unecom-theme/images/@2x/sol03.png 2x"></span><span
								class="title">офис</span></a></div>

				</div>
			</div>
			<div class="col-md-12">
				<div class="text-box">
					<p>Наша задача - создавать "Умные дома", которые облегчают жизнь Заказчику, дают комфорт и
						функционал. Хотите умный дом, который будет служить Вам долгие годы? Звоните нам!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>


<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
		items:1
})
</script>

@endsection