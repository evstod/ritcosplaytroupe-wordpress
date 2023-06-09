
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta name='viewport' content='width=device-width' initial-scale=1>
  <meta charset='<?php bloginfo('charset') ?>'>
    <?php wp_head(); ?>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body <?php body_class() ?>>
    
<header class="site-header">
  <div class="univ-logo-img float-left">
      <a href="<?php echo site_url(); ?>" aria-label="Home">
        <svg aria-label="RIT Cosplay Troupe Logo">
          <image href="<?php echo get_theme_file_uri('/images/logo_color.svg'); ?>" alt="RIT Cosplay Troupe Logo" width="100"/>
          <rect width="1" height="40" x="105" y="5"/>
        </svg>
      </a>
    </div>
    <div class="site-header__menu group float-right">
      <nav class="main-navigation">
        <?php wp_nav_menu(array(
          'theme_location' => 'headerMenuLocation'
        )) ?>
      </nav>
      <div class="site-header__util">
        <span class="site-header__search">
          <div class="header-search">
            <?php get_search_form(); ?>
          </div>
        </span>
        <span class="site-header__user-info">
          <span class="dashicons dashicons-admin-users"></span>
          Hi, <?php echo wp_get_current_user()->user_firstname; ?>
        </span>
      </div>
    </div>
  </div>
</header>