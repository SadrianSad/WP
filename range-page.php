<?php /*Template Name: Zasieg */
get_header();
?>

<style>
    .first{
	background: url(<?php the_field('pierwszy_orazek');?>) right center no-repeat;
    }

    .second {
        background: url(<?php the_field('drugi_obrazek');?>) left center no-repeat;
    }
</style>
<div class="page-header"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container">
        <h1 class="white-text"><?php the_title();?></h1>
    </div>
</div>
<main class="range-page gray-bg">
    <div class="our-range-description">
        <div class="container">
            <div class="first">
                <div class="row">
                    <div class="col-md-7">
                        <?php the_field('pierwszy_opis');?>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                    <?php the_field('drugi_opis');?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our-range">
        <div class="container">
            <h2 class="our-range-title"><?php the_field('tytul_sekcji');?>:</h2>
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-5">
                        <ul class="our-range-list">
                        <?php $city = new WP_Query(array('post_type' => 'city'));
                            if($city->have_posts()) {
                                while($city->have_posts()) {
                                $city->the_post(); ?>
                                <li class="our-range-list__item"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title();?></a></li>
                        <?php }	wp_reset_postdata();}?>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="map">
                            <?php echo do_shortcode('[themeprefix_multiple_marker]');

                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





                                </main>

<?php get_footer();?>