<?php
get_header();
?>
<div class="container">
    <div class="clear"></div>
    <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name">Xem phim</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="active"><?= single_tag_title(); ?></li>
    </ol>

    <div class="left-content" id="page-info">
        <div class="list-films film-new">
            <ul>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-md-12 blogShort">

                                <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                         alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                                <br>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <article>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p></article>
                                <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                            </div>

                        </div>
                    <?php }
                    wp_reset_postdata();
                } ?>
            </ul>

            <div class="clear"></div>
            <div class="pagination">
                <?php ophim_pagination(); ?>
            </div>
        </div>
    </div>
    <div class="right-content">
        <?php get_sidebar('ophim'); ?>
    </div>
    <div class="clear"></div>
</div>
<?php
get_footer();
?>
