<?php get_header(); ?>

<div class="single-page">
    <div class="container">
        <div class="main-single">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="post-single">
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <div class="post-meta">
                                <i class="fas fa-clock"></i>
                                <span><?php the_time(' d F Y'); ?></span>
                            </div>
                            <div class="post-meta">
                                <i class="fas fa-user"></i>
                                <span><?php the_author(); ?></span>
                            </div>
                            <div class="post-meta">
                                <i class="fas fa-folder-open"></i>
                                <span><?php the_category(' , '); ?> </span>
                            </div>
                            <div class="post-meta">
                                <i class="fas fa-eye"></i>
                                <span><?php if (function_exists('the_views')) {
                                            the_views();
                                        } ?></span>
                            </div>
                        </header>

                        <div class="post-thumbnail">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        </div>

                        <div class="content-single">
                            <?php the_content(); ?>
                        </div>


                    </article>
            <?php
                endwhile;
            endif;
            ?>

            <section class="related-post">
                <div class="related-head">
                    <h4>مطالب زیر را حتما مطالعه کنید</h4>
                </div>

                <div class="article-slider">
                    <div id="related_slider" class="owl-carousel owl-theme">
                        <div class="item box-article">
                            <img src="img/post.png">
                            <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                            <p>چگونه سایت بسازیم؟ این سوالی است که در ابتدای کار شاید کمی سخت و پیچیده... </p>
                            <div class="btn-more"><a href="#">بیشتر بخوانید</a> </div>
                        </div>

                        <div class="item box-article">
                            <img src="img/post.png">
                            <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                            <p>چگونه سایت بسازیم؟ این سوالی است که در ابتدای کار شاید کمی سخت و پیچیده... </p>
                            <div class="btn-more"><a href="#">بیشتر بخوانید</a> </div>
                        </div>

                        <div class="item box-article">
                            <img src="img/post.png">
                            <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                            <p>چگونه سایت بسازیم؟ این سوالی است که در ابتدای کار شاید کمی سخت و پیچیده... </p>
                            <div class="btn-more"><a href="#">بیشتر بخوانید</a> </div>
                        </div>

                        <div class="item box-article">
                            <img src="img/post.png">
                            <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                            <p>چگونه سایت بسازیم؟ این سوالی است که در ابتدای کار شاید کمی سخت و پیچیده... </p>
                            <div class="btn-more"><a href="#">بیشتر بخوانید</a> </div>
                        </div>

                        <div class="item box-article">
                            <img src="img/post.png">
                            <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                            <p>چگونه سایت بسازیم؟ این سوالی است که در ابتدای کار شاید کمی سخت و پیچیده... </p>
                            <div class="btn-more"><a href="#">بیشتر بخوانید</a> </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>