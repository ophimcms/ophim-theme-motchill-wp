<?php
get_header();
?>

<div class="container">
    <div class="clear"></div>
    <div class="left-content">
        <?php
        while ( have_posts() ) : the_post();
            ?>
            <div class="group-film">
                <h1><?php the_title(); ?></h1>
                <div class="content">
                    <?php  the_content(); ?>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
    <div class="right-content">
        <?php get_sidebar('ophim'); ?>
    </div>
    <div class="clear"></div>
</div>

<?php
get_footer();
?>
