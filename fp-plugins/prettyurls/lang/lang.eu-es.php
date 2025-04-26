<?php
$lang ['plugin'] ['prettyurls'] ['errors'] = array (
	-2 => 'Ezin izan da <code>.htaccess</code> fitxategia aurkitu edo sortu zure erro ' . //
		'direktorioan. Baliteke PrettyURLs-ek behar bezala ez funtzionatzea; egiaztatu konfigurazio panela.'
);

$lang ['admin'] ['plugin'] ['submenu'] ['prettyurls'] = 'PrettyURLsen konfigurazioa';
$lang ['admin'] ['plugin'] ['prettyurls'] = array(
	'head' => 'PrettyURLsen konfigurazioa',
	'description1' => 'Hemen FlatPress URL estandarrak URL eder eta SEOrako egokiak bihur ditzakezu.',
	'fpprotect_is_on' => 'PrettyURLs pluginak .htaccess fitxategi bat behar du. ' . //
		'Fitxategi hau sortu edo aldatzeko, gaitu aukera <a href="admin.php?p=config&action=fpprotect" title="Joan FlatPress Protect pluginera">FlatPress Protect pluginean</a>. ',
	'fpprotect_is_off' => 'FlatPress Protect pluginak .htaccess fitxategia nahi gabeko aldaketetatik babesten du. ' . //
		'Plugina <a href="admin.php?p=plugin&action=default" title="Joan pluginaren administraziora">hemen</a> aktibatu dezakezu!',
	'nginx' => 'PrettyURLs NGINXekin',
	'wiki_nginx' => 'https://wiki.flatpress.org/res:plugins:prettyurls#nginx',
	'htaccess' => '.htaccess',
	'description2' => 'Editore honek PrettyURLs pluginerako beharrezkoa den <code>.htaccess</code> fitxategia zuzenean editatzeko aukera ematen dizu.<br>' . //
		'<strong>Oharra:</strong> NCSArekin bateragarriak diren web zerbitzariek bakarrik ezagutzen dute .htaccess fitxategien kontzeptua, hala nola Apachek. ' . //
		'Zure zerbitzari softwarea hau da: <strong>' . $_SERVER ['SERVER_SOFTWARE'] . '</strong>',
	'cantsave' => 'Ezin duzu fitxategi hau editatu, ez baita <strong>idatzigarria</strong>. Idazteko baimena eman diezaiokezu edo kopiatu eta fitxategi batera itsatsi eta gero eskuz igo.',
	'mode' => 'Modua',
	'auto' => 'Automatikoa',
	'autodescr' => 'saiatu niretzat aukerarik onena asmatzen',
	'pathinfo' => 'Bidearen informazioa',
	'pathinfodescr' => 'adib. /index.php/2024/01/01/hello-world/',
	'httpget' => 'HTTP Get',
	'httpgetdescr' => 'adib. /?u=/2024/01/01/hello-world/',
	'pretty' => 'Pretty',
	'prettydescr' => 'adib. /2024/01/01/hello-world/',

	'saveopt' => 'Gorde konfigurazioa',

	'location' => '<strong>Biltegiratze kokapena:</strong> ' . ABS_PATH . '',
	'submit' => 'Gorde .htaccess fitxategia'
);

$lang ['admin'] ['plugin'] ['prettyurls'] ['msgs'] = array(
	1 => '<code>.htaccess</code> fitxategia behar bezala gorde da.',
	-1 => 'Ezin izan da <code>.htaccess</code> fitxategia gorde. <code>' . BLOG_ROOT . '</code>-en idazteko baimena duzu?',
  
	2 => 'Konfigurazioa behar bezala gorde da.',
	-2 => 'Errore bat gertatu da konfigurazioa gordetzen saiatzean.'
);
?>
