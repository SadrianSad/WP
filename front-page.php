<?php get_header(); ?>
<main>
    <section class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <?php $args = array('post_type' => 'post', 'posts_per_page' => 1, 'order' => 'DESC');
                        $wp_query = new WP_Query($args);
                        if (have_posts()) : while (have_posts()) : the_post();?>
                    <article class="post-card">
                        <div class="post-card-inner">
                            <div class="post-image-wrapper">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <div class="post-card-body">
                                    <div class="row">
                                        <div class="col-sm-4 position-img">
                                            <img class="post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </div>
                                        <div class="col-sm-8">
                                            <?php the_excerpt(); ?>
                                            <a href="<?php echo get_permalink(); ?>" class="btn btn-lead">Czytaj więcej</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; endif; ?>
                </div>

                <div class="col-lg-5">
                    <div class="form-block">
                        <h3 class="search-blog"> Szukaj na blogu</h3>
                        <form method="get" class="widget-search" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('Czego szukasz?', 'test' ); ?> " />
                            <button class="searchform-button">Szukaj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-blog section-padding">
        <div class="container">
            <h2 class="section-title"> Wszystkie kategorie</h2>
            <div class="blog-posts">
                <div class="row mb-3">
                <?php foreach ( get_categories() as $category ) : ?>
                    <?php echo '<h3 class="category-title">'.$category->name.'</h3>'; ?>

                    <?php
                        $args = array('post_type' => 'post', 'cat'=> $category->term_id, 'posts_per_page' => 3, 'order' => 'DESC');
                        $wp_query = new WP_Query($args);
                        if (have_posts()) : while (have_posts()) : the_post();?>

                        <article class="post-card col-sm-6 col-lg-4">
                            <div class="post-card-inner">
                            <div class="post-image-wrapper">
                                <h4 class="post-title"><?php the_title(); ?></h4>
                                <img class="post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="post-card-body">
                                <?php the_excerpt(); ?>
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-lead">Czytaj więcej</a>
                            </div>
                            </div>

                        </article>
                    <?php endwhile;
                    endif; ?>

                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>