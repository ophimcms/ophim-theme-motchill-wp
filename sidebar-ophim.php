
<aside class="widget-area" role="complementary">

    <?php
    if ( is_active_sidebar('left-sidebar') ) {
        dynamic_sidebar( 'left-sidebar' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    } ?>

    <div class="tag-list-main">
    </div>
</aside>

