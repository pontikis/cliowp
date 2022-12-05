# ClioWP

ClioWP is a WordPress Starter Theme for Developers.

ClioWP WordPress Theme, (C) 2022 Christos Pontikis
ClioWP is distributed under the terms of the GNU GPL.

In Greek mythology, Clio is the muse of history: https://en.wikipedia.org/wiki/Clio

## Download

https://github.com/pontikis/cliowp

## Demo

https://cliowp.pontikis.net

## How to use it

In order to create your own theme with ClioWP:

* Configure metadata in `style.css`
* Use your own `screenshot.png`
* Apply your static HTML design
* Replace text domain ('clipowp') with your own
* Add your custom code
* Translate to your own language (optional
* Upload it to WordPress (`wp-content/themes`)

More info https://developer.wordpress.org/themes/

## @wordpress/scripts

@wordpress/scripts is recommended for JS and CSS development. In this case:

* Configure metadata in `package.json`
* Run `npm install`

More details at https://www.pontikis.net/blog/how-to-write-js-and-css-in-wordpress-with-industry-standard-tools

## Blog aspect

Using WordPress admin:

* Go to Settings -> Permalinks and choose "Post name" option
* Create two pages (Home and Blog)
* Go to Settings -> Reading and set Homepage to Home and Posts page to Blog

## Menus and Mobile menu

Top menu, bottom menu and Mobile menu have been registered. Use them optionally.

More details at https://www.pontikis.net/blog/how-to-add-a-mobile-menu-in-any-wordpress-theme

## Translations

ClioWP supports localization (using gettext). Currently, Greek language is also available.

## Coding standards

I prefer to use Alternative PHP syntax for control structures

See  https://www.php.net/manual/en/control-structures.alternative-syntax.php

## Child theme

If you want to experiment with a child theme, find ClioWP Child Theme at https://github.com/pontikis/cliowp-child-theme
