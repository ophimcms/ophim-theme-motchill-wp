<div class="container">
    <div class="clear"></div>
    <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name">Xem phim</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="active"><?php the_title(); ?></li>
    </ol>
    <div class="left-content">
        <div class="left-content" id="page-info">
            <div class="blockbody">
                <div class="info" itemscope itemtype="https://schema.org/TVSeries">
                    <div class="poster">
                        <a class="adspruce-streamlink" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img itemprop="image" src="<?= op_get_thumb_url() ?>" title="<?php the_title(); ?>"
                                 alt="<?php the_title(); ?>" />
                        </a>
                        <img class="hidden" itemprop="thumbnailUrl" src="<?= op_get_thumb_url() ?>">
                        <ul class="buttons two-button">
                            <li>
                                <a class="btn-see btn btn-primary btn-download-link"
                                   onclick="alert('Chức năng download đang được xây dựng và sẽ sớm ra mắt ^^');return false;">
                                    Tải phim </a>
                            </li>
                            <li>
                                <a class="btn-see btn btn-danger btn-stream-link" href="<?= watchUrl() ?>"
                                   title="Xem phim <?php the_title(); ?>"> Xem phim
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="text">
                        <h1>
                            <span class="title" itemprop="name"><?php the_title(); ?></span>
                        </h1>
                        <h2>
                        <span class="real-name"><?= op_get_original_title() ?>
                            (<?= op_get_year() ?>)</span>
                        </h2>
                        <div class="dinfo">
                            <dl class="col">
                                <dt>Trạng thái:</dt>
                                <dd class="film-status">
                                <span class="badge badge-info"
                                      style="border-radius: 0px;"><?= op_get_episode() ?>
                                    <?= op_get_lang() ?></span>
                                </dd>
                                <dt>Đạo diễn:</dt>
                                <dd>
                                    <?= op_get_directors(10,', ') ?>
                                </dd>
                                <dt>Thời lượng:</dt>
                                <dd><?= op_get_runtime() ?></dd>
                                <dt>Số tập:</dt>
                                <dd><?= op_get_total_episode() ?></dd>
                                <dt>Tình trạng:</dt>
                                <dd>
                                    <?= op_get_status() ?>
                                </dd>
                                <dt>Ngôn ngữ:</dt>
                                <dd><?= op_get_lang() ?></dd>
                                <dt>Năm sản xuất:</dt>
                                <dd><?= op_get_year() ?></dd>
                                <dt>Quốc gia:</dt>
                                <dd>
                                    <?= op_get_regions(', ') ?>
                                </dd>
                                <dt>Thể loại:</dt>
                                <dd>
                                    <?= op_get_genres(', ') ?>
                                </dd>
                                <dt>Diễn viên:</dt>
                                <dd>
                                    <?= op_get_actors(10,', ') ?>
                                </dd>
                            </dl>
                        </div>
                        <div class="clear"></div>
                        <div class="btn-groups">
                            <div class="box-btn clear">
                                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count"
                                     data-action="like" data-show-faces="false" data-share="true">
                                </div>
                                <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="small">
                                </div>
                                <div class="gg-like"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="col">
                                <div class="box-rating" itemprop="aggregateRating" itemscope
                                     itemtype="https://schema.org/AggregateRating">
                                    <div id="star"
                                         data-score=" <?= op_get_rating() ?>"
                                         style="cursor: pointer;"></div>
                                    <div>
                                        <div id="div_average" style="float: left; line-height: 16px; margin: 0 5px; ">
                                            <span id="hint"></span> ( <span class="average" id="average"
                                                                            itemprop="ratingValue"> <?= op_get_rating() ?></span>
                                            điểm / <span id="rate_count"
                                                         itemprop="ratingCount"><?= op_get_rating_count() ?></span>
                                            lượt)
                                        </div>
                                        <meta itemprop="bestRating" content="10" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="detail">
                    <div class="tabs-content" id="info-film">
                        <h3 class="heading"> Nội dung phim </h3>
                        <div class="tab">
                            <div style="text-align: justify;">
                                <b><?php the_title(); ?></b>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                    </div>
                    <ul class="tags">
                        <li class="caption">
                            <span>Tags</span>
                            <i class="fa fa-caret-right"></i>
                        </li>
                        <li class="tag-item">
                            <h2>
                                <?= op_get_tags(' | ') ?>
                            </h2>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <div class="keywords">
                        <h4>xem phim <?php the_title(); ?> vietsub, phim <?= op_get_original_title() ?> vietsub, xem
                            <?php the_title(); ?> vietsub online tap 1, tap 2,
                            tap
                            3, tap 4, phim <?= op_get_original_title() ?> ep 5, ep 6, ep 7, ep 8, ep 9, ep 10, xem
                            <?php the_title(); ?> tập 11, tập 12, tập
                            13,
                            tập 14, tập 15, phim <?php the_title(); ?> tap 16, tap 17, tap 18, tap 19, tap 20, xem phim
                            <?php the_title(); ?> tập
                            21,
                            23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47,
                            48,
                            49, 50, <?php the_title(); ?> tap cuoi, <?= op_get_original_title() ?> vietsub tron bo,
                            review <?php the_title(); ?> netflix, <?php the_title(); ?>
                            wetv, <?php the_title(); ?> phimmoi, <?php the_title(); ?> youtube,
                            <?php the_title(); ?> dongphym, <?php the_title(); ?> vieon, phim
                            keeng,
                            bilutv, biphim, hdvip, hayghe, motphim, tvhay, zingtv, fptplay, phim1080, luotphim, fimfast,
                            dongphim,
                            fullphim, phephim, vtvgiaitri <?php the_title(); ?> full, <?= op_get_original_title() ?>
                            online, <?php the_title(); ?> Thuyết Minh, <?php the_title(); ?>Vietsub,
                            <?php the_title(); ?> Lồng Tiếng</h4>
                    </div>
                </div>
                 <?php if (op_get_notify()) { ?>
                <div class="film-note">
                    <h4 class="hidden">Ghi chú</h4>GHI CHÚ: <?= op_get_notify() ?>
                </div>
                 <?php } ?>
                <?php if (op_get_showtime_movies()) { ?>
                <div class="film-note">
                    <h4 class="hidden">Lịch chiếu</h4>LỊCH CHIẾU: <?= op_get_showtime_movies() ?>
                </div>
                <?php } ?>

                <div id="comment-tab">
                    <div class="box-comment" id="tabs-facebook" style="width: 100%; background-color: #fff">
                        <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
                    </div>
                </div>

                <div class="list-films film-hot">
                    <h2 class="title-box">
                        <i class="fa fa-star-o"></i>
                        <a href="javascript:void(0)">Phim đề cử</a>
                    </h2>
                    <ul id="film_related" class="relative">
                        <?php
                        $postType = 'ophim';
                        $taxonomyName = 'ophim_genres';
                        $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                        if ($taxonomy) {
                            $category_ids = array();
                            foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                            $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 10, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                            $my_query = new wp_query($args);

                            if ($my_query->have_posts()):
                                while ($my_query->have_posts()):$my_query->the_post(); ?>
                                    <li class="item" title="<?php the_title(); ?>">
                                        <span class="label"><?= op_get_episode() ?> <?= op_get_lang() ?></span>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img class="img-film" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                                 src="<?= op_get_thumb_url() ?>" />
                                            <i class="icon-play"></i>
                                        </a>
                                        <div class="text absolute">
                                <span class="">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </span>
                                        </div>
                                    </li>
                        <?php
                                endwhile;
                            endif;
                            wp_reset_query();
                        }
                        ?> 

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="right-content">
        <?php get_sidebar('ophim'); ?>
    </div>
    <div class="clear"></div>
</div>

<?php
add_action('wp_footer', function (){?>
    <script type="text/javascript">
        const URL_POST_RATING = '<?php echo admin_url('admin-ajax.php')?>';
        const postid = '<?= get_the_ID()?>';
    </script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/filmdetail.js?v=1.2.2"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#film_related").owlCarousel({
                items: 4,
                itemsTablet: [700, 3],
                itemsMobile: [479, 2],
                navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                stopOnHover: true,
                pagination: false,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
            });

            //Tính lại chiều cao cho các ảnh bị lệch nhau trên mobile
            var first_img_w = $(".img-film").eq(0).width();
            var first_img_h = first_img_w * (1.25); // Chiều cao bằng chiều rộng x 1.42
            $(".img-film").height(first_img_h);

            $(function() {
                $('.dinfo').slimScroll({
                    height: '250px'
                });
            });

        })
    </script>

<?php }) ?>