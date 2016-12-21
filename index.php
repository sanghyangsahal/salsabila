<!doctype html>

<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <title>Salsabila - Reunion</title>
        <link rel="icon" type="image/png" href="img/favicon.ico">
		
        <!-- Page Description Here -->
		<meta name="description" content="Reuni Salsabila">

        <!-- Disable screen scaling-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

        <!-- Initializer -->
        <link rel="stylesheet" href="./css/normalize.css">        
        
        <!-- Web fonts and Web Icons -->
        <link rel="stylesheet" href="./css/pageloader.css">
        <link rel="stylesheet" href="./fonts/opensans/stylesheet.css">
        <link rel="stylesheet" href="./fonts/asap/stylesheet.css">
        <link rel="stylesheet" href="./css/ionicons.min.css">
        
        <!-- Vendor CSS style -->
        <link rel="stylesheet" href="./css/foundation.min.css">
        <link rel="stylesheet" href="./js/vendor/jquery.fullPage.css">
        <link rel="stylesheet" href="./js/vegas/vegas.min.css">
        
		<!-- Main CSS files -->
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/main_responsive.css">
        <link rel="stylesheet" href="./css/style-color1.css">
        <script src="./js/vendor/jquery-1.11.2.min.js"></script>
        <script src="./js/vendor/modernizr-2.7.1.min.js"></script>
        <script src="./js/typed.min.js"></script>
        <script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
        <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        .wrap{
	max-width: 600px;
	margin:150px auto;
}



.links{
	margin:20px 0;
	font-size: 0.75em;
	text-align: center;
}
    </style>
    </head>
    <body id="menu" class="alt-bg">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Page Loader -->
        <div class="page-loader" id="page-loader">
            <div><i class="ion ion-loading-d"></i><p>loading</p></div>
        </div>
        
        <!-- BEGIN OF site header Menu -->
		<!-- Add "material" class for a material design style -->
		<header class=" header-top">
			
            <div class="menu clearfix">
                <a href="#about-us">Pelaksanaan</a>
				
                <!--<div class="menu-cont">
					<p class="text">Menu cont</p>
					<ul class="sub-menu">
						<li><a href="htp://page">My Page</a></li>
					</ul>
				</div>-->
				<!-- Add other menu similar to "about" here -->
                <a href="#contact">Kontak</a>
            </div>
		</header>
        <!-- END OF site header Menu-->
        
        <!-- BEGIN OF Quick nav icons at left -->
		<nav class="quick-link count-4 nav-left">
			<div class="logo">
				<a href="#home">
					<img src="img/logo.png" alt="Logo Brand">
				</a>
			</div>
			<ul id="qmenu" class="qmenu">
				<li data-menuanchor="home">
					<a href="#home" class=""><i class="icon ion ion-home"></i>
					</a>
					<span class="title">Home page</span>
				</li>
				<!--<li data-menuanchor="register">
					<a href="#register"><i class="icon ion ion-compose"></i>
					</a>
					<span class="title">Stay in touch</span>
				</li>-->
				<li data-menuanchor="about-us">
					<a href="#about-us"><i class="icon ion ion-android-information"></i>
					</a>
					<span class="title">Pelaksanaan</span>
				</li>
				<!--<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-android-call"></i>
					</a>
					<span class="title">Contact</span>
				</li>-->
				<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-email"></i>
					</a>
					<span class="title">Hubungi Kami</span>
				</li>
			</ul>
		</nav>
        <!-- END OF Quick nav icons at left -->
        


        <!-- BEGIN OF site cover -->
        <div class="page-cover" id="s-cover">
            <!-- BEGIN OF Slideshow Background -->
            <div class="cover-bg pos-abs full-size slide-show">
				<i class='img' data-src='img/1.jpg'></i>
				<i class='img' data-src='img/2.jpg'></i>
				<i class='img' data-src='img/3.jpg'></i>
			</div>
            <!-- END OF Slideshow Background -->
		<div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(0, 0, 0, 0.41)"></div>
            
        </div>
        <!--END OF site Cover -->
		
		<!-- Begin of timer pane -->
		<div class="pane-when " id="s-when">
			<div class="content">
				<!-- Clock -->
				<div class="clock clock-countdown">
					<div class="site-config"
						 data-date="03/10/2017 00:00:00" 
						 data-date-timezone="+7"
						 ></div>					
<!--
					<div class="elem-center">
						<div class="digit">
							<span class="days">81</span>
							<span class="txt">days</span>
						</div>
					</div>
-->
					<!-- Logo instead -->
					<div class="logo">
						<a href="#">
							<img src="img/logo.png">
						</a>
					</div>
					
					<div class="elem-bottom">
						<div class="deco"></div>
						
						<span class="days">12</span><span class="thin">Hari</span>
						<span class="hours">18</span><span class="thin">j</span>
						<span class="minutes">45</span><span class="thin">m</span>
						<span class="seconds">36</span><span class="thin">d</span>
					</div>
				</div> 
				
				
				<footer>
					<p>Sebelum Kita <strong>Melebur Rindu</strong></p>
				</footer>                
			</div> 
		</div>
		<!-- End of timer pane -->
        
        <!-- BEGIN OF site main content content here -->
        <main class="page-main" id="mainpage">             
            
			<!-- Begin of home page -->
			<div class="section page-home page page-cent" id="s-home">
				
				<!-- Logo -->
				<!--<div class="logo-container">
					<img class="h-logo" src="img/logo_only.png" alt="Logo">
				</div>-->
				<!-- Content -->
				<section class="content">
					
					<header class="header">
						<div class="h-left">
							<h2><strong>Salsabila</strong></h2>
							<span id="typed" style="white-space: pre;"></span>
							</div>
            				<div id="typed-strings">
			                <span>Jika Rindu Mari <strong>Bertemu</strong></span>
			                <p>Jika Tidak!</p>
			                <p>Kenapa Harus Saling Lupa</p>
			                </div>
						<div class="h-right">
							<h3>Reuni<br>2005-2011<br>HTM : 80K</h3>
							<h4 class="subhead"><a href="https://goo.gl/forms/G24l0XUI6Hrazbjw2" target="_blank">Registrasi Sekarang</a></h4>
						</div>

			            
					</header>
				</section>
				
				<!-- Scroll down button -->
                <footer class="p-footer p-scrolldown">
                    <a href="#register">
                        <div class="arrow-d">
							<div class="before">Scroll</div>
							<div class="after">Down</div>
							<div class="circle"><i class="ion ion-mouse"></i></div>
						</div>
                    </a>                        
                </footer>
			</div>
			<!-- End of home page -->
            
           
            
            <!-- Begin of register page -->
            <!--<div class="section page-register page page-cent"  id="s-register">
                <section class="content">
                    <header class="p-title">
                        <h3>Register <i class="ion ion-compose"></i></h3> 
						<!--<h4 class="subhead">Registrasi belum di buka, bersabarlah</h4>
                    </header>
                    <div>
								<!--<div class="input">
									<label for="reg-email">Email </label>
									<input id="reg-email" class="email_f"  name="email" type="email" required placeholder="your@email.address" data-validation-type="email">
								</div>
								<div class="buttons">
									<a href="https://goo.gl/forms/6aZVa78s2mW5RvyI3" target="_blank"><button class="button" name="submit_email">Daftar</button></a>
								</div>
                    	<p class="email-ok invisible"><strong>Thank you</strong> for your subscription. We will inform you.</p>
                    </div>
                </section>
                <footer class="p-footer p-scrolldown">
                    <a href="#about-us">
                        <div class="arrow-d">
							<div class="before">About</div>
							<div class="after">Lorem</div>
							<div class="circle"><i class="ion ion-mouse"></i></div>
						</div>
                    </a>                        
                </footer>
            </div>-->
            <!-- End of register page -->
            
            <!-- Begin of about us page -->
            <div class="section page-about page page-cent" id="s-about-us">
                <section class="content">
                    <header class="p-title">
                        <h3>Waktu & Pelaksanaan<i class="ion ion-android-information">
                            </i>
                        </h3>
						<p>Mari bertukar cerita<br>
						   setelah sekian lama tak berjumpa.<br>
						   atau bertatap muka lalu bertukar sapa <br>walau hanya sebentar saja. <br>
						   sebab ini adalah rindu, <br>
						   tak ada perumpamaan baginya<br><b> kecuali pertemuan</b>.</p>
                    </header>
                    <h4 class="subhead">Tempat</h4>
                    <article class="text">
                        <p><b>Villa Bukit Cipulus</b><br />Cibiru, Bandung, Jawa Barat. </p>
                    </article>
                    <header class="p-title">
                    	<h4 class="subhead">Tanggal</h4>
                    </header>
                    <article class="text">
                        <p>Minggu, <b>12 </b>Maret 2017</p>
                    </article>
                </section>
                <footer class="p-footer p-scrolldown">
                    <a href="#contact">
                        <div class="arrow-d">
							<div class="before">Contact</div>
							<div class="after">Message</div>
							<div class="circle"><i class="ion ion-mouse"></i></div>
						</div>
                    </a>                        
                </footer>
            </div>
            <!-- End of about us page -->
                
            <!-- Begin of Contact page   -->
            <div class="section page-contact page page-cent  bg-color" data-bgcolor="rgba(95, 25, 208, 0.88)s" id="s-contact">
				<!-- Begin of contact information -->
				<div class="slide" id="s-information" data-anchor="information">
					<section class="content">
						<header class="p-title">
							<h3>Hubungi Kami<i class="ion ion-location">
								</i>
							</h3>
							<ul class="buttons">
								<li class="show-for-medium-up">
									<a title="About" href="#about-us" ><i class="ion ion-android-information"></i></a>
								</li>
								<!--<li>
									<a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
								</li>-->
								<li>
									<a title="Message" href="#contact/message"><i class="ion ion-email"></i></a>
								</li>
							</ul>
						</header>
						<!-- Begin Of Page SubSction -->
						<div class="contact">
							<div class="row">
								<div class="medium-6 columns left">
									<ul>
										<li>
											<h4>Email</h4>
											<p><a href="mailto://reuni.salsabila@gmail.com">reuni.salsabila@gmail.com</a></p>
										</li>
										<li>
											<h4>Phone</h4>
											<p>Sahal - <a href="tel:+628562113932">08562113932</a></p>
											<p>Abang - <a href="tel:+628999822249">08999822249</a></p>
										</li>
										<li>
											<h4>Find us on</h4>
											<!-- Begin of Social links -->
											<div class="socialnet">
												<a href="https://www.instagram.com/salsabila0511" target="_blank"><i class="ion ion-social-instagram"></i></a>
											</div>
										</li>
									</ul>
								</div>
								<div class="medium-6 columns social-links right">
									<ul>

										<!-- legal notice -->
										<li class="show-for-medium-up">
											<h4>Website</h4>
											<p><a href="http://www.ahmadfuady.ezyro.com/salsabila" target="_blank">Salsabila</a></p>
										</li>
										<li>
											<p><img src="img/logo.png" alt="Logo" class="logo"></p>
											<p class="small">All right reserved 2016</p>
										</li>
									</ul>

								</div>
							</div>
						</div>
						<!-- End of page SubSection -->
					</section>  
				</div>
				<!-- end of contact information -->
				
				<!-- begin of contact message --> 
				<div class="slide" id="s-message" data-anchor="message">
					<section class="content">
						<header class="p-title">
							<h3>Write to us<i class="ion ion-email">
								</i>
							</h3>
							<ul class="buttons">
								<li class="show-for-medium-up">
									<a title="About" href="#about-us"><i class="ion ion-android-information"></i></a>
								</li>
								<li>
									<a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
								</li>
								<!--<li>
									<a title="Message" href="#contact/message"><i class="ion ion-email"></i></a>
								</li>-->
							</ul>
						</header>
						<!-- Begin Of Page SubSction -->
						
						<div class="page-block c-right v-zoomIn">
							<div class="wrapper">
								<div>
									<form class="message form send_message_form" method="get" action="">
										<div class="fields clearfix">
											<div class="input">
												<label for="mes-name">Name </label>
												<input id="mes-name" name="name" type="text" placeholder="Your Name" required></div>
											<div class="buttons">
												<button id="submit-message" class="button email_b" name="submit_message">Ok</button>
											</div>
										</div>
										<div class="fields clearfix">
											<div class="input">
												<label for="mes-email">Email </label>
												<input id="mes-email" type="email" placeholder="Email Address" name="email" required>
											</div>
										</div>
										<div class="fields clearfix no-border">
											<label for="mes-text">Message </label>
											<textarea id="mes-text" placeholder="Message ..." name="message" required></textarea>

											<div>
												<p class="message-ok invisible">Your message has been sent, thank you.</p>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- End Of Page SubSction -->
					</section>
						
				</div>
				<!-- End of contact message -->
            </div>
            <!-- End of Contact page  -->   
        
        </main>

        <!-- END OF site main content content here -->  
		
		<!-- Begin of site footer -->
		<footer class="page-footer">
			<div>
				<a href="http://www.instagram.com/salsabila0511" target="_blank"><i class="ion icon ion-social-instagram"></i></a>
			</div>
		</footer>
		<!-- End of site footer -->
        <!-- All Javascript plugins goes here -->
<!--		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>-->
        
		<!-- All vendor scripts -->
        <script src="./js/vendor/all.js"></script>
		
		<!-- Detailed vendor scripts -->
        <!--<script src="./js/vendor/jquery.fullPage.min.js"></script>
        <script src="./js/vendor/jquery.slimscroll.min.js"></script>
        <script src="./js/vendor/jquery.knob.min.js"></script>
        <script src="./js/vegas/vegas.min.js"></script>
        <script src="./js/jquery.maximage.js"></script>
        <script src="./js/okvideo.min.js"></script>-->
		
		<!-- Downcount JS -->
        <script src="./js/jquery.downCount.js"></script>
		
		<!-- Form script -->
        <script src="./js/form_script.js"></script>
        
		<!-- Javascript main files -->
        <script src="./js/main.js"></script>
    </body>
</html>
