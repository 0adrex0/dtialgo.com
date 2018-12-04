<?php
session_start();
include "function.php";

if (!isset($_SESSION['USER_LANGUAGE'])) {
    setLeng(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
}
if (isset($_GET['ru'])) {
    include "resource/language/ru.php";
} elseif (isset($_GET['en'])) {
    include "resource/language/en.php";

} else {
    include "resource/language/$_SESSION[USER_LANGUAGE].php";
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>DTI Algorithmic — Команда</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<div class="height-fix">
        <header>
            <div class="container">
                <ul class="nav justify-content-between align-items-center">
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>

                    </li>
                    <li class="nav-select nav-item">
                        <div class="line_content">
                            <a class="nav-link" href="#modal_1" data-toggle="modal" data-target="#modal_1"><?= header_li ?></a>
                            <div class="line"></div>
                        </div>
                    </li>
                </ul>
                <form resource="get" action="team.php">
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'ru') ? 'active' : ''?>" type="submit" name="ru">ru</button>
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'en' ? 'active' : '')?>" type="submit" name="en">en</button>
                </form>
            </div>
        </header>
		<main class="team">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 offset-md-0 col-lg-7 offset-lg-3 mb-4">
						<h1 class="team-caption caption"><?= team_h1 ?></h1>
					</div>
                    <div class="row">
                        <div class="col-md-4 offset-md-0 col-lg-3 offset-lg-3 mb-5">
                            <div class="team-left mr-4">
                                <img src="img/butmanov.jpg" alt="Михаил Дорофеев">
                                <h2 class="caption_text mb-2">
                                    <?= team_team_right1_h2 ?>

                                </h2>
                                <span class="body_text team_position">
                                    <?= team_team_right1_description_span ?>
                                </span>
                                <div class="team_soc">
                                    <a href="https://www.linkedin.com/in/alex-butmanov-83797418/"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100012237450995"><i class="fab fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7  col-lg-6 mb-5">
                            <div class="team-right">
                                    <?= team_team_right1_body_text ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-md-0 col-lg-3 offset-lg-3 mb-5">
                            <div class="team-left mr-4">
                                <img src="img/drofeev.jpg" alt="Михаил Дорофеев">
                                <h2 class="caption_text mb-2">
                                    <?= team_team_right2_h2 ?>
                                </h2>
                                <span class="body_text team_position">
                                    <?= team_team_right2_description_span ?>
                                </span>
                               <div class="team_soc">
                                   <a href="https://www.linkedin.com/in/timoshin-andrey-30409b26/"><i class="fab fa-linkedin"></i></a>
                                   <a href="https://twitter.com/mldorofeev"><i class="fab fa-twitter-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7  col-lg-6 mb-5">
                            <div class="team-right">
                                <?= team_team_right2_body_text ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-0 col-lg-3 offset-lg-3 mb-5">
                            <div class="team-left mr-4">
                                <img src="img/timoshin.jpg" alt="Андрей Тимошин">
                                <h2 class="caption_text mb-2">
                                    <?= team_team_right3_h2 ?>
                                </h2>
                                <span class="body_text team_position">
                                    <?= team_team_right3_description_span ?>
                                </span>
                                <div class="team_soc">
                                    <a href="https://www.linkedin.com/in/timoshin-andrey-30409b26/"><i class="fab fa-linkedin"></i></a>
                                    <a class="img_trade" href="http://ranking.moex.com/strategy/dti-algorithmic-krasava"><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7  col-lg-6 mb-5">
                            <div class="team-right">
                                <?= team_team_right3_body_text ?>
                            </div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-12 col-md-8 offset-md-2 col-lg-7 offset-lg-3">
                            <p class="body_text">
                                <?= team_p_body_text1 ?>
                            </p>
                            <p class="body_text mb-4">
                                <?= team_p_body_text2 ?>
                            </p>
                        </div>
                    </div>
				</div>
			</div>
		</main>
	</div>

    <footer>
        <div class="container p-0">
            <div class="row pl-45">
                <div class="col-12 p-0">
                    <div class="row p-0 d-flex align-items-center">
                        <div class="col-6 col-md-3 p-0">
                            <img src="img/footer_logo.png" class="footer_logo">
                            <div class="soc d-block d-lg-none">
                                <div class="social"><img src="img/soc/facebook.png"><a href="https://www.facebook.com/dtiAlgo/ "> <p>Facebook</p></a></div>
                                <div class="social"><img src="img/soc/in.png"><a href="Linkedin.com/company/2212232 "> Linkedin</a></div>
                                <!--<div class="social"><img src="img/soc/telegram.png"><a href="https://t.me/dtiAlgo"> Telegram</a></div>-->
                                <div class="social"><img src="img/soc/telegram.png"><a href="https://t-do.ru/dtiAlgo"> Telegram</a></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-9 p-0">
                            <div class="page">
                                <a href="faq.php" ><?= footer_page_a1 ?></a>
                                <a href="nalog.php" ><?= footer_page_a2 ?></a>
                                <!--<a href="partners.pdf"><?= footer_page_a3 ?></a>-->
                                <?= ($_SESSION['USER_LANGUAGE'] == 'en')? "<a href='disclaimer.php'>Disclaimer</a>" : ''?>
                            </div>
                            <div class="soc d-none d-lg-flex">
                                <div class="social"><img src="img/soc/facebook.png"><a href="https://www.facebook.com/dtiAlgo/ "> <p>Facebook</p></a></div>
                                <div class="social"><img src="img/soc/in.png"><a href="https://www.linkedin.com/company/2212232 "> Linkedin</a></div>
                                <!--<div class="social"><img src="img/soc/telegram.png"><a href="https://t.me/dtiAlgo"> Telegram</a></div>-->
                                <div class="social"><img src="img/soc/telegram.png"><a href="https://t-do.ru/dtiAlgo"> Telegram</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="adress_copy">
                        <div class="adress">
                            <a href="#">info@dtialgo.com</a>
                            <p><?= footer_adress_copy ?></p>
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



    <div class="modal fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?= modal_h5 ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="img/close.png"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="client"=>
                    <div class="form-group">
                        <input type="name" class="form-control"  placeholder="<?= modal_modal_body1 ?>" name="client_name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="<?= modal_modal_body2?>" name="client_email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" pattern="(\+?\d[- .]*){7,13}" class="form-control" placeholder="+7 999 999 9999" name="client_phone" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1"><?= modal_form_check_label ?> <a href="politic.php" target="_blank"><?= modal_form_check_label_a ?></a></label>
                    </div>
                    <button type="submit" class="btn"><?= modal_form_button ?></button>
                    </form>

                    <h5 class="last-text d-none">
                        <?= modal_modal_body_h5 ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <script src="js/select.js"></script>
    <script src="js/scripts.min.js"></script>
	<script src="js/scripts.min.js"></script>
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
