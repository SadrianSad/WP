

<?php /*Template Name: Poradnik */
get_header();
?>

<style>
    .guide-first-section .container{
        background-image: url(<?php the_field('obrazek_pierwszy')?>);
        background-position: left bottom;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .guide-last-section .container {
        background: url(<?php the_field('obrazek_drugi')?>) right bottom no-repeat;
        background-size: contain;
    }
</style>

<div class="page-header"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container">
        <h1 class="white-text"><?php the_title();?></h1>
    </div>
</div>
<main class="guide-page">
    <div class="guide-first-section">
        <div class="container">
            <div class="row d-flex flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6 guide-description">

                        <?php the_field('opis_poradnik');?>

                    <a href="tel:+48604131054" class="btn news-card-btn">zadzwoń</a>
                </div>
            </div>
        </div>
    </div>

    <div class="guide-second-section dark-color">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="guide-title"><?php the_field('tytul_pierwszego_opisu');?></h2>
                    <?php the_field('pierwszy_opis');?>
                </div>
                <div class="d-none d-md-flex justify-content-center col-md-2 img-guide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/aftbtn.svg">
                </div>
                <div class="col-md-5">
                    <h2 class="guide-title"><?php the_field('tytul_pierwszego_opisu');?></h2>
                    <?php the_field('drugi_opis');?>
                </div>
            </div>
        </div>
    </div>

    <div class="guide-last-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-section">
                    <h2 class="guide-title"><?php the_field('tytul_dodatkowe_informacje');?></h2>
                    <?php the_field('opis_dodatkowych_informacji');?>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer()?>