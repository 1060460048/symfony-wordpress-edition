Symfony WordPress Edition
========================

Modified [Symfony Standard Edition](https://github.com/symfony/symfony-standard) for use with [WordPress](http://wordpress.org).

Includes [RoutemasterBundle](https://github.com/outlandishideas/RoutemasterBundle) which provides some light glue between
Symfony and WordPress and [OowpBundle](https://github.com/outlandishideas/OowpBundle) which provides object oriented
wrappers around WP custom post types.

## Features

* Build your front end using Symfony routes, controllers and views
* Use WordPress's CMS interface on the back end
* Use `WP_Query` in your controllers to fetch the content to display
* Compatible with most existing WordPress plugins and Symfony bundles
* Bridge Symfony and WordPress event systems on either front or back end

## Installation

* Download ZIP archive and run `composer install` (assuming [Composer](http://getcomposer.org/download/) is installed globally).
* Add DB details to `web/wp-config.php`.
* Open the `web` folder in a browser and run the usual WordPress install.

See [RoutemasterBundle](https://github.com/outlandishideas/RoutemasterBundle) for further usage instructions.