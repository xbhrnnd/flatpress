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
		<li><a href="%s">Ados, eraman nazazu nire blogera</a></li>
		<li><a href="%s">Fitxategia ezabatu dut. Berrabiarazi instalazioa.</a></li>
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

$lang ['samplecontent'] ['entry'] ['subject'] = 'Ongi etorri FlatPress-era!';
$lang ['samplecontent'] ['entry'] ['content'] = 'Hau sarrera adibide bat da. Honek [url=https://www.flatpress.org target=_blank rel=external]FlatPress[/url]-en ezaugarri batzuk erakusten ditu.

"more" etiketak zati baten eta artikulu osoaren artean "jauzi" bat sortzeko aukera ematen du.

[more]


[h4]Testu formatua[/h4]

En FlatPress usted formatea su contenido con [url=https://wiki.flatpress.org/doc:plugins:bbcode target=_blank rel=external]BBcode[/url] (Bulletin-Board-Code). Esto es muy fácil con BBCode. Ejemplos? [b] hace [b]texto en negrita[/b], [i] [i]cursiva[/i].

[quote]El elemento [b]quote[/b] puede utilizarse para marcar citas. [/quote]

[code]El elemento \'code\' crea una sección con un ancho de carácter fijo.
También puede
   representar hendiduras.[/code]

Los elementos \'img\' (imágenes) y \'url\' (Links) tienen opciones especiales. Encontrará más información al respecto en la [url=https://wiki.flatpress.org/doc:plugins:bbcode target=_blank rel=external]FlatPress-Wiki[/url].


[h4]Sarrerak (blogeko argitalpenak) eta orri estatikoak[/h4]

Se trata de una entrada, mientras que [url=static.php?page=about]Acerca de[/url] es una [b]página estática[/b]. Una página estática, a diferencia de una entrada, no puede comentarse y no aparece en los listados de entradas del blog.

Las páginas estáticas son útiles para información general, por ejemplo una página de inicio fija o el pie de imprenta. Incluso podría prescindir por completo de las funciones de blog y utilizar FlatPress para crear un sitio web con sólo páginas estáticas.

En el [url=admin.php]área de administración[/url] puedes crear entradas y páginas estáticas - y definir si la página de inicio de tu blog FlatPress debe ser una página estática o la vista general del blog.


[h4]Plugin-ak[/h4]

Puede personalizar ampliamente FlatPress según sus necesidades ampliándolo con [url=https://wiki.flatpress.org/doc:plugins:standard target=_blank rel=external]Plugins[/url]. BBCode, por ejemplo, es un Plugin.

Aquí tiene más ejemplos de contenido que le muestran aún más funciones de FlatPress :)

Dos páginas estáticas ya están preparadas para usted:
[list]
[*][url=static.php?page=about]Acerca de[/url]
[*][url=static.php?page=menu]Menú[/url] (El contenido de esta página estática también aparece en la barra lateral de tu blog: esa es la magia del [b]widget blockparser[/b]. El [url=https://wiki.flatpress.org/ target=_blank rel=external]FlatPress-Wiki[/url] tiene información sobre esto, ¡y mucho más!)
[/list]

Con el plugin [b]PhotoSwipe[/b] ahora puedes colocar tus imágenes aún más fácilmente, ya sea como una sola imagen alineada  float="left"-  o  float="right" rodeada por el texto.
Incluso puede presentar galerías enteras a sus visitantes con el elemento \'gallery\'. Puede comprobar lo fácil que es [url=https://wiki.flatpress.org/res:plugins:photoswipe target=_blank rel=external]aquí[/url].


[h4]Widget-ak[/h4]

Ninguno de los elementos de la barra lateral de tu blog es fijo, puedes moverlos, eliminarlos y añadir otros nuevos en el área de administración.

Estos elementos se denominan [b]Widgets[/b]. Por supuesto, la Wiki de FlatPress también tiene mucha información útil [url=https://wiki.flatpress.org/doc:tips:widgets target=_blank rel=external]sobre este tema[/url].


[h4]Gaiak[/h4]

[gallery="images/Leggero-Themepreview/" width="140"]
Con el tema Leggero de FlatPress tiene a su disposición 3 plantillas de estilo, desde clásico hasta moderno. Estas plantillas son un magnífico comienzo para crear algo propio.


[h4]Informazio gehiago[/h4]

FlatPress-i buruz gehiago jakin nahi duzu?

[list]
[*]En el [url=https://www.flatpress.org/?x target=_blank rel=external]blog del proyecto[/url] podrá enterarse de lo que ocurre actualmente en el proyecto FlatPress.
[*]Visite el [url=https://forum.flatpress.org/ target=_blank rel=external]foro de soporte[/url] para obtener soporte y contactar con otros usuarios de FlatPress.
[*]Descargue magníficos [b]temas[/b] creados por la comunidad desde la [url=https://wiki.flatpress.org/res:themes target=_blank rel=external]Wiki[/url].
[*]También hay grandes [url=https://wiki.flatpress.org/res:plugins target=_blank rel=external]Plugins[/url] allí.
[*]Consigue [url=https://wiki.flatpress.org/res:language target=_blank rel=external]paquete de traducción[/url] para tu idioma.
[*]También puede seguir a FlatPress en [url=https://fosstodon.org/@flatpress target=_blank rel=external]Mastodon[/url].
[/list]


[h4]Nola lagundu dezaket?[/h4]

[list]
[*]Apoye el proyecto con una [url=https://www.flatpress.org/home/static.php?page=donate target=_blank rel=external]pequeña donación[/url].
[*][url=https://www.flatpress.org/contact/ target=_blank rel=external]Informe[/url] de los errores que se hayan producido o envíenos sugerencias de mejora.
[*]Invitamos a los programadores a que nos apoyen en [url=https://github.com/flatpressblog/flatpress target=_blank rel=external]GitHub[/url].
[*]Traduzca FlatPress y su documentación a [url=https://wiki.flatpress.org/res:language target=_blank rel=external]su idioma[/url].
[*]Forme parte de la comunidad FlatPress en el [url=https://forum.flatpress.org/ target=_blank rel=external]Foro de soporte[/url].
[*]Cuéntale al mundo lo genial que es FlatPress! :)
[/list]


[h4]Eta orain zer?[/h4]

[url=login.php]Inicie sesión[/url] para empezar a bloguear en el [url=admin.php]área de administración[/url].

Que te diviertas! :)

[i]El equipo [url=https://www.flatpress.org target=_blank rel=external]FlatPress[/url][/i]

';

$lang ['samplecontent'] ['about'] ['subject'] = 'Acerca de';
$lang ['samplecontent'] ['about'] ['content'] = 'Escribe aquí algo sobre ti y sobre este blog. ([url=admin.php?p=static&action=write&page=about]Edítame![/url])';

$lang ['samplecontent'] ['privacy-policy'] ['subject'] = 'Política de privacidad';
$lang ['samplecontent'] ['privacy-policy'] ['content'] = 'En algunos países, si utiliza el servicio Akismet Antispam, por ejemplo, es necesario proporcionar a sus visitantes una política de privacidad. También puede ser necesaria una política de privacidad si el visitante puede utilizar el formulario de contacto o la función de comentarios.

[b]Consejo:[/b] Hay muchas plantillas y generadores en Internet.

Puede insertarlos aquí. ([url=admin.php?p=static&action=write&page=privacy-policy]Editar![/url])

Si activas el plugin CookieBanner, tus visitantes podrán ir directamente a esta página en el formulario de contacto y en la función de comentarios.
';
?>
