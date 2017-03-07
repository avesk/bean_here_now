<?php get_header(); ?>

<p id="hours">
    Hours: Mon - Fri 10am - 5pm
  </p>

  <p id="slogan"><i>Consciousness café proudly serving
    Capulin traditionally handcrafted 
    coffee in Nelson BC</i>
  </p>
  
  <article class="posts" >
    
    <div class="post">
      <h4>
        I am a sample News Story
      </h4>
      <p>
        I am some info about the news story
      </p>
      <img src="<?php echo get_bloginfo('template_url') ?>/images/bhn_mitch.jpg" width="300" height="300"/>
    </div>
    
    <div class="post">
      <h4>
        I am a sample News Story
      </h4>
      <p>
        I am some info about the news story
      </p>
      <img src="<?php echo get_bloginfo('template_url') ?>/images/bhn_mitch.jpg" width="300" height="300"/>
    </div>
    
  </article>

  <?php get_footer(); ?>