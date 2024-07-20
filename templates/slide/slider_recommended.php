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
