<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
            $(function(){
                $('#menu-seo5').slicknav({
                    prependTo:'#navigation-menu-seo5'
                });
            });
            $(function(){
                $('#menu-seo6').slicknav({
                    prependTo:'#navigation-menu-seo6'
                });
            });
            $(function(){
                $('#menu-seo7').slicknav({
                    prependTo:'#navigation-menu-seo7'
                });
            });
            $(function(){
                $('#menu-seo8').slicknav({
                    prependTo:'#navigation-menu-seo8'
                });
            });
            $(function(){
                $('#menu-seo9').slicknav({
                    prependTo:'#navigation-menu-seo9'
                });
            });
            $(function(){
                $('#menu-seo10').slicknav({
                    prependTo:'#navigation-menu-seo10'
                });
            });
            $(function(){
                $('#menu-seo11').slicknav({
                    prependTo:'#navigation-menu-seo11'
                });
            });
            $(function(){
                $('#menu-seo12').slicknav({
                    prependTo:'#navigation-menu-seo12'
                });
            });
            $(function(){
                $('#menu-seo13').slicknav({
                    prependTo:'#navigation-menu-seo13'
                });
            });
            $(function(){
                $('#menu-seo14').slicknav({
                    prependTo:'#navigation-menu-seo14'
                });
            });
            $(function(){
                $('#menu-seo15').slicknav({
                    prependTo:'#navigation-menu-seo15'
                });
            });
            $(function(){
                $('#menu-seo16').slicknav({
                    prependTo:'#navigation-menu-seo16'
                });
            });
            $(function(){
                $('#menu-seo17').slicknav({
                    prependTo:'#navigation-menu-seo17'
                });
            });
            $(function(){
                $('#menu-seo18').slicknav({
                    prependTo:'#navigation-menu-seo18'
                });
            });
            $(function(){
                $('#menu-seo19').slicknav({
                    prependTo:'#navigation-menu-seo19'
                });
            });
            $(function(){
                $('#menu-seo20').slicknav({
                    prependTo:'#navigation-menu-seo20'
                });
            });
            $(function(){
                $('#menu-seo21').slicknav({
                    prependTo:'#navigation-menu-seo21'
                });
            });
            $(function(){
                $('#menu-seo22').slicknav({
                    prependTo:'#navigation-menu-seo22'
                });
            });
            $(function(){
                $('#menu-seo23').slicknav({
                    prependTo:'#navigation-menu-seo23'
                });
            });
            $(function(){
                $('#menu-seo24').slicknav({
                    prependTo:'#navigation-menu-seo24'
                });
            });
            $(function(){
                $('#menu-seo25').slicknav({
                    prependTo:'#navigation-menu-seo25'
                });
            });
            $(function(){
                $('#menu-seo26').slicknav({
                    prependTo:'#navigation-menu-seo26'
                });
            });
            $(function(){
                $('#menu-seo27').slicknav({
                    prependTo:'#navigation-menu-seo27'
                });
            });
            $(function(){
                $('#menu-seo28').slicknav({
                    prependTo:'#navigation-menu-seo28'
                });
            });
            $(function(){
                $('#menu-seo29').slicknav({
                    prependTo:'#navigation-menu-seo29'
                });
            });
            $(function(){
                $('#menu-seo30').slicknav({
                    prependTo:'#navigation-menu-seo30'
                });
            });
            $(function(){
                $('#menu-seo31').slicknav({
                    prependTo:'#navigation-menu-seo31'
                });
            });


			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>

		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site <a href="http://www.opticalprodg.com/" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/4slide.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>

				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">HOME</a></div>
                </div>


				<div data-role="collapsible-set">
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>ABOUT US</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Insurance</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">About US</a>

                    </div>
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>WOMEN</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Frames</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Prescription Sunglasses</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Protective Eyewear</a>
					</div>


                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>MEN</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Frames</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Prescription Sunglasses</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Protective Eyewear</a>


                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>KIDS</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Frames</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Protective Eyewear</a>

                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>LENSES</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Lenses to fit your lifestyle</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Lens Types</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Lens Materials</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Lens Materials</a>
                    </div>

				</div>



            </div>

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   

		  
		 
		</div>
   

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Women</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Men</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Kids</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Lenses</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>


							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!--OUR TEAMDr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <div data-role="page" id="home" data-theme="<?php echo $theme ?>">
              <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                  <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                      <section id="navigation-menu-seo5">
                          <ul id="menu-seo5" class="naziv">
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Women</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Men</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Kids</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Lenses</a></li>
                              <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                          </ul>
                      </section>
                      <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                      <hr>
                      <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>









                  </div>

              </div>


          </div>


          <!--OUR TEAM Dr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


















<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
