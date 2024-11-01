=== Show Featured Image Size in Admin TopBar ===
Contributors: apasionados
Donate link: http://apasionados.es/
Tags: featured image size, topbar, admin, administration
Requires at least: 3.0.1
Tested up to: 6.3
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin displays the image size for the featured image size in the admin top bar.

== Description ==

This plugin displays the image size for the featured image in the admin top bar. We find this very handy, because you don't have to look up the default size of the featured image each time you publish a post.

We created this plugin because we manage a large number of blogs with different themes. Normally we always have to check the default size of the featured image before publishing a new post. This means that we have to visit a post published in the past and check the featured image size.

With this plugin you can configure the default featured image size so that it is displayed in the topbar in the administration area.

Easy. Handy. And it saves us a lot of time.

We think it will save a lot of time of everybody that manages blogs with different themes and different default featured image sizes.

= Show Featured Image Size in Admin TopBar in your Language! =
This first release is avaliable in English and Spanish. In the languages folder we have included the necessary files to translate this plugin.

If you would like the plugin in your language and you're good at translating, please drop us a line at [Contact us](http://apasionados.es/contacto/index.php?desde=show-featured-image-size-in-admin-topbar-home).

= Further Reading =
You can access the description of the plugin in Spanish at: [Show Featured Image Size in Admin TopBar](https://apasionados.es/blog/mostrar-dimensiones-imagen-destacada-en-topbar-wordpress-plugin-7783/).

== Installation ==

1. Upload the `show-featured-image-size-in-admin-topbar` folder to the `/wp-content/plugins/` directory (or to the directory where your WordPress plugins are located)
1. Activate the Show Featured Image Size in Admin TopBar plugin through the 'Plugins' menu in WordPress.

Please use with *WordPress MultiSite* at your own risk, as it has not been tested.

== Frequently Asked Questions ==

= What is Show Featured Image Size in Admin TopBar good for? =
This plugin displays the image size for the featured image in the admin top bar. 

= Does Show Featured Image Size in Admin TopBar make changes to the database? =
The plugin creates a new option in the options table: show-featured-image-size-in-admin-topbar-settings-group with values sfisiat_featured_image_size where the default featured image size is saved.

= How can I check out if the plugin works for me? =
Install and activate. In the topbar of the administration area you should see the "Featured Image Size".

= How can I remove Show Featured Image Size in Admin TopBar? =
You can simply activate, deactivate or delete it in your plugin management section.

= Are there any known incompatibilities? =
Please don't use it with *WordPress MultiSite*, as it has not been tested.

= Do you make use of Show Featured Image Size in Admin TopBar yourself? = 
Of course we do. ;-)

== Screenshots ==

1. WordPress Admin Top Bar with featured image size not set
2. WordPress Admin Top Bar with featured image size set to 1200x600
3. WordPress Admin Top Bar settings page

== Changelog ==

= 1.2 =
* Increased character number from 15 to 20.

= 1.1 =
* Updated settings link in topbar when no image size was set: When WordPress was not installed in domain root the settings page was not opened correctly.
* Added a settings and support link to the plugin in the PLUGINS view of WordPress.
* Made some updates to the translations.

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.2 =
Increased character number from 15 to 20.

== Contact ==

For further information please send us an [email](http://apasionados.es/contacto/index.php?desde=show-featured-image-size-in-admin-topbar-contact).

== Translating WordPress Plugins ==

The steps involved in translating a plugin are:

1. Run a tool over the code to produce a POT file (Portable Object Template), simply a list of all localizable text. Our plugins allready havae this POT file in the /languages/ folder.
1. Use a plain text editor or a special localization tool to generate a translation for each piece of text. This produces a PO file (Portable Object). The only difference between a POT and PO file is that the PO file contains translations.
1. Compile the PO file to produce a MO file (Machine Object), which can then be used in the theme or plugin.

In order to translate a plugin you will need a special software tool like [poEdit](http://www.poedit.net/), which is a cross-platform graphical tool that is available for Windows, Linux, and Mac OS X.

The naming of your PO and MO files is very important and must match the desired locale. The naming convention is: `language_COUNTRY.po` and plugins have an additional naming convention whereby the plugin name is added to the filename: `pluginname-fr_FR.po`

That is, the plugin name name must be the language code followed by an underscore, followed by a code for the country (in uppercase). If the encoding of the file is not UTF-8 then the encoding must be specified. 

For example:

* en_US – US English
* en_UK – UK English
* es_ES – Spanish from Spain
* fr_FR – French from France
* zh_CN – Simplified Chinese

A list of language codes can be found [here](http://en.wikipedia.org/wiki/ISO_639), and country codes can be found [here](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). A full list of encoding names can also be found at [IANA](http://www.iana.org/assignments/character-sets).
