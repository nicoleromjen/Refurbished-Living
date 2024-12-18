<?php get_header() ?>
<?php if (have_posts()): ?>
  <?php while (have_posts()):
    the_post() ?>

              <?php 
                $sale = get_field('sale_text');
                $img1 = get_field('promoimg');
                $img2 = get_field('promoimg_2');
                $img3 = get_field ('promoimg_3');
                $img4 = get_field('promoimg_4');
                $introimg1 = $introimg['sizes']['my_custom_size'];
              ?>

        <main>

      <div class="frontpage-container">
         <!-- <?php echo do_shortcode('[product_categories]') ?> -->

            <div class="hero-grid">
                <div class="image1 image-container" id="hero-image"><img src="<?php echo esc_url($img1['url']); ?>" class="" alt="...">  </div>
                <div class="image2 image-container" id="hero-image"><h2><?php echo $sale ?></h2></div>
                <div class="image3 image-container" id="hero-image"><img src="<?php echo esc_url($img2['url']); ?>" class="" alt="...">  </div>
                <div class="image4 image-container" id="hero-image"><img src="<?php echo esc_url($img3['url']); ?>" class="" alt="...">  </div>
                <div class="image5 image-container" id="hero-image"><img src="<?php echo esc_url($img4['url']); ?>" class="" alt="...">  </div>
            </div>

            <h1 class="first-section-title">Trending</h1>
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

        <!-- <h1 class="first-section-title">Populære Møbler</h1>
        <div class="first-section-container">

          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">





                <div class="popular-products">

                  <?php
                  $loop = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => 4
                  ));
                  ?>

                  <?php if ($loop->have_posts()): ?>
                    <?php while ($loop->have_posts()):
                      $loop->the_post() ?>


                      <?php global $product;
                      $title = get_the_title();
                      $excerpt = get_the_excerpt();
                      $price = $product->get_price_html();
                      $link = get_permalink();
                      $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                      $acftest1 = get_field('acftestfield1');
                      $acftest2 = get_field('acftestfield2');
                      ?>

                      HTML CODE HERE

                      <div class="product-card">
                        <div class="product-image">
                          <img src="<?php echo esc_url($image_url) ?>" alt="">
                        </div>
                        <div class="product-text">
                          <h3><?php echo $title ?></h3>
                          <p><?php echo $acftest1?></p>
                          <p><?php echo $acftest2?></p>
                          <p class="price-text"><strong>Pris:</strong> <?php echo $price ?></p>
                          <p class="crossed-text">Tidligere pris: DKK 2.799</p>
                          <button><a href="<?php echo $link ?>">Se produkt</a></button>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>

              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon carousel-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon carousel-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



        </div>
      </div> -->

    </main>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>