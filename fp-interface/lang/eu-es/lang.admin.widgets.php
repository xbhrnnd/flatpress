<?php
$lang ['admin'] ['widgets'] ['submenu'] ['default'] = 'Widgeten kudeaketa';
$lang ['admin'] ['widgets'] ['submenu'] ['raw'] = 'Widgeten (raw) kudeaketa';

/* default action */
$lang ['admin'] ['widgets'] ['default'] = array(
	'head' => 'Kudeatu widgetak',

	'descr' => '<a class="hint" href="https://wiki.flatpress.org/doc:techfaq#widgets" target="_blank" title="Zer da widget bat?">' . //
		'Widget</a> bat datuak bistaratu eta erabiltzailearekin elkarreragin dezakeen osagai dinamiko bat da. ' . //
		'<strong>Gaiak</strong> zure blogaren itxura aldatzeko pentsatuta dauden bitartean, ' . //
    'widgetek itxura eta funtzionaltasunak <strong>hedatzen</strong> dituzte.</p> ' . //

		'<p>Widgetak <strong>WidgetSet</strong> izeneko gaiaren eremu berezietan jar daitezke. ' . //
		'WidgetSet-en kopurua eta izena alda daitezke aukeratzen duzun gaiaren arabera.</p>' . //

		'<p>FlatPress-ek hainbat widget ditu: saioa hasteko, bilaketa-koadro bat bistaratzeko, etab. ' . //
		'Widget bakoitza <a class="hint" ' . //
		'href="https://wiki.flatpress.org/doc:techfaq#plugins" target="_blank" title="Zer da plugin bat?">plugin</a> batek definitzen du.',

	'availwdgs' => 'Eskuragarri dauden widgetak',
	'trashcan' => 'Arrastatu hona ezabatzeko',

	'themewdgs' => 'Gai honen WidgetSet-ak',
	'themewdgsdescr' => 'Aukeratu duzun gaiarekin honako widget multzoa izan dezakezu',
	'oldwdgs' => 'Beste WidgetSet batzuk',
	'oldwdgsdescr' => 'Ez dirudi widget hauek goian zerrendatutako WidgetSet-en' . //
		'parte direnik. Beste gai bateko hondarrak izan daitezke.',

	'submit' => 'Gorde aldaketak',
	'drop_here' => 'Arrastatu hona'
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
	'head' => 'Kudeatu widgetak (<em>raw editorea</em>)',
	'descr' => '<a class="hint" ' . //
		'href="http://wiki.flatpress.org/doc:plugins" title="Zer da widget bat?">' . //
		'Widget</a>-a <a class="hint" href="http://wiki.flatpress.org/doc:plugins"' . //
		'title="Zer da plugin bat?">plugin</a> baten elementu bisual bat da, zure' . // 
    'blog-orrietako eremu berezi batzuetan (<em>WidgetSet</em>-etan) jar dezakezuna. </p>' . //
		'<p>Hau editore <strong>gordina</strong> da. Erabiltzaile aurreratu batzuek edo JavaScript nahi ez duten pertsonek nahiago izan dezakete.',

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
	'generic' => '<strong>%s</strong> izeneko widget-a ez dago erregistratuta eta saltatu egingo da. ' . //
 		'Gaituta al dago plugina <a href="admin.php?p=plugin">plugin panelean</a>?'
);
?>
