<?php
/*
Plugin Name: Dock Gallery FX
Plugin URI: http://www.flashxml.net/dock-gallery.html
Description: An original "Dock Gallery". Completely XML customizable, without using Flash. And it's free!
Version: 0.1.3
Author: FlashXML.net
Author URI: http://www.flashxml.net/
License: GPL2
*/

	function dockgalleryfx_get_embed_code($dockgalleryfx_attributes) {
		$plugin_dir = basename(dirname(__FILE__));
		$width = (int)$dockgalleryfx_attributes[1];
		$height = (int)$dockgalleryfx_attributes[2];

		if ($width == 0 || $height == 0) {
			return '';
		}

		$swf_embed = array(
			'width' => $width,
			'height' => $height,
			'text' => trim($dockgalleryfx_attributes[3]),
			'gallery_path' => WP_PLUGIN_URL."/{$plugin_dir}/gallery/",
			'swf_name' => 'gallery.swf',
		);
		$swf_embed['swf_path'] = $swf_embed['gallery_path'].$swf_embed['swf_name'];

		if (!is_feed()) {
			$embed_code = '<div id="dockgallery-fx">'.$swf_embed['text'].'</div>';
			$embed_code .= '<script type="text/javascript">';
			$embed_code .= "swfobject.embedSWF('{$swf_embed['swf_path']}', 'dockgallery-fx', '{$swf_embed['width']}', '{$swf_embed['height']}', '9.0.0.0', '', { folderPath: '{$swf_embed['gallery_path']}' }, { scale: 'noscale', salign: 'tl', wmode: 'transparent', allowScriptAccess: 'sameDomain', allowFullScreen: true }, {});";
			$embed_code.= '</script>';
		} else {
			$embed_code = '<object width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'">';
			$embed_code .= '<param name="movie" value="'.$swf_embed['swf_path'].'"></param>';
			$embed_code .= '<param name="scale" value="noscale"></param>';
			$embed_code .= '<param name="salign" value="tl"></param>';
			$embed_code .= '<param name="wmode" value="transparent"></param>';
			$embed_code .= '<param name="allowScriptAccess" value="sameDomain"></param>';
			$embed_code .= '<param name="allowFullScreen" value="true"></param>';
			$embed_code .= '<param name="sameDomain" value="true"></param>';
			$embed_code .= '<param name="flashvars" value="folderPath='.$swf_embed['gallery_path'].'"></param>';
			$embed_code .= '<embed type="application/x-shockwave-flash" width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'" src="'.$swf_embed['swf_path'].'" scale="noscale" salign="tl" wmode="transparent" allowScriptAccess="sameDomain" allowFullScreen="true" flashvars="folderPath='.$swf_embed['gallery_path'].'"';
			$embed_code .= '></embed>';
			$embed_code .= '</object>';
		}

		return $embed_code;
	}

	function dockgalleryfx_filter_content($content) {
		return preg_replace_callback('|\[dock-gallery-fx\s*width\s*=\s*"(\d+)"\s+height\s*=\s*"(\d+)"\s*\](.*)\[/dock-gallery-fx\]|i', 'dockgalleryfx_get_embed_code', $content);
	}

	function dockgalleryfx_echo_embed_code($width, $height, $div_text = '') {
		echo dockgalleryfx_get_embed_code(array(1 => $width, 2 => $height, 3 => $div_text));
	}

	function dockgalleryfx_load_swfobject_lib() {
		wp_enqueue_script('swfobject');
	}

	add_filter('the_content', 'dockgalleryfx_filter_content');
	add_action('init', 'dockgalleryfx_load_swfobject_lib');

?>