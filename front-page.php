<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>
<main class="main">
    <section id="main" class="main-screen">
        <div class="main-screen__background" style="background-image: url(<?php background_image(); ?>)">
            <div class="layer">
                <div class="container">
                    <!-- /.main-screen-promotion -->
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="main-screen-btn"><a class="action-btn" href="#">Записаться</a></div>
                    <!-- /.a action-btn -->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.main-screen__background -->
    </section>
    <!-- /.main-screen -->
    <section id="master" class="content content-master">
        <div class="container">
            <div class="content-video">


                <video controls preload="metadata">
                    <source src="<?php the_field('first_video'); ?>#t=0.1" type="video/mp4" />
                </video>
                <video controls preload="metadata">
                    <source src="<?php the_field('second_video'); ?>#t=0.1" type="video/mp4" />
                </video>
            </div>
            <!-- /.content-img -->
            <div class="content-intro">
                <?php $query_master = new WP_Query(array('post_type' => 'master', 'posts_per_page' => 1)); ?>
                <?php if ($query_master->have_posts()) : ?>
                    <?php while ($query_master->have_posts()) : ?>
                        <?php $query_master->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'master') ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
                <div class="content-intro__btn">
                    <a href="#" class="action-btn">Записаться</a>
                </div>
                <!-- /.content-into__heading -->
            </div>
            <!-- /.content-intro -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->
    <section id="equipment" class="content content-equipment">
        <div class="container">
            <?php $query_equipment = new WP_Query(array('post_type' => 'equipment', 'posts_per_page' => 1)); ?>
            <?php if ($query_equipment->have_posts()) : ?>
                <?php while ($query_equipment->have_posts()) : ?>
                    <?php $query_equipment->the_post() ?>
                    <?php get_template_part('template-parts/content', 'equipment') ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>

        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->
    <section class="review" id="review">
        <div class="container">
            <?php $query_review = new WP_Query(array('post_type' => 'review', 'posts_per_page' => 3, 'order' => 'ASC')); ?>
            <?php if ($query_review->have_posts()) : ?>
                <?php while ($query_review->have_posts()) : ?>
                    <?php $query_review->the_post() ?>
                    <?php get_template_part('template-parts/content', 'review') ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
            <div class="review-btn">
                <a href="#" class="action-btn">Записаться</a>
            </div>
        </div>
    </section>
    <!-- /.review -->
    <section class="comments" id="comments">
        <div class="container">
            <h2 class="comments-title">ОТЗЫВЫ</h2>
            <div class="comments-wrapper">
                <?php $query_comments = new WP_Query(array('post_type' => 'comments', 'order' => 'ASC')); ?>
                <?php if ($query_comments->have_posts()) : ?>
                    <?php while ($query_comments->have_posts()) : ?>
                        <?php $query_comments->the_post() ?>
                        <?php get_template_part('template-parts/content', 'comments') ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="comments-btn">
                <a href="#" class="action-btn">Попробовать</a>
            </div>
        </div>
    </section>
</main>
<!-- /.main -->
<?php get_footer(); ?>