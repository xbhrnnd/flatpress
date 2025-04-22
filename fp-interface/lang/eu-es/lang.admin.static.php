<?php
$lang ['admin'] ['static'] ['submenu'] = array(
	'list' => 'Kudeatu orri estatikoak',
	'write' => 'Idatzi orri estatikoa'
);

/* main panel */
$lang ['admin'] ['static'] ['list'] = array(
	'head' => 'Orri estatikoak',
	'descr' => 'Aukeratu ediatu nahi dizun orria edo <a href="admin.php?p=static&amp;action=write">gehitu orri berri bat</a>.',

	'sel' => 'Aukeratu', // checkbox
	'date' => 'Data',
	'name' => 'Orria',
	'title' => 'Izenburua',
	'author' => 'Egilea',

	'action' => 'Ekintza',
	'act_view' => 'Ikusi',
	'act_del' => 'Ezabatu',
	'act_edit' => 'Editatu'
);

$lang ['admin'] ['static'] ['list'] ['msgs'] = array(
	1 => 'Orria behar bezala artxibatu da',
	-1 => 'Errore bat gertatu da orria artxibatzen saiatzean',
	2 => 'Orria behar bezala ezabatu da',
	-2 => 'Errore bat gertatu da orria ezabatzen saiatzean'
);

/* write panel */
$lang ['admin'] ['static'] ['write'] = array(
	'head' => 'Argitaratu orri estatikoa',
	'descr' => 'Editatu formularioa orria argitaratzeko',
	'fieldset1' => 'Editatu',
	'subject' => 'Gaia (*):',
	'content' => 'Edukia (*):',
	'fieldset2' => 'Bidali',
	'pagename' => 'Orriaren izena (*):',
	'submit' => 'Argitatatu',
	'preview' => 'Aurrebista',

	'delfset' => 'Ezabatu',
	'deletemsg' => 'Ezabatu orri hau',
	'del' => 'Ezabatu',
	'success' => 'Zure orria behar bezala argitaratu da',
	'otheropts' => 'Beste aukera batzuk',
);

$lang ['admin'] ['static'] ['write'] ['error'] = array(
	'subject' => 'Ezin duzu gai hutsik bidali',
	'content' => 'Ezin duzu sarrera hutsik argitaratu',
	'id' => 'Baliozko ID bat sartu behar duzu'
);

/* delete action */
$lang ['admin'] ['static'] ['delete'] = array(
	'head' => 'Ezabatu orria', 
	'descr' => 'Hurrengo orria ezabatzera zoaz:',
	'preview' => 'Aurrebista',
	'confirm' => 'Ziur jarraitu nahi duzula?',
	'fset' => 'Ezabatu',
	'ok' => 'Bai, ezabatu orri hau',
	'cancel' => 'Ez, itzuli panelera',
	'err' => 'Zehaztutako orria ez da existitzen'
);
?>
