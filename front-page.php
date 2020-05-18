<?php get_header();?>

    <div class="container d-flex flex-column align-items-center justify-content-center">
        <div class="front-page-main-container d-flex flex-column align-items-center justify-content-center">
            <?php get_template_part('includes/section', 'content'); ?>
                <h1 class="full-name"> <?php the_field('_home_full_name'); ?> </h1>
                <p class="job-name"> <?php the_field('_home_job'); ?> </p>
        </div>
    </div>

<?php get_footer();?>