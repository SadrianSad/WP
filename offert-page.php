<?php /*
Template Name: Oferta*/
get_header();?>

<style>
    .offert-page {
	background: url(<?php the_field('our_services_img')?>) bottom left no-repeat #dadada;
	position: relative;
	padding: 4.6875em 0 11.875em;
}
</style>
<div class="page-header"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container">
        <h1 class="white-text"><?php the_title('')?></h1>
    </div>
</div>
<main  class="page-bg offert-page">
    <div class="container">
        <div class="accordion" id="faqAccordion">
            <?php if(have_rows('uslugi')): while(have_rows('uslugi')): the_row();
                $uslugi = get_sub_field('nazwa_uslugi');
                $opis_uslugi = get_sub_field('opis_uslugi');
                $item_id = uniqid()?>
            <div class="accordion-item">
                <h2 class="accordion-header mt-3" id="heading<?php echo $item_id ?>">
                <button class="accordion-button" type="button"  data-bs-target="#collapse<?php echo $item_id ?>" aria-expanded="false" aria-controls="collapse<?php echo $item_id ?>">
                    <span class="accordion-line"></span>
                    <?php echo $uslugi?>
                </button>
                </h2>
                <div id="collapse<?php echo $item_id ?>" aria-labelledby="heading<?php echo $item_id ?>" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <?php echo $opis_uslugi?>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>

</main>
<?php get_footer();?>
