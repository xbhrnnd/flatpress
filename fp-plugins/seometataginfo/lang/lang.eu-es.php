<?php
$lang ['admin'] ['plugin'] ['submenu'] ['seometataginfo'] = 'SEO';
$lang ['admin'] ['plugin'] ['seometataginfo'] = array(

	// SEO robots.txt part 1
	'head' => 'SEO robots.txt',
	'description1' => '<code>robots.txt</code> fitxategiak bilaketa-motorren arakatzaileak eta arakatzaileen portaera kontrolatzen ditu zure FlatPress blogean. ' . //
		'Hemen <code>rotots.txt</code> fitxategi bat sortu eta editatu dezakezu bilaketa-motorren optimizaziorako.',
	'location' => '<strong>Biltegiratze kokapena:</strong> ' . $_SERVER ['DOCUMENT_ROOT'] . '/',
	'submit' => 'Gorde robots.txt fitxategia',

	// SEO Metatags part
	'legend_desc' => 'Deskribapena eta gako-hitzak',
	'description' => 'Datu hauek bilatzaileetan aurkitzea eta sare sozialetan argitaratzea errazten dute. <a class="hint" href="https://en.wikipedia.org/wiki/Meta_element" title="Meta elementua Wikipedian" target="_blank">Meta elementua</a> Wikipedian',
	'input_desc' => 'Sartu deskribapena:',
	'sample_desc' => 'Adib: FlatPressi buruzko artikuluak, gidak eta pluginak',
	'input_keywords' => 'Sartu gako-hitzak:',
	'sample_keywords' => 'Adib: flatpress, flatpress artikuluak, flatpress gidak, flatpress pluginak',
	'input_noindex' => '<a class="hint" href="https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag#noindex" target="_blank" title="noindex-i buruzko informazioa">Ez baimendu indexazioa</a> ',
	'input_nofollow' => '<a class="hint" href="https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag#nofollow" target="_blank" title="nofollow-i buruzko informazioa">Ez baimendu jarraipena</a> ',
	'input_noarchive' => '<a class="hint" href="https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag#noarchive" target="_blank" title="noarchive-i buruzko informazioa">Ez baimendu artxibatzea</a> ',
	'input_nosnippet' => '<a class="hint" href="https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag#nosnippet" target="_blank" title="nosnippet-i buruzko informazioa">Ez baimendu snippetak</a> '
);

$lang ['plugin'] ['seometataginfo'] = array(
	'sep' => ' - ',
	'home' => 'Hasiera',
	'blog_home' => 'Hasierako orria',
	'blog_page' => 'Bloga',
	'archive' => 'Artxiboa',
	'category' => 'Kategoriak',
	'tag' => 'Etiketa',
	'contact' => 'Jarri gurekin harremanetan',
	'comments' => 'Iruzkinak',
	'pagenum' => 'Orri zenbakia'
);

// SEO robots.txt part 2
$lang ['admin'] ['plugin'] ['seometataginfo'] ['msgs'] = array(
	1 => '<code>robots.txt</code> fitxategia behar bezala gorde da.',
	-1 => 'Ezin izan da <code>robots.txt</code> fitxategia gorde. <code>' . $_SERVER ['DOCUMENT_ROOT'] . '</code>-en idazteko baimena duzu?',

	2 => 'Ezarpenak behar bezala gorde dira.',
	-2 => 'Errore bat gertatu da gordetzen saiatzean.'
);

$lang ['plugin'] ['seometataginfo'] ['errors'] = array (
	-2 => 'Ez dago <code>robots.txt</code> fitxategirik eskuragarri edo ezin da <code>robots.txt</code> fitxategirik sortu HTTP dokumentuaren erro direktorioan.'
);
?>
