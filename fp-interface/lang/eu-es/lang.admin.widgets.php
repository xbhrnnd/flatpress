<?php
$lang ['admin'] ['widgets'] ['submenu'] ['default'] = 'Widgetak kudeatu';
$lang ['admin'] ['widgets'] ['submenu'] ['raw'] = 'Widgetak (raw) kudeatu';

/* default action */
$lang ['admin'] ['widgets'] ['default'] = array(
	'head' => 'Kudeatu widgetak',

	'descr' => '<a class="hint" ' . //
		'href="https://wiki.flatpress.org/doc:techfaq#widgets" target="_blank" title="Zer da widget bat?">' . //
		'Widget</a> bat datuak bistaratu eta erabiltzailearekin elkarreragin ditzakeen osagai dinamiko bat da. ' . //
		'<strong>Gaiak</strong> zure blogaren itxura aldatzeko pentsatuta dauden bitartean, ' . //
    'widgetek itxura eta funtzionaltasunak <strong>zabaltzen</strong> dituzte.</p> ' . //

		'<p>Widgets pueden ser puestos en areas especiales de su tema llamado el ' . //
		'<strong>WidgetSets</strong>. El número y el nombre de los WidgetSets pueden variar según el tema que elija.</p>' . //

		'<p>FlatPress viene con varios widgets: hay widgets para ayudar con el inicio de sesión, para mostrar un cuadro de búsqueda, etc.</p>' . //

		'<p>Cada Widget está definido por un <a class="hint" ' . //
		'href="https://wiki.flatpress.org/doc:techfaq#plugins" target="_blank" title="What is a Widget?">plugin</a>.',

	'availwdgs' => 'Eskuragarri dauden widgetak',
	'trashcan' => 'Mover aquí para borrar',

	'themewdgs' => 'Widgetsets para este tema',
	'themewdgsdescr' => 'El tema que ha seleccionado le permite tener los siguientes conjuntos de widgets',
	'oldwdgs' => 'Otros widgetsets',
	'oldwdgsdescr' => 'Los siguientes set de widgets parecen no pertenecer a ninguno de los ' . //
		'widgetsets listados arriba. Pueden ser restantes de otro tema.',

	'submit' => 'Gorde aldaketak',
	'drop_here' => 'Coloque aquí'
);

$lang ['admin'] ['widgets'] ['default'] ['stdsets'] = array(
	'top' => 'Goiko barra',
	'bottom' => 'Beheko barra',
	'left' => 'Ezkerreko barra',
	'right' => 'Eskuineko barra'
);

$lang ['admin'] ['widgets'] ['default'] ['msgs'] = array(
	1 => 'Konfigurazioa gorde da',
	-1 => 'Errore bat gertatu da gordetzen saiatzean. Saiatu berriro.'
);

/* "raw" panel */
$lang ['admin'] ['widgets'] ['raw'] = array(
	'head' => 'Administrar widgets (<em>editor raw</em>)',
	'descr' => 'A <a class="hint" ' . //
		'href="http://wiki.flatpress.org/doc:plugins" title="Que es un Widget?">' . //
		'Widget</a> is a visual element of a <a class="hint" ' . //
		'href="http://wiki.flatpress.org/doc:plugins" title="Que es un plugin?">' . //
		'Plugin</a> que puede poner en algunas áreas especiales (los <em>widgetsets</em>) en las páginas de su blog. </p>' . //
		'<p>Este es el editor <strong>raw</strong> ; algunos usuarios avanzados o personas que no deseen JavaScript tal vez lo prefieran',

	'fset1' => 'Editorea',
	'fset2' => 'Ezarri aldaketak',
	'submit' => 'Ezarri'
);

$lang ['admin'] ['widgets'] ['raw'] ['msgs'] = array(
	1 => 'Konfigurazioa gorde da',
	-1 => 'Errore bat gertatu da gordetzen saiatzean. Hainbat arrazoirengatik gerta daiteke; fitxategiak sintaxi-erroreak izan ditzake.'
);

/* system errors */
$lang ['admin'] ['widgets'] ['errors'] = array(
	'generic' => 'El widget llamado <strong>%s</strong> no está registrado y sera omitido. ' . //
 		'Está el plugin habilitado en el <a href="admin.php?p=plugin"> panel de plugin</a>?'
);
?>
