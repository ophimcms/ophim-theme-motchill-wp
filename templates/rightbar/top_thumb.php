<div class="trailer block">
    <div class="caption">
        <span class="uppercase"><?= $title; ?></span>
    </div>
    <ul class="list-film">
        <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
        <li class="film-item-ver">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img class="avatar" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?= op_get_thumb_url() ?>" />
            </a>
            <div class="title">
                <p class="name">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> <?= op_get_year() ?>"><?php the_title(); ?></a>
                </p>
                <p class="real-name"><?= op_get_year() ?></p>
            </div>
            <p class="top-star" data-rating="<?= op_get_rating()*10 ?>"></p>
        </li>
        <?php endwhile; ?>
    </ul>
</div>
