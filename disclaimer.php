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

    <title>DTI Algorithmic — Налогообложение</title>
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
        </div>
    </header>

    <main class="nalog">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-2 col-lg-9 offset-lg-3">
                    <h1 class="caption">Disclaimer</h1>
                </div>

                <div class="col-12 col-md-8 offset-md-2 col-lg-7 offset-lg-3">
                    <h3>General</h3>
                    <p class="body_text">
                        The information provided in this website pertaining to DTI Algorithmic, its business assets, strategy and operations is for general informational purposes only and is not a formal offer to sell or a solicitation of an offer to buy any securities, options, futures, or other financial instruments. Information contained in this website should not be relied upon as advice to buy or sell or hold such instruments or as an offer to sell such instruments. This website does not take into account nor does it provide any tax, legal or investment advice or opinion regarding the specific investment objectives or financial situation of any person. While the information in this website is believed to be accurate and reliable, DTI Algorithmic and its agents, advisors, directors, officers, employees and shareholders make no representation or warranties, expressed or implied, as to the accuracy of such information and expressly disclaims any and all liability that may be based on such information or errors or omissions thereof. DTI Algorithmic reserves the right to amend or replace the information contained herein, in part or entirely, at any time, and undertakes no obligation to provide the recipient with access to the amended information or to notify the recipient thereof
                    </p>
                    <p class="body_text">
                        The information contained in this website is intended only for the persons to whom it is transmitted for the purposes of evaluating the Company. The information contained in this website supersedes any prior presentation or conversation concerning the Company.
                    </p>
                    <p class="body_text">
                        Neither we nor any of our representatives shall have any liability whatsoever, under contract, tort, trust or otherwise, to you or any person resulting from the use of the information in this website by you or any of your representatives or for omissions from the information in this website
                    </p>
                </div>

                <div class="col-12 col-md-8 offset-md-2 col-lg-7 offset-lg-3">
                    <h3>Forward Looking Statements and Financial Projections</h3>
                    <p class="body_text">
                        Certain information in this website and oral statements made in any meeting are forward-looking and relate to DTI Algorithmic and its anticipated financial position, business strategy, events and courses of action. Forward-looking statements and financial projections include, among other things, statements about: our expectations regarding our expenses, sales and operations; our future customer concentration; our anticipated cash needs, our estimates regarding our capital requirements, our need for additional financing; our ability to anticipate the future needs of our customers; our plans for future products and enhancements of existing products; our future growth strategy and growth rate; our future intellectual property; and our anticipated trends and challenges in the markets in which we operate. We cannot guarantee future results, level of activity, performance or achievements and there is no representation that the actual results achieved will be the same, in whole or in part, as those set out in the forward-looking statements and financial projections.
                    </p>
                    <p class="body_text">
                        By their nature, forward-looking statements and financial projections involve numerous assumptions, known and unknown risks and uncertainties, both general and specific, that contribute to the possibility that the predictions, forecasts, projections and other forward-looking information will not occur, which may cause the Company's actual performance and financial results in future periods to differ materially from any estimates or projections of future performance or results expressed or implied by such forward-looking statements and financial projections
                    </p>
                    <p class="i">
                        You acknowledge and agree to be bound by the terms of this website. The copyright and other intellectual property rights in the materials contained in this website are owned by DTI Algorithmic.
                        Prospective investors should not construe the contents of this website as legal, tax, investment or other advice. All prospective investors should make their own inquiries and consult their own advisors as to legal, tax, investment, and related matters concerning an investment in the securities of the Company.
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

<script src="js/select.js"></script>
<script src="js/scripts.min.js"></script>
<script src="js/common.js"></script>

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
