<?php 
/*
  Template Name: Sell Page Layout
*/

get_header(); ?>


<!-- Load jQuery  -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


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


  /* Icon Blocks Section */
  .intro-icons-container { padding-block: 5px 0; border-bottom: none; margin-bottom: 20px; }
  .icon-blocks-headline-container { display: block; text-align: center; margin-block: 40px 35px; }
  .icon-blocks-headline-container > * { display: block; }
  .icon-blocks-primary-headline { margin-bottom: 15px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 2.5rem; font-weight: 700; color: #0a246a; }
  .icon-blocks-secondary-headline { margin-bottom: 15px; font-size: 1.8rem; color: #666666; }
  
  .intro-icons-wrap { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); justify-items: center; gap: 60px; }
  .icon-block-wrap { display: flex; flex-direction: column; align-items: center; text-align: center; }
  .icon-block-graphic { max-width: 120px; margin-bottom: 10px; }
  .icon-block-title { margin-bottom: 0; font-weight: 700; color: #13284b; }
  .icon-block-title, .icon-block-content { font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 1.7rem; line-height: 22px; }
  .icon-block-content { color: #1f262d; }


  /* Tabs Section */
  .tabs-component-section { margin-bottom: 25px; }
  .tab-title-wrap { display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 25px; }
  .tab { text-align: center; }
  .tab-inner-wrap { max-width: 245px; }
  .tab-title { display: inline-block; margin-bottom: 0; padding: 5px 10px; font-size: 23px; color: #1f262d; border-bottom: 2px solid #E05728; cursor: pointer; transition: color 300ms ease-in-out; }

  .tab-content-container { position: relative; width: 100%; }
  .tab-content-wrap { position: relative; width: 100%; min-height: 300px; display: none; background-color: #F5F5F5; padding: 20px; box-sizing: border-box; }
  .tab-content-wrap > .tab-content--wysiwyg p, .tab-content-wrap > .tab-content--wysiwyg ul { margin-bottom: 15px; color: #333; }
  .tab-content-wrap > .tab-content--wysiwyg ul ul { margin-bottom: 5px; }

  .active-tab { color: #E05728; border-bottom: 2px solid #E05728; transition: color 300ms ease-in-out; }
  .d-block { display: block !important; }


  /* Product Packages */
  .cre__component-container--outer { position: relative; padding-block: 0; margin-bottom: 15px; }
  .cre__component-container--outer * { box-sizing: border-box; }

  .main-grid-container {
    display: grid;
    grid-template-areas:
      "grid-1 grid-40 grid-80 grid-120"
      "dots-spacer dots-1 dots-2 dots-3"
      "grid-2 grid-41 grid-81 grid-121"
      "grid-3 grid-42 grid-82 grid-122"
      "grid-4 grid-43 grid-83 grid-123"
      "grid-5 grid-44 grid-84 grid-124"
      "grid-6 grid-45 grid-85 grid-125"
      "grid-7 grid-46 grid-86 grid-126"
      "grid-8 grid-47 grid-87 grid-127"
      "grid-9 grid-48 grid-88 grid-128"
      "grid-10 grid-49 grid-89 grid-129"
      "grid-11 grid-50 grid-90 grid-130"
      "grid-12 grid-51 grid-91 grid-131"
      "grid-13 grid-52 grid-92 grid-132"
      "grid-14 grid-53 grid-93 grid-133"
      "grid-15 grid-54 grid-94 grid-134"
      "grid-16 grid-55 grid-95 grid-135"
      "grid-17 grid-56 grid-96 grid-136"
      "grid-18 grid-57 grid-97 grid-137"
      "grid-19 grid-58 grid-98 grid-138"
      "grid-20 grid-59 grid-99 grid-139"
      "grid-21 grid-60 grid-100 grid-140"
      "grid-22 grid-61 grid-101 grid-141"
      "grid-23 grid-62 grid-102 grid-142"
      "grid-24 grid-63 grid-103 grid-143"
      "grid-25 grid-64 grid-104 grid-144"
      "grid-26 grid-65 grid-105 grid-145"
      "grid-27 grid-66 grid-106 grid-146"
      "grid-28 grid-67 grid-107 grid-147"
      "grid-29 grid-68 grid-108 grid-148"
      "grid-30 grid-69 grid-109 grid-149"
      "grid-31 grid-70 grid-110 grid-150"
      "grid-32 grid-71 grid-111 grid-151"
      "grid-33 grid-72 grid-112 grid-152"
      "grid-34 grid-73 grid-113 grid-153"
      "grid-35 grid-74 grid-114 grid-154"
      "grid-36 grid-75 grid-115 grid-155";

    justify-content: center;  
  }

  .cre__grid-area-1 { grid-area: grid-1; }
  .cre__grid-area-2 { grid-area: grid-2; }
  .cre__grid-area-3 { grid-area: grid-3; }
  .cre__grid-area-4 { grid-area: grid-4; }
  .cre__grid-area-5 { grid-area: grid-5; }
  .cre__grid-area-6 { grid-area: grid-6; }
  .cre__grid-area-7 { grid-area: grid-7; }
  .cre__grid-area-8 { grid-area: grid-8; }
  .cre__grid-area-9 { grid-area: grid-9; }
  .cre__grid-area-10 { grid-area: grid-10; }
  .cre__grid-area-11 { grid-area: grid-11; }
  .cre__grid-area-12 { grid-area: grid-12; }
  .cre__grid-area-13 { grid-area: grid-13; }
  .cre__grid-area-14 { grid-area: grid-14; }
  .cre__grid-area-15 { grid-area: grid-15; }
  .cre__grid-area-16 { grid-area: grid-16; }
  .cre__grid-area-17 { grid-area: grid-17; }
  .cre__grid-area-18 { grid-area: grid-18; }
  .cre__grid-area-19 { grid-area: grid-19; }
  .cre__grid-area-20 { grid-area: grid-20; }
  .cre__grid-area-21 { grid-area: grid-21; }
  .cre__grid-area-22 { grid-area: grid-22; }
  .cre__grid-area-23 { grid-area: grid-23; }
  .cre__grid-area-24 { grid-area: grid-24; }
  .cre__grid-area-25 { grid-area: grid-25; }
  .cre__grid-area-26 { grid-area: grid-26; }
  .cre__grid-area-27 { grid-area: grid-27; }
  .cre__grid-area-28 { grid-area: grid-28; }
  .cre__grid-area-29 { grid-area: grid-29; }
  .cre__grid-area-30 { grid-area: grid-30; }
  .cre__grid-area-31 { grid-area: grid-31; }
  .cre__grid-area-32 { grid-area: grid-32; }
  .cre__grid-area-33 { grid-area: grid-33; }
  .cre__grid-area-34 { grid-area: grid-34; }
  .cre__grid-area-35 { grid-area: grid-35; }
  .cre__grid-area-36 { grid-area: grid-36; }
  .cre__grid-area-37 { grid-area: grid-37; }
  .cre__grid-area-38 { grid-area: grid-38; }
  .cre__grid-area-39 { grid-area: grid-39; }
  .cre__grid-area-40 { grid-area: grid-40; }
  .cre__grid-area-41 { grid-area: grid-41; }
  .cre__grid-area-42 { grid-area: grid-42; }
  .cre__grid-area-43 { grid-area: grid-43; }
  .cre__grid-area-44 { grid-area: grid-44; }
  .cre__grid-area-45 { grid-area: grid-45; }
  .cre__grid-area-46 { grid-area: grid-46; }
  .cre__grid-area-47 { grid-area: grid-47; }
  .cre__grid-area-48 { grid-area: grid-48; }
  .cre__grid-area-49 { grid-area: grid-49; }
  .cre__grid-area-50 { grid-area: grid-50; }
  .cre__grid-area-51 { grid-area: grid-51; }
  .cre__grid-area-52 { grid-area: grid-52; }
  .cre__grid-area-53 { grid-area: grid-53; }
  .cre__grid-area-54 { grid-area: grid-54; }
  .cre__grid-area-55 { grid-area: grid-55; }
  .cre__grid-area-56 { grid-area: grid-56; }
  .cre__grid-area-57 { grid-area: grid-57; }
  .cre__grid-area-58 { grid-area: grid-58; }
  .cre__grid-area-59 { grid-area: grid-59; }
  .cre__grid-area-60 { grid-area: grid-60; }
  .cre__grid-area-61 { grid-area: grid-61; }
  .cre__grid-area-62 { grid-area: grid-62; }
  .cre__grid-area-63 { grid-area: grid-63; }
  .cre__grid-area-64 { grid-area: grid-64; }
  .cre__grid-area-65 { grid-area: grid-65; }
  .cre__grid-area-66 { grid-area: grid-66; }
  .cre__grid-area-67 { grid-area: grid-67; }
  .cre__grid-area-68 { grid-area: grid-68; }
  .cre__grid-area-69 { grid-area: grid-69; }
  .cre__grid-area-70 { grid-area: grid-70; }
  .cre__grid-area-71 { grid-area: grid-71; }
  .cre__grid-area-72 { grid-area: grid-72; }
  .cre__grid-area-73 { grid-area: grid-73; }
  .cre__grid-area-74 { grid-area: grid-74; }
  .cre__grid-area-75 { grid-area: grid-75; }
  .cre__grid-area-76 { grid-area: grid-76; }
  .cre__grid-area-77 { grid-area: grid-77; }
  .cre__grid-area-78 { grid-area: grid-78; }
  .cre__grid-area-79 { grid-area: grid-79; }
  .cre__grid-area-80 { grid-area: grid-80; }
  .cre__grid-area-81 { grid-area: grid-81; }
  .cre__grid-area-82 { grid-area: grid-82; }
  .cre__grid-area-83 { grid-area: grid-83; }
  .cre__grid-area-84 { grid-area: grid-84; }
  .cre__grid-area-85 { grid-area: grid-85; }
  .cre__grid-area-86 { grid-area: grid-86; }
  .cre__grid-area-87 { grid-area: grid-87; }
  .cre__grid-area-88 { grid-area: grid-88; }
  .cre__grid-area-89 { grid-area: grid-89; }
  .cre__grid-area-90 { grid-area: grid-90; }
  .cre__grid-area-91 { grid-area: grid-91; }
  .cre__grid-area-92 { grid-area: grid-92; }
  .cre__grid-area-93 { grid-area: grid-93; }
  .cre__grid-area-94 { grid-area: grid-94; }
  .cre__grid-area-95 { grid-area: grid-95; }
  .cre__grid-area-96 { grid-area: grid-96; }
  .cre__grid-area-97 { grid-area: grid-97; }
  .cre__grid-area-98 { grid-area: grid-98; }
  .cre__grid-area-99 { grid-area: grid-99; }
  .cre__grid-area-100 { grid-area: grid-100; }
  .cre__grid-area-101 { grid-area: grid-101; }
  .cre__grid-area-102 { grid-area: grid-102; }
  .cre__grid-area-103 { grid-area: grid-103; }
  .cre__grid-area-104 { grid-area: grid-104; }
  .cre__grid-area-105 { grid-area: grid-105; }
  .cre__grid-area-106 { grid-area: grid-106; }
  .cre__grid-area-107 { grid-area: grid-107; }
  .cre__grid-area-108 { grid-area: grid-108; }
  .cre__grid-area-109 { grid-area: grid-109; }
  .cre__grid-area-110 { grid-area: grid-110; }
  .cre__grid-area-111 { grid-area: grid-111; }
  .cre__grid-area-112 { grid-area: grid-112; }
  .cre__grid-area-113 { grid-area: grid-113; }
  .cre__grid-area-114 { grid-area: grid-114; }
  .cre__grid-area-115 { grid-area: grid-115; }
  .cre__grid-area-116 { grid-area: grid-116; }
  .cre__grid-area-117 { grid-area: grid-117; }
  .cre__grid-area-118 { grid-area: grid-118; }
  .cre__grid-area-119 { grid-area: grid-119; }
  .cre__grid-area-120 { grid-area: grid-120; }
  .cre__grid-area-121 { grid-area: grid-121; }
  .cre__grid-area-122 { grid-area: grid-122; }
  .cre__grid-area-123 { grid-area: grid-123; }
  .cre__grid-area-124 { grid-area: grid-124; }
  .cre__grid-area-125 { grid-area: grid-125; }
  .cre__grid-area-126 { grid-area: grid-126; }
  .cre__grid-area-127 { grid-area: grid-127; }
  .cre__grid-area-128 { grid-area: grid-128; }
  .cre__grid-area-129 { grid-area: grid-129; }
  .cre__grid-area-130 { grid-area: grid-130; }
  .cre__grid-area-131 { grid-area: grid-131; }
  .cre__grid-area-132 { grid-area: grid-132; }
  .cre__grid-area-133 { grid-area: grid-133; }
  .cre__grid-area-134 { grid-area: grid-134; }
  .cre__grid-area-135 { grid-area: grid-135; }
  .cre__grid-area-136 { grid-area: grid-136; }
  .cre__grid-area-137 { grid-area: grid-137; }
  .cre__grid-area-138 { grid-area: grid-138; }
  .cre__grid-area-139 { grid-area: grid-139; }
  .cre__grid-area-140 { grid-area: grid-140; }
  .cre__grid-area-141 { grid-area: grid-141; }
  .cre__grid-area-142 { grid-area: grid-142; }
  .cre__grid-area-143 { grid-area: grid-143; }
  .cre__grid-area-144 { grid-area: grid-144; }
  .cre__grid-area-145 { grid-area: grid-145; }
  .cre__grid-area-146 { grid-area: grid-146; }
  .cre__grid-area-147 { grid-area: grid-147; }
  .cre__grid-area-148 { grid-area: grid-148; }
  .cre__grid-area-149 { grid-area: grid-149; }
  .cre__grid-area-150 { grid-area: grid-150; }
  .cre__grid-area-151 { grid-area: grid-151; }
  .cre__grid-area-152 { grid-area: grid-152; }
  .cre__grid-area-153 { grid-area: grid-153; }
  .cre__grid-area-154 { grid-area: grid-154; }
  .cre__grid-area-155 { grid-area: grid-155; }

  .cre__carousel-dots-grid-area-spacer { grid-area: dots-spacer; }
  .cre__carousel-dots-grid-area-1 { grid-area: dots-1; }
  .cre__carousel-dots-grid-area-2 { grid-area: dots-2; }
  .cre__carousel-dots-grid-area-3 { grid-area: dots-3; }
  .cre__carousel-dots-grid-area-4 { grid-area: dots-4; }

  .cre__grid-area { border: 1.5px solid #d1d2d4; }

  .cre__mobile-previous { display: none; }
  .cre__mobile-next { display: none; }

  .cre__btn-container { width: 100%; text-align: center; }
  .cre__btn { width: 55%; padding: 12px 35px; background-color: #E05728; color: #FFFFFF; font-size: 16px; font-weight: 700; border: none; border-radius: 6px; box-shadow: 2px 3px 3px lightgrey; cursor: pointer; transition: background-color 350ms; }
  .cre__btn:hover, .cre__btn:focus { background-color: #f0673a; transition: background-color 350ms;; }
  .cre__btn > a { color: #FFFFFF; text-transform: uppercase; }
  .cre__btn-container--card { margin-bottom: 25px; }
  .cre__btn-container--grid-bottom { margin-top: 25px; margin-bottom: 30px; }

  .cre__grid-top-left { border-top: 3px solid #d1d2d4; border-right: none; border-left: 3px solid #d1d2d4; position: relative; }
  .cre__grid-top-left-inner-container { height: 100%; /*border-right: 1px solid darkgrey;*/ }
  .cre__grid-top-left-wysiwig-container { padding: 30px; }
  .cre__delivery-method-intro-text { margin: 15px 12px; }
  .cre__delivery-method-intro-list { padding-left: 12px; list-style-type: none; }
  .cre__delivery-method-intro-list-item { display: flex; align-items: center; padding: 10px 0; font-weight: 700; color: #243065; }
  .cre__delivery-method-text-icon { font-size: 20px; padding-right: 5px; }

  .cre__delivery-method-dropdown-container-outer { position: relative; min-height: 65px; margin: 15px 12px; }
  .cre__delivery-method-dropdown-container { position: absolute; width: 100%; background: white; border: 2px solid #666; border-radius: 10px; z-index: 9; }
  .cre__delivery-method-clickable { display: flex; justify-content: space-between; padding: 15px; cursor: pointer; }
  .cre__delivery-method-headline { font-size: 16px; font-weight: 700; color: #333; }
  .cre__delivery-method-icon { font-size: 20px; color: #333; }
  .cre__delivery-method-dropdown { display: none; padding: 0 15px 15px 15px; }
  .cre__delivery-method-dropdown-option { display: inline-block; padding: 10px 0; }
  .cre__delivery-method-dropdown-option-title { font-weight: 700; }

  .cre__grid-bottom-left { border-right: none; border-left: 3px solid #d1d2d4; border-bottom: 3px solid #d1d2d4; }
  .cre__grid-bottom-left-inner-container { height: calc(100% - 20px); /*border-right: 1px solid grey;*/ }

  .cre__value-prop-container { padding: 10px; border-left: 3px solid #d1d2d4; border-right: none; }
  .cre__value-prop--clickable { display: flex; justify-content: space-between; align-items: center; /* cursor: pointer; */ }
  .cre__value-prop-heading { display: inline-block; margin: 0; line-height: 20px; color: #1f262d; }
  .cre__value-prop--expand { display: none; padding-top: 15px; }
  .cre__value-prop-msg { margin: 0; color: #0d6e9e; }

  .cre__value-prop-arrow { display: none; padding-left: 5px; color: #0D6E9E; transform: rotate(0deg); transition: 250ms; }
  .rotate-animation { transform: rotate(90deg); transition: 275ms; }

  .cre__value-prop-item { display: flex; justify-content: center; align-items: center; }
  .cre__value-prop-item .cre__value-prop-container--inner { display: none; }
  .cre__value-prop-item-icon { font-size: 23px; color: #13284b; }

  .cre__grid-card { border: none; }
  .cre__card-container { height: calc(100% - 50px); border: 1.5px solid #d1d2d4; border-top: none; }
  .cre__card-ribbon { display: flex; justify-content: center; align-items: center; height: 50px; background-color: #243065 /*#32a0d1*/; border: 1px solid darkgrey; border-radius: 15px 15px 0 0; }
  .cre__card-ribbon-content { margin: 0; color: white; font-size: 18px; font-weight: 700; }

  .cre__card-icon-container { display: none; text-align: center; padding-top: 30px; }
  .cre__card-icon-container i { font-size: 40px; color: #243065; }
  .cre__card-title { margin-bottom: 0; padding: 25px 5px 5px; text-align: center; font-size: 22px; }

  .cre__price-container { display: flex; flex-direction: column; align-items: center; margin-block: 10px 20px; width: 100%; text-align: center; font-family: Lato, Arial, Helvetica, sans-serif; font-size: 26px; font-weight: bold; color: #13284b; }
  .cre__price {  }
  .strike { position: relative; display: inline-block; margin: 0; font-size: 40px; font-weight: bold; color: darkgrey; text-decoration: none; }
  .strike::after { content: ""; position: absolute; bottom: 0; left: 0; height: 50%; height: calc(50% - 1px); width: 105%; font-weight: bold; border-top: 4px solid #F4B91F; transform: rotateZ(-15deg); }
  .cre__card-payment-details { text-align: center; margin-bottom: 10px; padding: 0 12px 25px 12px; font-family: sans-serif; font-size: 16px; line-height: 22px; color: #666666; }

  .cre__mobile-divider { display: none; width: 85%; height: 2px; margin: 0 auto; background-color: darkgrey; }

  .cre__package-1:not(.cre__package-highlight):not(.cre__grid-card) { border-left: 3px solid #D1D2D4; }
  .cre__package-1.cre__grid-card .cre__card-container { border-left: 3px solid #D1D2D4; }

  .cre__package-highlight { border-left: 3px solid #F4B91F; border-right: 3px solid #F4B91F; }
  .cre__package-highlight .cre__card-icon-container i { color: #F4B91F; }
  .cre__package-highlight.cre__grid-cta { border-bottom: 2px solid #F4B91F; }
  .cre__package-highlight.cre__grid-card { border: none; }
  .cre__package-highlight.cre__grid-card .cre__card-ribbon { background: radial-gradient(/*ellipse at top,*/ #F8D884, #F4B91F); border: none; }
  .cre__package-highlight.cre__grid-card .cre__card-ribbon-content { color: #333; }
  .cre__package-highlight.cre__grid-card .cre__card-container { border-left: 3px solid #F4B91F; border-right: 3px solid #F4B91F; }

  .cre__carousel-dots-grid-area, .cre__carousel-dots-grid-area-spacer { display: none; }

  .cre__grid-cta { display: flex; flex-direction: column; justify-content: center; align-items: center; border-bottom: 3px solid #d1d2d4; border-radius: 0 0 15px 15px; }
  .cre__grid-cta-preview { display: none; margin: 30px 5px 35px 5px; }
  .cre__grid-cta-preview-link { font-size: 18px; font-weight: 700; color: #0d6e9e; padding: 4px; transition: 350ms; }
  .cre__grid-cta-preview-link:hover { color: #243065; transition: 350ms; }


  /* Horizontal Rule Block */
  .horizontal-rule hr { margin-block: 25px; background-image: none; }
  .horizontal-rule--dark hr { background-color: #666666; }
  .horizontal-rule--light hr { background-color: lightgrey; }

  @media(max-width: 1024px) {
    .intro-icons-wrap { gap: 40px; }
    .icon-block-content { max-width: 260px; }
  }

  /* Tablet / Mobile */
  @media(max-width: 875px) {
    .tab { padding: 15px; }

    .cre__component-container--outer { padding-top: 30px; }

    .cre__carousel-arrow { display: flex; position: absolute; top: 165px; font-size: 50px; color: #32a0d1; opacity: 0.6; cursor: pointer; z-index: 99; }
    .cre__carousel-arrow i { padding: 5px; }
    .cre__mobile-previous { left: 5px; }
    .cre__mobile-next { right: 5px; }
    
    .cre__grid-area { border-left: none; border-right: none; }

    .cre__grid-top-left { display: none; }
    .cre__grid-bottom-left { display: none; }
    .cre__value-prop-container { display: none; }
    
    .cre__package-highlight.cre__grid-card .cre__card-container { border-left: none; border-right: none; }
    .cre__package-highlight.cre__grid-cta { border-bottom: none; }
    
    .cre__value-prop-item { width: 100%; padding: 12px 15px; justify-content: space-between; align-items: flex-start; }
    .cre__value-prop-item-icon { padding-right: 5px; }
    .cre__value-prop--clickable {  }
    .cre__value-prop-item .cre__value-prop-container--inner { display: block; width: 100%; }
    
    .cre__card-ribbon { border-radius: 10px 10px 0 0;}
    
    .cre__grid-card { width: 65%; min-width: 245px; margin: 0 auto 20px auto; border-radius: 10px; box-shadow: 0px 0px 12px 5px lightgrey; }
    .cre__card-container { display: flex; flex-direction: column; border: none; }
    
    /* .cre__card-icon-container { order: 3; padding: 25px 0; } */
    .cre__card-icon-container i { font-size: 48px; }
    .cre__card-content-container { order: 1; }
    .cre__card-title { font-size: 20px; }
    .cre__card-payment-details { order: 3; padding-block: 20px 15px; }
    .cre__btn-container--card { order: 4; }
    .cre__btn--card { width: 75%; }
    
    .cre__mobile-divider { display: block; order: 2; background-color: #d1d2d4; }
    
    .cre__price-container {  }
    .cre__price { font-size: 34px; }
    .strike { font-size: 28px; margin-bottom: 8px; }
    
    .cre__carousel-dots-grid-area { display: flex; justify-content: center; align-items: center; padding: 5px 0 25px 0; border-top: none; border-bottom: 1.5px solid #d1d2d4; }
    .cre__carousel-dot { width: 40px; height: 8px; margin: 0 5px; background-color: lightgrey; border-radius: 5px; }
    .cre__dot--focus { background-color: grey; }
    
    .cre__grid-cta { border-bottom: none; }
    
    .cre__grid-area:not(.cre__mobile-package-show) { opacity: 0; position: absolute; z-index: -1; }
    .cre__mobile-package-show { opacity: 1; transition: 500ms; }
    
    .cre__component-container--outer .main-grid-container { grid-template-columns: auto; }
  } 

  /* Tablet Only */
  @media(max-width: 875px) and (min-width: 600px) {
    .cre__grid-card { width: 50%; }
    .cre__mobile-previous { left: 10%; }
    .cre__mobile-next { right: 10%; }
    .cre__btn--grid-bottom { width: 50%; }
  }

  /* Mobile */
  @media(max-width: 650px) {
    .hero-section { padding-block: 20px 25px; }
    .hero-button-group { margin-top: 30px; }
    .hero-button-group .hero-btn { display: block; width: 70%; margin-right: auto; }
    .hero-btn:not(:first-of-type) { margin-left: 0; }
  }

  @media(max-width: 600px) {
    .hero-button-group .hero-btn { width: 80%; margin-inline: auto; }
    .hero-btn i { display: none; }

      /* sticky nav on mobile */
    div.tab-title-wrap { position: sticky; top: 0; z-index: 999; background-color: white; box-shadow: 0px 12px 20px -20px grey; }
    .tab-title { font-size: 20px; word-break: normal; word-wrap: normal; }
      /* horizontal scroll on mobile */
    .scroll { flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch; -ms-overflow-style: -ms-autohiding-scrollbar; }
  }

  @media(max-width: 390px) {
    .hero-button-group .hero-btn { width: 95%; }
  }

</style>


<?php if( have_rows('sell_page_flexible_content') ): // START FLEXIBLE TEMPLATE ?>
  <?php while( have_rows('sell_page_flexible_content') ): the_row(); ?>


    <?php if( get_row_layout() == 'hero_section_sp' ): // Hero Section ?>

      <section class="hero-section" style="background: url('<?php echo get_sub_field('hero_background_image_sp')['url']; ?>')">
        <div class="container hero-container">

          <?php if( get_sub_field('hero_primary_headline_sp') || get_sub_field('hero_secondary_headline_sp') ) : ?>
            <div class="hero-content hero-content-left">

              <?php if( get_sub_field('hero_primary_headline_sp') ) : ?>
                <h1 class="page-title"><?php the_sub_field('hero_primary_headline_sp'); ?></h1>
              <?php endif; ?>

              <?php if(get_sub_field('hero_secondary_headline_sp')) : ?>
                <div class="page-sub-title"><?php the_sub_field('hero_secondary_headline_sp'); ?></div>
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


    <?php elseif( get_row_layout() == 'icon_blocks_section_sp' ): // ICON BLOCKS ?>

      <section class="container intro-icons-container">
        <?php if( get_sub_field('icon_blocks_primary_headline_sp') || get_sub_field('icon_blocks_secondary_headline_sp') ): ?>
          <div class="icon-blocks-headline-container">
            <?php if( get_sub_field('icon_blocks_primary_headline_sp') ): ?>
              <h3 class="icon-blocks-primary-headline"><?php the_sub_field('icon_blocks_primary_headline_sp'); ?></h3>
            <?php endif; ?>
            <?php if( get_sub_field('icon_blocks_secondary_headline_sp') ): ?>
              <p class="icon-blocks-secondary-headline"><?php the_sub_field('icon_blocks_secondary_headline_sp'); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        
        <?php if( have_rows('icon_blocks_sp') ): ?>
          <div class="intro-icons-wrap">
            <?php while ( have_rows('icon_blocks_sp') ) : the_row(); ?>

              <div class="icon-block-wrap">
                <?php if( get_sub_field('icon_block_image_sp') ): ?>
                  <img class="icon-block-graphic" src="<?php echo get_sub_field('icon_block_image_sp')['url']; ?>">
                <?php endif; ?>
                <?php if( get_sub_field('icon_block_title_sp') ): ?>
                  <h5 class="icon-block-title"><?php the_sub_field('icon_block_title_sp'); ?></h5>
                <?php endif; ?>
                <?php if( get_sub_field('icon_block_content_sp') ): ?>
                  <p class="icon-block-content"><?php the_sub_field('icon_block_content_sp'); ?></p>
                <?php endif; ?>
              </div>

            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </section>


    <?php elseif( get_row_layout() == 'tab_component_sp' ): // Tabs Component

      $sell_tab_counter = 1; ?>

      <section class="tabs-component-section container">

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
        
				$sell_tab_counter = 1;?>
				
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
                      while ( have_rows('product_packages_value_props_sp') ) : the_row(); ?>

                        <div class="cre__grid-area-<?php echo $css_class_counter; ?> cre__grid-area cre__value-prop-container" >
                          <div class="cre__value-prop-container--inner">
                            <div class="cre__value-prop--clickable">
                              <p class="cre__value-prop-heading"><?php the_sub_field('value_prop_title_sp'); ?></p>
                              <i class="fas fa-chevron-right cre__value-prop-arrow"></i>
                            </div>
                            <div class="cre__value-prop--expand">
                              <p class="cre__value-prop-msg"><?php the_sub_field('value_prop_description_sp'); ?></p>
                            </div>
                          </div>
                        </div>

                      <?php $css_class_counter++;

                      endwhile; 
                    endif; ?>

                    
                    <div class="cre__grid-area-<?php echo $css_class_counter; ?> cre__grid-area cre__grid-bottom-left">
                      <div class="cre__grid-bottom-left-inner-container">
                        
                      </div>
                      <div style="height: 50px;"></div>
                    </div>
                    

                    <?php if( have_rows('product_packages_sp') ) : // Product Packages

                      $css_class_counter = 0;
                      $css_class_counter_interval = 40;
                      $product_package_counter = 1;

                      while( have_rows('product_packages_sp') ): the_row(); 
                        
                        $css_class_counter = 0; 
                        $package_highlight = get_sub_field('package_highlight_sp'); ?>

                        <div class="cre__grid-area-<?php echo $css_class_counter + $css_class_counter_interval; ?> cre__grid-area cre__grid-card cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if($package_highlight) echo 'cre__package-highlight'; ?>">
                          <div class="cre__card-ribbon">
                            <span class="cre__card-ribbon-content"><?php the_sub_field('product_package_ribbon_content_sp'); ?></span>
                          </div>
                          
                          <div class="cre__card-container">
                          
                            <div class="cre__card-icon-container">
                              <i class="fas fa-laptop"></i>
                            </div>
                            
                            <div class="cre__card-content-container">
                              <h3 class="cre__card-title"><?php the_sub_field('product_package_name_sp'); ?></h3>
                              <p class="cre__price-container">
                                <?php if( get_sub_field('product_package_price_slashed_sp') ) : ?>
                                  <s class="strike">$<?php the_sub_field('product_package_price_slashed_sp'); ?></s>
                                <?php endif; ?>
                                <?php if( get_sub_field('product_package_price_sp') ) : ?>
                                  <span class="cre__price">$<?php the_sub_field('product_package_price_sp'); ?></span>
                                <?php endif; ?>
                              </p>
                            </div>

                            <?php if( get_sub_field('product_package_description_sp') ) : ?>
                              <p class="cre__card-payment-details"><?php the_sub_field('product_package_description_sp'); ?></p>
                            <?php endif; ?>
                            
                            <div class="cre__btn-container cre__btn-container--card">
                              <button class="cre__btn cre__btn--card" target="_blank"><a href="<?php echo get_sub_field('product_package_button_url_sp'); ?>">Enroll</a></button>
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
                    
                        <div class="cre__grid-area-<?php echo $css_class_counter + $css_class_counter_interval; ?> cre__grid-area cre__grid-cta cre__package-<?php echo $product_package_counter; ?> <?php if($product_package_counter == 1) echo 'cre__mobile-package-show'; ?> <?php if(get_sub_field('package_highlight_sp')) echo 'cre__package-highlight' ?>">
                          <div class="cre__btn-container cre__btn-container--grid-bottom">
                            <button class="cre__btn cre__btn--grid-bottom" target="_blank"><a href="<?php echo get_sub_field('product_package_button_url_sp'); ?>">Enroll</a></button>
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


    <?php elseif( get_row_layout() == 'horizontal_rule_block_sp' ): // Horizontal Rule
      
      $horizontal_rule_version = get_sub_field( 'horizontal_rule_sp' ); ?>

      <div class="horizontal-rule container <?php if($horizontal_rule_version == 'Dark Version') echo 'horizontal-rule--dark'; 
                                                  if($horizontal_rule_version == 'Light Version') echo 'horizontal-rule--light'; ?>">
        <hr>
      </div>


    <?php elseif( get_row_layout() == 'spacer_block_sp' ): // Spacer Block ?>

      <div class="spacer-container" style="height: <?php the_sub_field('spacer_height_sp'); ?>px;"></div>


    <?php elseif( get_row_layout() == 'basic_content_section_sp' ): // Basic Content Section (wysiwyg) ?>

      <section class="basic-content-section">
        <div class="container">
          <?php the_sub_field('basic_content_sp'); ?>
        </div>
      </section>


    <?php endif; // End Flexible Content Layout Types ?>


  <?php endwhile; // End Flexible Content Loop ?>
<?php endif; // End Flexible Content if statement?>


<style>
  .main-grid-container { grid-template-columns: repeat(<?php echo $product_package_counter; ?>, 1fr); }
</style>


<script>
  //** TABS FUNCTIONALITY **//
  const $tabTitleFirst = jQuery(".tab:first-of-type .tab-title");
  const $tabTitles = jQuery(".tab .tab-title");
  const $tabContentWrapFirst = jQuery(".tab-content-wrap-1");
  const $tabContentWrap = jQuery('.tab-content-wrap');

  // Add classes to first tab so it renders on page load
  $tabTitleFirst.addClass("active-tab");
  $tabContentWrapFirst.addClass("d-block");
    
  // Activate new tab title on user click
  $tabTitles.click(function () {
    $tabTitles.removeClass("active-tab");
    jQuery(this).addClass("active-tab");
  });

  // Activate new tab conent on user click
  $tabTitles.click(function () {
    $tabContentWrap.removeClass('d-block');

    $tabTitles.each((index, tabTitle) => {
      if(tabTitle.classList.contains('active-tab')) jQuery('.tab-content-wrap-' + (index + 1)).addClass('d-block');
    })
  });
  

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
    // $this.find('.cre__value-prop--expand').slideToggle('slow');
    // console.log($this.find('.cre__value-prop--expand'));
    
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

<?php get_footer(); ?>