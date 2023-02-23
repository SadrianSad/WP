<?php get_header(); ?>
<style>
   .guide .container{
	background-image: url('<?php the_field('zdjecie_sekcji_drugiej');?>') ;
	background-position:  right bottom;
	background-repeat:  no-repeat;
}

.pater-description {
	background-image: url('<?php the_field('zdjecie')?>;');
	background-repeat: no-repeat;
	background-position: bottom left;
	min-height: 446px;
	padding-top: 3em;
	background-attachment: fixed;
}

.our-services {
	background: url(<?php the_field('our_services_img');?>) bottom right no-repeat #dadada;
	position: relative;
	padding: 4.6875em 0 11.875em;
}
</style>
<main>
   <div class="main-header" style="background-image: url(<?php the_field('glowny_obrazek'); ?>)">
      <div class="container">
         <h1 class="site-title white-text"><?php the_field('naglowek');?></h1>
      </div>
   </div>
   <div class="pater-description dark-color">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="pater-description__img">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="box">
                  <?php the_field('opis_strony')?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <section class="our-services">
      <div class="container">
         <h2 class="white-text section-title mb-0"><?php the_field('tytul_sekcji_pierwszej');?></h2>
         <div class="accordion mt-2" id="faqAccordion">
            <?php if(have_rows('uslugi')): while(have_rows('uslugi')): the_row();
               $uslugi = get_sub_field('nazwa_uslugi');
               $opis_uslugi = get_sub_field('opis_uslugi');
               $item_id = uniqid() ?>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading<?php echo $item_id ?>">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $item_id ?>" aria-expanded="false" aria-controls="collapse<?php echo $item_id ?>">
                  <span class="accordion-line"></span>
                  <?php echo $uslugi?>
               </button>
               </h2>
               <div id="collapse<?php echo $item_id ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $item_id ?>" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                     <?php echo $opis_uslugi?>
                  </div>
               </div>
            </div>
            <?php endwhile; endif;?>
         </div>
      </div>

   </section>

   <section class="guide">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="guide-text">
               <h2 class="white-text section-title"><?php the_field('tytul_sekcji_drugiej');?></h2>
                  <?php the_field('opis_sekcji_drugiej');?>
               </div>
               <a href="/poradnik" class="btn p-btn">więcej informacji</a>
            </div>
            <div class="col-lg-6">
            </div>
         </div>
      </div>
   </section>

   <section class="contact-page">
      <div class="container">
         <div class="row">
               <div class="col-lg-8">
                  <div class="map">
                  <?php echo do_shortcode('[asdf_asdf_qwer]');?>
                  </div>
               </div>
               <div class="col-lg-4">
                  <address class="adress-contact">
                     <h2 class="contact-title section-title">Kontakt</h2>
                     <ul class="contact-list">
                           <li class="contact-list-item"><span>Telefon:</span>
                              <a href="tel:<?php the_field('telefon');?>"><?php the_field('telefon');?></a>
                           </li>
                           <li class="contact-list-item"><span>Email:</span>
                              <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
                           </li>
                           <li class="contact-list-item"><span>Adres:</span>
                           <?php the_field('adres_field');?>
                           </li>
                     </ul>
                  </address>
               </div>
         </div>
      </div>
   </section>

</main>


<?php get_footer(); ?>