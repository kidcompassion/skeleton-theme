<!DOCTYPE html>
<html>
<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
	<title><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo '|';
        } else {
            echo bloginfo('description');
        } wp_title('');
        ?></title>
</head>
<body <?php body_class();?>>

<header class="primary">
    <section class="component--hello">
        <div class="container">
            <div class="row">
                <a target="_blank" href="https://www.bistrainer.com/store/ajb-safety-consulting-services-store/home" class="col-12 mx-auto">
                    <i class="fas fa-play-circle"></i>  <span>Start Learning Online Now!</span> Check out our full selection of online courses      >
                </a>
            </div>
        </div>
    </section>
    <div class="container-fluid">    
        <div class="row">
            <div class="col-4 col-md-4 col-lg-2 mr-auto">
                <?php if ( function_exists( 'the_custom_logo' ) ) :
                    the_custom_logo();
                endif;?>
            </div>
            
            <div class="col-2 col-sm-1 d-xl-none ml-auto">
                <div class="hamburger">
                    <span></span>
                    <span></span>    
                    <span></span>
                </div>
            </div>
            <?php wp_nav_menu( array('container'=> 'nav', 'container_class'=> 'primary--nav col-12 col-md-8 col-lg-9 col-xl-9 mr-0', 'theme_location' => 'header-menu'  ) ); ?>
        </div>
    </div>
    <?php 
    if(function_exists( 'floating_btn_add_html_to_header' )):
        do_action('dl_render_btn');
    endif;?>
</header>