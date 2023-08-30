<?php

/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package refocus_real_focus
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <?php get_template_part('inc/functions/datalayer', 'info'); ?>

    <!--/Google Tag Manager-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php the_field('refocus_real_focus_favicon', 'option'); ?>">

    <!--/Favicon-->
    <meta name="msapplication-TileColor" content="#d65a45">
    <meta name="theme-color" content="#d65a45">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site overflow-x-hidden">

        <!-- Header -->
        <?php if (is_front_page()) {
            $backgroundHero = get_the_post_thumbnail_url();
        ?>
            <header id="masthead" class="site-header px-4 bg-center home__hero" style='background-image: url(<?php echo $backgroundHero; ?>);'>
                <div class="overlay"></div>
                <div class="nav__menu absolute w-full left-0 top-0 page-header z-20">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap text-white items-center">
                            <div class="w-1/2">
                                <?php
                                $GETlogo = get_field('logo_header', 'option'); ?>
                                <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                                    <?php if ($GETlogo) {
                                        refocus_real_focus_get_Image($GETlogo);
                                    } else {
                                        echo "<h3 class='mb-0'>Logo Brand</h3>";
                                    } ?>
                                </a>
                            </div>
                            <div class="w-1/2">
                                <!--Menu-->
                                <?php
                                if (has_nav_menu('menu-1')) { ?>
                                    <div class="site__nav site__nav--main w-full hidden lg:flex lg:justify-end">
                                        <?php
                                        wp_nav_menu(array('theme_location' => 'menu-1'));
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <!--/Menu-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hero__content z-10 h-[609px] lg:h-[760px] relative">
                    <div class="container mx-auto h-full">
                        <div class="flex items-center justify-center h-full">
                            <div class="w-full lg:w-10/12 mx-auto flex flex-wrap items-center justify-center text-center">
                                <h1 class="text-white font-medium text-titleL lg:text-h3 title_with_before">
                                    <?php the_field('hero_title'); ?>
                                </h1>

                                <span class="text-white font-normal lg:text-titleL lg:max-w-2xl pt-8 lg:pt-14">
                                    <?php the_field('hero_subtitle'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-down">
                        <a href="#services">
                            <?php
                            get_template_part('inc/svgs/down');
                            ?>
                        </a>
                    </div>
                </div>
            </header>
        <?php
        } else { ?>
            <header id="masthead" class="site-header bg-secondary px-4">
                <div class="nav__menu relative w-full left-0 top-0 page-header z-20">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap text-white items-center">
                            <div class="w-1/2">
                                <?php
                                $GETlogo = get_field('logo_header', 'option'); ?>
                                <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                                    <?php if ($GETlogo) {
                                        refocus_real_focus_get_Image($GETlogo);
                                    } else {
                                        echo "<h3 class='mb-0'>Logo Brand</h3>";
                                    } ?>
                                </a>
                            </div>
                            <div class="w-1/2">
                                <!--Menu-->
                                <?php
                                if (has_nav_menu('menu-1')) { ?>
                                    <div class="site__nav site__nav--main w-full hidden lg:flex lg:justify-end">
                                        <?php
                                        wp_nav_menu(array('theme_location' => 'menu-1'));
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <!--/Menu-->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php
        } ?>

        <!--/ Header -->


        <!-- Content Page -->
        <div id="content" class="site-content">