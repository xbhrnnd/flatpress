<?php
/**
 * Admin area phrases
 */
// "Plugins" menu entry
$lang ['admin'] ['uploader'] ['submenu'] ['gallerycaptions'] = 'Irudi-testu galeria';

// Plugin configuration panel
$lang ['admin'] ['uploader'] ['gallerycaptions'] = array(
	'head' => 'Irudi-testu galeria',
	'label_selectgallery' => 'Hautatu editatu nahi duzun galeria:',
	'button_selectgallery' => 'Hautatu galeria',
	'label_editcaptionsforgallery' => 'Editatu galeria honen irudi-testuak:',
	'label_noimagesingallery' => 'Galeria honek ez du irudirik oraindik ¯\_(ツ)_/¯<br>' . //
		'<br>Kargatu irudiak <a href="' . BLOG_BASEURL . 'admin.php?p=uploader&action=default' . '">fitxategi-kargatzailearen</a> bidez eta gehitu galeriara <a href="' . BLOG_BASEURL . 'admin.php?p=uploader&action=mediamanager' . '">multimedia-kudeatzailearekin</a>!',
	'button_savecaptions' => 'Gorde testu-irudiak'
);
?>
