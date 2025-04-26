<?php
$lang = array();

$lang ['main'] = array(
	'nextpage' => 'Hurrengo orria &raquo;',
	'prevpage' => '&laquo; aurreko orria',
	'entry' => 'Sarrera',
	'static' => 'Orri estatikoa',
	'comment' => 'Iruzkina',
	'preview' => 'Editatu/Aurrebista',

	'filed_under' => 'Kategoria honetan artxibatua ',	

	'add_entry' => 'Gehitu sarrera',
	'add_comment' => 'Gehitu iruzkina',
	'add_static' => 'Gehitu orri estatikoa',

	'btn_edit' => 'Editatu',
	'btn_delete' => 'Ezabatu',

	'nocomments' => 'Gehitu iruzkin bat',
	'comment' => 'Iruzkin 1',
	'comments' => 'iruzkin',

	'rss' => 'Harpidetu RSS Feed-era',
	'atom' => 'Harpidetu Atom Feed-era'
);

$lang ['search'] = array(
	'head' => 'Bilatu',
	'fset1' => 'Bilaketa-irizpideak sartu',
	'keywords' => 'Gako-hitzak',
	'onlytitles' => 'Izenburuak bakarrik',
	'fulltext' => 'Testu osoa',

	'fset2'	=> 'Data',
	'datedescr'	=> 'Zure bilaketa data zehatz batekin lotu dezakezu. Urte bat, hilabete bat edo data oso bat hauta dezakezu. ' . //
		'Utzi hutsik datu-base osoan bilatzeko.',

	'fset3' => 'Bilatu kategorietan',
	'catdescr' => 'Ez hautatu kategoriarik guztietan bilatzeko',

	'fset4' => 'Hasi bilatzen',
	'submit' => 'Bilatu',

	'headres' => 'Bilaketaren emaitzak',
	'descrres' => '<strong>%s</strong> bilatzerakoan honako emaitzak lortu dira:',
	'descrnores' => '<strong>%s</strong> bilatzerakoan ez da emaitzik lortu.',

	'moreopts' => 'Aukera gehiago',

	'searchag' => 'Berriro bilatu'
);

$lang ['search'] ['error'] = array(
	'keywords' => 'Gutxienez hitz gako bat zehaztu behar duzu'
);

$lang ['staticauthor'] = array(
	// "Published by" in static pages
	'published_by' => 'Honek argitatatua',
	'on' => 'data honetan'
);

$lang ['entryauthor'] = array(
	// "Posted by" in entry pages
	'posted_by'	=> 'Honek bidalia',
	'at' => 'ordu honetan',
);

$lang ['entry'] = array();
$lang ['entry'] ['flags'] = array();

$lang['entry']['flags']['long'] = array(
	'draft' => '<strong>Zirriborro-sarrera</strong>: ezkutuan, argitaratzeko zain.',
	//'static' => '<strong>Sarrera estatikoa</strong>: normalean ezkutatuta. Sarrerara joateko sartu ?page=title-of-the-entry URLan (esperimentala)',
	'commslock' => '<strong>Iruzkinak blokeatuta</strong>: sarrera honetan iruzkinak desgaituko dira.'
);

$lang ['entry'] ['flags'] ['short'] = array(
	'draft' => 'Zirriborroa',
	//'static' => 'Estatikoa',
	'commslock'	=> 'Iruzkinak blokeatuta'
);

$lang ['entry'] ['categories'] = array(
	'unfiled' => 'Ez dago kategorietan artxibatutako sarrerarik'
);

$lang ['404error'] = array(
	'subject' => 'Ez da aurkitu',
	'content' => '<p>Sentitzen dugu, ezin izan dugu eskatutako orria aurkitu.</p>'
);

// Login
$lang ['login'] = array(
	'head' => 'Saioa hasi',
	'fieldset1' => 'Sartu zure erabiltzaile-izena eta pasahitza',
	'user' => 'Erabiltzailea:',
	'pass' => 'Pasahitza:',
	'fieldset2' => 'Hasi saioa',
	'submit' => 'Saioa hasi',
	'forgot' => 'Pasahitz galdua'
);

$lang ['login'] ['success'] = array(
	'success' => 'Saioa hasi duzu.',
	'logout' => 'Saioa amaitu duzu.',
	'redirect' => '5 segundutan birbideratua izango zara.',
	'opt1' => 'Aurkibidera itzuli',
	'opt2' => 'Joan kontrol-panelera',
	'opt3' => 'Gehitu sarrera berri bat'
);

$lang ['login'] ['error'] = array(
	'user' => 'Erabiltzaile izen bat sartu behar duzu.',
	'pass' => 'Pasahitz bat sartu behar duzu.',
	'match' => 'Pasahitza ez da zuzena'
);

$lang ['comments'] = array(
	'head' => 'Gehitu iruzkina',
	'descr' => 'Bete inprimakia zure iruzkinak gehitzeko',
	'fieldset1' => 'Erabiltzailearen datuak',
	'name' => 'Izena (*):',
	'email' => 'Posta elektronikoa:',
	'www' => 'Webgunea:',
	'cookie' => 'Gogoratu',
	'fieldset2' => 'Gehitu zure iruzkina',
	'comment' => 'Iruzkina (*):',
	'fieldset3' => 'Bidali',
	'submit' => 'Gehitu',
	'reset' => 'Berrezarri',
	'success' => 'Zure iruzkina behar bezala gehitu da',
	'nocomments' => 'Sarrera honek ez du iruzkinik oraindik',
	'commslock' => 'Iruzkinak desgaitu dira sarrera honetan'
);

$lang ['comments'] ['error'] = array(
	'name' => 'Izen bat idatzi sartu duzu',
	'email' => 'Baliozko posta elektroniko bat sartu behar duzu',
	'www' => 'Baliozko URL bat sartu behar duzu',
	'comment' => 'Iruzkin bat sartu behar duzu'
);

$lang ['postviews'] = array(
	// PostView-Plugin
	'views' => 'ikustaldi'
);

$lang ['date'] ['month'] = array(
	'urtarrila',
	'otsaila',
	'martxoa',
	'apirila',
	'maiatza',
	'ekaina',
	'uztaila',
	'abuztua',
	'iraila',
	'urria',
	'azaroa',
	'abendua'
);

$lang ['date'] ['month_abbr'] = array(
	'Urt',
	'Ots',
	'Mar',
	'Apr',
	'Mai',
	'Eka',
	'Uzt',
	'Abu',
	'Ira',
	'Urr',
	'Aza',
	'Abe'
);

$lang ['date'] ['weekday'] = array(
	'Igandea',
	'Astelehena',
	'Asteartea',
	'Asteazkena',
	'Osteguna',
	'Ostirala',
	'Larunbata'
);

$lang ['date'] ['weekday_abbr'] = array(
	'Ig.',
	'Al.',
	'As.',
	'Az.',
	'Og.',
	'Or.',
	'Lr.'
);
?>
