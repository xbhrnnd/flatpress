<?php
/*
 * LangId: Euskara
 */
$lang ['setup'] = array(
	'setup' => 'Konfigurazioa'
);

$lang ['locked'] = array(
	'head' => 'Konfigurazioa blokeatu da',
	'descr' => 'Badirudi dagoeneko konfigurazioa exekutatu duzula, <code>%s</code> blokeo-fitxategia aurkitu baitugu.

		Konfigurazioa berrabiarazi behar baduzu, ezabatu fitxategi hau lehenik.

		<strong>Kontuz!</strong> <code>setup.php</code> fitxategia eta <code>setup/</code> direktorioa ez dira zerbitzarian geratu behar. Mesedez, kendu itzazu instalazioa amaitu ondoren.

		<ul>
		<li><a href="%s">Ados, eraman nazazu nire blogera.</a></li>
		<li><a href="%s">Fitxategia ezabatu dut, berrabiarazi instalazioa.</a></li>
		</ul>'
);

$lang ['err'] = array(
	'setuprun1' => 'Instalazioa martxan dago.',

	'setuprun2' => 'Instalazioa abian da: administratzailea bazara ',
	'setuprun3' => ' ezaba dezakezu berrabiarazteko.',
	'writeerror' => 'Idazketa-errorea',

	'fpuser1' => ' ez da baliozko erabiltzailea. ' . //
		'Erabiltzaile-izenak alfanumerikoa izan behar du eta ez du zuriunerik izan behar.',
	'fpuser2' => ' ez da baliozko erabiltzailea. ' . //
		'Erabiltzaile-izenak letrak, zenbakiak eta azpimarra soilik izan ditzake.',
	'fppwd' => 'Pasahitzak 6 karaktere izan behar ditu gutxienez eta zuriunerik gabe.',
	'fppwd2' => 'Pasahitzak ez datoz bat.',
	'email' => ' ez da baliozko helbide elektronikoa.',
	'www' => ' ez da baliozko URL bat.',
	'error' => '<p><big>Errorea!</big> ' . // 
		'Errore hauek gertatu dira formularioa prozesatu bitartean:</p><ul>'
);

$lang ['step1'] = array(
	'head' => 'Ongi etorri FlatPress-era!',
	'descr' => 'Eskerrik asko <strong>FlatPress</strong> aukeratzeagatik.

		Zure blog berriarekin ondo pasatzen hasi baino lehen, galdera batzuk egin behar dizkizugu.

		Ez kezkatu, ez dizu denbora asko hartuko!',
	'descrl1' => 'Aukeratu zure hizkuntza.',
	'descrl2' => '<a class="hint" onclick="toggleinfo();">Ez dago zerrendan?</a>',
	'descrlang' => 'Zure hizkuntza zerrendan aurkitzen ez baduzu, egiaztatu <a href="https://wiki.flatpress.org/res:language" target="_blank" rel="external">hizkuntza pakete</a> egokirik dagoen:

		<pre>%s</pre>

		Hizkuntz pakete bat instalatzeko, kargatu bere edukia zure <code>flatpress/</code> direktoriora. Ondoren, <a href="./setup.php">hasi berriro instalazioa</a>.',
	'descrw' => 'FlatPress exekutatzeko behar duzun <strong>gauza bakarra</strong> direktorio <em>idatzigarria</em> bat da.

		<pre>%s</pre>'
);

$lang ['step2'] = array(
	'head' => 'Sortu erabiltzailea',
	'descr' => 'Ia eginda! Xehetasun hauek baino ez dira geratzen:',
	'fpuser' => 'Erabiltzaile izena',
	'fppwd' => 'Pasahitza',
	'fppwd2' => 'Pasahitza (errepikatu)',
	'www' => 'Hasierako orria',
	'email' => 'Posta elektronikoa'
);

$lang ['step3'] = array(
	'head' => 'Eginda',
	'descr' => '<strong>Hori zen guztia.</strong>

		Sinesgaitza?

		Eta arrazoi duzu: <strong>istorioa hasi berri da</strong>, baina <strong>idaztea zure esku dago</strong>!

		<ul>
		<li>Ikusi <a href="%s">hasierako orriaren</a> itxura</li>
		<li>Ondo pasa! <a href="%s">Hasi saioa orain!</a></li>
		<li>Zeozer kontatu nahi al diguzu? <a href="https://www.flatpress.org/" target="_blank" rel="external">Joan FlatPress.org-era!</a></li>
		</ul>

		Eskerrik asko FlatPress aukeratzeagatik!'
);

$lang ['buttonbar'] = array(
	'next' => 'Hurrengoa >'
);

$lang ['samplecontent'] = array();

$lang ['samplecontent'] ['menu'] ['subject'] = 'Menua';
$lang ['samplecontent'] ['menu'] ['content'] = '[list]
[*][url=?]Hasierako orria[/url]
[*][url=?paged=1]Blog-a[/url]
[*][url=static.php?page=about]Honi buruz[/url]
[*][url=contact.php]Harremanetan jarri[/url]
[/list]';

$lang ['samplecontent'] ['entry'] ['subject'] = 'Ongi etorri FlatPressera!';
$lang ['samplecontent'] ['entry'] ['content'] = 'Hau sarrera adibide bat da. Honek [url=https://www.flatpress.org target=_blank rel=external]FlatPressen[/url] ezaugarri batzuk erakusten ditu.

"more" etiketak zati baten eta artikulu osoaren artean "jauzi" bat sortzeko aukera ematen du.

[more]


[h4]Testu formatua[/h4]

Edukiari estilo eta formatua emateko modu lehenetsia [url=https://wiki.flatpress.org/doc:plugins:bbcode target=_blank rel=external]BBcode[/url] ("<em>bulletin board code</em>") da. BBCode zure argitalpenak estiloz hornitzeko modu erraza da. Kode ohikoenak onartzen dira. Adibidez, [b] [b]lodia[/b]-rako (html: strong), [i] [i]etzana[/i]-rako (html: em), etab.

[quote]Zure [b]aipamen[/b] gogokoenak erakusteko aipamen blokeak ere badaude.[/quote]

[code]Eta \'code\'-k zure snippetak (kode edo testu zatiak) modu monotartekatuan erakusten ditu.
Eduki koskaduna
    ere onartzen du.[/code]

\'img\' (irudiak) eta \'url\' (estekak) elementuek ere aukera bereziak dituzte. Informazio gehiago aurki dezakezu hauei buruz [url=https://wiki.flatpress.org/doc:plugins:bbcode target=_blank rel=external]FlatPress-Wiki[/url]an.


[h4]Sarrerak (blogeko argitalpenak) eta orri estatikoak[/h4]

Honako hau sarrera bat da, eta [url=static.php?page=about]Honi buruz[/url] [b]orri estatiko[/b] bat da. Orri estatiko bat komentatu ezin den eta blogaren ohiko argitalpenekin batera agertzen ez den sarrera (argitalpen) bat da.

Orri estatikoak informazio orokorreko orriak sortzeko baliagarriak dira. Orri horietako bat bisitarientzako [b]hasierako orria[/b] bihur dezakezu. Horrek esan nahi du FlatPressekin blogik gabeko gune oso bat ere exekutatu dezakezula. Orri estatiko bat hasierako orri bihurtzeko aukera [url=admin.php]administrazio eremuko[/url] [b]kontrol-panelean[/b] dago.


[h4]Pluginak[/h4]

FlatPress oso pertsonalizagarria da, eta [url=https://wiki.flatpress.org/doc:plugins:standard target=_blank rel=external]pluginak[/url] onartzen ditu bere potentzia handitzeko. BBCode bera plugin bat da.

FlatPressen funtzio eta harribitxi ezkutu batzuk erakusteko, edukiaren adibide gehiago sortu ditugu :)
Bi [b]orri estatiko[/b] aurki ditzakezu zure edukia jasotzeko prest:
[list]
[*][url=static.php?page=about]Honi buruz[/url]
[*][url=static.php?page=menu]Menua[/url] (kontuan izan orrialde honetako estekak alboko barran ere agertuko direla [b]BlockParser widgetaren[/b] magiari esker. Ikusi [url=https://wiki.flatpress.org/doc:faq target=_blank rel=external]FAQ[/url] orria gehiagorako!)
[/list]

Con el plugin [b]PhotoSwipe[/b] ahora puedes colocar tus imágenes aún más fácilmente, ya sea como una sola imagen alineada  float="left"-  o  float="right" rodeada por el texto.
Incluso puede presentar galerías enteras a sus visitantes con el elemento \'gallery\'. Puede comprobar lo fácil que es [url=https://wiki.flatpress.org/res:plugins:photoswipe target=_blank rel=external]aquí[/url].


[h4]Widgetak[/h4]

Ez dago elementu finko bakar bat ere alboko barran(etan). Testu hau inguratzen duten barretan aurki ditzakezun elementu guztiak lekuz alda daitezke, eta gehienak pertsonalizagarriak ere badira. Gai batzuek panel interfazea ere eskaintzen dute administrazio eremuan.

Elementu hauek [b]widget[/b]ak dira. Widgetei buruz gehiago jakiteko eta egundako efektuak lortzeko [url=https://wiki.flatpress.org/doc:tips:widgets target=_blank rel=external]aholkuak[/url] ikusteko, begiratu [url=https://wiki.flatpress.org/ target=_blank rel=external]wikia[/url].


[h4]Gaiak[/h4]

[gallery="images/Leggero-Themepreview/" width="140"]
FlatPress-Leggero gaiarekin 3 estilo txantiloi dituzu eskura - klasikotik modernora. Txantiloi hauek abiapuntu bikaina dira zure estilo propioa sortzeko.


[h4]Informazio gehiago[/h4]

FlatPressi buruz gehiago jakin nahi duzu?

[list]
[*]Jarraitu [url=https://www.flatpress.org/?x target=_blank rel=external]blog ofiziala[/url] FlatPress munduan gertatzen ari dena jakiteko.
[*]Bisitatu [url=https://forum.flatpress.org/ target=_blank rel=external]foroa[/url] laguntza jasotzeko eta beste erabiltzaile asko ezagutzeko.
[*]Lortu [b]gai bikainak[/b] beste erabiltzaile batzuen [url=https://wiki.flatpress.org/res:themes target=_blank rel=external]bidalketetatik[/url]!
[*]Sekulako [url=https://wiki.flatpress.org/res:plugins target=_blank rel=external]pluginak[/url] ere badaude.
[*]Eskuratu zure hizkuntzarako [url=https://wiki.flatpress.org/res:language target=_blank rel=external]itzulpen paketea[/url].
[*]FlatPressi jarrai diezaiokezu [url=https://fosstodon.org/@flatpress target=_blank rel=external]Mastodonen[/url] ere.
[/list]


[h4]Nola lagundu dezaket?[/h4]

[list]
[*]Lagundu proiektua [url=https://www.flatpress.org/home/static.php?page=donate target=_blank rel=external]dohaintza txiki[/url] batekin.
[*][url=https://www.flatpress.org/contact/ target=_blank rel=external]Jarri gurekin harremanetan[/url] akatsen berri emateko edo hobekuntzak iradokitzeko.
[*]Lagundu FlatPressen garapenean [url=https://github.com/flatpressblog/flatpress target=_blank rel=external]GitHub-en[/url].
[*]Itzuli FlatPress edo dokumentazioa zure [url=https://wiki.flatpress.org/res:language target=_blank rel=external]hizkuntzara[/url].
[*]Partekatu zure ezagutza eta konektatu beste FlatPress erabiltzaileekin [url=https://forum.flatpress.org/ target=_blank rel=external]foroan[/url].
[*]Zabaldu mezua! :)
[/list]


[h4]Eta orain zer?[/h4]

Orain [url=login.php]Saioa hasi[/url] egin dezakezu [url=admin.php]Kontrol-panela[/url] atzitzeko eta argitaratzen hasteko!

Ondo pasa! :)

[i][url=https://www.flatpress.org target=_blank rel=external]FlatPress[/url] Taldea[/i]

';

$lang ['samplecontent'] ['about'] ['subject'] = 'Honi buruz';
$lang ['samplecontent'] ['about'] ['content'] = 'Idatzi hemen zerbait zure buruari buruz. ([url=admin.php?p=static&action=write&page=about]Editatu nazazu![/url])';

$lang ['samplecontent'] ['privacy-policy'] ['subject'] = 'Pribatutasun politika';
$lang ['samplecontent'] ['privacy-policy'] ['content'] = 'Herrialde batzuetan Akismet Antispam zerbitzua erabiltzen baduzu, bisitariei pribatutasun-politika bat eman behar diezu, adibidez. Pribatutasun-politika bat ere beharrezkoa izan daiteke bisitariak harremanetarako formularioa edo iruzkinen funtzioa erabiliko badute.

[b]Aholkua:[/b] txantiloi eta sorgailu asko daude Interneten.

Hemen txerta ditzakezu. ([url=admin.php?p=static&action=write&page=privacy-policy]Editatu nazazu![/url])

CookieBanner plugina aktibatzen baduzu, zure bisitariek zuzenean joan ahal izango dira orrialde honetara harremanetarako formularioan eta iruzkinen funtzioan.
';
?>
