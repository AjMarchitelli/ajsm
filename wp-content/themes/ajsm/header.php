<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="container">
        <div class="header-container">
            <!-- Left: Logo -->
            <div class="header-logo">
                <a href="#top"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajsm-logo-square.png" alt="Logo"> 
                </a>
            </div>

            <!-- Middle: Phone Numbers (for desktop) -->
            <div class="header-phone-numbers">
                <a href="tel:+15516550494" class="phone-number">(551) 655-0494</a> 
                <span class="desktopOnly">|</span><span class="mobileOnly"><br /></span>
                <a href="tel:+17329270200" class="phone-number">(732) 927-0200</a>
            </div>

            <!-- Right: Call-to-Action Button -->
            <div class="cta-container">
                <div class="header-cta">
                    <a href="#free-estimate" class="cta-button">Get a Free Estimate</a>
                </div>
            </div>
        </div>
    </div>
</header>

