<?php /* Template Name: home-template */
get_header(); ?>

<div class="container">
  <div class="content-wrapper text-center">
    <div class="main-text">
      <h1><?php the_field('main_title') ;?>Vind jouw <span>
      rijschool<?php the_field('main_title_blue') ;?></span></h1>
    </div><!-- .main-text -->
    <div class="slider">
      <div class="intro-content-wrapper slide">
        <div class="main-cta">
          <a href="javascript:;" class="btn" id="triggerForm">
          <?php the_field('btn_text') ;?>Vind mijn rijschool
          </a>
        </div><!-- .main-cta -->
        <div class="features">
          <ul>
            <li>
              <i class="fas fa-check-circle"></i>
              <span><?php the_field('feature_1') ;?>Gratis proefles t.w.v.  <b>€35</b> met professioneel advies</span>
            </li>
            <li>
              <i class="fas fa-check-circle"></i>
              <span><?php the_field('feature_2') ;?>Rijlessen v.a.<b>€26</b>
              Slagingspercentage boven gemiddeld</span>
            </li>
            <li>
            <i class="fas fa-check-circle"></i>
              <span><?php the_field('feature_3') ;?>Je rijbewijs nu voor <b>slechts €749</b>,
              18 rijlessen + SpoedTheorie + CBR Examens!</span>
            </li>
          </ul>
        </div><!-- .features -->
      </div><!-- .intro-content-wrapper -->
      <div class="form-wrapper slide">
        <?php echo do_shortcode( '[contact-form-7 id="9" title="Contact form 1"]' ); ?>
      </div><!-- .form-wrapper -->
    </div><!-- slider -->
  </div><!-- .content-wrapper -->
</div><!-- .container -->

<?php get_footer();?>