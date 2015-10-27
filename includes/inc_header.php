<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
        <!-- Meta RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!-- stats-SEO -->
    <meta name="google-site-verification" content="" />
    <meta name="y_key" content=""/>
    <meta name="msvalidate.01" content="" />
    <?php print $head; ?>
    <?php print $styles; ?>
        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 
   <?php print $scripts; ?>
 
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
 

  </head>

 <body class="<?php print $body_classes; ?>">
 <!-- ______________________ PAGE TOP BANDEAU _______________________ -->
 <?php
 //global $theme_path; include_once ($theme_path . '/includes/inc_bandeau_coulissant_css.php');
 ?>
 <?php
 //global $theme_path; include ($theme_path . '/includes/inc_bandeau_coulissant_js.php');
 ?>
<!-- ______________________ CONTENEUR _______________________ -->
     <section class="conteneur">
      <?php
 global $theme_path; include ($theme_path . '/includes/inc_bandeau_off_canvas_susy.php');
 ?>
    <!-- ______________________ HEADER _______________________ -->
    <header id="header">


        <div class="headHaut">

            <div class="logoHead">
                <?php if (!empty($logo)): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
            </div>


            <?php if (!empty($navStatic)): ?>
                <div class="menuImg">
                    <?php print $navStatic; ?>
                </div>            
            <?php endif; ?>
            

        </div><!-- /headHaut -->
        <div class="headBas">

            <?php if (!empty($site_slogan)): ?>
                <div class="site-slogan">
                    <?php print $site_slogan; ?>
                </div><!-- /site-slogan -->
            <?php endif; ?>


            <div class="headSearch">
                <?php if (!empty($search_box)): ?>
                    <?php print $search_box ?>
                <?php endif; ?>
            </div><!-- /recherche -->
            
            

        </div><!-- /headBas -->
         <nav class="menuHead">
            <?php if (!empty($menuDyn)): ?>
                <?php print $menuDyn; ?>
            <?php endif; ?>

        </nav><!-- /menuHead -->
       
    </header> <!-- /header -->
