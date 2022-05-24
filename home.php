<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
  <div class="region-slideshow-container">
    <h2 class="hidden">Slideshow</h2>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
    <?php endif ?>
  </div>
</section>
<!-- slideshow end -->
<!-- welcome -->
<section class="hp-welcome">
  <div class="region-welcome-container">
    <div class="welcome-primary-section">
      <img
        alt="agent"
        class="img-responsive"
        src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-agent.jpg"
      />
    </div>
    <div class="welcome-secondary-section">
      <div class="site-title">
        <h3>About</h3>
        <h2>Nikol</h2>
      </div>
      <p>
        Nikol Klein graces the real estate world with a unique perspective and
        background in the performing arts. Having grown up on the east coast,
        she brings an aggressive work ethic and versatility that each real
        estate transaction requires.
      </p>
      <p>
        Nikol’s marketing expertise and social media savvy combined with her
        professionalism and fierce negotiating skills make her clients feel
        confident that she will represent them to the highest of standards. She
        looks forward to putting your real estate goals center stage.
      </p>
      <a href="[blogurl]" aria-label="READ MORE" class="site-btn">READ MORE</a>
    </div>
    <span class="yellow"></span>
  </div>
</section>
<!-- welcome end -->
<!-- team -->
<section class="hp-team">
  <div class="region-team-container">
    <div class="site-title">
      <h3>Meet</h3>
      <h2>The Team</h2>
    </div>
    <div class="team-slick">
      <a href="[blogurl]" aria-label="team" class="team-item">
        <div class="team-img canvas-wrapper">
          <canvas width="340" height="436"></canvas>
          <img
            alt="team"
            class="img-team canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-1.jpg"
          />
        </div>
        <div class="team-content">
          <h3>Ashley Rose Bogart</h3>
          <h2>REALTOR®</h2>
          <p>(760)484-0144 <span>DRE# 02035677</span></p>
        </div>
      </a>
      <a href="[blogurl]" aria-label="team" class="team-item">
        <div class="team-img canvas-wrapper">
          <canvas width="340" height="436"></canvas>
          <img
            alt="team"
            class="img-team canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-2.jpg"
          />
        </div>
        <div class="team-content">
          <h3>Diane Aiken</h3>
          <h2>REALTOR®</h2>
          <p>(760)484-0144 <span>DRE# 02035677</span></p>
        </div>
      </a>
      <a href="[blogurl]" aria-label="team" class="team-item">
        <div class="team-img canvas-wrapper">
          <canvas width="340" height="436"></canvas>
          <img
            alt="team"
            class="img-team canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-3.jpg"
          />
        </div>
        <div class="team-content">
          <h3>Jessica "Peach" Aiken</h3>
          <h2>REALTOR®</h2>
          <p>(760)484-0144 <span>DRE# 02035677</span></p>
        </div>
      </a>
      <a href="[blogurl]" aria-label="team" class="team-item">
        <div class="team-img canvas-wrapper">
          <canvas width="340" height="436"></canvas>
          <img
            alt="team"
            class="img-team canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/team-4.jpg"
          />
        </div>
        <div class="team-content">
          <h3>Ashley Rose Bogart</h3>
          <h2>REALTOR®</h2>
          <p>(760)484-0144 <span>DRE# 02035677</span></p>
        </div>
      </a>
    </div>
  </div>
</section>
<!-- team end -->
<!-- properties -->
<section class="hp-properties">
  <div class="region-properties-container">
    <div class="site-title">
      <h3>Featured</h3>
      <h2>Listings</h2>
    </div>
    <div class="properties-slick">
      <div class="properties-slick-item ">
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-1">
          <div class="properties-img canvas-wrapper">
            <canvas width="701" height="367"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$119,900,500</h3>
            <p>
              1700 East Walnut Avenue, Suite 400,<br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-2">
          <div class="properties-img canvas-wrapper">
            <canvas width="477" height="368"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$254,500,000</h3>
            <p>
              3501 East Walnut Avenue, Suite 400, <br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-3">
          <div class="properties-img canvas-wrapper">
            <canvas width="587" height="430"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-3.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$350,000,000</h3>
            <p>
              7840 East Walnut Avenue, Suite 400, <br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-grid-4">
          <div class="properties-img canvas-wrapper">
            <canvas width="587" height="430"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-4.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$145,550,000</h3>
            <p>
              1954 East Walnut Avenue, Suite 400,<br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
      </div>
      <div class="properties-slick-item ">
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-1">
          <div class="properties-img canvas-wrapper">
            <canvas width="701" height="367"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$119,900,500</h3>
            <p>
              1700 East Walnut Avenue, Suite 400,<br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-2">
          <div class="properties-img canvas-wrapper">
            <canvas width="477" height="368"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$254,500,000</h3>
            <p>
              3501 East Walnut Avenue, Suite 400, <br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-item-3">
          <div class="properties-img canvas-wrapper">
            <canvas width="587" height="430"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-3.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$350,000,000</h3>
            <p>
              7840 East Walnut Avenue, Suite 400, <br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
        <a href="[blogurl]" aria-label="properties" class="properties-item properties-grid-4">
          <div class="properties-img canvas-wrapper">
            <canvas width="587" height="430"></canvas>
            <img
              alt="properties"
              class="img-properties canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-4.jpg"
            />
          </div>
          <div class="properties-content">
            <h3>$145,550,000</h3>
            <p>
              1954 East Walnut Avenue, Suite 400,<br />
              El Segundo, CA 90245
            </p>
            <span class="site-btn">View Details</span>
          </div>
        </a>
      </div>
    </div>
    <span class="site-btn btn-properties">View More Properties</span>
  </div>
</section>
<!-- properties end -->
<!-- sales -->
<section class="hp-sales">
  <div class="region-sales-container">
    <div class="site-title">
      <h3>Record-Breaking</h3>
      <h2>Sales</h2>
    </div>
    <div class="sales-wrapper">
      <div class="sales-slick">
        <a href="[blogurl]" aria-label="sales" class="sales-item">
          <div class="sales-img canvas-wrapper">
            <canvas width="1139" height="471"></canvas>
            <img
              alt="sales"
              class="img-sales canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/sales.jpg"
            />
          </div>
          <div class="sales-content">
            <p class="content-top">
              426 Whitewood <br />
              Place, Encinitas
            </p>
            <p class="content-bottom"> <span>Sold</span> for </p>
            <h3>
              $1,760,000
            </h3>
          </div>
        </a>
        <a href="[blogurl]" aria-label="sales" class="sales-item">
          <div class="sales-img canvas-wrapper">
            <canvas width="1139" height="471"></canvas>
            <img
              alt="sales"
              class="img-sales canvas-img img-responsive"
              src="<?php echo get_stylesheet_directory_uri() ?>/images/sales.jpg"
            />
          </div>
          <div class="sales-content">
            <p class="content-top">
              426 Whitewood <br />
              Place, Encinitas
            </p>
            <p class="content-bottom"> <span>Sold</span> for </p>
            <h3>
              $1,760,000
            </h3>
          </div>
        </a>
      </div>
      <div class="sales-slick-arrow">
        <div class="prev-arrow">
          <img alt="agent" class="img-responsive"
          src="<?php echo get_stylesheet_directory_uri() ?>/images/prev-arrow.png" width="10" height="12"/>
        </div>
        <div class="next-arrow">
          <img alt="agent" class="img-responsive"
          src="<?php echo get_stylesheet_directory_uri() ?>/images/next-arrow.png" width="10" height="12"/>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- sales end -->
<!-- testimonials -->
<section class="hp-testimonials">
  <div class="region-testimonials-container">
    <div class="testi-left">
      <div class="site-title">
        <h3>What Our Clients</h3>
        <h2>Are Saying</h2>
      </div>
        <a href="[blogurl]" aria-label="VIEW MORE TESTIMONIALS" class="site-btn btn-testi"
        >VIEW MORE TESTIMONIALS</a
          >
    </div>
    <div class="testimonials-slick">
      <a href="[blogurl]" aria-label="testimonials" class="testimonials-item">
        <div class="testimonials-img canvas-wrapper">
          <canvas width="382" height="597"></canvas>
          <img
            alt="testimonials"
            class="img-testimonials canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-img.jpg"
          />
        </div>
      </a>
      <a href="[blogurl]" aria-label="testimonials" class="testimonials-item">
        <div class="testimonials-img canvas-wrapper">
          <canvas width="382" height="597"></canvas>
          <img
            alt="testimonials"
            class="img-testimonials canvas-img img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-img.jpg"
          />
        </div>
      </a>
    </div>
    <div class="testi-right">
      <div class="testimonials-slick-arrow">
        <div class="prev-arrow">
          <img alt="agent" class="img-responsive"
          src="<?php echo get_stylesheet_directory_uri() ?>/images/prev-arrow1.png" width="10" height="12"/>
        </div>
        <div class="next-arrow">
          <img alt="agent" class="img-responsive"
          src="<?php echo get_stylesheet_directory_uri() ?>/images/next-arrow1.png" width="10" height="12"/>
        </div>
      </div>
      <div class="testimonials-slick-body">
        <div class="testimonials-content">
          <div class="quote">          
            <img
            alt="testimonials"
            class="img-testimonials img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-quote.png"
          /></div>
          <p>
            Caring. Attentive. Smart. Old School Manners and New School savvy. We
            worked with her at the beginning of the quarantine and she helped us
            navigate the constantly changing environment.
          </p>
          <h3>Victor L.</h3>
        </div>
        <div class="testimonials-content">
          <div class="quote">  <img
            alt="testimonials"
            class="img-testimonials img-responsive"
            src="<?php echo get_stylesheet_directory_uri() ?>/images/testi-quote.png"
          /></div>
          <p>
            Caring. Attentive. Smart. Old School Manners and New School savvy. We
            worked with her at the beginning of the quarantine and she helped us
            navigate the constantly changing environment.
          </p>
          <h3>Victor L.</h3>
        </div>
      </div>
    </div>
  </div>
  <span class="testi-blackbg"></span>
</section>
<!-- testimonials end -->
<!-- news -->
<section class="hp-news">
  <div class="region-news-container">
    <div class="site-title">
      <h3>In The</h3>
      <h2>News</h2>
    </div>
    <div class="news-gallery-image-container">
      <a href="[blogurl]" aria-label="news-image" class="news-image">
        <div class="news-item canvas-wrapper">
          <canvas width="388" height="527"></canvas>
          <img
            alt="news-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-1.jpg"
          />
          <h3>Modern Luxury Magazine Feature</h3>
        </div>
      </a>
      <a href="[blogurl]" aria-label="news-image" class="news-image">
        <div class="news-item canvas-wrapper">
          <canvas width="388" height="527"></canvas>
          <img
            alt="news-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-2.jpg"
          />
          <h3>WSJ Real Trends - America's Best Real Estate Professional</h3>
        </div>
      </a>
      <a href="[blogurl]" aria-label="news-image" class="news-image">
        <div class="news-item canvas-wrapper">
          <canvas width="388" height="527"></canvas>
          <img
            alt="news-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-3.jpg"
          />
          <h3>Empowered Women of Southern California</h3>
        </div>
      </a>
      <a href="[blogurl]" aria-label="news-image" class="news-image">
        <div class="news-item canvas-wrapper">
          <canvas width="388" height="527"></canvas>
          <img
            alt="news-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-4.jpg"
          />
          <h3>Modern Luxury Magazine Feature</h3>
        </div>
      </a>
    </div>
  </div>
</section>
<!-- news end -->
<!-- media -->
<section class="hp-media">
  <div class="region-media-container">
    <div class="media-wrapper">
      <div class="media-content">
        <div class="site-title">
          <h3>In the</h3>
          <h2>Media</h2>
        </div>
        <div class="media-info">
          <h3>Journey Through 17538</h3>
          <p>
            Listing Video for 17538 El Vuelo in Rancho Santa Fe Covenaant. Cliff
            May designated historical home.
          </p>
        </div>
      </div>
      <div class="media-video-content">
          <div class="media-video">
              <a href="[blogurl]" aria-label="media-video" class="media-video">
                  <div class="media-item media-yellow canvas-wrapper">
                    <canvas width="680" height="376"></canvas>
                    <img
                      alt="media-video"
                      class="canvas-video canvas-img video-responsive"
                      src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-top.jpg"
                    />
                    <span class="ai-font-play-button-a"></span>
                </a>
          </div>
          <div class="media-button">
              <a href="[blogurl]" aria-label="VIEW TV" class="site-btn">VIEW TV</a>
              <a href="[blogurl]" aria-label="VIEW PRESS" class="site-btn">VIEW PRESS</a>
              <a href="[blogurl]" aria-label="VIEW SPEAKING" class="site-btn">VIEW SPEAKING</a>
          </div>
      </div>
    </div>
  </div>
    <div class="media-gallery-image-container">
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-1.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-2.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-3.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-4.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-5.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-6.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
      <a href="[blogurl]" aria-label="media-image" class="media-image">
        <div class="media-item canvas-wrapper">
          <canvas width="222" height="219"></canvas>
          <img
            alt="media-image"
            class="canvas-img img-responsive"
            src=" <?php echo get_stylesheet_directory_uri() ?>/images/media-7.jpg"
          />
          <span class="ai-font-instagram"></span>
        </div>
      </a>
    </div>
</section>
<!-- media end -->
<!-- contact -->
<section class="hp-contact">
  <div class="region-contact-container">
    <div class="site-title">
      <h3>Get In </h3>
      <h2>Touch</h2>
    </div>
    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
    </div>
  </div>
</section>
<!-- contact end -->
<div class="hp-sidebar">
  <div id="scroll-down">
    <ul class="aios-section-nav"></ul>
    <ul class="comp-social-sidebar">
      <li class="side-smi">
        <a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
          <span class="ai-font-facebook"></span>
        </a>
      </li>
      <li class="side-smi">
        <a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
          <span class="ai-font-twitter"></span>
        </a>
      </li>
      <li class="side-smi">
        <a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
          <span class="ai-font-instagram"></span>
        </a>
      </li>
      <li class="side-smi">
        <a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
          <span class="ai-font-youtube"></span>
        </a>
      </li>
      <li class="side-smi">
        <a href="[ai_client_linkedin]" target="_blank" aria-label="linkedin">
          <span class="ai-font-linkedin"></span>
        </a>
      </li>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
