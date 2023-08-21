<!DOCTYPE html>

<html>  
    <head>
        <?php wp_head();?>
    </head>

    <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?>"><strong>Derda</strong> Research Group</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-us')?>">GALLERY</a></li>
              <li><a href="<?php echo site_url('/people')?>">JOIN</a></l> 
              <li><a href="<?php echo site_url('/research')?>">RESEARCH</a></li>
              <li><a href="<?php echo site_url('/publications')?>">PUBLICATIONS</a></li>
              <!-- <li><a href="<?php echo site_url('/news')?>">NEWS</a></li> -->
              <li><a href="<?php echo site_url('/data-protocals')?>">PROTOCOLS</a></li>
              <li><a href="<?php echo site_url('/people-2')?>">PEOPLE</a></li>
              <li><a href="<?php echo site_url('/contact')?>">CONTACT</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <!-- <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a> -->
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
      </div>
    </header>


