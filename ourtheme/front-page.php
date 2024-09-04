<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="frontpage-container">
            <!-- <?php echo do_shortcode('[contact-form-7 id="cc310c7" title="Support form"]') ?> -->
            <div class="categories-subheader">
                <ul class="categories-list">
                    <!-- <li class="category">Outlet</li>
                    <li class="category">Haven</li>
                    <li class="category">Dagligstue</li>
                    <li class="category">Spisestue</li>
                    <li class="category">Soveværelse</li>
                    <li class="category">Opbevaring</li>
                    <li class="category">Kontor</li> -->

                    <li class="dropdown-category">
                      <div class="properties-dropdown">
                        <a class="category" role="button" data-bs-toggle="dropdown">
                            Outlet
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
                            Haven
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
                            Dagligstue
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
                            Spisestue
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
        </div>
        
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>