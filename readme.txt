=== Obfuscate Admin ===
Contributors: Jason White
Tags: Obfuscate Admin, Hide, Hide Admin, Hide wp-admin,
Donate link: https://jasonwhite.uk/doate
Requires at least: 5.0
Tested up to: 5.1.1
Requires PHP: 5.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

You want to stop users from accessing the wp-admin of your WordPress installation.

Obfoscate WordPress admin url and prevent casual discovery. Returns 404 status from direct requests to /wp-admin on non-whitelisted host

== Installation ==
1. Upload ijasonwhite-obfuscate-admin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the \'Plugins\' menu in WordPress
3. Once you have the plugin installed and activated, you\'ll see a new Obfuscate Admin menu link. Click that menu link to see the plugin settings page. From there you can edit whitelisted hostname.
4. Enter the hostname or IP address to be whitelisted 
5. Save changes.


== Screenshots ==
1. admin-whitelist.png

== History ==

1.0 Original Version

1.0.1 - added obfuscation protection for /wp-login.php - this was also casually discoverable in previous version