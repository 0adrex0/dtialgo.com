<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>DTI Algorithmic — Контакты</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
	</script>
</head>

<body>

	<div class="height-fix">
		<header>
			<div class="container">
				<ul class="nav justify-content-between align-items-center">
					<li class="nav-item">
						<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="lk.php">Личный кабинет</a>
					</li>
				</ul>
			</div>
		</header>

		<main class="contact">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
						<h1 class="caption">Контакты</h1>
					</div>

					<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4">
						<p>
							Офис в Москве: <span>Ул. Зацепа, 43 <br>
							Российский Экономический Университет им. Г.В. Плеханова</span>
						</p>
						
						<p>E-mail: <a href="#">info@dtialgo.com</a></p>

						<div id="map"  ></div>
					</div>

				</div>
			</div>
		</main>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4">
					<div class="row ">
						<div class="col-6 col-md-3">
							<img src="img/footer_logo.png" class="footer_logo">
							<div class="soc d-block d-lg-none">
								<div class="social"><img src="img/soc/facebook.png"><a href="https://www.facebook.com/dtiAlgo/ "> <p>Facebook</p></a></div>
								<div class="social"><img src="img/soc/in.png"><a href="Linkedin.com/company/2212232 "> Linkedin</a></div>
								<div class="social"><img src="img/soc/telegram.png"><a href="https://t.me/dtiAlgo"> Telegram</a></div>
							</div>
						</div>
						<div class="col-6 col-md-9">
							<div class="page">
								<a href="faq.php" >База знаний</a>
								<a href="nalog.php" >Налогообложениe</a>
								<a href="partners.pdf">Стать партнером</a>
							</div>
							<div class="soc d-none d-lg-flex">
								<div class="social"><img src="img/soc/facebook.png"><a href="https://www.facebook.com/dtiAlgo/ "> <p>Facebook</p></a></div>
								<div class="social"><img src="img/soc/in.png"><a href="https://www.linkedin.com/company/2212232 "> Linkedin</a></div>
								<div class="social"><img src="img/soc/telegram.png"><a href="https://t.me/dtiAlgo"> Telegram</a></div>
							</div>
						</div>
					</div>

					<div class="adress_copy">
						<div class="adress">
							<a href="#">info@dtialgo.com</a>
							<p>Офис в Москве: Ул. Зацепа, 43 Российский Экономический <br>
							Университет им. Г.В. Плеханова</p>
						</div>
						<div class="copy">
							<p class="text-right">
								© 2010-2018 
								<div class="w-100"></div>
								www.dtialgo.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/scripts.min.js"></script>
	<script type="text/javascript">
		ymaps.ready(init);

		function init(){ 
			var myMap = new ymaps.Map("map", {
				center: [55.728510, 37.627993],
				zoom: 17,
				controls: [],
				hintContent: 'Содержимое всплывающей подсказки',
				balloonContent: 'Содержимое балуна'
			}); 

			var myPlacemark = new ymaps.Placemark([55.728510, 37.627993], {
				iconContent: ''
			}, {
        // Красная иконка, растягивающаяся под содержимое.
        preset: "islands#redStretchyIcon"
      });

			myMap.geoObjects.add(myPlacemark);
			myMap.controls.remove('zoomControl');
			controls: []
		}
	</script>
<!-- BEGIN JIVOSITE CODE -->
<script type='text/javascript'>
(function(){ var widget_id = 'E3MaIW7pLa';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- END JIVOSITE CODE -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50382499 = new Ya.Metrika2({
                    id:50382499,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50382499" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
