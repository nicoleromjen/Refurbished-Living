<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <main>

        <div class="frontpage-container">
            <!-- <?php echo do_shortcode('[contact-form-7 id="cc310c7" title="Support form"]') ?> -->

            <div class="hero-grid">
                <div class="image1" id="hero-image"><img src="<?php echo get_template_directory_uri(); ?>/img/used-furniture.jpeg" alt=""></div>
                <div class="image2" id="hero-image"><h2>SPAR OP TIL <br> 50%</h2></div>
                <div class="image3" id="hero-image"><img src="<?php echo get_template_directory_uri(); ?>/img/bed-grid.jpeg" alt=""></div>
                <div class="image4" id="hero-image"><img src="<?php echo get_template_directory_uri(); ?>/img/eco-friendly.jpeg" alt=""></div>
                <div class="image5" id="hero-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sofa-grid.jpeg" alt=""></div>
            </div>

            <h1 class="first-section-title">Populære Møbler</h1>
            <div class="first-section-container">

              <!-- <a href="#" class="previous round">&#8249;</a> -->

              <!-- <div class="popular-products">


                <div class="product-card">
                  <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-1.jpg" alt="">
                  </div>
                  <div class="product-text">
                    <h3>Product Name</h3>
                    <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                    <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                    <button>Se produkt</button>
                  </div>
                </div>

                 Custom post type for the products 

                <div class="product-card">
                  <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-2.jpg" alt="">
                  </div>
                  <div class="product-text">
                    <h3>Product Name</h3>
                    <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                    <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                    <button>Se produkt</button>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-3.jpg" alt="">
                  </div>
                  <div class="product-text">
                    <h3>Product Name</h3>
                    <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                    <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                    <button>Se produkt</button>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-4.jpg" alt="">
                  </div>
                  <div class="product-text">
                    <h3>Product Name</h3>
                    <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                    <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                    <button>Se produkt</button>
                  </div>
                </div>
                
              </div> -->

              <!-- <a href="#" class="next round">&#8250;</a> -->

              <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="popular-products">
                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-1.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <!-- Custom post type for the products  -->

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-2.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-3.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-4.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="carousel-item">
                  <div class="popular-products">
                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-1.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <!-- Custom post type for the products  -->

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-2.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-3.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                    <div class="product-card">
                      <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/produkt-4.jpg" alt="">
                      </div>
                      <div class="product-text">
                        <h3>Product Name</h3>
                        <p class="price-text"><strong>Pris:</strong> DKK 1.999</p>
                        <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                        <button>Se produkt</button>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


            </div>
        </div>
        
        </main>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>