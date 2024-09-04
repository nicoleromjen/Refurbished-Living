<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="frontpage-container">
            <!-- <?php echo do_shortcode('[contact-form-7 id="cc310c7" title="Support form"]') ?> -->
            <div class="categories-subheader">
                <ul class="categories-list">

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            <?php dll_e("List-1.1") ?>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                        <?php dll_e("List-1.2") ?>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                        <?php dll_e("List-1.3") ?>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                        <?php dll_e("List-1.4") ?>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            Soveværelse
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            Opbevaring
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            Kontor
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            Belysning
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                          <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                        </ul>
                      </div>
                    </li>

                </ul>
            </div>

            <div class="hero-grid">
                <div class="image1" id="hero-image"></div>
                <div class="image2" id="hero-image"></div>
                <div class="image3" id="hero-image"></div>
                <div class="image4" id="hero-image"></div>
                <div class="image5" id="hero-image"></div>
            </div>
        </div>
        
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>