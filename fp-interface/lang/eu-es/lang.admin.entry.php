<?php
$lang ['admin'] ['entry'] ['submenu'] = array(
	'list' => 'Sarreren kudeaketa',
	'write' => 'Idatzi sarrera',
	'cats' => 'Kategorien kudeaketa',
	'stats' => 'Estatistikak'
);

/* default action */
$lang ['admin'] ['entry'] ['list'] = array(
	'head' => 'Kudeatu sarrerak',
	'descr' => 'Hautatu editatzeko sarrera edo <a href="admin.php?p=entry&amp;action=write">gehitu sarrera berri bat</a>.<br>' . //
		'<a href="admin.php?p=entry&amp;action=cats">Editatu kategoriak</a>',
	'drafts' => 'Zirriborroak: ',
	'filter' => 'Iragazi: ',
	'nofilter' => 'Erakutsi guztiak',
	'filterbtn' => 'Aplikatu iragazkia',
	'sel' => 'Aukeratu', // checkbox
	'date' => 'Data',
	'title' => 'Izenburua',
	'author' => 'Egilea',
	'comms' => 'Iruzkinak', // comments
	'action' => 'Ekintza',
	'act_del' => 'Ezabatu',
	'act_view' => 'Ikusi',
	'act_edit' => 'Editatu'
);

/* write action */
$lang ['admin'] ['entry'] ['write'] = array(
	'head' => 'Idatzi sarrera',
	'descr' => 'Editatu formularioa sarrera idazteko',
	'uploader' => 'Kargatu',
	'fieldset1' => 'Editatu',
	'subject' => 'Gaia (*):',
	'content' => 'Edukia (*):',
	'fieldset2' => 'Bidali',
	'submit' => 'Argitaratu',
	'preview' => 'Aurrebista',
	'savecontinue' => 'Gorde eta jarraitu',
	'categories' => 'Kategoriak',
	'nocategories' => 'Ez dago zehaztutako kategoriarik. <a href="admin.php?p=entry&amp;action=cats">Sortu zure kategoriak</a> kategoria kudeatzailean. ' . //
		'Lehenago <a href="#save">gorde</a> zure sarrera.',
	'saveopts' => 'Gorde aukerak',
	'success' => 'Zure sarrera behar bezala argitaratu da',
	'otheropts' => 'Beste aukera batzuk',
	'commmsg' => 'Kudeatu sarrera honen iruzkinak',
	'delmsg' => 'Ezabatu sarrera hau'
	// 'back' => 'Volver descartando cambios',
);

$lang ['admin'] ['entry'] ['list'] ['msgs'] = array(
	1 => 'Sarrera behar bezala gorde da',
	-1 => 'Errore bat gertatu da sarrera gordetzen saiatzean',
	2 => 'Sarrera behar bezala ezabatu da',
	-2 => 'Errore bat gertatu da sarrera ezabatzen saiatzean'
);

$lang ['admin'] ['entry'] ['write'] ['error'] = array(
	'subject' => 'Ezin duzu gai hutsik bidali',
	'content' => 'Ezin duzu sarrera hutsik argitaratu'
);

$lang ['admin'] ['entry'] ['write'] ['msgs'] = array(
	1 => 'Sarrera behar bezala gorde da',
	-1 => 'Errore bat gertatu da: ezin izan da zure sarrera behar bezala gorde',
	-2 => 'Errore bat gertatu da: zure sarrera ez da gorde; baliteke indizea hondatuta egotea',
	-3 => 'Errore bat gertatu da: zure sarrera zirriborro gisa gorde da',
	-4 => 'Errore bat gertatu da: zure sarrera zirriborro gisa gorde da; baliteke indizea hondatuta egotea',
	'draft' => 'Sarrera baten <strong>zirriborroa</strong> editatzen ari zara'
);

/* comments */
$lang ['admin'] ['entry'] ['commentlist'] = array(
	'head' => 'Sarrera honetako iruzkinak: ',
	'descr' => 'Hemen iruzkinak editatu edo ezabatu ditzakezu.',
	'sel' => 'Aukeratu',
	'content' => 'Edukia',
	'date' => 'Data',
	'author' => 'Egilea',
	'email' => 'Posta elektronikoa',
	'ip' => 'IPa',
	'actions' => 'Ekintzak',
	'act_edit' => 'Editatu',
	'act_del' => 'Ezabatu',
	'act_del_confirm' => 'Benetan nahi duzu iruzkin hau ezabatu?',
	'nocomments' => 'Argitalpen honek ez du iruzkinik.'
);

$lang ['admin'] ['entry'] ['commentlist'] ['msgs'] = array(
	1 => 'Iruzkina behar bezala ezabatu da',
	-1 => 'Errore bat gertatu da iruzkina ezabatzen saiatzean'
);

$lang ['admin'] ['entry'] ['commedit'] = array(
	'head' => 'Sarrera honen iruzkina editatu: ',
	'descr' => 'Hemen egile baten iruzkina, izena, helbide elektronikoa eta webgunea edita ditzakezu nahi duzun moduan.<br><br>',
	'content' => 'Edukia',
	'date' => 'Data',
	'author' => 'Egilea',
	'www' => 'Webgunea',
	'email' => 'Posta elektronikoa',
	'ip' => 'IPa',
	'loggedin' => 'Administratzailea konektatuta',
	'submit' => 'Gorde',
	'commentlist' => 'Itzuli iruzkinen laburpenera'
);

$lang ['admin'] ['entry'] ['commedit'] ['error'] = array(
	'name' => 'Sartu izena, ezin da falta',
	'email' => 'Helbide elektronikoa ez da zuzena.',
	'url' => 'Webgunea ez da zuzena; <strong>http://</strong> edo <strong>https://</strong>-rekin hasi behar du.',
	'content' => 'Sartu iruzkina, ezin da falta'
);

$lang ['admin'] ['entry'] ['commedit'] ['msgs'] = array(
	1 => 'Iruzkina editatu da',
	-1 => 'Errore bat gertatu da iruzkina editatzen saiatzean'
);

/* delete action */
$lang ['admin'] ['entry'] ['delete'] = array(
	'head' => 'Ezabatu sarrera',
	'descr' => 'Hurrengo sarrera ezabatzera zoaz: ',
	'preview' => 'Aurrebista',
	'confirm' => 'Ziur jarraitu nahi duzula?',
	'fset' => 'Ezabatu',
	'ok' => 'Bai, ezabatu sarrera hau',
	'cancel' => 'Ez, itzuli panelera',
	'err' => 'Zehaztutako sarrera ez da existitzen'
);

/* category mgmt */
$lang ['admin'] ['entry'] ['cats'] = array(
	'head' => 'Editatu kategoriak',
	'descr' => '<p>Erabili beheko formularioa zure kategoriak gehitzeko eta editatzeko.</p>' . //
		'<p>Kategoria-elementu bakoitzak "kategoria_izena :<em>id_zenbakia</em>" formatua izan behar du. Marratxoekin elementuak koska ditzakezu hierarkiak sortzeko.</p>
	<p>Adibidea:</p>
	<pre>
Orokorra :1
Berriak :2
--Iragarkiak :3
--Gertaerak :4
----Denetarik :5
Teknologia :6
	</pre>',
	'clear' => 'Ezabatu kategorietako datu guztiak',

	'fset1' => 'Editorea',
	'fset2' => 'Aplikatu aldaketak',
	'submit' => 'Gorde'
);

$lang ['admin'] ['entry'] ['cats'] ['msgs'] = array(
	1 => 'Kategoriak behar bezala gorde dira',
	-1 => 'Errore bat gertatu da kategoriak gordetzen saiatzean',
	2 => 'Ez dago kategoriarik',
	-2 => 'Errore bat gertatu da kategoriak husten saiatzean',
	-3 => 'Kategoria IDek guztiz positiboak izan behar dute (0 ez da onartzen)'
);

/* stats */
$lang ['admin'] ['entry'] ['stats'] = array(
	'head' => 'Estatistikak',
	'entries' => 'Sarrerak',
	'you_have' => 'Argitaratu da/dira',
	'entries_using' => 'sarrera',
	'characters_in' => 'karakterekin',
	'words' => 'hitzetan',
	'total_disk_space_is' => 'Erabilitako biltegiratze espazio osoa honako hau da:',
	'comments' => 'Iruzkinak',
	'comments_using' => 'iruzkin',
	'the' => 'Gehien iruzkindu diren',
	'most_commented_entries' => 'sarrerak'
);
?>
