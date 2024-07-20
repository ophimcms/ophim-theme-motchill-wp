<li class="<?= $xClass ?>">
    <span class="label"><?= op_get_episode() ?> <?= op_get_lang() ?></span>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img class="img-film lazy"
             data-original="<?= op_get_thumb_url() ?>"
             title="<?php the_title(); ?>"
             alt="<?php the_title(); ?>" />
        <i class="icon-play"></i>
    </a>
    <div class="name">
        <span>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> <?= op_get_year() ?>">
                <?php the_title(); ?> <?= op_get_year() ?>
            </a>
        </span>
    </div>
</li>
