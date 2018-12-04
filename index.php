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

	<title>DTI Algorithmic</title>
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
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
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
                <form resource="get" action="index.php">
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'ru') ? 'active' : ''?>" type="submit" name="ru">ru</button>
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'en' ? 'active' : '')?>" type="submit" name="en">en</button>
                </form>
			</div>
		</header>

		<main class="main">
			<div class="container">
				<div class="navi d-none d-lg-flex">
					<a href="#1" id="link_1"><?= main_a1 ?></a>
					<a href="#2" id="link_2"><?= main_a2 ?></a>
					<a href="#4" id="link_3"><?= main_a3 ?></a>
					<a href="#5" id="link_4"><?= main_a4 ?></a>
				</div>

				<section class="first" id="s">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
							<h1 class="caption">
								<?= section_first_h1 ?>
							</h1>
						</div>
						<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-lg-3 on_md">
							<p class="body_text">
								<?= section_first_p_body_text ?>
							</p>
							<button class="btn" data-toggle="modal" data-target="#modal_1">
								<?= section_first_button ?>
							</button>

							<p class="main_text">
							    <?= section_first_p_main_text ?>
                            </p>
						</div>
					</div>
				</section>
				<section class="second" id="1">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
							<h1 class="caption" <?= ($_SESSION['USER_LANGUAGE'] =='en') ? 'style="margin-top:145px;"':'' ?>><?= section_second_h1_caption ?></h1>
							<p class="body_text"><?= section_second_p_body_text1 ?></p>
							<p class="body_text"><?= section_second_p_body_text2 ?></p>
						</div>
						<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4 on_md">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="card_info py-2">
										<div class="hover_link">
											<a href="kalashnokov.php">
												<?= section_second_kalashnokov_a ?>
											</a>
										</div>
										<h3>
											<?= section_second_kalashnokov_h3 ?>
										</h3>
										<div class="body_text">
										    <?= section_second_kalashnokov_body_text ?>
                                        </div>
										<div class="rate_info" style="margin-bottom: -8px;">
											<span>
												<?= section_second_kalashnokov_rate_info1 ?>
											</span>
											<span>
												<div class="rate" data-rate-value=1></div>
											</span>
										</div>

										<div class="rate_info">
											<span>
												<?= section_second_kalashnokov_rate_info2 ?>
											</span>
											<span>
												<div class="rate" data-rate-value=1></div>
											</span>
										</div>
										<div class="rate_info mb-3">
											<span>
												<?= section_second_kalashnokov_rate_info3 ?>
											</span>
											<span class="bold">
												<?= section_second_kalashnokov_rate_info3_bold ?>
											</span>
										</div>
										<p class="info">
											<span><?= section_second_kalashnokov_p_info1 ?> </span><span class="bold"><?= section_second_kalashnokov_p_info1_bold ?></span>
										</p>
										<p class="info">
											<span><?= section_second_kalashnokov_p_info2 ?></span><span class="bold"><?= section_second_kalashnokov_p_info2_bold?></span>
										</p>
										<p class="info">
											<span><?= section_second_kalashnokov_p_info3 ?></span><span class="bold"><?= section_second_kalashnokov_p_info3_bold ?></span>
										</p>
										<p class="info mb-3">
											<span><?= section_second_kalashnokov_p_info4 ?></span><span class="bold"><?= section_second_kalashnokov_p_info4_bold?><sup><small>*</small></sup></span>
										</p>
										
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="card_info py-2">
										<div class="hover_link">
											<a href="dredd.php">
												<?= section_second_dredd_a ?>
											</a>
										</div>
										<h3>
											<?= section_second_dredd_h3 ?>
										</h3>
										<div class="body_text">
											<?= section_second_dredd_body_text ?>
                                        </div>
										<div class="rate_info" style="margin-bottom: -8px;">
											<span>
												<?= section_second_dredd_rate_info1 ?>
											</span>
											<span>
												<div class="rate" data-rate-value=2></div>
											</span>
										</div>

										<div class="rate_info">
											<span>
												<?= section_second_dredd_rate_info2 ?>
											</span>
											<span>
												<div class="rate" data-rate-value=2></div>
											</span>
										</div>
										<div class="rate_info mb-3">
											<span>
												<?= section_second_dredd_rate_info3 ?>
											</span>
											<span class="bold">
												<?= section_second_dredd_rate_info3_bold ?>
											</span>
										</div>
										<p class="info">
											<span><?= section_second_dredd_p_info1?></span>  <span class="bold"><?= section_second_dredd_p_info1_bold?></span>
										</p>
										<p class="info">
											<span><?= section_second_dredd_p_info2 ?></span>  <span class="bold"><?= section_second_dredd_p_info2_bold ?></span>
										</p>
										<p class="info">
											<span><?= section_second_dredd_p_info3 ?></span>  <span class="bold"><?= section_second_dredd_p_info3_bold?></span>
										</p>
										<p class="info mb-3">
											<span><?= section_second_dredd_p_info4?></span>  <span class="bold"><?= section_second_dredd_p_info4_bold ?><sup><small>*</small></sup></span>
										</p>
										
									</div>
								</div>
								<div class="col-12">
									<p class="main_text">
									    <?= section_second_main_text ?>
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="third" id="2">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
							<h1 class="caption"><?= section_third_h1 ?></h1>
						</div>
						<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4 on_md">

							<p class="body_text">
							    <?= section_third_body_text1 ?>
                            </p>
							<p class="body_text">
							    <?= section_third_body_text2 ?>
                            </p>
							<p class="body_text">
							    <?= section_third_body_text3 ?>
                            </p>
							<p class="body_text">
							    <?= section_third_body_text4 ?>
                            </p>
							<p class="body_text">
							    <?= section_third_body_text5 ?>
                            </p>
							<p class="body_text">
							    <?= section_third_body_text6 ?>
							</p>
							<ul style="font-size: 18px;">
                                <li><?= section_third_ul_li1 ?></li>
                                <li><?= section_third_ul_li2 ?></li>
                                <li><?= section_third_ul_li3 ?></li>
                                <?= ($_SESSION['USER_LANGUAGE'] == 'en') ? '<li>'.section_third_ul_li4.'</li>' : ""?>
							</ul>
							
							<!--<form action="prez.pdf">
                                <button class="btn mt-4">
                                    <?= section_third_form_button?>
                                </button>
							</form>-->
						</div>
					</div>
				</section>
				<section class="five" id="4">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
							<h1 class="caption"><?= section_five_h1 ?></h1>
						</div>
						<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4 on_md">
							<p class="body_text">
								<?= section_five_body_text1 ?>
                            </p>
							<p class="body_text">
                                <?= section_five_body_text2 ?>
                            </p>
							<p class="body_text">
                                <?= section_five_body_text3 ?>
							</p>
							<form action="team.php">
								<button class="btn">
									<?= section_five_form_button ?>
								</button>
							</form>
						</div>
					</div>
				</section>
				<section class="six" id="5">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
							<h1 class="caption"><?= section_six_h1 ?></h1>
						</div>
						<div class="col-12 col-md-8 offset-md-3 col-lg-7 offset-md-4 on_md">

							<div id="rss-feeds"></div>

							<!-- <div class="news">
								<p class="teg">#ВДЕТАЛЯХ</p>
								<a href="#" class="news_link">Как инвестировать в иностранные ценные бумаги</a>
							</div>
							<div class="news">
								<p class="teg">#ИДЕИ</p>
								<a href="#" class="news_link">Продажа акций компании Western Digital Corp.($WDC)</a>
							</div>
							<div class="news">
								<p class="teg">#ИДЕИ</p>
								<a href="#" class="news_link">Покупка акций компании Bank of America Corp. ($BAC)</a>
							</div>
							<div class="news">
								<p class="teg">#ВДЕТАЛЯХ</p>
								<a href="#" class="news_link">Как по кривой доходности можно предсказать рецессию</a>
							</div>
							<div class="news">
								<p class="teg">#МНЕНИЕ</p>
								<a href="#" class="news_link">DTI Algorithmic инвестировала в блокчейн-платформу Boomstarter</a>
							</div> -->
							<button class="btn mt-5" data-toggle="modal" data-target="#modal_2">
								<?= section_six_button ?>
							</button>
						</div>
					</div>
				</section>

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

	<div class="modal fade" id="modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle"><?= modal2_h5 ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><img src="img/close.png"></span>
					</button>
				</div>
				<div class="modal-body">
					<form id="mail">
						<div class="form-group">
							<input type="name" class="form-control"  placeholder="<?= modal_modal_body1?>" name="mail_name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="<?= modal_modal_body2?>" name="mail_email" required>
						</div>
						<div class="form-group">
							<input type="tel" pattern="(\+?\d[- .]*){7,13}" class="form-control" placeholder="+7 999 999 9999" name="mail_phone" required>
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
							<label class="form-check-label" for="exampleCheck1"><?= modal_form_check_label?> <a href="politic.php" target="_blank"><?= modal_form_check_label_a ?></a></label>
						</div>
						<button type="submit" class="btn"><?= modal2_button ?></button>
					</form>

					<h2 class="last-text d-none">
						<?= modal2_h2 ?>
					</h2>
				</div>
			</div>
		</div>
	</div>
	<script src="js/select.js"></script>
	<script src="js/scripts.min.js"></script>
	<script>
		jQuery(function($) {
			$("#rss-feeds").rss("<?= ( $_SESSION['USER_LANGUAGE'] == 'en') ? 'https://blog.dti.team/category/international/feed/' : 'https://blog.dti.team/feed'?> ",
			{
				entryTemplate:'<div class="news"><p class="teg">{date}</p><a href="{url}" class="news_link" target="_blank">{title}</a></div>',
				tokens: {
					"re-use": function(entry, tokens){ return + entry.category },
					static: "static"
				},

			})


		})

		// var parser = new RSSParser();
		// parser.parseURL('https://cors-anywhere.herokuapp.com/https://blog.dti.team/feed', function(err, feed) {
		//   console.log(feed);
		// })
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
