<?php
$lang ['admin'] ['config'] ['default'] = array(
	'head' => 'Ezarpenak',
	'descr' => 'Pertsonalizatu eta konfiguratu zure FlatPress instalazioa.',
	'submit' => 'Gorde aldaketak',

	'sysfset' => 'Sistemaren informazio orokorra',
	'syswarning' => '<big>Kontuz!</big> Informazio hau kritikoa da eta zuzena izan behar du, edo FlatPressek (seguruenik) uko egingo dio behar bezala funtzionatzeari.',
	'blog_root' => '<strong>FlatPress-erako bide absolutua</strong>. Oharra: ' . //
		'oro har, ez duzu hau editatu beharrik izango, baina kontuz ibili, ezin baitugu egiaztatu zuzena den ala ez.',
	'www' => '<strong>Blog erroa</strong>. Zure blogerako URLa azpidirektorioekin. <br>' . //
		'Adibidez.: http://www.mydomain.com/flatpress/ (azken barra beharrezkoa da)',

	// ------
	'gensetts' => 'Ezarpen orokorrak',
	'blogtitle' => 'Blogaren izenburua',
	'blogsubtitle' => 'Blogaren azpititulua',
	'blogfooter' => 'Blogaren oina',
	'blogauthor' => 'Blogaren egilea',
	'startpage' => 'Webgune honen hasierako orria da',
	'stdstartpage' => 'Bloga (lehenetsia)',
	'blogurl' => 'Blogaren URLa',
	'blogemail' => 'Blogaren posta elektronikoa',
	'notifications' => 'Jakinarazpenak',
	'mailnotify' => 'Gaitu posta elektroniko bidezko jakinarazpena iruzkinetarako',
	'blogmaxentries' => 'Orrialde bakoitzeko argitalpen kopurua',
	'langchoice' => 'Hizkuntza',

	'intsetts' => 'Nazioarteko ezarpenak',
	'utctime' => '<abbr title="Denbora Unibertsal Koordinatua">UTC</abbr> ordua une honetan',
	'timeoffset' => 'Izan behar duen ordu diferentzia',
	'hours' => 'ordu',
	'timeformat' => 'Orduaren formatu lehenetsia',
	'dateformat' => 'Dataren formatu lehenetsia',
	'dateformatshort' => 'Dataren formatu lehenetsia (laburra)',
	'output' => 'Irteera',
	'charset' => 'Karaktere multzoa',
	'charsettip' => 'Zure bloga idazten duzun karaktere multzoa (UTF-8 ' . //
		'<a class="hint" href="https://wiki.flatpress.org/doc:techfaq#character_encoding" target="_blank" title="Zer karaktere-kodetze estandar onartzen ditu FlatPressek?">gomendatzen</a> da).'
);

$lang ['admin'] ['config'] ['default'] ['msgs'] = array(
	1 => 'Ezarpenak behar bezala gorde dira.',
	-1 => 'Errore bat gertatu da ezarpenak gordetzen saiatzean.'
);

$lang ['admin'] ['config'] ['default'] ['error'] = array(
	'www' => 'Blog erroak baliozko URL bat izan behar du',
	'title' => 'Izenburu bat zehaztu behar duzu',
	'email' => 'Posta elektronikoak baliozko formatua izan behar du',
	'maxentries' => 'Ez duzu baliozko sarrera kopururik sartu',
	'timeoffset' => '¡No ingresó una corrección de tiempo válida! Puedes usar punto flotante (ej. 2h30" => 2.5)',
	'timeformat' => 'Debe insertar el formato para la hora',
	'dateformat' => 'Debe insertar el formato para la fecha',
	'dateformatshort' => 'Debe insertar el formato para la fecha (corto)',
	'charset' => 'Debe insertar un ID de set de caracteres',
	'lang' => 'Aukeratu duzun hizkuntza ez dago erabilgarri'
);
?>
