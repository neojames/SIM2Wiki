#SIM2Wiki

SIM2Wiki is a simple tool to format SIMs as produced by the Role Play group UFOP:Starbase 118, to a format usable on MediaWiki.

##Combatibility

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run such old versions of PHP, because of potential security and performance issues, as well as missing features.

##Usage

Upload the contents of the SIM2Wiki to a webserver running PHP (tested on Apache 2.4.6 and PHP 5.5.3) and visit the URL in your browser. No additional libraries outside what is already provided by most distributions are required.

###Composer

For versions of SIM2Wiki past v4.0.0 'Scotty' we now support installation via [Composer](https://getcomposer.org/). For now it won't do much more than check that your enviroment is sane, however in the furture if we require any external libraries it will manage, download, and setup them for you!

To install via composer simply follow the installation instructions for composer, then in the directory in which you have placed SIM2Wiki run:

>php composer.phar install

or on Microsoft Windows:

>composer install