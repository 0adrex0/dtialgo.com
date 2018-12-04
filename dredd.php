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

	<title>DTI Algorithmic — Судья ДРЕДД</title>
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
                <form resource="get" action="dredd.php">
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'ru') ? 'active' : ''?>" type="submit" name="ru">ru</button>
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'en' ? 'active' : '')?>" type="submit" name="en">en</button>
                </form>
            </div>
        </header>

		<main class="product">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-2 col-xl-9 offset-xl-3">
						<h1 class="caption">
							<?= dredd_product_h1 ?>
						</h1>
					</div>
					<div class="col-12 col-md-8 offset-md-2 col-xl-7 offset-xl-3">
						<p class="italic">
                            <?= dredd_product_italic ?>
						</p>
						<p class="autor">
							<?= dredd_product_autor ?>
						</p>
						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_product_caption ?>
						</h6>
						<canvas id="myChart" class="mb-5"></canvas>
						<p class="bold">
							<?= dredd_product_bold ?>
						</p>

						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info1 ?></span> <span class="bold">50000</span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info2 ?></span> <span class="bold">USD</span>
						</div>
						<div class="jcb_info">
							<span><?= dredd_product_jcb_info3_1 ?></span> <span class="bold"><?= dredd_product_jcb_info3_2 ?></span>
						</div>
						<div class="jcb_info">
							<span><?= dredd_product_jcb_info4_1 ?></span> <span class="bold"><?= dredd_product_jcb_info4_2 ?></span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info5_1 ?></span> <span class="bold">30%<sup><small>*</small></sup> <?= kalashnokov_product_jcb_info5_2 ?></span>
						</div>

						<h6 class="product_caption mt-5">
							<?= kalashnokov_product_caption1_h6 ?>
						</h6>
						<p class="product_text">
							<?= dredd_product_product_text2 ?>
						</p>	

						<h6 class="product_caption mt-5">
							<?= kalashnokov_product_caption2_h6 ?>
						</h6>

						<ul>
							<li><a href="https://www.rea.ru/ru/org/cathedries/finpricekaf/Pages/dorofeev.aspx" style="color:#d02002"><?= dredd_product_ul_l11 ?></a></li>
							<li><?= dredd_product_ul_l12 ?></li>
							<li><?= dredd_product_ul_l13 ?></li>
							<li><?= dredd_product_ul_l14 ?></li>
							<li><?= dredd_product_ul_l15 ?></li>
						</ul>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption3_h6?>
						</h6>
						<p class="product_text">
                            <?= dredd_product_product_text3 ?>
						</p>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption5_h6 ?>
						</h6>
<div class="tab_str">
<span><?= kalashnokov_product_tab_str1 ?></span> <span class="bold">3,42%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str2?></span> <span class="bold">6.29%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str3?></span> <span class="bold">11,66%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str4?></span> <span class="bold">-2,17%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str5?></span> <span class="bold">61,9%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str6 ?></span> <span class="bold">6</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str7 ?></span> <span class="bold">3</span>
</div>

<div class="tab_str bold">
<span><?= kalashnokov_product_tab_str8 ?></span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str9 ?></span> <span class="bold">1,7</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str10 ?></span> <span class="bold">0,64</span>
</div>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption4_h6 ?>
						</h6>
						<p class="product_text">
                            <?= dredd_product_product_text4 ?>
						</p>
                        <ul>
							<li>Решения центральных банков</li>
							<li>Отчетность компаний</li>
                            <li>Ключевые новостные события</li>
						</ul>


						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_product_caption6_h6 ?>
						</h6>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Year</th>
										<th>Jan</th>
										<th>Feb</th>
										<th>Mar</th>
										<th>Apr</th>
										<th>May</th>
										<th>Jun</th>
										<th>Jul</th>
										<th>Aug</th>
										<th>Sep</th>
										<th>Oct</th>
										<th>Nov</th>
										<th>Dec</th>
										<th class="d_red"><?= dredd_product_tabel_d_red ?></th>
										<th class="d_grey">S&P500</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="bold">2018</td>
										<td>0,17%</td>
										<td>-2.17%</td>
										<td>-1.24$</td>
										<td>-0.25%</td>
										<td>4.26%</td>
										<td>0.03%</td>
										<td>-0.26%</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="red">1.03%</td>
										<td class="grey">4.07%%</td>
									</tr>
									<tr>
										<td class="bold">2017</td>
										<td>3.46%</td>
										<td>8.66%</td>
										<td>-0.675</td>
										<td>2.97%</td>
										<td>2.63%</td>
										<td>-0.38%</td>
										<td>-1.83%</td>
										<td>-0.28%</td>
										<td>3.12%</td>
										<td>6.64%</td>
										<td>-4.04%</td>
										<td>8.89%</td>
										<td class="red">37.25%</td>
										<td class="grey">18.42%</td>
									</tr>
									<tr>
										<td class="bold">2016</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>-0.19%</td>
										<td>0.15%%</td>
										<td>10.68%</td>
										<td>1.78%</td>
										<td>11.66%</td>
										<td class="red">24.08%</td>
										<td class="grey">11.96%</td>
									</tr>
									
								</tbody>

							</table>

<!--                    <div class="row">
							<div class="col-12 col-md-7 col-lg-6">
								<h6 class="product_caption_lite mt-4">
									<?= kalashnokov_product_product_caption_lite1 ?>
								</h6>
								<input type="name" class="form-control"  placeholder="50000" id="invest" value="50000">

								<h6 class="product_caption_lite mt-4">
									<?= kalashnokov_product_product_caption_lite2 ?>
								</h6>
								<div class="slider">
									<span class="ui-slider-handle" href="#">
										<div id="slider-result">5</div>
									</span>
									<input id="znch" name="znch" type="hidden" />
								</div>

								<h6 class="product_caption_lite mt-4">
									<?= kalashnokov_product_product_caption_lite3 ?>
								</h6>
								<div class="money">	
									<h2 id="money">
										0.00 
									</h2>
									$
								</div>			
							</div>
						</div> -->
							<h6 class="product_caption mt-5">
								<?= kalashnokov_product_product_caption6_h7 ?>
							</h6>
							<p class="product_text">
							    <?= kalashnokov_product_product_text7 ?>
                            </p>
							<p class="product_text">
							    <?= kalashnokov_product_product_text8 ?>
                            </p>
							<p class="product_text">
								<?= kalashnokov_product_product_text9 ?>
							</p>
							<p class="product_text">
								<?= kalashnokov_product_product_text10?>
                            </p>
						</div>
						<button class="btn" data-toggle="modal" data-target="#modal_1">
                            <?= header_li ?>
						</button>
						<p class="samll">
						    <?= kalashnokov_product_small ?>
                        </p>
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

	<script src="js/scripts.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script
	src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    data: {
    	labels: ["aug.16", "sep.16", "oct.16", "nov.16", "dec.16", "jan.17", "feb.17", "mar.17", "апр.17", "may.17", "jun.17", "jul.17", "aug.17", "sep.17", "oct.17", "nov.17", "dec.17", "jan.18", "feb.18", "mar.18", "апр.18", "may..18", "jun.18", "jul.18"],
    	datasets: [{

    		backgroundColor: 'rgba(0, 0, 0, 0)',
    		borderColor: 'rgb(208, 32, 2)',
    		data: [0.19, 0.04, 10.64, 12.42, 24.08, 27.54, 36.20, 35.53, 38.50, 41.13, 40.75, 38.92, 38.64, 41.76, 48.40, 52.44, 61.33, 61.50, 59.33, 58.09, 57.84, 62.10, 62.13, 62.39],
    	}]
    },
    // Configuration options go here
    options: {
    	legend: {
    		display: false
    	},
    	title: {
    		display: true,
    		text: '<?= ($_SESSION['USER_LANGUAGE'] == 'en') ? '‘Judge DREDD’' : 'Судья ДРЕДД' ?>'
    	},
    	scales: {
    		xAxes: [{
    			gridLines: {
    				display:false
    			}
    		}],
    		// yAxes: [{
    		// 	gridLines: {
    		// 		display:false
    		// 	}   
    		// }]
    	}
    }
  });
</script>
<script type="text/javascript">
	$(".rate").rate(options);

function calcChanges(value){	 
		var invest = +$('#invest').val(); //Сумма инвестирования     
		var znch = value||+$('#znch').val(); //срок инвестиции 
		var b = 30; //проц ставка

		var month_money = invest*(1+b/100)*znch;
		month_money=month_money.toFixed(2);

		$('#money').text(month_money);
	}

	$(document).ready(function(){
		$( ".slider" ).slider({
			animate: "fast",
			range: "min",
			value: 5,
			min: 1,
			max: 10,
			step: 1,

			slide: function( event, ui ) {
				$( "#slider-result" ).html(ui.value);
				calcChanges(ui.value);
			},

			change: function(event, ui) {
				$('#znch').attr('value', ui.value);
				calcChanges(ui.value);
			}
		});
		calcChanges();
	});
</script>

<style>
.slider {
	width:80%;
	height:3px;
	background:#D02002;
	position:relative;
	margin:0 auto;
	padding:0 10px;
	margin-bottom: 40px;
}

.ui-slider-handle {
	width:6px;
	height:28px;
	position:absolute;
	top:-12px;
	/*margin-left:-12px;*/
	z-index:200;
	background:#2E2D2C;

}

#slider-result {
	text-align:center;
	position:absolute;
	top:27px;
	left:-8px;
	background:#eee;
	color:#000;
	font: 16px sans-serif;
	padding:5px 0;
	width:40px;
}
</style>


<!-- BEGIN JIVOSITE CODE -->
    <script src="js/select.js"></script>
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
