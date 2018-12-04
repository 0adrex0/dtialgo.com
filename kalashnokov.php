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

	<title>DTI Algorithmic — Автомат КАЛАШНИКОВА</title>
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
                <form resource="get" action="kalashnokov.php">
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'ru') ? 'active' : ''?>" type="submit" name="ru">ru</button>
                    <button class="leng <?= ($_SESSION['USER_LANGUAGE'] == 'en' ? 'active' : '')?>" type="submit" name="en">en</button>
                </form>
            </div>
        </header>

		<main class="product">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-3 col-xl-9 offset-xl-4">
						<h1 class="caption">
							<?= kalashnokov_product_h1 ?>
						</h1>
					</div>
					<div class="col-12 col-md-8 offset-md-3 col-xl-7 offset-xl-4">
						<p class="italic">
                            <?= kalashnokov_product_italic ?>
						</p>
						<p class="autor">
							<?= kalashnokov_product_autor ?>
						</p>
						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_product_caption ?>
						</h6>
						<canvas id="myChart" class="mb-5"></canvas>
						<p class="bold">
                            <?= kalashnokov_product_bold ?>
						</p>
						<p class="product_text">
                            <?= kalashnokov_product_product_text1 ?>
						</p>

						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info1 ?></span> <span class="bold">50000</span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info2 ?></span> <span class="bold">USD</span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info3_1 ?></span> <span class="bold"><?= kalashnokov_product_jcb_info3_2 ?></span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info4_1 ?></span> <span class="bold"><?= kalashnokov_product_jcb_info4_2 ?></span>
						</div>
						<div class="jcb_info">
							<span><?= kalashnokov_product_jcb_info5_1 ?></span> <span class="bold">18%<sup><small>*</small></sup><?= kalashnokov_product_jcb_info5_2 ?></span>
						</div>
						<h6 class="product_caption mt-5">
							<?= kalashnokov_product_caption1_h6 ?>
						</h6>
						<p class="product_text">
							<?= kalashnokov_product_product_text2 ?>
						</p>

						<h6 class="product_caption mt-5">
							<?= kalashnokov_product_caption2_h6 ?>
						</h6>
						<ul>
							<li><?= kalashnokov_product_ul_l11?></li>
							<li><?= kalashnokov_product_ul_l12 ?></li>
							<li><?= kalashnokov_product_ul_l13 ?></li>
							<li><?= kalashnokov_product_ul_l14 ?></li>
						</ul>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption3_h6 ?>
						</h6>
						<p class="product_text">
							<?= kalashnokov_product_product_text3 ?>
						</p>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption4_h6 ?>
						</h6>
						<p class="product_text">
                            <?= kalashnokov_product_product_text4 ?>
						</p>
						<p class="product_text">
                            <?= kalashnokov_product_product_text5 ?>
						</p>

						<h6 class="product_caption mt-4">
							<?= kalashnokov_product_caption5_h6 ?>
						</h6>
<div class="tab_str">
<span><?= kalashnokov_product_tab_str1 ?></span> <span class="bold">4,63%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str2 ?></span> <span class="bold">16.05%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str3 ?></span> <span class="bold">13,7%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str4 ?></span> <span class="bold">-12,01%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str5 ?></span> <span class="bold">66,96%</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str6 ?></span> <span class="bold">8</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str7 ?></span> <span class="bold">3</span>
</div>

<div class="tab_str bold">
<span><?= kalashnokov_product_tab_str8 ?></span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str9 ?></span> <span class="bold">2.2</span>
</div>

<div class="tab_str">
<span><?= kalashnokov_product_tab_str10 ?></span> <span class="bold">2,42</span>
</div>


						<p class="product_text mt-4">
                            <?= kalashnokov_product_product_text6 ?>
						</p>



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
										<th class="d_red"><?= kalashnokov_product_tabel_d_red ?></th>
										<th class="d_grey">S&P500</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="bold">2017</td>
										<td>4.31%</td>
										<td>4.22%</td>
										<td>-0.66%</td>
										<td>-0.72%</td>
										<td>1.78%</td>
										<td>1.65%</td>
										<td>-2.48%</td>
										<td>2.34%</td>
										<td>3.21%</td>
										<td>3.65%</td>
										<td>4.13%</td>
										<td>12.96%</td>
										<td class="red">34.39%</td>
										<td class="grey">18.42%</td>
									</tr>
									<tr>
										<td class="bold">2016</td>
										<td>3.05%</td>
										<td>2.00%</td>
										<td>-2.05</td>
										<td>2.70%</td>
										<td>4.85%</td>
										<td>-1.25%</td>
										<td>2.91%</td>
										<td>0.10%</td>
										<td>0.06%</td>
										<td>3.4%</td>
										<td>-4.13%</td>
										<td>1.36%</td>
										<td class="red">13.00%</td>
										<td class="grey">11.96%</td>
									</tr>
									<tr>
										<td class="bold">2015</td>
										<td>-3.09%</td>
										<td>5.34%</td>
										<td>-1.49</td>
										<td>2.20%</td>
										<td>1.23%</td>
										<td>1.92%</td>
										<td>1.85%</td>
										<td>-5.82%</td>
										<td>5.60%</td>
										<td>6.63%</td>
										<td>0.34%</td>
										<td>2.15%</td>
										<td class="red">16.86</td>
										<td class="grey">1.38%</td>
									</tr>
									<tr>
										<td class="bold">2014</td>
										<td>-3.35%</td>
										<td>4.32%</td>
										<td>0.79%</td>
										<td>0.66%</td>
										<td>1.93%</td>
										<td>1.96%</td>
										<td>-1.33</td>
										<td>3.74%%</td>
										<td>-1.31%</td>
										<td>-1.54%</td>
										<td>-2.61%</td>
										<td>-2.45</td>
										<td class="red">6.03%</td>
										<td class="grey">13.69</td>
									</tr>
									<tr>
										<td class="bold">2013</td>
										<td>3.69%</td>
										<td>1.21%</td>
										<td>3.61%</td>
										<td>1.83%</td>
										<td>3.54%</td>
										<td>-1.79%</td>
										<td>4.48%</td>
										<td>-0.65%</td>
										<td>2.53%</td>
										<td>4.40%</td>
										<td>2.82%</td>
										<td>2.45%</td>
										<td class="red">28.12%</td>
										<td class="grey">32.39%</td>
									</tr>
									<tr>
										<td class="bold">2012</td>
										<td>3.15%</td>
										<td>4.12%</td>
										<td>3.06%</td>
										<td>2.63%</td>
										<td>-5.71%</td>
										<td>1.48%</td>
										<td>2.91%</td>
										<td>2.38%</td>
										<td>2.71%</td>
										<td>-1.73%</td>
										<td>0.54%</td>
										<td>0.85%</td>
										<td class="red">16.09%</td>
										<td class="grey">16.00</td>
									</tr>
									<tr>
										<td class="bold">2011</td>
										<td>2.22%</td>
										<td>3.30%</td>
										<td>-2.50%</td>
										<td>2.74%</td>
										<td>-1.06%</td>
										<td>-7.74%</td>
										<td>-2.51%</td>
										<td>5.53%</td>
										<td>5.30%</td>
										<td>5.09%</td>
										<td>-2.43%</td>
										<td>5.23%</td>
										<td class="red">13.44%</td>
										<td class="grey">2.11%</td>
									</tr>
									<tr>
										<td class="bold">2010</td>
										<td>-3.18%</td>
										<td>2.49%</td>
										<td>5.79%</td>
										<td>1.47%</td>
										<td>7.16</td>
										<td>-5.07%</td>
										<td>5.94%</td>
										<td>-0.30%</td>
										<td>-0.79%</td>
										<td>3.62%</td>
										<td>0.00%</td>
										<td>6.39%</td>
										<td class="red">23.49%</td>
										<td class="grey">15.06%</td>
									</tr>
									<tr>
										<td class="bold">2009</td>
										<td>-12.01%</td>
										<td>18.89%</td>
										<td>5.00%</td>
										<td>9.43%</td>
										<td>5.56%</td>
										<td>3.81%</td>
										<td>-9.20%</td>
										<td>3.51%</td>
										<td>3.36%</td>
										<td>-1.83%</td>
										<td>5.86%</td>
										<td>2.29%</td>
										<td class="red">28.67%</td>
										<td class="grey">26.46%</td>
									</tr>
									<tr>
										<td class="bold">2008</td>
										<td>12.54%</td>
										<td>-1.34%</td>
										<td>3.37%</td>
										<td>2.66%</td>
										<td>1.43%</td>
										<td>-7.93%</td>
										<td>13.17%</td>
										<td>1.47%</td>
										<td>11.12%</td>
										<td>11.80%</td>
										<td>-7.21%</td>
										<td>5.00%</td>
										<td class="red">46.08%</td>
										<td class="grey">-37.00%</td>
									</tr>
									<tr>
										<td class="bold">2007</td>
										<td>0.99%</td>
										<td>-1.86%</td>
										<td>1.10%</td>
										<td>4.21%</td>
										<td>3.22%</td>
										<td>-1.39%</td>
										<td>0.32%</td>
										<td>7.60%</td>
										<td>4.00%</td>
										<td>1.60%</td>
										<td>-3.19%</td>
										<td>-4.35%</td>
										<td class="red">12.25%</td>
										<td class="grey">5.49%</td>
									</tr>



								</tbody>

							</table>


<!--					<div class="row">
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
								<?= kalashnokov_product_product_text10 ?>
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
    	labels: ["jan.-07", "feb.-07", "mar.-07", "apr.-07", "may-07", "jun.-07", "jul.-07", "aug.-07", "sep.-07", "oct.-07", "nov.-07", "dec.-07", "jan.-08", "feb.-08", "mar.-08", "apr.-08", "may-08", "jun.-08", "jul.-08", "aug.-08", "sep.-08", "oct.-08", "nov.-08", "dec.-08", "jan.-09", "feb.-09", "mar.-09", "apr.-09", "may-09", "jun.-09", "jul.-09", "aug.-09", "sep.-09", "oct.-09", "nov.-09", "dec.-09", "jan.-10", "feb.-10", "mar.-10", "apr.-10", "may-10", "jun.-10", "jul.-10", "aug.-10", "sep.-10", "oct.-10", "nov.-10", "dec.-10", "jan.-11", "feb.-11", "mar.-11", "apr.-11", "may-11", "jun.-11", "jul.-11", "aug.-11", "sep.-11", "oct.-11", "nov.-11", "dec.-11", "jan.-12", "feb.-12", "mar.-12", "apr.-12", "may-12", "jun.-12", "jul.-12", "aug.-12", "sep.-12", "oct.-12", "nov.-12", "dec.-12", "jan.-13", "feb.-13", "mar.-13", "apr.-13", "may-13", "jun.-13", "jul.-13", "aug.-13", "sep.-13", "oct.-13", "nov.-13", "dec.-13", "jan.-14", "feb.-14", "mar.-14", "apr.-14", "may-14", "jun.-14", "jul.-14", "aug.-14", "sep.-14", "oct.-14", "nov.-14", "dec.-14", "jan.-15", "feb.-15", "mar.-15", "apr.-15", "may-15", "jun.-15", "jul.-15", "aug.-15", "sep.-15", "oct.-15", "nov.-15", "dec.-15", "jan.-16", "feb.-16", "mar.-16", "apr.-16", "may-16", "jun.-16", "jul.-16", "aug.-16", "sep.-16", "oct.-16", "nov.-16", "dec.-16", "jan.-17", "feb.-17", "mar.-17", "apr.-17", "may-17", "jun.-17", "jul.-17", "aug.-17", "sep.-17", "oct.-17", "nov.-17", "dec.-17"],
    	datasets: [{

    		backgroundColor: 'rgba(0, 0, 0, 0)',
    		borderColor: 'rgb(208, 32, 2)',
    		data: [0.99, -0.87, 0.23, 4.44, 7.66, 6.27, 6.59, 14.19, 18.19, 19.79, 16.60, 12.25, 24.79, 23.45, 26.82, 29.48, 30.91, 22.98, 36.5, 37.62, 48.74, 60.54, 53.33, 58.33, 46.32, 59.21, 64.21, 73.64, 79.20, 83.01, 73.81, 77.32, 80.68, 78.85, 84.71, 87.00, 83.82, 86.31, 92.10, 93.57, 100.73, 95.66, 101.60, 101.30, 100.51, 104.13, 104.13, 110.49, 112.71, 116.01, 113.51, 116.25, 115.19, 107.72, 105.21, 110.74, 116.04, 121.13, 118.70, 123.93, 127.08, 131.20, 134.26, 136.89, 131.18, 132.66, 135.57, 137.95, 140.36, 138.63, 139.17, 140.02, 143.71, 144.92, 148.53, 150.36, 153.90, 152.11, 156.59, 155.94, 158.47, 162.87, 165.69, 168.14, 164.79, 169.11, 169.90, 170.56, 172.49, 174.45, 173.12, 176.86, 175.55, 174.01, 176.62, 174.17, 171.08, 176.42, 174.93, 177.13, 178.36, 180.28, 182.13, 176.31, 181.91, 188.54, 188.88, 191.03, 194.08, 196.08, 194.03, 196.73, 201.58, 200.33, 203.24, 203.34, 203.40, 206.80, 202.67, 204.03, 208.34, 212.56, 211.90, 211.18, 212.96, 214.61, 212.13, 214.47, 217.68, 221.33, 225.46, 238.42],
    	}]
    },
    // Configuration options go here
    options: {
    	legend: {
    		display: false
    	},
    	title: {
    		display: true,
    		text: '<?= ($_SESSION['USER_LANGUAGE'] == 'en') ? '‘Kalashnikov Gun Machine’' : 'Автомат КАЛАШНИКОВА' ?>'
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
		var b = 18; //проц ставка

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
