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

        <!-- <nav>
                <ul class="nav-list">
                    <li class="nav-element"><a class="nav-links" href="index.html">HOME</a></li>

                    <li class="dropdown-nav">
                      <div class="properties-dropdown">
                        <a class="nav-links"role="button" data-bs-toggle="dropdown">
                          ACCOMODATION
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-menu-item" href="caja-blanca.html"><button class="dropdown-item" type="button">Caja Blanca</button></a></li>
                          <li><a class="dropdown-menu-item" href="rosa-villa.html"><button class="dropdown-item" type="button">Rosa Villa</button></a></li>
                          <li><a class="dropdown-menu-item" href="marina-del-este.html"><button class="dropdown-item" type="button">Marina Del Este</button></a></li>
                          <li><a class="dropdown-menu-item" href="la-bolichera.html"><button class="dropdown-item" type="button">La Bolichera</button></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="nav-element"><a class="nav-links" href="deals.html">DEALS</a></li>
                    <li class="nav-element"><a class="nav-links" href="management.html">MANAGEMENT</a></li>
                    <li class="nav-element"><a class="nav-links" href="about-us.html">ABOUT US</a></li>
                    <li class="nav-element"><a class="nav-links" href="contact.html">CONTACT</a></li>

                    <li class="nav-element nav-element-last-child"><a class="nav-links nav-links-last-child" href="index.html"> <img src="../img/bandera-reino-unido.svg" alt="" class="banderas"> </a>
                     | <a class="nav-links nav-links-last-child" href="index-es.html"> <img src="../img/bandera-españa.avif" alt="" class="banderas"> </a> 
                     |  <a class="nav-links nav-links-last-child" href="index-da.html"> <img src="../img/bandera-dinamarca.avif" alt="" class="banderas"> </a>
                    </li>
                </ul>
            </nav> -->
        
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>