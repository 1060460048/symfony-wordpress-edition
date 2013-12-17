Symfony WordPress Edition
========================

Modified [Symfony Standard Edition](https://github.com/symfony/symfony-standard) for use with [WordPress](http://wordpress.org).

Includes [RoutemasterBundle](https://github.com/outlandishideas/RoutemasterBundle) which provides some light glue between
Symfony and WordPress and [OowpBundle](https://github.com/outlandishideas/OowpBundle) which provides object oriented
wrappers around WP custom post types.

## Usage

* Download ZIP archive and run `composer install` (assuming [Composer](http://getcomposer.org/download/) is installed globally).
* Add DB details to `web/wp-config.php`.
* Open the `web` folder in a browser and go through the usual WordPress install.
* See [RoutemasterBundle](https://github.com/outlandishideas/RoutemasterBundle) for further usage instructions.