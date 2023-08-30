<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package refocus_real_focus
 */
?>

</div>
<!--/ Content Page -->

<?php
if (!is_404()) {
    if (!is_home()) {
        get_template_part('template-parts/cta', 'footer');
    }
}
?>

<!-- Footer -->
<footer class="site-footer bg-black">
    <div class="container mx-auto py-24">
        <div class="site__footer__content flex flex-wrap px-4 justify-center lg:justify-start">

            <div class="site__footer__logo w-full md:w-1/2 lg:w-4/12 text-left mb-4">
                <a class="text-white uppercase text-titleM logofooter" href="<?php echo esc_url(get_bloginfo('url')); ?>">
                    <?php $GETlogo = get_field('logo_footer', 'option'); ?>
                    <?php echo $GETlogo; ?>
                </a>

                <div class="contentFooter mt-4">
                    <?php if (get_field('city', 'option')) { ?>
                        <span class="text-dark-2 text-bodyM inline-flex w-full">
                            <?php echo get_field('city', 'option'); ?>
                        </span>
                    <?php
                    } ?>

                    <?php if (get_field('phone', 'option')) { ?>
                        <a class="inline-flex text-dark-2 visited:text-dark-2 hover:text-white text-bodyM" href="mailto:<?php echo get_field('phone', 'option'); ?>">
                            <?php echo get_field('phone', 'option'); ?>
                        </a>
                    <?php
                    } ?>

                    <?php if (get_field('copyright', 'option')) { ?>
                        <span class="text-dark-2 text-bodyM mt-10 lg:mt-6 inline-flex [&_p]:text-dark-2">
                            <?php echo get_field('copyright', 'option'); ?>
                        </span>
                    <?php
                    } ?>

                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-8/12">
                <?php $emails = get_field('emails', 'option'); ?>

                <?php if ($emails) { ?>
                    <div class="emails grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <?php
                        foreach ($emails as $email) { ?>
                            <div class="item__email">
                                <a class="block" href="mailto:<?php echo $email['email']; ?>">
                                    <?php echo $email['email']; ?>
                                </a>
                                <h4 class="text-titleS font-normal mt-1">
                                    <?php echo $email['position']; ?>
                                </h4>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                } ?>
            </div>


        </div>
    </div>
</footer>
<!--/ Footer -->
</div>
<?php wp_footer(); ?>
</body>

</html>