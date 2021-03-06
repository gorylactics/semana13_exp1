

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="" />

<!-- CSS -->
<link href="<?php bloginfo('template_url') ?>/main.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url') ?>/css/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url') ?>/css/nivotheme.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url') ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />


<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' />

<!-- JS -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/custom.js"></script>
<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
<![endif]-->

</head>

<body>

	<!-- Header
		============================= -->


	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="home.html">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <ul class="nav-menu right">
                <li class="current"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
            </ul><!-- .nav-menu-->
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->
    
    
	<!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
            
        	<div class="nivo-slider nivoSlider">
                <?php query_posts('posts_per_page=-1&category_name=slider'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                
                     <?php  the_post_thumbnail('full')?> 

               
                <?php endwhile; endif; ?>

                <!-- loop  -->
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->

                
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<span class="li_pen"></span>
                    <h4>Custom Design</h4>
                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                </li>
                
                
                <li>
                	<span class="li_bulb"></span>
                    <h4>Inovative Ideas</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                </li>
                
                
                <li>
                	<span class="li_heart"></span>
                    <h4>Love Is The Answer</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                </li>
                
                
                <li>
                	<span class="li_phone"></span>
                    <h4>Responsive Layout</h4>
                    <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
                </li>
                
                
                <li>
                	<span class="li_bubble"></span>
                    <h4>24 / 7 Support</h4>
                    <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem .</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    <h4>Feel Like A Star</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
                <li class="webdesign"><a href="#">Web Design</a></li>
                <li class="graphicdesign"><a href="#">Graphic Design</a></li>
                <li class="artwork"><a href="#">Artwork</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">
                <?php query_posts('posts_per_page=-1&category_name=portafolio'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>

            	<li data-id="id-<?php the_ID(); ?>" data-type="<?php echo get_the_tags()[0]->slug; ?>">
                    
                    <a href="<?php echo get_the_post_thumbnail_url (null, 'portafolio-full'); ?>"rel="prettyPhoto[portfolio]">
                      
                    <?php  the_post_thumbnail('portafolio-thumbnail')?>

                    </a>
                </li>
            <?php endwhile; endif; ?>
                
            	
                
            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <!-- Profile -->
            <ul>
                <?php query_posts('posts_per_page=3') ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li>
                	<?php  the_post_thumbnail('avatar')?>
                    <h4><?php the_title (); ?></h4>
                    <p><?php the_excerpt ();?></p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>

                    <?php $redes = ['facebook', 'gpplus', 'twitter', 'linkedin']; ?>
                    <?php foreach($redes as $red): ?>

                    <?php if(get_post_meta(get_the_ID(), $red, true)): ?>
                        <a href="<?php echo get_post_meta(get_the_ID(), $red, true); ?>"><span class="icon-<?php echo $red; ?>"></span></a>
                    <?php endif; ?>
                <?php endforeach; ?>

                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            
            	<li>
                	<!-- <img src="<?php bloginfo('template_url') ?>/images/profile/profile2.jpg" width="300" height="300" alt="#" /> -->
                    <?php  the_post_thumbnail('avatar')?>
                    <h4><?php the_title (); ?></h4>
                    <p>?php the_excerpt ();?></p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                
            	<li>
                	<img src="<?php bloginfo('template_url') ?>/images/profile/profile3.jpg" width="300" height="300" alt="#" />
                    <h4>Scolara Visari</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form action="" method="get">
                    	
                        <input name="Name" class="" type="text" value="Name (Required)" onfocus="if(this.value == 'Name (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name (Required)'; }" />
                        
                        <input name="Email" class="" type="text" value="Email (Required)" onfocus="if(this.value == 'Email (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email (Required)'; }" />
                        
                        <input name="Subject" class="" type="text" value="Subject" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Subject'; }" />
                        
                        <textarea name="Detail" cols="" rows="" onfocus="if(this.value == 'Describe your project in detail...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Describe your project in detail...'; }">Describe your project in detail...</textarea>
                        
                        <input type="submit" value="submit" name="subscribe" class="submitbtn" />
                        
                    </form>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
    
	<!-- Footer
		============================= -->
	<div id="footer">
        <div class="inner">
        
        	<p class="left">© Copyright 2013 by <a href="">PSDchat</a></p>
            
            <ul>
            	<li>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #footer -->
	<!-- End Footer -->
    
    <a href="" class="go-top">Top</a>
    
</body>
</html>




















