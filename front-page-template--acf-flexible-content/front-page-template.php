<?php get_header(); ?>

<style>

  /* Page styling */
  body { font-size: 1.6rem; }
  section { border-bottom: none; }


  /* Hero Section */
  .hero-section { margin-top: 10px; padding-block: 55px 60px; background-size: cover; background-repeat: no-repeat !important; }
  .hero-content-left { width: min(100%, 690px); margin-right: auto; }
  .page-title { font-size: 3.4rem; margin-bottom: 5px; }
  .page-sub-title { margin-block: 5px 10px; font-family: "Open Sans", Arial, Helvetica, sans-serif; font-size: 1.8rem; font-weight: 400; color: #13284b; }
  .btn-fp { display: inline-block; margin-block: 15px; padding: 10px 15px; color: #FFFFFF; font-size: 1.8rem; background-color: #E05728; border: 2px solid #E05728; border-radius: 6px; transition: color 350ms, background-color 350ms; }
  .btn-fp:hover { color: white; background-color: #f0673a; transition: color 350ms, background-color 350ms; }
  .hero-btn:not(:first-of-type) { margin-left: 20px; color: #E05728; background-color: white; transition: color 350ms, background-color 350ms; }
  /* .hero-btn:not(:first-of-type):hover { color: white; background-color: #f0673a; transition: color 350ms, background-color 350ms;  } */
  .hero-btn i { font-size: 1.6rem; transition: transform 300ms; }
  .hero-btn:hover i { transform: translateX(4px); transition: transform 300ms; }


  /* Calendar Section */
  .calendar-group-title { margin-block: 15px 0; font-size: 3rem; }
  .calendar-title { font-size: 2rem; color: #E05728; }
  .calendar { display: grid; grid-template-columns: 1fr; grid-gap: 12px; }
  .calendar::before { display: none; }
  .calendar__single-container { display: flex; justify-content: space-between; align-items: center; padding: 20px 20px 20px 0; background-color: #D7EBF6; border-radius: 5px; }

  .calendar__single-content-container { display: flex; align-items: center; }
  .calendar__date-container { display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100px; height: 100px; margin: auto 15px; padding: 20px; font-size: 1.6rem; text-align: center; color: white; background-color: #13274A; border-radius: 50%; }

  .calendar__content-row-text { margin-top: 0; font-size: 1.4rem; }
  .calendar__content-row-3 { display: flex; align-items: center; }
    /**** HCoB-specfic modifications -- start *****/
  .calendar__content-row-1, .calendar__content-row-3 { display: none; }
  .calendar__course-title { margin: 0 0 10px 0; padding-right: 5px; text-align: left; font-size: 2rem; color: #13274A; }
  .calendar__course-desc { margin-bottom: 0; padding-right: 5px; text-align: left; font-size: 1.8rem; color: #13274A; }
  .cal-desc { color: #13274A; font-size: 1.6rem; font-weight: 400; }
    /**** HCoB-specific modfications -- end *****/

  .calendar__bubble-container { display: inline-block; padding: 6px 14px; margin-right: 12px; color: white; background-color:rgb(78, 78, 78); border-radius: 25px; }
  .calendar__bubble { font-size: 1.4rem; text-align: center; }

  .cal-btn-container { min-width: 115px; }
  .cal-btn { display: block; padding: 10px 14px; font-size: 1.6rem; color: #E05728; text-align: center; text-transform: uppercase; text-decoration: none; background-color: white; border: 2px solid #E05728; border-radius: 6px; cursor: pointer; transition: color 350ms, background-color 350ms; }
  .cal-btn:hover { color: white; background-color: #f0673a; transition: color 350ms, background-color 350ms; }
  .cal-btn-disabled { background-color: grey !important; pointer-events: none; }

    /* calendar layouts */
  .calendars-container.half { display: flex; gap: 12px; padding-inline: 0; }
  .calendars-container.half .calendar-section { flex: 1; }
  .calendars-container.full .calendar { grid-template-columns: 1fr 1fr; }


  /* Quote Section */
  .quote-section--full-width { margin-top: 40px; padding-block: 125px 50px; background-color: #f8f8f8; }
  .quote-content-container { width: min(100%, 850px); }
  .quote-content { margin: 20px 0 12px 0; color: #13284b; font-size: 2rem; font-weight: 400; }
  .quote-content::before { content: open-quote; position: absolute;  top: 5px; left: 0; right: 0; margin-inline: auto; font-family: math; font-size: 14rem; color: #E05728; text-align: center; line-height: 5px; }
  .quote-content::after { content: no-close-quote; }
  .quote-cite { font-size: 1.8rem; color: #333; }


  /* Horizontal Rule Block */
  .horizontal-rule hr { margin-block: 25px; background-image: none; }
  .horizontal-rule--dark hr { background-color: #666666; }
  .horizontal-rule--light hr { background-color: lightgrey; }

  
  @media(max-width: 1024px) {
    .calendars-container.half { flex-direction: column; padding-inline: 15px; }
    .calendars-container .calendar-section .calendar { grid-template-columns: 1fr; }
  }

  @media(max-width: 650px) {
    .hero-section { padding-block: 20px 25px; }
    .hero-button-group { margin-top: 30px; }
    .hero-button-group .hero-btn { display: block; width: 70%; margin-right: auto; }
    .hero-btn:not(:first-of-type) { margin-left: 0; }
  }

  @media(max-width: 600px) {
    .hero-button-group .hero-btn { width: 80%; margin-inline: auto; }
    .hero-btn i { display: none; }

    .calendar__single-container { flex-direction: column; align-items: start; padding: 5px;  min-height: 320px; }
    .calendar__single-content-container { flex-direction: column; align-items: start; width: 100%; }
    .calendar__single-content-container--inner { width: 100%; }
    
    .calendar__date-container { flex-direction: row; width: 100%; height: unset; margin: 0; font-size: 1.8rem; border-radius: 0; box-sizing: border-box; }
    .calendar__date--month { padding-right: 6px; }
    
    .calendar__content-row-text { margin: 0; font-size: 1.4rem; }
    .calendar__course-title { margin: 15px 0; font-size: 2.1rem; }
    
    .calendar__content-rows-container  { padding: 15px 0 0 10px; }
    .cal-btn-container { padding: 0 0 20px 10px; }
  }

  @media(max-width: 390px) {
    .hero-button-group .hero-btn { width: 95%; }
  }

</style>


<?php if( have_rows('front_page_flexible_content') ): // Front Page Flexible Content Template
  while( have_rows('front_page_flexible_content') ): the_row();

    $calendar_count = 0; ?>

    
    <?php if( get_row_layout() == 'hero_section_fp' ): // Hero Section ?>

      <section class="hero-section" style="background: url('<?php echo get_sub_field('hero_background_image_fp')['url']; ?>')">
        <div class="container hero-container">

          <?php if(get_sub_field('hero_primary_headline_fp') || get_sub_field('hero_secondary_headline_fp')) : ?>
            <div class="hero-content hero-content-left">

              <?php if(get_sub_field('hero_primary_headline_fp')) : ?>
                <h1 class="page-title"><?php the_sub_field('hero_primary_headline_fp'); ?></h1>
              <?php endif; ?>

              <?php if(get_sub_field('hero_secondary_headline_fp')) : ?>
                <div class="page-sub-title"><?php the_sub_field('hero_secondary_headline_fp'); ?></div>
              <?php endif; ?>

              <?php if( have_rows('hero_buttons_fp') ): ?>
                <div class="hero-button-group">
                  <?php while( have_rows('hero_buttons_fp') ) : the_row(); ?>
                    <a class="hero-btn btn-fp text-center" href="<?php the_sub_field('hero_button_url_fp'); ?>">
                      <?php the_sub_field('hero_button_text_fp'); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  <?php endwhile; ?>
                </div>
              <?php endif ?>

            </div>
          <?php endif; // end hero content (title, subtitle, buttons) conditional ?>

        </div>
      </section>

      
    <?php elseif( get_row_layout() == 'content_section_fp' ): // Basic Content Section (wysiwyg) ?>

      <section class="basic-content-section">
        <div class="container">
          <?php the_sub_field('content_intro_fp'); ?>
        </div>
      </section>


    <?php elseif( get_row_layout() == 'calendar_section_fp' ): // Calendar Section ?>
      
      <?php if( get_sub_field('calendar_group_title_fp') ): ?>
        <h3 class="container text-center calendar-group-title"><?php the_sub_field('calendar_group_title_fp'); ?></h3>
      <?php endif; ?>

      <?php if( have_rows('calendar_fp') ):
        while( have_rows('calendar_fp') ) : the_row();

          $calendar_count++;  // variable first declared at top of template
          $calendar_layout_type = get_sub_field('calendar_layout_type_fp');
          
          // Calendar Section 
          if($calendar_layout_type == 'Full') echo '<section class="container calendars-container full">';
          if($calendar_layout_type == 'Half' && $calendar_count == 1) echo '<section class="container calendars-container half">'; ?>

            <div class="calendar-section">
              <div class="text-center calendar-container">

                <?php if(get_sub_field('calendar_title_fp')) : ?>
                  <h4 class="calendar-title"><?php the_sub_field('calendar_title_fp'); ?></h4>
                <?php endif; ?>

                <div class="calendar calendar-<?php echo $calendar_count; ?>">

                  <?php if( have_rows('calendar_single_entry_fp') ):
                    while( have_rows('calendar_single_entry_fp') ) : the_row(); // calendar single entry loop ?>

                      <div class="calendar__single-container">

                        <div class="calendar__single-content-container">

                          <div class="calendar__single-content-container--inner">
                            <div class="calendar__date-container">
                              <div class="calendar__date--month"><?php the_sub_field('single_entry_month_fp'); ?></div>
                              <div class="calendar__date--day"><?php the_sub_field('single_entry_day_fp'); ?></div>
                            </div>
                          </div>

                          <div class="calendar__content-rows-container">

                            <div class="calendar__content-row calendar__content-row-1">
                              <p class="calendar__content-row-text">
                                <span class="calendar__content-row--date"><?php the_sub_field('single_entry_month_fp'); ?> <?php the_sub_field('single_entry_day_fp'); ?></span> @ 
                                <span class="calendar__content-row--time">Time</span> <span class="calendar__content-row--time-zone">EST</span>
                              </p>
                            </div>

                            <div class="calendar__content-row calendar__content-row-2">
                              <h4 class="calendar__course-title"><?php the_sub_field('single_entry_title_fp'); ?></h4>
                              <?php if(get_sub_field('single_entry_desc_fp')) : ?>
                                <p class="calendar__course-desc"><?php the_sub_field('single_entry_desc_fp'); ?></p>
                              <?php endif; ?>
                            </div>

                            <div class="calendar__content-row calendar__content-row-3">
                              <div class="calendar__bubble-container">
                                <div class="calendar__bubble"><i class="fas fa-calendar-alt"></i> Calendar</div>
                              </div>
                              <div class="calendar__bubble-container">
                                <div class="calendar__bubble"><i class="fas fa-location-arrow"></i> Location</div>
                              </div>
                            </div>

                          </div>

                        </div>

                        <?php if(get_sub_field('single_entry_url_fp')) : ?>
                          <div class="cal-btn-container">
                            <a href="<?php echo get_sub_field('single_entry_url_fp'); ?>" class="cal-btn">Register</a>
                          </div>
                        <?php endif; ?>

                      </div>

                    <?php endwhile; // end calendar single entry loop
                  endif; ?>

                </div>

              </div>
            </div>
            
          <?php if($calendar_layout_type == 'Full') echo '</section>';
                if($calendar_layout_type == 'Half' && $calendar_count == 2) echo '</section>'; 
            
        endwhile;
      endif; ?>

    
    <?php elseif( get_row_layout() == 'quote_section_fp' ): // Quote Section ?>

      <section class="quote-section--full-width">
        <div class="container text-center quote-content-container">
          <h4 class="quote-content"><?php the_sub_field('quote_content_fp'); ?></h4>
          <?php if(get_sub_field('quote_cite_fp')) : ?>
            <p class="quote-cite"><?php the_sub_field('quote_cite_fp'); ?></p>
          <?php endif; ?>
        </div>
      </section>


    <?php elseif( get_row_layout() == 'form_section_fp' ): // RFI Form Section ?>

      <section class="form-section">
        <div class="container form-content-container">

          <?php if(get_sub_field('form_section_title_fp') || get_sub_field('form_section_subtitle_fp')) : ?>
            <div class="text-center form-headline-group">
              <?php if(get_sub_field('form_section_title_fp')) : ?>
                <h3><?php the_sub_field('form_section_title_fp'); ?></h3>
              <?php endif; ?>
              <?php if(get_sub_field('form_section_subtitle_fp')) : ?>
                <p><?php the_sub_field('form_section_subtitle_fp'); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <div class="form-container">
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                region: "na1",
                portalId: "<?php echo get_sub_field('hubspot_form_portal_id_fp'); ?>",
                formId: "<?php echo get_sub_field('hubspot_form_id_fp'); ?>"
              });
            </script>
          </div>

        </div>
      </section>


    <?php elseif( get_row_layout() == 'horizontal_rule_block_fp' ): // Horzontal Rule Section
      
      $horizontal_rule_version = get_sub_field( 'horizontal_rule_fp' ); ?>

      <div class="horizontal-rule container <?php if($horizontal_rule_version == 'Dark Version') echo 'horizontal-rule--dark'; 
                                                  if($horizontal_rule_version == 'Light Version') echo 'horizontal-rule--light'; ?>">
        <hr>
      </div>


    <?php endif; // End Flexible Content Layout Types ?>



  <?php endwhile; // End Flexible Content Loop ?>
<?php endif; // End Flexible Content if statement?>

<?php get_footer() ?>
