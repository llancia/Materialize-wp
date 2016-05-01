<?/*    Header.css
        MaterilaizeWP
        Lorenzo Lancia

*/?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <!-- CSS  -->
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
    <div class="navbar-fixed hide-on-med-and-down">
        <nav class="light-blue darken-1 white-text" role="navigation">
            <div class="nav-wrapper container contlargo">
             <?php mytheme_custom_logo(); ?>
             <a href="<?php echo get_site_url(); ?>"
                 class="brand-logo">
                 <span class="32space"> <?php bloginfo( 'name' ); ?></span></a>
                 <ul class="right hide-on-med-and-down">
                   <?php wp_list_pages(array('title_li' => '', 'depth'        => 1)); ?>

               </ul>
           </div>
       </nav>
   </div>
   <div class="hide-on-large-only">
    <nav class=" light-blue darken-1 white-text" role="navigation">
        <div class="nav-wrapper container contlargo" >
            <a href="<?php home_url( $path, $scheme ); ?>"
                id="mobilelogo" class="brand-logo">   <?php bloginfo( 'name' ); ?></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse bottonemenu"><i class="mdi-navigation-menu"></i></a>
                <ul class="right hide-on-med-and-down">
                    <?php wp_list_pages(array('title_li' => '', 'depth'        => 1)); ?>
                    
                </ul>
                <ul class="side-nav" id="mobile-demo">
                   <?php wp_list_pages(array('title_li' => '', 'depth'        => 1)); ?>

               </ul>
           </div>
       </nav>
   </div>