<?php get_header(); ?>

<div class="page-<?php echo get_the_ID(); ?> wp-def-page pt--100">
<?php the_content(); ?>
</div>

<?php
get_footer();
?>