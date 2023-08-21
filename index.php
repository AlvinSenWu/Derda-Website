<?php get_header(); ?>
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/people.jpg')?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>

      </div>
    </div>

    <div class="full-width-split group"> <!-- this is where it starts -->
    <div class="full-width-split__two">
        <div class="full-width-split__inner_two">
          <h2 class="headline headline--small-plus t-center">Recent Publications</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Aug</span>
              <span class="event-summary__day">'22</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="https://www.biorxiv.org/content/10.1101/2022.08.22.504611v1">Genetically-Encoded Discovery of Perfluoroaryl-Macrocycles that Bind to Albumin and Exhibit Extended Circulation in-vivo</a></h5>
              <p><a href="https://www.biorxiv.org/content/10.1101/2022.08.22.504611v1" class="nu gray">Read more</a></p>
              <!-- <p> Maybe a picture  </p> -->
      
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">AUG</span>
              <span class="event-summary__day">'22</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="https://www.biorxiv.org/content/10.1101/2022.08.05.503005v1">Chemoenzymatic Synthesis of Genetically-Encoded Multivalent Liquid N-glycan Arrays</a></h5>
              <p><a href="https://www.biorxiv.org/content/10.1101/2022.08.05.503005v1" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">May</span>
              <span class="event-summary__day">'22</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="https://pubs.rsc.org/en/content/articlelanding/2022/sc/d1sc05681f">GlyNet: a multi-task neural network for predicting protein–glycan interactions</a></h5>
              <p><a href="https://pubs.rsc.org/en/content/articlelanding/2022/sc/d1sc05681f" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="<?php echo site_url('/publications')?>" class="btn btn--yellow">View All Publications Posts</a></p>
        </div>
      </div>


      <div class="full-width-split__one">
        <div class="full-width-split__inner">
        <!-- <h2 class="headline headline--small-plus t-center">Check Us Out on Twitter!</h2> -->
        <div class = 'twitter_widget'>
        <!-- <a class="twitter-timeline"href="https://twitter.com/derda_lab?ref_src=twsrc%5Etfw">Tweets by derda_lab</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-ff5deb4c-f8e4-498d-b88c-645abe0ee964"></div>
        
        </div>



        </div>
      </div><!-- this is where it ends -->
      <!-- <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Recent Publications</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Project 1</a></h5>
              <p>Our project 1 has been published <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Project 2</a></h5>
              <p>Our project 2 has been published. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Publications Posts</a></p>
        </div>
      </div> -->
    </div>
    
    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/mole.png')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Genetically-Encoded Discovery</h2>
                <h2 class="headline headline--medium t-center">of Bioactive Molecules</h2>
                <!-- <p class="t-center">We are interested in developing  genetically-encoded </p>
                <p class="t-center">fragment-based discovery (1) of potent inhibitors with the goal of developing drug candidates </p>
                <p class="t-center">or targeting/imaging agents for undraggable targets.</p> -->
                <p class="t-center no-margin"><a href="<?php echo site_url('/research')?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/slid2.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Chemical Optogenics</h2>
                <h2 class="headline headline--medium t-center">and Photopharmacology</h2>

                <!-- <p class="t-center">little bit on what we're working on slider 2</p> -->
                <p class="t-center no-margin"><a href="<?php echo site_url('/research')?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>

          <!-- since third slider causing issues, comment out for now and see -->
          
          <!-- <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri("images/trynew.jpg")?>;">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Forward Chemical Genetics</h2>
                <h2 class="headline headline--medium t-center">of Cell Differentiation</h2>
                <p class="t-center">little bit on what we're working on slider 2.</p> 
                <p class="t-center no-margin"><a href="<?php echo site_url('/research')?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>  
          -->
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>



   <?php get_footer();
?>

