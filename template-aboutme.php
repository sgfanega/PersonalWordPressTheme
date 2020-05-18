<?php
    /* Template Name: About Me */
    $portrait_image = get_field('_portrait');
    $about_me_paragraph = get_field('_about_me_paragraph');
?>

<?php get_header();?>

<div class="container d-flex flex-column align-items-center justify-content-center about-me-section">
    
    <?php get_template_part('includes/section', 'content'); ?>
    
    <img src="<?php echo $portrait_image; ?>" alt="Self-Portrait" height="250" width="250">
    <p> <?php echo $about_me_paragraph; ?> </p>

</div>

<?php get_footer();?>