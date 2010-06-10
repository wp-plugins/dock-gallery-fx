=== Dock Gallery FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, free, flash, dock, gallery, as3, thumb, effect, thumbs, image, full, screen, text, effects, animation, xml, tooltip, photos, roll, over, out, transition, auto, scroll, css
Requires at least: 2.8.0
Tested up to: 2.9.2
Stable tag: trunk

== Description ==

An original "Dock Gallery". Completely XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. The overall width and height can be customized up to 1680 x 1050 pixels. It's fully customizable and uses the Dock Menu FX component, keeping the same many customizable variables of the menu and adding many gallery properties, text effects and image transitions. You can place the dock menu on any position over the gallery, and you can have it hidden on mouse out. You can configure your XML list of text effects and image transitions. The images in the gallery can be shown according to boxFit, bestFit or forceFit options. The specific properties from the Dock Menu FX like thumbs spacing, scrolling speed, mouse over behaviors and HTML-CSS formatted tooltip are also available.

== Installation ==

Make sure your Wordpress version is equal or greater than 2.8 and your hosting provider is using PHP5.

1. Upload the `dock-gallery-fx` folder along with all its subfolders and files to the `/wp-content/plugins/` folder
2. Activate the plugin from the **Plugins** menu in WordPress Dashboard
3. In the post editor use the following tag to embed the Dock Gallery: `[dock-gallery-fx width="500" height="350"][/dock-gallery-fx]`. Or add `<?php dockgalleryfx_echo_embed_code(500, 350); ?>` in your templates. Don't forget to provide your own width and height values, since 500 and 350 are just examples
4. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your Dock Gallery](http://www.flashxml.net/dock-gallery.html "Dock Gallery") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `dock-gallery-fx/gallery/settings.xml`, `dock-gallery-fx/gallery/dockMenu/settings.xml` and `dock-gallery-fx/gallery/holder/settings.xml` respectively
5. To use your own images, upload them to the `dock-gallery-fx/gallery/images/thumbs` and `dock-gallery-fx/gallery/images/big` folders and update the `dock-gallery-fx/gallery/images/thumbs.xml` and `dock-gallery-fx/gallery/images/big.xml` files accordingly

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[dock-gallery-fx]` and `[/dock-gallery-fx]`. From the PHP files of your theme, add the text as *the third argument* of the `dockgalleryfx_echo_embed_code()` function call.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/dock-gallery.html "Dock Gallery") is the utility that helps easily customize your Dock Gallery to fit all of your needs.