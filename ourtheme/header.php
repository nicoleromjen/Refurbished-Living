<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <nav>
        <ul id="header-ul">
            <li><a href=""><h1>LOGO</h1></a></li>
            <div class="search-bar">
                <input type="text" id="search-bar-input" value="<?php pll_e("Søg")?>">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/></svg>
                </a>
            </div>
            <li class="nav-menu">
                <?php pll_the_languages( array( 'dropdown' => 1 ) ); ?>

                <div id='navigation' class='nav-bar'>

                <?php 
                wp_nav_menu(
                    array(
                    'menu' => 'primary',
                    'container' =>'',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="">%3$s</ul>'
                    )
                );
                ?>

                </div>

                <!-- <div class="shopping-cart">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M21.08 7a2 2 0 0 0-1.7-1H6.58L6 3.74A1 1 0 0 0 5 3H3a1 1 0 0 0 0 2h1.24L7 15.26A1 1 0 0 0 8 16h9a1 1 0 0 0 .89-.55l3.28-6.56A2 2 0 0 0 21.08 7m-4.7 7H8.76L7.13 8h12.25Z"/><circle cx="7.5" cy="19.5" r="1.5" fill="currentColor"/><circle cx="17.5" cy="19.5" r="1.5" fill="currentColor"/></svg>
                    </a>
                </div> -->
            </li>
        </ul>
        <div class="categories-subheader">
            <ul class="categories-list">

                <li class="dropdown-category">
                    <div class="properties-dropdown">
                    <a class="category" role="button" data-bs-toggle="dropdown">
                        <?php pll_e("List-1.1") ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                    </ul>
                    </div>
                </li>

                <!-- <li class="dropdown-category">
                    <div class="properties-dropdown">
                    <a class="category" role="button" data-bs-toggle="dropdown">
                    <?php pll_e("List-1.2") ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                    </ul>
                    </div>
                </li> -->

                <li class="dropdown-category">
                    <div class="properties-dropdown">
                    <a class="category" role="button" data-bs-toggle="dropdown">
                    <?php pll_e("List-1.3") ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Sofaer</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 2</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 3</button></a></li>
                        <li><a class="category-item" href=""><button class="dropdown-item" type="button">Item 4</button></a></li>
                    </ul>
                    </div>
                </li>

                <li class="dropdown-category">
                    <div class="properties-dropdown">
                    <a class="category" role="button" data-bs-toggle="dropdown">
                    <?php pll_e("List-1.4") ?>
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
                    <?php pll_e("List-1.5") ?>
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
                    <?php pll_e("List-1.6") ?>
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
                    <?php pll_e("List-1.7") ?>
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
                    <?php pll_e("List-1.8") ?>
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
    </nav>