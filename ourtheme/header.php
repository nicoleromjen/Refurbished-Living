<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>
    <nav>
        <ul id="header-ul">
            <li><a href=""><h1>LOGO</h1></a></li>
            <li class="nav-menu">
                <div class="search-bar">
                    <input type="text" id="search-bar-input" value="Search...">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/></svg>
                    </a>
                </div>

                <ul class="nav-menu-list">
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
                    <li><a href="">Hjem</a></li>
                    <li><a href="">Udsalg</a></li>
                    <li><a href="">Blog</a></li>
                    
                </ul>
                <div class="shopping-cart">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M21.08 7a2 2 0 0 0-1.7-1H6.58L6 3.74A1 1 0 0 0 5 3H3a1 1 0 0 0 0 2h1.24L7 15.26A1 1 0 0 0 8 16h9a1 1 0 0 0 .89-.55l3.28-6.56A2 2 0 0 0 21.08 7m-4.7 7H8.76L7.13 8h12.25Z"/><circle cx="7.5" cy="19.5" r="1.5" fill="currentColor"/><circle cx="17.5" cy="19.5" r="1.5" fill="currentColor"/></svg>
                    </a>
                </div>
            </li>
        </ul>
    </nav>