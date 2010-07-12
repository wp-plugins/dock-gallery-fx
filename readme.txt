=== Dock Gallery FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, free, flash, dock, gallery, as3, thumb, effect, thumbs, image, full, screen, text, effects, animation, xml, tooltip, roll, over, out, transition, auto, scroll, css
Requires at least: 2.8.0
Tested up to: 3.0
Stable tag: trunk

== Description ==

An original "Dock Gallery". Completely XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. The overall width and height can be customized up to 1680 x 1050 pixels. It's fully customizable and uses the Dock Menu FX component, keeping the same many customizable variables of the menu and adding many gallery properties, text effects and image transitions. You can place the dock menu on any position over the gallery, and you can have it hidden on mouse out. You can configure your XML list of text effects and image transitions. The images in the gallery can be shown according to boxFit, bestFit or forceFit options. The specific properties from the Dock Menu FX like thumbs spacing, scrolling speed, mouse over behaviors and HTML-CSS formatted tooltip are also available.

== Installation ==

Make sure your Wordpress version is greater than 2.8 and your hosting provider is using PHP5.

1. [Download](http://www.flashxml.net/free/download/dock-gallery.zip "Dock Gallery FX") or [purchase](http://www.flashxml.net/dock-gallery.html#swmi-license "Dock Gallery FX") the Dock Gallery FX Flash component
2. Create a new folder inside your `/wp-content/` directory called `flashxml/dock-gallery-fx` and copy the content of the archive to this folder
3. Install [the plugin](http://downloads.wordpress.org/plugin/dock-gallery-fx.zip "Dock Gallery FX Plugin") or upload the `dock-gallery-fx` folder along with all its files to `/wp-content/plugins/` directory
4. Activate the plugin from the **Plugins** tab in **WordPress Dashboard**
5. Go to **Dock Gallery FX** from the **Settings** tab and update the path in case you used a different one
6. In the post editor use the following tag to embed the Dock Gallery FX: `[dock-gallery-fx width="600" height="400"][/dock-gallery-fx]`. You could also add `<?php dockgalleryfx_echo_embed_code(600, 400); ?>` in the PHP file of your theme. Don't forget to provide your own width and height values, since 600 and 400 are just examples
7. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your Dock Gallery FX](http://www.flashxml.net/dock-gallery.html "Dock Gallery FX") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `flashxml/dock-gallery-fx/settings.xml`, `flashxml/dock-gallery-fx/dockMenu/settings.xml` and `flashxml/dock-gallery-fx/holder/settings.xml` files accordingly
8. To use your own images, upload them to the `flashxml/dock-gallery-fx/images` folder and update the `flashxml/dock-gallery-fx/images/thumb.xml` and `flashxml/dock-gallery-fx/images/big.xml` files accordingly

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[dock-gallery-fx]` and `[/dock-gallery-fx]`. From the PHP files of your theme, add the text as *the third argument* of the `dockgalleryfx_echo_embed_code()` function call.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/dock-gallery.html "Dock Gallery") is the utility that helps easily customize your Dock Gallery to fit all of your needs.