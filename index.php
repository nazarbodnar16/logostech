<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="visual">
    <div class="swiper-container baner-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-img">
         <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="">
         <div class="container h-100">
          <div class="baner-description">
           <strong class="heading">Redkite Pod</strong>
           <p>Wide-area motion imagery in a platform agnostic pod.</p>
           <a href="" class="default-btn">Learn more</a>
         </div>
       </div>
     </div>
     <div class="swiper-slide bg-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="">
      <div class="container h-100">
        <div class="baner-description">
          <strong class="heading">SIMERA</strong>
          <p>Persistent city-sized coverage in only 40 pounds.</p>
          <a href="" class="default-btn">Learn more</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide bg-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="">
      <div class="container h-100">
        <div class="baner-description">
          <strong class="heading">Serenity</strong>
          <p>Dual-sensor system to detect and locate sources of enemy fire.</p>
          <a href="" class="default-btn">Learn more</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide bg-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="">
      <div class="container h-100">
        <div class="baner-description">
          <strong class="heading">Kestrel Block II </strong>
          <p>Lightweight WAMI for 24/7 surveillance in under  85 pounds.</p>
          <a href="" class="default-btn">Learn more</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide bg-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="">
      <div class="container h-100">
        <div class="baner-description">
          <strong class="heading">Redkite-I</strong>
          <p>Lightweight WAMI for the Insitu Integrator® UAS</p>
          <a href="" class="default-btn">Learn more</a>
        </div>
      </div>
    </div>
    <div class="swiper-slide bg-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/6.jpg" alt="">
      <div class="container h-100">
        <div class="baner-description">
          <strong class="heading">The advantage  of wide-area motion imagery</strong>
          <p>Monitor an entire city-sized area, in real time,  24 hours a da</p>
          <a href="" class="default-btn">Learn more</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="products-holder">
  <div class="container">
    <div class="headline clearfix">
      <ul class="headline-list">
        <li>Wide-area</li>
        <li>Persistent</li>
        <li>minturaized</li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
    <div class="product-slider-box">
     <div class="swiper-button-next"></div>
     <div class="swiper-button-prev"></div>
     <div class="product-slider swiper-container">
      <ul class="product-list swiper-wrapper">
        <li class="swiper-slide">
          <a href="">
            <span class="flip-box-front">
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/MMSP.png" alt=""></div>
              <div class="product-info">
                <h2 class="product-name">MMSP</h2>
                <p>Platform Agnostic Multi-Sensor Pod</p>
              </div>
            </span>
            <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mmsp-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT MMSP</span>
            </div>
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <span class="flip-box-front">
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Serenity.png" alt=""></div>
              <div class="product-info">
                <h2 class="product-name">Serenity</h2>
                <p>Aerostat or mast mounted dual fire detection system</p>
              </div>
            </span>
            <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/serenity-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT SERENITY</span>
            </div>
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <span class="flip-box-front">
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Redkite-I.png" alt=""></div>
              <div class="product-info">
                <h2 class="product-name">Redkite-I</h2>
                <p>Powerful Wide-Area Motion Imagery in a Small Group 3 UAS</p>
              </div>
            </span>
            <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/redkite-1-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT REDKITE-I</span>
            </div>
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <span class="flip-box-front">
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Redkite.png" alt=""></div>
              <div class="product-info">
                <h2 class="product-name">Redkite</h2>
                <p>Lightweight Wide-Area Motion Imagery System for Aircraft</p>
              </div>
            </span>
            <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/redkite-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT REDKITE</span>
            </div>
          </a>
        </li>
        <li class="swiper-slide">
          <a href="">
            <span class="flip-box-front">
             <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Kestrel-Block-II.png" alt=""></div>
             <div class="product-info">
              <h2 class="product-name">Kestrel block II</h2>
              <p>Lightweight day and night aerostat mounted WAMI system</p>
            </div>
          </span>
          <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/kestrel-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT KESTREL BLOCK II</span>
            </div>
        </a>
      </li>
      <li class="swiper-slide">
        <a href="">
          <span class="flip-box-front">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Simera.png" alt=""></div>
            <div class="product-info">
              <h2 class="product-name">Simera</h2>
              <p>Lightweight aerostat mounted wide-area motion system</p>
            </div>
          </span>
          <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/simera-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT Simera</span>
            </div>
        </a>
      </li>
      <li class="swiper-slide">
        <a href="">
          <span class="flip-box-front">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/SilentHawk.png" alt=""></div>
            <div class="product-info">
              <h2 class="product-name">SilentHawk</h2>
              <p>Hybrid-Electric Military Motorcycle</p>
            </div>
          </span>
          <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/silenthawk-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT SILENTHAWK</span>
            </div>
        </a>
      </li>
      <li class="swiper-slide">
        <a href="">
          <span class="flip-box-front">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Redkite.png" alt=""></div>
            <div class="product-info">
              <h2 class="product-name">Redkite</h2>
              <p>Lightweight Wide-Area Motion Imagery System for Aircraft</p>
            </div>
          </span>
          <div class="hover-img-box bg-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/redkite-hover.jpg" alt="image description">
              <span class="learn-more">LEARN MORE ABOUT REDKITE</span>
            </div>
        </a>
      </li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="expeertise">
  <div class="expeertise-img bg-img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/expertise.png" alt="">
  </div>
  <div class="container">
    <div class="container">
      <div class="expeertise-details">
        <h3 class="h3">EXPERTISE IN ACTION.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sunt sed corrupti id iure, modi laborum quod praesentium aliquam aut, error labore assumenda incidunt, tenetur sint iusto. Voluptates nam dolorem labore porro neque, consectetur consequuntur nemo minus eos saepe sapiente atque vitae dicta reprehenderit totam impedit perferendis velit dolorum aliquam!</p>
        <ul class="action-list">
          <li><a href="">Large data processing and storage</a></li>
          <li><a href="">Operations support for sensor systems</a></li>
          <li><a href="">Advanced analytics</a></li>
          <li><a href="">R&amp;D lifecycle services</a></li>
        </ul>
        <a href="" class="default-btn">learn more</a>
      </div>
    </div>
  </div>
</div>
<div class="supporting">
  <div class="container">
    <div class="headline clearfix">
      <ul class="headline-list">
        <li>SUPPORTING MISSIONS WORLDWIDE</li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
    <div class="row support-list">
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/sec1.png" alt="">
            </div>
            <div class="product-info">
              <h2 class="product-name">Defense</h2>
              <p>Helping secure borders, national infrastructure and major public events while saving on manpower and cutting down on flighthour costs</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/sec2.png" alt="">
            </div>
            <div class="product-info">
              <h2 class="product-name">Homeland Security</h2>
              <p>Helping secure borders, national infrastructure and major public events while saving on manpower and cutting down on flighthour costs</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/sec3.png" alt="">
            </div>
            <div class="product-info">
              <h2 class="product-name">Law Enforcement</h2>
              <p>Helping secure borders, national infrastructure and major public events while saving on manpower and cutting down on flighthour costs</p>
            </div>
          </a>
        </div>
      </div>   
    </div>
    <div class="headline right-line clearfix">
      <ul class="headline-list">
        <li><a href="" class="default-btn dark-btn">LEARN MORE ABOUT THE MARKETS WE SERVE</a></li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
  </div>
</div>
<div class="comment-holder bg-img">
  <img src="<?php echo get_template_directory_uri(); ?>/images/commet-slider-bg.png" alt="">
  <div class="container">
    <div class="comment-slider swiper-container">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <div class="comment-text">
           <p>
            The coverage was amazing ... We were able to see activities happening in different parts of the city all at the same time. We could keep an eye on one area while dispatching agents to other areas.
          </p>
        </div>
        <div class="autor">Senior DHS / CBP Official</div>
      </li>
      <li class="swiper-slide">
        <div class="comment-text">
         <p>
          The coverage was amazing ... We were able to see activities happening in different parts of the city all at the same time. We could keep an eye on one area while dispatching agents to other areas.
        </p>
      </div>
      <div class="autor">Senior DHS / CBP Official</div>
    </li>
    <li class="swiper-slide">
      <div class="comment-text">
       <p>
        The coverage was amazing ... We were able to see activities happening in different parts of the city all at the same time. We could keep an eye on one area while dispatching agents to other areas.
      </p>
    </div>
    <div class="autor">Senior DHS / CBP Official</div>
  </li>
  <li class="swiper-slide">
    <div class="comment-text">
     <p>
      The coverage was amazing ... We were able to see activities happening in different parts of the city all at the same time. We could keep an eye on one area while dispatching agents to other areas.
    </p>
  </div>
  <div class="autor">Senior DHS / CBP Official</div>
</li>
<li class="swiper-slide">
  <div class="comment-text">
   <p>
    The coverage was amazing ... We were able to see activities happening in different parts of the city all at the same time. We could keep an eye on one area while dispatching agents to other areas.
  </p>
</div>
<div class="autor">Senior DHS / CBP Official</div>
</li>
</ul>
<div class="swiper-pagination"></div>
</div>
</div>
</div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


