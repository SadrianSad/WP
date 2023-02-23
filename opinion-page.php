<?php /*
Template Name: Opinie*/
get_header();?>
<div class="page-header"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="container">
        <h1 class="white-text"><?php the_title()?></h1>
    </div>
</div>
<main  class="page-bg opinion-page">
    <div class="container d-flex  flex-column flex-md-row justify-content-between" style="padding-top: 4.375em">
        <h2 class="opinion-title">Ostatnie opinie</h2>
        <h2 class="add-opinion">Dodaj opinie</h2>
    </div>
    <div class="container d-flex flex-column">
        <?php
    if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;?>
    </div>
</main>

<script>
   document.querySelector('.add-opinion').addEventListener('click', ev => {

document.querySelector('.wpd-field-comment').classList.add('is-active')
})
</script>
<?php get_footer();?>