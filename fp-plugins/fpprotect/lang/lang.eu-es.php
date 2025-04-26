<?php
$lang ['admin'] ['config'] ['submenu'] ['fpprotect'] = 'FlatPress Protect';

$lang ['admin'] ['config'] ['fpprotect'] = array(
	'head' => 'FlatPress Protecten konfigurazioa',
	'desc1' => 'Hemen zure FlatPress blogaren segurtasunarekin lotutako aukerak alda ditzakezu. ' . //
		'Zure bisitarientzako eta zure FlatPress blogaren babesik onena aukera guztiak desgaituta egotea da.',

	// Part for unsafe inline scripts
	'allow_unsafe_inline' => 'Baimendu seguruak ez diren JavaScript scriptak (ez da gomendagarria)',

	'allowUnsafeInlineDsc' => '<p>JavaScript inline kode ez segurua kargatzeko aukera ematen du.</p>' . //
		'<p><br>Oharra pluginen garatzaileentzat: gehitu nonce bat zure JavaScript scriptera.</p>' . //
		'PHPrako adibide bat:
		<pre>$random_hex = RANDOM_HEX;
' . //
		'... script nonce="\' . $random_hex . \'" src=" ...' . //
		'</pre>' . //
		'Smarty plantillarako adibide bat:
		<pre>' . //
		'... script nonce="{$smarty.const.RANDOM_HEX}" ...' . //
		'</pre>' . //
		'<p>Horrek ziurtatzen du bisitariaren arakatzaileak zure FlatPress blogetik sortutako JavaScript scriptak soilik exekutatzen dituela.</p>',

	// Part for the PrettyURLs .htaccess edit-field
	'allow_htaccess_edit' => 'Baimendu .htaccess fitxategia sortzea eta editatzea.',
	'allowPrettyURLEditDsc' => 'PrettyURLs pluginaren .htaccess fitxategiaren edizio panelera sartzeko aukera ematen du .htaccess fitxategia sortzeko edo aldatzeko.',

	// Part for metadate in images after upload
	'allow_image_metadate' => 'Mantendu metadatuak eta jatorrizko irudiaren kalitatea kargatutako irudietan.',
	'allowImageMetadataDsc' => 'Irudiak fitxategi kargatzailearekin kargatu ondoren, metadatuak gordetzen dira. Honek kameraren informazioa eta geo-koordenatuak barne hartzen ditu, adibidez.',

	// Part for the visitor-ip in FlatPress
	'allow_visitor_ip' => 'Baimendu FlatPressi bisitariaren anonimizatu gabeko IP helbidea erabiltzea.',
	'allowVisitorIpDsc' => 'FlatPressek anonimizatu gabeko IP helbidea gordeko du iruzkinetan, besteak beste. ' . //
		'Akismet Antispam zerbitzua erabiltzen baduzu, Akismetek ere jasoko du anonimizatu gabeko IP helbidea.',

	'submit' => 'Gorde konfigurazioa',
		'msgs' => array(
		1 => 'Konfigurazioa behar bezala gorde da.',
		-1 => 'Errore bat gertatu da konfigurazioa gordetzean.'
	),

	// Warning message
	'warning_allowUnsafeInline' => 'Abisua: Content-Security-Policy -> Politika honek "unsafe-inline" dauka, script-src-policy-an arriskutsua dena.',
	'warning_allowVisitorIp' => 'Abisua: Bisitariaren anonimizatu gabeko IP helbidea erabiltzea -> Ez ahaztu zure FlatPress blogeko bisitariei <a href="static.php?page=privacy-policy" title="Pribatutasun politika">pribatutasun politika</a>ren berri ematea!'
);
?>
