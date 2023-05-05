<?php 
/*
  Template Name: Front Page Layout
*/

get_header(); ?>


<?php if( have_rows('front_page_flexible_content') ): // Front Page Flexible Content Template
  while( have_rows('front_page_flexible_content') ): the_row();

    $hero_bg_img_url = get_sub_field('hero_background_image_fp')['url'];
    $hero_primary_headline = get_sub_field('hero_primary_headline_fp');
    $hero_secondary_headline = get_sub_field('hero_secondary_headline_fp');
    $calendar_count_half = 1; ?>

    
    <?php if( get_row_layout() == 'hero_section_fp' ): // Hero Section ?>

      <section class="hero-section" style="background: url('<?php echo $hero_bg_img_url; ?>')">
        <div class="container hero-container">

          <?php if($hero_primary_headline || $hero_secondary_headline) : ?>
            <div class="hero-content hero-content-left">

              <?php if( $hero_primary_headline ) : ?>
                <h1 class="page-title"><?php echo $hero_primary_headline; ?></h1>
              <?php endif; ?>

              <?php if( $hero_secondary_headline ) : ?>
                <div class="page-sub-title"><?php echo $hero_secondary_headline; ?></div>
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

      
    <?php elseif( get_row_layout() == 'content_section_fp' ): // Basic Content Section (wysiwyg) 
      
      $basic_content_block = get_sub_field('content_intro_fp'); ?>

      <section class="basic-content-section">
        <div class="container">
          <?php echo $basic_content_block; ?>
        </div>
      </section>


    <?php elseif( get_row_layout() == 'calendar_section_fp' ): // Calendar Section 
      
      $calendar_group_title = get_sub_field('calendar_group_title_fp');
      
      if( $calendar_group_title ): ?>
        <h3 class="container text-center calendar-group-title"><?php echo $calendar_group_title; ?></h3>
      <?php endif; ?>

      <?php if( have_rows('calendar_fp') ):
        while( have_rows('calendar_fp') ) : the_row();

          $calendar_count++;
          $calendar_layout_type = get_sub_field('calendar_layout_type_fp');
          $calendar_title = get_sub_field('calendar_title_fp');
          
          // Calendar Section 
          if( $calendar_layout_type == 'Full' ) echo '<section class="container calendars-container full">';
          if( $calendar_layout_type == 'Half' && $calendar_count_half == 1 ) echo '<section class="container calendars-container half">'; ?>

            <div class="calendar-section">
              <div class="text-center calendar-container">

                <?php if( $calendar_title ) : ?>
                  <h4 class="calendar-title"><?php echo $calendar_title; ?></h4>
                <?php endif; ?>

                <div class="calendar calendar-<?php echo $calendar_count; ?>">

                  <?php if( have_rows('calendar_single_entry_fp') ):
                    while( have_rows('calendar_single_entry_fp') ) : the_row(); // calendar single entry loop 

                      $single_entry_month = get_sub_field('single_entry_month_fp');
                      $single_entry_day = get_sub_field('single_entry_day_fp');
                      $single_entry_title = get_sub_field('single_entry_title_fp');
                      $single_entry_desc = get_sub_field('single_entry_desc_fp');
                      $single_entry_url = get_sub_field('single_entry_url_fp'); ?>

                      <div class="calendar__single-container">

                        <div class="calendar__single-content-container">

                          <div class="calendar__single-content-container--inner">
                            <div class="calendar__date-container">
                              <div class="calendar__date--month"><?php echo $single_entry_month; ?></div>
                              <div class="calendar__date--day"><?php echo $single_entry_day; ?></div>
                            </div>
                          </div>

                          <div class="calendar__content-rows-container">

                            <div class="calendar__content-row calendar__content-row-1">
                              <p class="calendar__content-row-text">
                                <span class="calendar__content-row--date"><?php echo $single_entry_month; ?> <?php echo $single_entry_day; ?></span> @ 
                                <span class="calendar__content-row--time">Time</span> <span class="calendar__content-row--time-zone">EST</span>
                              </p>
                            </div>

                            <div class="calendar__content-row calendar__content-row-2">
                              <?php if( $single_entry_title ) : ?>
                                <h4 class="calendar__course-title" <?php if( !$single_entry_desc ) echo "style='margin-bottom: 0'" ?>><?php echo $single_entry_title; ?></h4>
                              <?php endif; 
                              if( $single_entry_desc ) : ?>
                                <p class="calendar__course-desc"><?php echo $single_entry_desc; ?></p>
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

                        <?php if( $single_entry_url ) : ?>
                          <div class="cal-btn-container">
                            <a href="<?php echo $single_entry_url; ?>" class="cal-btn">Register</a>
                          </div>
                        <?php endif; ?>

                      </div>

                    <?php endwhile; // end calendar single entry loop
                  endif; ?>

                </div>

              </div>
            </div>
            
          <?php if( $calendar_layout_type == 'Full' ) echo '</section>';
                if( $calendar_layout_type == 'Half' && $calendar_count_half == 2 ) { echo '</section>'; $calendar_count_half = 0; }
            
          if( $calendar_layout_type == 'Half' ) $calendar_count_half++;

        endwhile;
      endif; ?>

    
    <?php elseif( get_row_layout() == 'quote_section_fp' ): // Quote Section 
      
      $quote_content = get_sub_field('quote_content_fp');
      $quote_cite = get_sub_field('quote_cite_fp'); 
      $quote_image = get_sub_field('quote_image_fp'); ?>

      <section class="quote-section--full-width">
        <div class="container quote-container">

          <div class="text-center quote-content-container">
            <?php if( $quote_content ) : ?>
              <h4 class="quote-content"><?php echo $quote_content; ?></h4>
            <?php endif;
            if( $quote_cite ) : ?>
              <p class="quote-cite"><?php echo $quote_cite; ?></p>
            <?php endif; ?>
          </div>

          <?php if( $quote_image ) : ?>
            <div class="text-center quote-image-container">
              <img class="quote-image" src="<?php echo $quote_image['url']; ?>" alt="<?php echo $quote_image['alt']; ?>">
            </div>
          <?php endif; ?>

        </div>
      </section>


    <?php elseif( get_row_layout() == 'form_section_fp' ): // RFI Form Section 
      
      $form_section_title = get_sub_field('form_section_title_fp');
      $form_section_subtitle = get_sub_field('form_section_subtitle_fp');
      $hubspot_form_portal_id = get_sub_field('hubspot_form_portal_id_fp');
      $hubspot_form_id = get_sub_field('hubspot_form_id_fp'); ?>

      <section class="form-section">
        <div class="container form-content-container">

          <?php if( $form_section_title || $form_section_subtitle ) : ?>
            <div class="text-center form-headline-group">
              <?php if( $form_section_title ) : ?>
                <h3><?php echo $form_section_title; ?></h3>
              <?php endif;
              if( $form_section_subtitle ) : ?>
                <p><?php echo $form_section_subtitle; ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <div class="form-container">
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                region: "na1",
                portalId: "<?php echo $hubspot_form_portal_id; ?>",
                formId: "<?php echo $hubspot_form_id; ?>"
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


    <?php elseif( get_row_layout() == 'spacer_block_fp' ): // Spacer Block ?>

      <div class="spacer-container" style="height: <?php the_sub_field('spacer_height_fp'); ?>px;"></div>


    <?php endif; // End Flexible Content Layout Types ?>


  <?php endwhile; // End Flexible Content Loop ?>
<?php endif; // End Flexible Content if statement?>

<?php get_footer() ?>