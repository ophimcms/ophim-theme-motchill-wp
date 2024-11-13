<div class="list-films film-hot">
    <h2 class="title-box">
        <a class="tophot"><?= $title ?></a>
    </h2>
    <ul id="film_hot" class="relative">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
        <li class="item" title="<?php the_title(); ?>">
            <span class="label"><?= op_get_episode() ?> <?= op_get_lang() ?></span>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img class="img-film" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?= op_get_thumb_url() ?>" />
                <i class="icon-play"></i>
            </a>
            <div class="text absolute">
                        <span class="title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </span>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
</div>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
<script>

    $(document).ready(function() {
        $("#film_hot").owlCarousel({
            items: 5,
            itemsTablet: [700, 3],
            itemsMobile: [479, 2],
            scrollPerPage: true,
            lazyLoad: true,
            navigation: true, // Show next and prev buttons
            slideSpeed: 800,
            paginationSpeed: 400,
            stopOnHover: true,
            pagination: false,
            autoPlay: 8000,
            navigationText: ['<i class="fa fa-angle-left"></i>', ' <i class="fa fa-angle-right"></i>'],
        });

        var first_img_w = $("#film_hot .img-film").eq(0).width();
        var first_img_h = first_img_w * (1.42);
        $("#film_hot .img-film").height(first_img_h);

        // first_img_w = $(".film-moi .img-film").eq(0).width();
        // first_img_h = first_img_w * (1.42);
        // $(".film-moi .img-film").height(first_img_h);
        $(".film-moi .img-film").height(252);
    });
</script>