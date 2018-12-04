<?php
session_start();
$_SESSION['USER_LANGUAGE'] = 'en';
/**************
index.php
 *************/

/** header **/
define('header_li','Become a client');

/** main **/
define('main_a1','Strategies');
define('main_a2','How we work');
define('main_a3','About us');
define('main_a4','Analytics');

/** section.first **/
define('section_first_h1', 'Make money<br>on the US stock market');
define('section_first_p_body_text','We manage assets on your <span>insured account<sup><small>*</small></sup>.</span><br>We provide our services to those, who value professional financial expertise.');
define('section_first_button','Become a client');
define('section_first_p_main_text','*Cash and securities on each of our client’s Interactive Brokers accounts (including sub-accounts) are insured by Securities Investor Protection Corporation (SIPC) and London based Lloyd’s insurance company for up to $30,000,000.<br>Remaining cash on the account balance (as well as sub-account balance) is additionally insured by Federal Deposit Insurance Corporation (FDIC) for up to $2,500,000 in total.');

/** section.second **/
define('section_second_h1_caption','Strategies');
define('section_second_p_body_text1','The strategies we use, pass a long way of testing and examination by our team of experts. Our traders and analysts develop a trading idea using market inefficiency and the correlation between different securities. The team of IT specialists convert those ideas into trading systems. Then, derived trading algorithms are further back-tested on a long historical data. At the final stage, trading on live accounts is initiated.');
define('section_second_p_body_text2','Information about our strategies can be found below:');

//section.second kalashnokov
define('section_second_kalashnokov_a','More about<br>the strategy');
define('section_second_kalashnokov_h3','‘Kalashnikov Gun Machine’ strategy');
define('section_second_kalashnokov_body_text','The strategy is well-suited for those investors, who would prefer to follow the overall market trend and avoid being caught on the short-term price fluctuations.');

define('section_second_kalashnokov_rate_info1','Risk level');
define('section_second_kalashnokov_rate_info2','Expected return');
define('section_second_kalashnokov_rate_info3','Type of trading');
define('section_second_kalashnokov_rate_info3_bold','Automatic');
define('section_second_kalashnokov_p_info1','Entry');
define('section_second_kalashnokov_p_info1_bold','from 50 000$');
define('section_second_kalashnokov_p_info2','Time horizon');
define('section_second_kalashnokov_p_info2_bold','from 6 mon.');
define('section_second_kalashnokov_p_info3','Fees');
define('section_second_kalashnokov_p_info3_bold','2/20');
define('section_second_kalashnokov_p_info4','Expected return');
define('section_second_kalashnokov_p_info4_bold','18%');

//section.second dredd
define('section_second_dredd_a','More about<br>the strategy');
define('section_second_dredd_h3','‘Judge DREDD’<br> strategy');
define('section_second_dredd_body_text','The strategy aims to yield high returns on traditional financial instruments.<br><br><br><br>');

define('section_second_dredd_rate_info1','Risk level');
define('section_second_dredd_rate_info2','Expected return');
define('section_second_dredd_rate_info3','Type of trading');
define('section_second_dredd_rate_info3_bold','Semiautomatic');
define('section_second_dredd_p_info1','Entry');
define('section_second_dredd_p_info1_bold','from 50 000$');
define('section_second_dredd_p_info2','Time horizon');
define('section_second_dredd_p_info2_bold','from 6 mon.');
define('section_second_dredd_p_info3','Fees');
define('section_second_dredd_p_info3_bold','2/20');
define('section_second_dredd_p_info4','Expected return');
define('section_second_dredd_p_info4_bold','30%');

define('section_second_main_text','* Future returns are not guaranteed. Investing in the stock market always bears a certain type of risk, which is difficult to foresee. Future returns are calculated and are based on our historical performance. DTI Algorithmic reserves the right to use investment tools other than mentioned above in order to protect investors from potential losses. The minimum period of time to be invested in our strategies is 6 months after the initial funding.<br>Minimum deposit is $50,000 or equivalent amount in the other currencies.Only the clients themselves have the authority to transfer or withdraw funds, as our strategies are implemented on their own brokerage accounts. ');

/**section.third**/
define('section_third_h1','How we work');
define('section_third_body_text1','Our services are delivered on the Interactive Brokers platform, which is the biggest brokerage firm in the world with the $6.3bln of market capitalization and $116bln of clients assets. According to Standard & Poor\'s Financial Services the firm carries a credit rating of BBB+, which is higher than the sovereign credit ratings of many countries. The clients assets are fully insured by Securities Investor Protection Corporation (SIPC).');
define('section_third_body_text2','These facts demonstrate the credibility of the brokerage and encourage our collaboration with them. The auto-follow function of the platform allows its users to link their accounts to others and duplicate their trade operations. DTI Algorithmic has its own corporate trading accounts with running algorithms on IB, to which other accounts may be linked.');
define('section_third_body_text3','Our clients open their own trading accounts on IB and link them to one of our corporate accounts.');
define('section_third_body_text4','Algorithms on our accounts send real-time trading signals to our clients accounts, which are executed simultaneously on both accounts.');
define('section_third_body_text5','Frequency and proportionality of signals depend on the investment strategy chosen by our clients. ');
define('section_third_body_text6','The main benefits for clients when choosing this type of asset management are:');

define('section_third_ul_li1','The client has real-time control over the assets management;');
define('section_third_ul_li2','The client has an option to terminate the management at any time by pressing a button;');
define('section_third_ul_li3','The management is constrained to only those strategies, which are approved beforehand by both sides;');
define('section_third_ul_li4','The assets cannot be withdrawn from clients’ account.');

define('section_third_form_button','About Interactive Brokers');

/**section.five**/
define('section_five_h1','About us');

define('section_five_body_text1','Financial technology company DTI Algorithmic was founded in the business incubator of Plekhanov Russian University of Economics in 2010. The company provides financial and investment planning services to individuals.');
define('section_five_body_text2','DTI Algorithmic is a leading algorithmic fund in Russia, which specializes on trading stocks and ETFs on global financial markets, including USA, Russia, Europe and Asia. The company uses advanced trading platform, which allows running algo trading strategies with 150 orders per second. Monte-Carlo simulations of our strategies coincide with trading results with 97% accuracy.');
define('section_five_body_text3','Investors use our services to generate some savings or to yield consistent returns on their investments. We educate our clients about alternative sources of passive income and help to choose suitable strategy according to their preference of particular risk/reward ratio.');

define('section_five_form_button','Our team');

/**section.six**/
define('section_six_h1','Analytics');
define('section_six_button','Subscribe to the newsletter');

/**footer**/
define('footer_page_a1','FAQ');
define('footer_page_a2','Tax Duties');
define('footer_page_a3','Become a partner');

define('footer_adress_copy','Office: 43 Zatsepa ulitsa, Moscow, Russia<br>Plekhanov Russian University of Economics');

/**modal**/
define('modal_h5','Leave your details <br>to contact you');
define('modal_modal_body1','Name');
define('modal_modal_body2','Email');

define('modal_form_check_label','I agree with');
define('modal_form_check_label_a','privacy policy');
define('modal_form_button','Become a customer');

define('modal_modal_body_h5','Thank you for the information provided!<br>We will contact you shortly.');

/**modal2**/
define('modal2_h5','Subscribe to<br> our newsletter');
define('modal2_button','Subscribe to the newsletter');
define('modal2_h2','Thank! <br>You will be<br> contacted soon ');

/**
 *FAQ.php
 **/

//faq
define('faq_h1','FAQ');

define('faq_card_button','What is the minimum deposit to open an account?');
define('faq_body_text','Minimum deposit required to open an Interactive Brokers account is $50,000 or equivalent in the other currencies. There is no minimum period required to be invested in the strategies as our clients have full access to their funds at any given moment. We rest our future risks and returns based on our experience accumulated during last 8 years of asset management. To learn more about opportunities, please visit <a href="www.dtialgo.com">www.dtialgo.com</a> or e-mail us at ');

define('faq_card2_button','How much money can I make?');
define('faq_body_text2','The exact amount of money you can make cannot be guaranteed. The stock market is quite unpredictable. However we do everything in our capacity to maximize your gains, at the same time reducing the risks you are exposed to. Our strategies and previous experience allow us to expect an annual return of 35% in US dollars. ');

define('faq_card3_button','Where are my cash and stocks storage?');
define('faq_body_text3','We do not require to send your funds to our account. Instead, you will have your own account on the Interactive Brokers LLC (USA). We, on the other hand, will have the permission to place trades on your account without having access to any other functions. All brokerage accounts are insured for up to $500,000.');

define('faq_card4_button','How can I manage my portfolio?');
define('faq_body_text4','Only you will have a full access to all functions of the platform via dashboard. Also, you are able to contact one of our representatives at any time and get the information about your account.');

define('faq_card5_button','Can you withdraw funds from my account or transfer them to any other account?');
define('faq_body_text5','We do not have the ability to withdraw or transfer funds from your account. These options are granted by the broker to account holders only. We can only make trades (open/close positions in stocks and ETFs) according to the terms of agreement.');

/**
 * nalog.php
 **/
define('nalog_h1','Tax duties');
define('nalog_body_text1','All clients have their own brokerage accounts and are responsible for the compliance with the tax laws of the country of their residence.');
define('nalog_body_text2','Our fees do not include taxes on capital gains. Capital gain tax is calculated on a profit basis, excluding our commissions.');

/**
 * team.php
 **/

//team

define('team_h1','Team');
define('team_team_right1_h2','Alexander<br> Butmanov');
define('team_team_right1_description_span', 'Founder, Partner and the CEO of DTI Algorithmic');
define('team_team_right1_body_text','<p class="body_text team_description">14 years of experience in asset management across all leading exchanges in Americas, Europe and Asia (NYSE, NASDAQ, CME, LSE, DB, HKSE, SSE, MOEX).</p><p class="body_text team_description">10 years of experience in venture capital financing and fund raising (IPO, SPO).</p><p class="body_text team_description">9 years of experience in algorithmic trading, specializing in diversified portfolio models and options strategies.5 years of experience in blockchain-related projects (valuation of ICO projects, venture capital financing, fund raising).In media: independent expert at RBK-TV, Euronews, RTVI, business journal Kommersant.Education: B.A. in Economics (2009), M.A. in Economics (specialty of Securities Market, Plekhanov Russian University of Economics, 2011), Financial Engineering course at Stanford Graduate School of Business (US).</p>');


define('team_team_right2_h2','Mikhail<br> Dorofeev');
define('team_team_right2_description_span', 'Asset manager, Head of Research Department');
define('team_team_right2_body_text','<p class="body_text team_description">7 years of experience in Stock and Commodity markets of Russia and Europe: MOEX, LSE and LME.</p><p class="body_text team_description"> 5 years of experience on the US stock exchanges (NYSE, NASDAQ, CME). Education: PhD in economics. Docent at Financial University under the Government of the Russian Federation, associate Professor at the Plekhanov Russian University of Economics. In media: Expert at RBK-TV, author of numerous scientific articles in leading economics publishing houses</p>');


define('team_team_right3_h2','Andrei<br> Timoshin');
define('team_team_right3_description_span', 'Senior partner, CTO and CFO, Chief strategist on Currency and Commodity markets');
define('team_team_right3_body_text','<p class="body_text team_description">11 years of experience in global financial markets (NYSE, NASDAQ, CME, LSE, MOEX).</p><p class="body_text team_description">8 years of experience in developing algorithmic trading systems, HFT and intermarket arbitrage on a wide range of instruments (FX, stocks, options, futures, ETFs).</p><p class="body_text team_description"> 6 years of experience in developing trading and brokerage platforms.</p><p class="body_text team_description"> 3 years of experience in investing in blockchain-related projects (mining, arbitrage, ICOs).</p><p class="body_text team_description"> Education: Graduate of Plekhanov Russian University of Economics and Financial University under the Government of the Russian Federation.</p>');



define('team_p_body_text1','Employees of the company are graduates from Lomonosov Moscow State University (MSU), Moscow Institute of Physics and Technology (MIPT), HSE (Higher School of Economics), Plekhanov Russian University of Economics.');
define('team_p_body_text2','Among employees are developers of algorithmic strategies, quantitative analysts, risk managers, OS architects, fundamental analysts and many others.');
define('team_p_body_text3','‘We modernize asset management industry and develop a successful business model for the benefit of our clients’');

/**
 *kalashnokov.php
 */

//product
define('kalashnokov_product_h1','‘Kalashnikov Gun Machine’ strategy');
define('kalashnokov_product_italic','“‘Kalashnikov Gun Machine’ is a fully automated strategy. It yields results which coincide with the expected return in 95% of cases. The strategy almost always copes with the tasks it is assigned for. It is as reliable as the Russian machine gun”.');
define('kalashnokov_product_autor','Alexander Butmanov<br>Founder of the FinTech company DTI Algorithmic');
define('kalashnokov_product_product_caption','');
define('kalashnokov_product_bold','The strategy is well-suited for investors, who would prefer to follow the overall market trend and avoid being caught on the short-term price fluctuations.');
define('kalashnokov_product_product_text1','Recommended time horizon for the investment is 6 months');

//jcb_info
define('kalashnokov_product_jcb_info1','Minimum deposit:');
define('kalashnokov_product_jcb_info2','Currency');
define('kalashnokov_product_jcb_info3_1','Recommended time horizon for the investment is');
define('kalashnokov_product_jcb_info3_2','6 months');
define('kalashnokov_product_jcb_info4_1','Risk level:');
define('kalashnokov_product_jcb_info4_2','minimum');
define('kalashnokov_product_jcb_info5_1','Expected return is');
define('kalashnokov_product_jcb_info5_2',' per annum.');

define('kalashnokov_product_caption1_h6','Strategy goal:');
define('kalashnokov_product_product_text2','The goal of the strategy is to make continuous returns on both bull and bear markets.');
define('kalashnokov_product_caption2_h6','Key points:');

//ul
define('kalashnokov_product_ul_l11','An automated strategy;');
define('kalashnokov_product_ul_l12','500+ NYSE stocks and  the most liquid ETFs;');
define('kalashnokov_product_ul_l13','The combination of technical, quantitative and fundamental analysis;');
define('kalashnokov_product_ul_l14','A predicative model that distinguishes fundamental economic changes from the “white noise”.');

define('kalashnokov_product_caption3_h6','Investment philosophy of the strategy:');
define('kalashnokov_product_product_text3','The best way to make money is to minimize losses during market falls. Investor has always remember that in order to recover from a 50% fall, he should make 100% gains.<br> Therefore, it is crucially important for the portfolio to have protection from a big drawdown.');
define('kalashnokov_product_caption4_h6','The process:');
define('kalashnokov_product_product_text4','Historical data suggests the inverse correlation between S&P500 and Volatility Index VIX, which is also referred to as the ‘Fear Index’ or the ‘Investor Fear Gauge’.');
define('kalashnokov_product_product_text5','Our signal-triggering algorithm, which monitors the dynamics of the VIX, identifies points in time when the portfolio should have more long positions and when it should have more short positions. Trading frequency depends on market volatility. The strategy can be terminated at any time during trading session without any liquidity problems or synchronization restrictions.');
define('kalashnokov_product_caption5_h6','Yield indicators:');

//tab_str
define('kalashnokov_product_tab_str1','Monthly standard deviation:');
define('kalashnokov_product_tab_str2','Annual standard deviation:');
define('kalashnokov_product_tab_str3','Best monthly return:');
define('kalashnokov_product_tab_str4','Worst monthly return:');
define('kalashnokov_product_tab_str5','The ratio of positive to negative months:');
define('kalashnokov_product_tab_str6','Maximum consecutive positive months:');
define('kalashnokov_product_tab_str7','Maximum consecutive negative months:');
define('kalashnokov_product_tab_str8','Ratios:');
define('kalashnokov_product_tab_str9','The Sharpe ratio:');
define('kalashnokov_product_tab_str10','The Sortino ratio:');

define('kalashnokov_product_product_text6','When the strategy does not recognize market trend it keeps cash holdings only.');
define('kalashnokov_product_product_caption6_h6','Yield');

//table
define('kalashnokov_product_tabel_d_red','Kalashnikov <br>Gun Machine');

//product_caption_lite
define('kalashnokov_product_product_caption_lite1','Investment deposit $');
define('kalashnokov_product_product_caption_lite2','Investment term, years');
define('kalashnokov_product_product_caption_lite3','Account balance during the period of investment');

define('kalashnokov_product_product_caption6_h7','Terms:');
define('kalashnokov_product_product_text7','<b>2/20</b><br>Management fee: 2% of Net Asset Value per annum. Charged quarterly at the rate of 0.5%. <br>Success fee: 20% of profit. Charged quarterly. Brokerage and exchange fees, taxes are not included.');
define('kalashnokov_product_product_text8','Recommended time horizon for the investment is <b>6 months</b>. Clients will be able to disconnect from our strategies at any time');
define('kalashnokov_product_product_text9','Minimum deposit required to open an account with Interactive Brokers is <b>$50000</b>.');
define('kalashnokov_product_product_text10','Transferring or withdrawing funds from the account is <b>not restricted</b> in any form');

define('kalashnokov_product_small','* Future returns are not guaranteed. Investing in the stock market always bears a certain type of risk, which is difficult to foresee. Future returns are calculated and based on our historical performance. DTI Algorithmic reserves the right to use investment tools other than mentioned above in order to protect investors from potential losses. The minimum period of time to be invested in our strategies is 6 months after initial funding.Minimum deposit is $50,000 or equivalent amount in the other currencies. Only the clients themselves have the authority to transfer or withdraw funds, as our strategies are run on their own brokerage accounts.');

/**
 * dredd.php
 */

//product
define('dredd_product_h1','‘Judge DREDD’ strategy');
define('dredd_product_italic','“The ‘Judge DREDD’ is a semi-automatic strategy that is monitored by risk manager but operated by artificial intelligence. It chooses entry /exit points independently, and places stop-signals”.');
define('dredd_product_autor','Alexander Butmanov<br>The founder of the FinTech company DTI Algorithmic');
define('dredd_product_bold','The strategy is directed to yield high returns on classical instruments ');

define('dredd_product_jcb_info3_1','Recommended time horizon for the investment is');
define('dredd_product_jcb_info3_2','3 months');

define('dredd_product_jcb_info4_1','Risk level:');
define('dredd_product_jcb_info4_2','medium');

define('dredd_product_product_text2','Building a long-term portfolio with consistent returns.');

//ul
define('dredd_product_ul_l11','Portfolio manager - Mikhail Dorofeev;');
define('dredd_product_ul_l12','Instrument - Stocks;');
define('dredd_product_ul_l13','The combination of technical and fundamental analysis;');
define('dredd_product_ul_l14','Diversification across different industries;');
define('dredd_product_ul_l15','2x maximum leverage');

define('dredd_product_product_text3','Investment philosophy of the strategy: There are always undervalued companies in any industry regardless of which market they are traded on. The stock prices of this type of companies are cheap, because they lack attention by investors. The strategy focuses on finding stocks, which are traded at a significant discount, but generate consistent income. They are bought at this point in time and sold when they get mainstream attention and their stock price enjoys a reasonable valuation.');

define('dredd_product_product_text4','The initial selection of stocks, which have the potential to breakout, is done using technical analysis. After that, fundamental analysis is applied to further identify best companies for the investment. The most important factors to consider during the analysis are:');

//ul
define('dredd_product_ul_li1','Central bank decisions;');
define('dredd_product_ul_li2','Earnings reports;');
define('dredd_product_ul_li3','•	Significant news.');

//table
define('dredd_product_tabel_d_red','‘Judge DREDD’');









