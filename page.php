<?php
    get_header();
    while(have_posts()) {
        the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/chpagepic.jpg")?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <!-- <p>IMPLEMENT LATER</p> -->
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">



  <?php 
    $theparent = wp_get_post_parent_id(get_the_ID());
    if($theparent) { ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theparent)?>"><i class="fa fa-home" aria-hidden="true"></i><?php echo get_the_title($theparent)?></a> <span class="metabox__main"><?php the_title();?></span></p>
    </div>
    <?php }
  ?>

    <?php 
    $testarray = get_pages(array(
      'child_of' => get_the_ID()
    ));
    if ($theparent or $testarray){ ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theparent)?>"><?php echo get_the_title($theparent); ?></a></h2>
      <ul class="min-list">
        <?php 
        if ($theparent){
          $findchildof = $theparent;
        } else{
          $findchildof = get_the_id();
        }
          wp_list_pages(array(
          'title_li' => NULL, 
          'child_of' => $findchildof
        ));
        ?>

      </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
     <?php the_content(); ?>
    </div>

  </div>

    <?php }
    get_footer();



?>