<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <header>
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <a class="navbar-brand logo" href="#">
                        <img src="<?=site_url()?>/wp-content/themes/plutotemplate/assets/src/images/logo.png" alt=""/> Pluto</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars "></i></button>
                        
                        <div class="collapse navbar-collapse" id="navbarCollapse">

                        <?php
                            wp_nav_menu(
                                [
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'
                                ]
                            );
                        ?>
                        <div class="search">
                            <i class="fas fa-search ml-5 "></i>
                        </div>
                        
                    </div>
                </div>
            </nav>
    </header>

    <main role="main">
        
        <?php if(!is_front_page()) { ?>

            <div class="header-breadcrumbs">

                <div class="container">
                    
                    <h1> <?php if (function_exists('wp_custom_header_title')) wp_custom_header_title(); ?> </h1>
                    
                    <ol class="breadcrumb"> <?php if(function_exists('bcn_display')) bcn_display(); ?> </ol>
                </div>

            </div>
            
        <?php } else { ?>

            <div class="home-temporary text-center" > 
                <h1>Front Page Banner</h1>
            </div>

        <?php } ?>