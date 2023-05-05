<?php 
/*
  Template Name: Sell Page Layout
*/

get_header(); ?>

<?php if( have_rows('sell_page_flexible_content') ): // START FLEXIBLE TEMPLATE ?>
  <?php while( have_rows('sell_page_flexible_content') ): the_row(); ?>


    <?php if( get_row_layout() == 'hero_section_sp' ): // Hero Section 
      
      $hero_primary_headline = get_sub_field('hero_primary_headline_sp');
      $hero_secondary_headline = get_sub_field('hero_secondary_headline_sp'); ?>

      <section class="hero-section" style="background: url('<?php echo get_sub_field('hero_background_image_sp')['url']; ?>')">
        <div class="container hero-container">

          <?php if( $hero_primary_headline || $hero_secondary_headline ) : ?>
            <div class="hero-content hero-content-left">

              <?php if( $hero_primary_headline ) : ?>
                <h1 class="page-title"><?php echo $hero_primary_headline; ?></h1>
              <?php endif; ?>

              <?php if( $hero_secondary_headline ) : ?>
                <div class="page-sub-title"><?php echo $hero_secondary_headline; ?></div>
              <?php endif; ?>

              <?php if( have_rows('hero_buttons_sp') ): ?>
                <div class="hero-button-group">
                  <?php while( have_rows('hero_buttons_sp') ) : the_row(); ?>
                    <a class="hero-btn btn-fp text-center" href="<?php the_sub_field('hero_button_url_sp'); ?>">
                      <?php the_sub_field('hero_button_text_sp'); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                  <?php endwhile; ?>
                </div>
              <?php endif ?>

            </div>
          <?php endif; // end hero content (title, subtitle, buttons) conditional ?>

        </div>
      </section>


    <?php elseif( get_row_layout() == 'icon_blocks_section_sp' ): // Icon Blocks
      $icon_blocks_primary_headline = get_sub_field('icon_blocks_primary_headline_sp');
      $icon_blocks_secondary_headline = get_sub_field('icon_blocks_secondary_headline_sp');
      ?>

      <section class="container intro-icons-container">
        <?php if( $icon_blocks_primary_headline || $icon_blocks_secondary_headline ): ?>
          <div class="icon-blocks-headline-container">
            <?php if( $icon_blocks_primary_headline ): ?>
              <h3 class="icon-blocks-primary-headline"><?php echo $icon_blocks_primary_headline; ?></h3>
            <?php endif; ?>
            <?php if( $icon_blocks_secondary_headline ): ?>
              <p class="icon-blocks-secondary-headline"><?php echo $icon_blocks_secondary_headline; ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        
        <?php if( have_rows('icon_blocks_sp') ): ?>
          <div class="intro-icons-wrap">

            <?php while ( have_rows('icon_blocks_sp') ) : the_row(); 
              $icon_block_image_url = get_sub_field('icon_block_image_sp')['url'];
              $icon_block_title = get_sub_field('icon_block_title_sp');
              $icon_block_content = get_sub_field('icon_block_content_sp'); ?>

              <div class="icon-block-wrap">
                <?php if( $icon_block_image_url ): ?>
                  <img class="icon-block-graphic" src="<?php echo $icon_block_image_url; ?>">
                <?php endif; 
                if( $icon_block_title ): ?>
                  <h5 class="icon-block-title"><?php echo $icon_block_title; ?></h5>
                <?php endif;
                if( $icon_block_content ): ?>
                  <p class="icon-block-content"><?php echo $icon_block_content; ?></p>
                <?php endif; ?>
              </div>

            <?php endwhile; ?>

          </div>
        <?php endif; ?>
      </section>


    <?php elseif( get_row_layout() == 'tab_component_sp' ): // Tabs Component

      $tab_section_counter++;
      $sell_tab_counter = 1; ?>

      <section id="tab-section-<?php echo $tab_section_counter; ?>" class="tabs-component-section container">

        <?php if( have_rows('tabs_sp') ): // tab titles ?>

          <div class="tab-title-wrap scroll">

            <?php while ( have_rows('tabs_sp') ) : the_row(); ?>	

              <div class="tab">
                <div class="tab-inner-wrap">
                  <h4 class="tab-title tab-title-<?php echo $sell_tab_counter; ?>"><?php the_sub_field('tab_title_sp'); ?></h2>
                </div>
              </div>

              <?php $sell_tab_counter++;  

            endwhile; ?>

          </div> 
        <?php endif; ?>

				<?php if( have_rows('tabs_sp') ): // tab content
        
				  $sell_tab_counter = 1; ?>
				
          <div class="tab-content-container">

            <?php while ( have_rows('tabs_sp') ) : the_row(); ?>
              <div class="tab-content-wrap tab-content-wrap-<?php echo $sell_tab_counter; ?>">

                <?php if( get_sub_field('include_product_packages_sp') ) : // include product packages check ?>

                  <section class="cre__component-container--outer">
                    
                    <div class="cre__mobile-previous cre__carousel-arrow">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="cre__mobile-next cre__carousel-arrow">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                    
                    <div class="cre__component-container--inner main-grid-container">
                      
                      <div class="cre__grid-area-1 cre__grid-area cre__grid-top-left">
                        <div style="height: 0px;"></div>

                        <div class="cre__grid-top-left-inner-container">

                          <div class="cre__grid-top-left-wysiwig-container">
                            <?php the_sub_field('product_packages_top_left_grid_sp'); ?>
                          </div>
                      
                          <?php // Learning Modalities and Dropdown (Original Markup)
                          // <p class="cre__delivery-method-intro-text">Hondros offers multiple ways to learn, including:</p>
                          // <ul class="cre__delivery-method-intro-list">
                          //   <li class="cre__delivery-method-intro-list-item"><i class="fas fa-chalkboard-teacher cre__delivery-method-text-icon"></i> In-person Classes</li>
                          //   <li class="cre__delivery-method-intro-list-item"><i class="fas fa-laptop cre__delivery-method-text-icon" style="font-size: 19px;"></i> Livestream Classes</li>
                          //   <li class="cre__delivery-method-intro-list-item"><i class="fas fa-walking cre__delivery-method-text-icon" style="margin: -1px 6px 0 5px; font-size: 22px"></i> Self-paced Online Courses</li>
                          // </ul>
                      
                          // <div class="cre__delivery-method-dropdown-container-outer">
                          //   <div class="cre__delivery-method-dropdown-container">
                            
                          //     <div class="cre__delivery-method-clickable">
                          //       <span class="cre__delivery-method-headline">Delivery method options</span>
                          //       <i class="fas fa-chevron-down cre__delivery-method-icon"></i>
                          //     </div>
                          //     <div class="cre__delivery-method-dropdown">
                          //       <div class="cre__delivery-method-dropdown-option"><span class="cre__delivery-method-dropdown-option-title">In-person Classes -</span> if you prefer a structured schedule and enjoy the guidance of a live instructor in a classroom environment.</div>
                          //       <div class="cre__delivery-method-dropdown-option"><span class="cre__delivery-method-dropdown-option-title">Livestream Classes -</span> if you learn best in a classroom setting, but prefer the comfort of learning from your home or office.</div>
                          //       <div class="cre__delivery-method-dropdown-option"><span class="cre__delivery-method-dropdown-option-title">Online Courses -</span> if you are self-motivated and need the flexibility to take courses that work around your schedule.</div>
                          //     </div>
                            
                          //   </div>
                          // </div>
                          
                          // <p class="cre__delivery-method-intro-text" style="margin-top: 24px;">Plus, to best fit your unique education needs, you can change your learning method at any time.</p> ?>
                        </div>
                      </div>
                      
                      <div class="cre__grid-area cre__carousel-dots-grid-area-spacer">
                        Row removed on desktop
                      </div>
                      
                      <?php $css_class_counter = 2;
                      
                      if( have_rows('product_packages_value_props_sp') ):
                        while ( have_rows('product_packages_value_props_sp') ) : the_row(); 

                          $value_prop_description = get_sub_field('value_prop_description_sp');
                          $value_prop_title = get_sub_field('value_prop_title_sp'); ?>

                          <div class="cre__grid-area-<?php echo $css_class_counter; ?> cre__grid-area cre__value-prop-container" >
                            <div class="cre__value-prop-container--inner">
                              <div class="cre__value-prop--clickable">
                                <p class="cre__value-prop-heading"><?php echo $value_prop_title; ?></p>
                                <i class="fas fa-chevron-right cre__value-prop-arrow"></i>
                              </div>
                              <div class="cre__value-prop--expand">
                                <?php if( $value_prop_description ) : ?>
                                  <p class="cre__value-prop-msg"><?php echo $value_prop_description; ?></p>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>

                        <?php $css_class_counter++;

                        endwhile; 
                      endif; ?>

                      
                      <div class="cre__grid-area-<?php echo $css_class_counter; ?> cre__grid-area cre__grid-bottom-left">
                        <div class="cre__grid-bottom-left-inner-container"></div>
                        <div style="height: 50px;"></div>
                      </div>
                      

                      <?php if( have_rows('product_packages_sp') ) : // Product Packages

                        $css_class_counter = 0;
                        $css_class_counter_interval = 40;
                        $product_package_counter = 1;

                        while( have_rows('product_packages_sp') ): the_row(); 
                          
                          $css_class_counter = 0; 
                          $package_highlight = get_sub_field('package_highlight_sp');
                          $product_package_ribbon_content = get_sub_field('product_package_ribbon_content_sp');
                          $product_package_name = get_sub_field('product_package_name_sp');
                          $product_package_price_slashed = get_sub_field('product_package_price_slashed_sp');
                          $product_package_price = get_sub_field('product_package_price_sp');
                          $product_package_description = get_sub_field('product_package_description_sp');
                          $product_package_button_url = get_sub_field('product_package_button_url_sp'); ?>

                          <div class="cre__grid-area-<?php echo $css_class_counter + $css_class_counter_interval; ?> cre__grid-area cre__grid-card cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if($package_highlight) echo 'cre__package-highlight'; ?>">
                            <div class="cre__card-ribbon">
                              <span class="cre__card-ribbon-content"><?php echo $product_package_ribbon_content; ?></span>
                            </div>
                            
                            <div class="cre__card-container">
                            
                              <div class="cre__card-icon-container">
                                <i class="fas fa-laptop"></i>
                              </div>
                              
                              <div class="cre__card-content-container">
                                <h3 class="cre__card-title"><?php echo $product_package_name; ?></h3>
                                <p class="cre__price-container">
                                  <?php if( $product_package_price_slashed ) : ?>
                                    <s class="strike">$<?php echo $product_package_price_slashed; ?></s>
                                  <?php endif; ?>
                                  <?php if( $product_package_price ) : ?>
                                    <span class="cre__price">$<?php echo $product_package_price; ?></span>
                                  <?php endif; ?>
                                </p>
                              </div>

                              <?php if( $product_package_description ) : ?>
                                <p class="cre__card-payment-details"><?php echo $product_package_description; ?></p>
                              <?php endif; ?>
                              
                              <div class="cre__btn-container cre__btn-container--card">
                                <?php if( $product_package_button_url ) : ?>
                                  <button class="cre__btn cre__btn--card" target="_blank"><a href="<?php echo $product_package_button_url; ?>">Enroll</a></button>
                                <?php endif; ?>
                              </div>
                              
                              <div class="cre__mobile-divider"></div>
                              
                            </div>
                            
                          </div>

                          <?php $css_class_counter++; ?>
                    
                          <div class="cre__grid-area cre__carousel-dots-grid-area cre__carousel-dots-grid-area-<?php echo $product_package_counter; ?> cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if($package_highlight) echo 'cre__package-highlight' ?>"></div>
                          
                          <?php if( have_rows('individual_package_value_props_sp') ) : // Products Value Props
                            while( have_rows('individual_package_value_props_sp') ): the_row(); ?>

                              <div class="cre__grid-area-<?php echo $css_class_counter + $css_class_counter_interval; ?> cre__grid-area cre__value-prop-item cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if($package_highlight) echo 'cre__package-highlight' ?>">
                                <i class="<?php if( get_sub_field('individual_package_value_prop_sp') ) {
                                  echo 'fas fa-check-circle';
                                } else { 
                                  echo 'far fa-circle';
                                } ?> cre__value-prop-item-icon"></i>
                              </div>

                              <?php $css_class_counter++; 

                            endwhile;
                          endif; ?>
                      
                          <div class="cre__grid-area-<?php echo $css_class_counter + $css_class_counter_interval; ?> cre__grid-area cre__grid-cta cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if($package_highlight) echo 'cre__package-highlight' ?>">
                            <div class="cre__btn-container cre__btn-container--grid-bottom">
                              <button class="cre__btn cre__btn--grid-bottom" target="_blank"><a href="<?php echo $product_package_button_url; ?>">Enroll</a></button>
                            </div>
                            <p class="cre__grid-cta-preview"><a href="#" class="cre__grid-cta-preview-link">Preview</a></p>
                          </div>

                          <?php $css_class_counter_interval += 40;
                                $product_package_counter++;

                        endwhile;  // END PRODUCT PACKAGE LOOP  have_rows('product_packages_sp')
                      endif; // END PRODUCT PACKAGE ROW  have_rows('product_packages_sp') ?> 

                    </div>   
                  </section> 

                <?php endif; // END CONDITIONAL include_product_packages_sp ?>


                <div class="tab-content--wysiwyg">
                  <?php the_sub_field('tab_content_sp'); ?>
                </div>

              </div>

              <?php $sell_tab_counter++;
              
            endwhile; // END TABS LOOP  have_rows('tabs_sp') ?>
            
          </div>
        <?php endif; // END TABS ROW  have_rows('tabs_sp') ?>

      </section>


    <?php elseif( get_row_layout() == 'basic_content_section_sp' ): // Basic Content Section (wysiwyg) 
      
      $basic_content_block = get_sub_field('basic_content_sp'); ?>

      <section class="basic-content-section">
        <div class="container">
          <?php echo $basic_content_block; ?>
        </div>
      </section>


    <?php elseif( get_row_layout() == 'form_section_sp' ): // RFI Form Section 
      
      $form_section_title = get_sub_field('form_section_title_sp');
      $form_section_subtitle = get_sub_field('form_section_subtitle_sp');
      $hubspot_form_portal_id = get_sub_field('hubspot_form_portal_id_sp');
      $hubspot_form_id = get_sub_field('hubspot_form_id_sp'); ?>

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


    <?php elseif( get_row_layout() == 'horizontal_rule_block_sp' ): // Horizontal Rule
      
      $horizontal_rule_version = get_sub_field( 'horizontal_rule_sp' ); ?>

      <div class="horizontal-rule container <?php if($horizontal_rule_version == 'Dark Version') echo 'horizontal-rule--dark'; 
                                                  if($horizontal_rule_version == 'Light Version') echo 'horizontal-rule--light'; ?>">
        <hr>
      </div>


    <?php elseif( get_row_layout() == 'spacer_block_sp' ): // Spacer Block ?>

      <div class="spacer-container" style="height: <?php echo get_sub_field('spacer_height_sp'); ?>px;"></div>


    <?php elseif( get_row_layout() == 'basic_content_section_sp' ): // Basic Content Section (wysiwyg) ?>

      <section class="basic-content-section">
        <div class="container">
          <?php the_sub_field('basic_content_sp'); ?>
        </div>
      </section>


    <?php endif; // End Flexible Content Layout Types ?>


  <?php endwhile; // End Flexible Content Loop ?>
<?php endif; // End Flexible Content if statement ?>

<?php $tab_section_counter++; ?>


<?php if( $product_package_counter >= 1 ) : ?>
  <style>
    .main-grid-container { grid-template-columns: repeat(<?php echo $product_package_counter; ?>, 1fr); }
  </style>
<?php endif; ?>


<?php if( $sell_tab_counter >= 1 ) : ?>
  <script>
    // Declare variables
    const $tabTitles = jQuery(".tab .tab-title");
    let $tabTitleFirst;
    let $tabContentWrapFirst;
    let $tabContentWrap;

    const $tabSections = jQuery('.tabs-component-section');
    const $tabSectionsCount = $tabSections.length;

    // Add classes to first tab so it renders on page load
    $tabSections.each((index, tabSection) => { 
      $tabTitleFirst = jQuery(tabSection).find(".tab:first-of-type .tab-title");
      $tabContentWrapFirst = jQuery(tabSection).find(".tab-content-wrap-1");
      $tabTitleFirst.addClass("active-tab");
      $tabContentWrapFirst.addClass("d-block");
    });
      
    // Activate new tab title and content on user click
    $tabTitles.click(function () {
      // tab titles
      jQuery(this).closest('.tabs-component-section').find('.tab-title').removeClass("active-tab");
      jQuery(this).addClass("active-tab");

      // tab content
      jQuery(this).closest('.tabs-component-section').find('.tab-content-wrap').removeClass('d-block');
      for(i = 1; i < 6; i++) {
        if(jQuery(this).hasClass('tab-title-' + i)) jQuery(this).closest('.tab-title-wrap').next('.tab-content-container').find('.tab-content-wrap-' + i).addClass('d-block');
      }
    });
  </script>
<?php endif; ?>
  

<?php if( $product_package_counter >= 1 ) : ?>
  <script>
    //** PRODUCT PACKAGES **//

    // Keep track of number of packages
    const $numberOfPackages = jQuery('.cre__grid-card').length;

    // Build value prop items on mobile
    const $valuePropItems = jQuery('.cre__value-prop-container');
    let $valuePropHTML;
    let gridColumnCounter1;
    let gridColumnCounter2;
    let gridColumnCounter3;
    let gridColumnCounter4;

    jQuery.each($valuePropItems, function(i) { 
      // clone and store value prop html
      $valuePropHTML = jQuery('.cre__grid-area-' + (i + 2)).clone().html();
            
      // inject corresponding html into each value prop grid cell
      gridColumnCounter1 = 41 + i;
      gridColumnCounter2 = 81 + i;
      gridColumnCounter3 = 121 + i;
      gridColumnCounter4 = 161 + i;
      jQuery('.cre__grid-area-' + gridColumnCounter1).append($valuePropHTML);
      jQuery('.cre__grid-area-' + gridColumnCounter2).append($valuePropHTML);
      jQuery('.cre__grid-area-' + gridColumnCounter3).append($valuePropHTML);
      jQuery('.cre__grid-area-' + gridColumnCounter4).append($valuePropHTML);
    });

    // Value props click event
    jQuery('.cre__value-prop-container, .cre__value-prop-item').on('click', function() { 
      const $this = jQuery(this);
      
      // toggle value prop description
      $this.find('.cre__value-prop--expand').slideToggle('slow');
      console.log($this.find('.cre__value-prop--expand'));
      
      // animate value prop area open/close
      if($this.find('.cre__value-prop-arrow').hasClass('rotate-animation')) {
        $this.find('.cre__value-prop-arrow').removeClass('rotate-animation');
        $this.find('.cre__value-prop-heading').css({ color: '#424242', transition: '350ms' })
      } else {
        $this.find('.cre__value-prop-arrow').addClass('rotate-animation');
        $this.find('.cre__value-prop-heading').css({ color: '#000000', transition: '350ms' })
      }
    });

    // Mobile package navigation
    const $creCarouselDotsGridArea = jQuery('.cre__carousel-dots-grid-area');

    // create carousel dots
    jQuery.each($creCarouselDotsGridArea, function(i, dotGridArea) {
      jQuery.each($creCarouselDotsGridArea, function(j, dot){   
        dotGridArea.insertAdjacentHTML('beforeend', `                                
          <div class="cre__carousel-dot cre__carousel-dot-${j + 1}"></div>
        `)
      }) 
    });

    // add highlight class to first carousel dot
    jQuery('.cre__carousel-dots-grid-area-1 .cre__carousel-dot-1').addClass('cre__dot--focus');

    // enable carousel dots navigation
    let crePackageCounter = 1;
    const $creCarouselDots = jQuery('.cre__carousel-dot');

    $creCarouselDots.on('click', function(e){
      // navigate to correct package
      jQuery('.cre__grid-area').removeClass('cre__mobile-package-show');
      crePackageCounter = (jQuery(this).index()) + 1;
      jQuery('.cre__package-' + (crePackageCounter)).addClass('cre__mobile-package-show');
      // highlight correct dot
      jQuery('.cre__carousel-dot').removeClass('cre__dot--focus');
      jQuery('.cre__carousel-dot-' + crePackageCounter).addClass('cre__dot--focus');
    })

    // Next/Previous mobile package arrow click
    const $carouselArrows = jQuery('.cre__carousel-arrow');
    const $mobilePrevious = jQuery('.cre__mobile-previous');
    const $mobileNext = jQuery('.cre__mobile-next');

    // on arrow click (previous/next)
    $carouselArrows.on('click', function(e){

      // if previous button click
      if(e.target.parentElement.classList.contains('cre__mobile-previous')) {
        
        // show correct package and hide all others
        jQuery('.cre__grid-area').removeClass('cre__mobile-package-show');
        crePackageCounter--;
        if(crePackageCounter < 1) crePackageCounter = $numberOfPackages;
        jQuery('.cre__package-' + crePackageCounter).addClass('cre__mobile-package-show');
        
        // highlight correct carousel dot
        if(jQuery('.cre__carousel-dots-grid-area-' + crePackageCounter).hasClass('cre__package-' + crePackageCounter)) {
          // remove highlight class from previous dot
          jQuery('.cre__carousel-dot').removeClass('cre__dot--focus');
          // add highlight class to dot
          jQuery('.cre__carousel-dots-grid-area-' + crePackageCounter + ' .cre__carousel-dot-' + crePackageCounter).addClass('cre__dot--focus');
        }

      }
      
      // if next button arrow click
      if(e.target.parentElement.classList.contains('cre__mobile-next')) {  
        
        // show correct package and hide all others
        jQuery('.cre__grid-area').removeClass('cre__mobile-package-show'); 
        crePackageCounter++;
        if(crePackageCounter > $numberOfPackages) crePackageCounter = 1;
        jQuery('.cre__package-' + crePackageCounter).addClass('cre__mobile-package-show'); 
        
        // highlight correct carousel dot
        if(jQuery('.cre__carousel-dots-grid-area-' + crePackageCounter).hasClass('cre__package-' + crePackageCounter)) {
          // remove highlight class from previous dot
          jQuery('.cre__carousel-dot').removeClass('cre__dot--focus');
          // add highlight class to dot
          jQuery('.cre__carousel-dots-grid-area-' + crePackageCounter + ' .cre__carousel-dot-' + crePackageCounter).addClass('cre__dot--focus');
        }
        
      }
      
    });

    // // Delivery method dropdown
    // const $deliveryMethodDropdownContainer = jQuery('.cre__delivery-method-dropdown-container');
    // const $deliveryMethodClickable = jQuery('.cre__delivery-method-clickable');
    // const $deliveryMethodDropdown = jQuery('.cre__delivery-method-dropdown');

    // let arrowState = 'no-rotate';

    // $deliveryMethodClickable.on('click', function(){
    //   // open/close dropdown
    //   $deliveryMethodDropdown.slideToggle('fast');
      
    //   // animate arrow
    //   if(arrowState === 'no-rotate') {
    //     jQuery('.cre__delivery-method-icon').css({ /*transform: 'rotate(180deg)'*/ transform: 'scaleY(-1)', transition: '350ms' });
    //     arrowState = 'rotate';
    //     return arrowState;
    //   }
    //   if(arrowState === 'rotate') {
    //     jQuery('.cre__delivery-method-icon').css({ /*transform: 'rotate(0deg)'*/ transform: 'scaleY(1)', transition: '350ms' });
    //     arrowState = 'no-rotate';
    //     return arrowState;
    //   }  
    // });

    // Top left grid dropdown height fix for different screen sizes
    // const $creDropdownHeight = jQuery('.cre__delivery-method-dropdown-container').height();
    // jQuery('.cre__delivery-method-dropdown-container-outer').css({ height: $creDropdownHeight });

    // Fix border on last grid column (desktop)
    const mobileMediaQuery = window.matchMedia('(min-width: 850px)');
    if (mobileMediaQuery.matches && !jQuery('.cre__package-' + $numberOfPackages).hasClass('cre__package-highlight')) {
      jQuery('.cre__package-' + $numberOfPackages + ':not(.cre__grid-card), .cre__package-' + $numberOfPackages + ' .cre__card-container').css({ borderRight: '3px solid #d1d2d4' })
    }

    // // Set equal height card titles
    // const $cardTitles = jQuery('.cre__card-title');
    // const cardTitleTallest = Math.max($cardTitles.height());

    // jQuery.each($cardTitles, function(i, cardTitle) {
    //   jQuery(cardTitle).css({ height: cardTitleTallest });
    // });

  </script>
<?php endif;

get_footer(); ?>