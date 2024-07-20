</div>
</div>
<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</div>
<script>
    $(document).ready(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
    });
</script>
<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.raty.js"></script>
<script>
    $(document).ready(function() {
        $('.top-star').raty({
            readOnly: true,
            numberMax: 5,
            half: true,
            score: function() {
                return $(this).attr('data-rating');
            },
            hints: ["bad", "poor", "regular", "good", "gorgeous"],
            space: false
        });
    })
</script>
<?php wp_footer(); ?>
</html>