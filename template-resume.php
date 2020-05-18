<?php
    /* Template Name: Resume */
?>

<?php get_header();?>

<div class="container align-content-center">
    <span class="container d-flex justify-content-center">
        <h2><?php the_title(); ?></h2>
    </span>
    </br>
    <?php get_template_part('includes/section', 'content'); ?>
    </br>
    </br>

</div>
    
<?php get_footer();?>