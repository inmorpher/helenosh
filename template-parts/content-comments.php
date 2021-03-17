<div class="comments-item">
    <div class="comments-item__img">
        <?php the_post_thumbnail('avatar_thumb') ?>
    </div>
    <div class="comments-item-content">
        <div class="comments-item-content__name"><?php the_title(); ?></div>
        <div class="comments-item-content__text">
            <?php the_content(); ?>

        </div>
    </div>
</div>