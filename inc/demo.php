<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<a href="#" class="btn-contact" title="inbox">
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
                    </div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);