<?php
$lang ['plugin'] ['prettyurls'] ['errors'] = array(
	-2 => 'Nelze najít nebo vytvořit soubor <code>.htaccess</code> ve Vašem kořenovém adresáři. PrettyURLs nemusí fungovat správně, viz Nastavení PretyURLs.'
);

$lang ['admin'] ['plugin'] ['submenu'] ['prettyurls'] = 'PrettyURLs Config';
$lang ['admin'] ['plugin'] ['prettyurls'] = array(
	'head' => 'Nastavení PrettyURLs',
	'description1' => 'Zde můžete přeměnit standardní adresy URL FlatPressu na krásné adresy URL vhodné pro SEO.',
	'fpprotect_is_on' => 'Zásuvný modul PrettyURLs vyžaduje soubor .htaccess. ' . //
		'Chcete-li tento soubor vytvořit nebo upravit, aktivujte tuto možnost v zásuvném <a href="admin.php?p=config&action=fpprotect" title="přejít na zásuvný modul FlatPress Protect">modulu FlatPress Protect</a>. ',
	'fpprotect_is_off' => 'Zásuvný modul FlatPress Protect chrání soubor .htaccess před nechtěnými změnami. ' . //
		'Zásuvný modul můžete aktivovat <a href="admin.php?p=plugin&action=default" title="Přejděte do administrace zásuvného modulu">zde</a>!',
	'nginx' => 'PrettyURLs se službou NGINX',
	'wiki_nginx' => 'https://wiki.flatpress.org/res:plugins:prettyurls#nginx',
	'htaccess' => '.htaccess',
	'description2' => 'Tento editor umožňuje přímo upravovat soubor <code>.htaccess</code> potřebný pro zásuvný modul PrettyUrls.<br>' . //
		'<strong>Poznámka:</strong> Pouze webové servery kompatibilní s NCSA, jako je například Apache, uznávají koncept souborů .htaccess. ' . //
		'Váš serverový software je: <strong>' . $_SERVER ['SERVER_SOFTWARE'] . '</strong>',
	'cantsave' => 'Nemůžete editovat tento soubor, protože není <strong>zapisovatelný</strong>. Můžete nastavit povolení k zapisování nebo kopírovat a vložit do souboru a poté nahrát.',
	'mode' => 'Režim',
	'auto' => 'Automatický',
	'autodescr' => 'se snaží vybrat nejlepší volbu',
	'pathinfo' => 'Path Info',
	'pathinfodescr' => 'např. /index.php/2024/01/01/hello-world/',
	'httpget' => 'HTTP Get',
	'httpgetdescr' => 'např. /?u=/2024/01/01/hello-world/',
	'pretty' => 'Pretty',
	'prettydescr' => 'např. /2024/01/01/hello-world/',

	'saveopt' => 'Uložit nastavení',

	'location' => '<strong>Místo uložení:</strong> ' . ABS_PATH . '',
	'submit' => 'Uložit .htaccess'
);

$lang ['admin'] ['plugin'] ['prettyurls'] ['msgs'] = array(
	1 => '.htaccess úspěšně uložen',
	-1 => '.htaccess nemohl být uložen (nemáte oprávnění pro zapisování <code>' . BLOG_ROOT . '</code>)?',

	2 => 'Možnosti úspěšně uloženy',
	-2 => 'Došlo k chybě při pokusu o uložení nastavení'
);
?>
