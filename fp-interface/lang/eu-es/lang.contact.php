<?php
$baseurl = BLOG_BASEURL;

$lang ['contact'] = array(
	'head' => 'Jarri gurekin harremanetan',
	'descr' => 'Mesedez, bete ondorengo formularioa zure iruzkinak bidaltzeko. Gehitu zure posta elektronikoa erantzuna jaso nahi baduzu.',
	'fieldset1' => 'Erabiltzailearen datuak',
	'name' => 'Izena (*):',
	'email' => 'Posta elektronikoa:',
	'www' => 'Webgunea:',
	'cookie' => 'Gogoratu',
	'fieldset2' => 'Zure mezua',
	'comment' => 'Mezua (*):',
	'fieldset3' => 'Bidali',
	'submit' => 'Bidali',
	'reset' => 'Berrezarri',
	'loggedin' => 'Saioa hasi duzu 😉. <a href="' . $baseurl . 'login.php?do=logout">Amaitu saioa</a> edo joan <a href="' . $baseurl . 'admin.php">kontrol-panelera</a>.'
);

$lang ['contact'] ['notification'] = array(
	'name' => 'Izena:',
	'email' => 'Posta elektronikoa:',
	'www' => 'Webgunea:',
	'content' => 'Mezua:',
	'subject' => 'Honen bitartez bidalitako mezua '
);

$lang['contact'] ['error'] = array(
	'name' => 'Izen bat sartu behar duzu',
	'email' => 'Baliozko posta elektroniko bat sartu behar duzu',
	'www' => 'Baliozko URL bat sartu behar duzu',
	'content' => 'Mezua sartu behar duzu'
);

$lang ['contact'] ['msgs'] = array(
	1 => 'Mezua behar bezala bidali da',
	-1 => 'Ezin izan da mezua bidali'
);
?>