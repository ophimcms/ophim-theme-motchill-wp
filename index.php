<?php
get_header();
?>

<div class="container">
    <?php if ( is_active_sidebar('widget-slider-poster') ) {
        dynamic_sidebar( 'widget-slider-poster' );
    } else {
        _e('This is widget poster. Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
    <div class="clear"></div>
    <div class="left-content">
        <?php if ( is_active_sidebar('widget-area') ) {
            dynamic_sidebar( 'widget-area' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
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
