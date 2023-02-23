<?php /*Template Name: Galeria */
get_header();
?>

<div class="page-header"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container">
        <h1 class="white-text"><?php the_title();?></h1>
    </div>
</div>
<main class="gallery-page">
    <div class="container">
    <h2 class="gallery-page-title">Dokumentacja dotychczasowych usług:</h2>
        <?php $images = get_field('galeria');
        if( $images ): ?>
            <ul class="realisations-gallery">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-title="<?php echo esc_attr($image['alt']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</main>

<?php get_footer()?>