<?php
class WG_oPhim_Footer extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_footer', // Base ID
            __( 'Ophim Footer', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu footer', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['footer'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('footer'); ?>"><?php _e('Footer', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"  ><?php if(isset($instance['footer']) && $instance['footer']){ echo $instance['footer'];}else{ ?>  <a href="#" class="btn-contact" title="inbox">
                    <i class="fa fa-envelope-o"></i>
                    </a>
                    <div id="footer">
                    <div class="container">
                    <div class="desc">
                    <p>
                    <b>
                    <a href="/">Xem phim online</a>
                    </b> miễn phí chất lượng cao với phụ đề tiếng việt - thuyết minh - lồng tiếng. Mọt phim có nhiều thể
                    loại phim phong phú, đặc sắc, nhiều bộ phim hay nhất - mới nhất.
                    </p>
                    <p>Website với giao diện trực quan, thuận tiện, tốc độ tải nhanh, thường xuyên cập nhật các
                    bộ phim mới hứa hẹn sẽ đem lại những trải nghiệm tốt cho người dùng.</p>
                    </div>
                    <div class="info">
                    <!--contact-->
                    <div class="column">
                    <div class="heading">Quy định</div>
                    <ul>
                    <li>
                    <a href="#">Điều khoản chung</a>
                    </li>
                    <li>
                    <a href="#">Chính sách riêng tư</a>
                    </li>
                    </ul>
                    </div>
                    <div class="column">
                    <div class="heading">Giới thiệu</div>
                    <ul>
                    <li>
                    <a href="#">Trang chủ</a>
                    </li>
                    <li>
                    <a href="#">Facebook</a>
                    </li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div><?php } ?></textarea>
        </p>

        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['footer'] = $new_instance['footer'];
        return $instance;
    }

}
function register_new_widget_Footer() {
    register_widget( 'WG_oPhim_Footer' );
}
add_action( 'widgets_init', 'register_new_widget_Footer' );
