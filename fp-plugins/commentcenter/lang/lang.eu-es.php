<?php
$lang ['admin'] ['entry'] ['submenu'] ['commentcenter'] = 'Iruzkin Zentroa';
$lang ['admin'] ['entry'] ['commentcenter'] = array(
	// Header of the panel
	'title' => 'Iruzkin zentroa',
	'desc1' => 'Panel honek zure blogeko iruzkinak kudeatzeko aukera ematen dizu.',
	'desc2' => 'Hemen hainbat gauza egin ditzakezu:',

	// Links
	'lpolicies' => 'Kudeatu politikak',
	'lapprove' => 'Erakutsi blokeatutako iruzkinak',
	'lmanage' => 'Kudeatu iruzkinak',
	'lconfig' => 'Pluginaren konfigurazioa',
	'faq_spamcomments' => 'Lortu laguntza spam iruzkinei aurre egiteko',

	// Policies
	'policies' => 'Politikak',
	'desc_pol' => 'Hemen edita ditzakezu iruzkinen politikak.',
	'select' => 'Hautatu',
	'criteria' => 'Irizpideak',
	'behavoir' => 'Portaera',
	'options' => 'Ezarpenak',
	'entry' => 'Sarrera',
	'entries' => 'Sarrerak',
	'categories' => 'Kategoriak',
	'nopolicies' => 'Ez dago politikarik',
	'all_entries' => 'Sarrera guztiak',
	'fol_entries' => 'Politika honako sarrera hauei aplikatzen zaie:',
	'fol_cats' => 'Politika honako kategoria hauetako sarrerei aplikatzen zaie:',
	'older' => 'Politika %d egunetik gorako sarrerei aplikatzen zaie.',
	'allow' => 'Baimendu iruzkinak',
	'block' => 'Blokeatu iruzkinak',
	'approvation' => 'Iruzkinak onartu behar dira',
	'up' => 'Gora',
	'down' => 'Behera',
	'edit' => 'Editatu',
	'delete' => 'Ezabatu',
	'newpol' => 'Gehitu politika berria',
	'del_selected' => 'Ezabatu hautatutako politika(k)',
	'select_all' => 'Hautatu denak',
	'deselect_all' => 'Ez hautatu bat ere',

	// Configuration page
	'configure' => 'Pluginaren konfigurazioa',
	'desc_conf' => 'Hemen pluginaren aukerak alda ditzakezu.',
	'log_all' => 'Blokeatutako iruzkinak erregistratu',
	'log_all_long' => 'Gaitu aukera hau blokeatutako iruzkinak erregistratu nahi badituzu.',
	'email_alert' => 'Jakinarazi iruzkinak posta elektroniko bidez',
	'email_alert_long' => 'Gaitu aukera hau onarpenaren zain dauden iruzkinak daudenean posta elektroniko bidez jakinarazpena jaso nahi baduzu.',
	'akismet' => 'Akismet',
	'akismet_use' => 'Akismeten iruzkinen egiaztapena',
	'akismet_use_long' => '<a href="https://akismet.com/" target="_blank">Akismet</a>ekin, iruzkinen spama murriztu dezakezu.',
	'akismet_key' => 'Akismet gakoa',
	'akismet_key_long' => 'Sartu hemen <a href="https://akismet.com/signup/" target="_blank">Akismet</a> zerbitzuak eman dizun <a class="hint externlink" href="https://akismet.com/support/getting-started/api-key/" target="_blank">gakoa</a>.',
	'akismet_url' => 'Akismetentzat blogaren URLa',
	'akismet_url_long' => 'Domeinu bakarra erabili behar duzu doako Akismet zerbitzurako. Eremu hau hutsik utz dezakezu, honako hau erabiliko da: <code>%s</code>',
	'save_conf' => 'Gorde konfigurazioa',

	// Edit policy page
	'apply_to' => 'Aplikatu hauetan',
	'editpol' => 'Editatu politika',
	'createpol' => 'Sortu politika berria',
	'some_entries' => 'Sarrera batzuk',
	'properties' => 'Propietate jakin batzuk dituen sarrera',
	'se_desc' => '%s aukera hautatu baduzu, sartu politika hau zein sarrerei aplikatu behar zaien.',
	'se_fill' => 'Mesedez, bete eremuak sarreren <a href="admin.php?p=entry">ID</a>rekin (<code>entryYYMMDD-HHMMSS</code>).',
	'po_title' => 'Propietateak',
	'po_desc' => '%s aukera hautatu baduzu, bete propietateak.',
	'po_comp' => 'Eremuak ez dira beharrezkoak, baina gutxienez bat bete behar duzu edo politika mezu guztietan aplikatuko da.',
	'po_time' => 'Denbora ezarpenak',
	'po_older' => 'Politika hau ',
	'days' => 'egun baino zaharragoak diren mezuei dagokie.',
	'save_policy' => 'Gorde politika',

	// Delete policies page
	'del_policies' => 'Ezabatu politikak',
	'del_descs' => 'Honako politika hau ezabatuko duzu: ',
	'del_descm' => 'Honako politika hauek ezabatuko dituzu: ',
	'sure' => 'Ziur zaude?',
	'del_subs' => 'Bai, mesedez, ezabatu',
	'del_subm' => 'Bai, mesedez, ezabatu',
	'del_cancel' => 'Ez, eraman nazazu panelera',

	// Approve comments page
	'app_title' => 'Onartu iruzkina',
	'app_desc' => 'Hemen iruzkinak onar ditzakezu.',
	'app_date' => 'Data',
	'app_content' => 'Iruzkina',
	'app_author' => 'Egilea',
	'app_email' => 'Posta elektronikoa',
	'app_ip' => 'IPa',
	'app_actions' => 'Ekintzak',
	'app_publish' => 'Argitaratu',
	'app_delete' => 'Ezabatu',
	'app_nocomms' => 'Ez dago iruzkinik.',
	'app_pselected' => 'Argitaratu hautatutako iruzkinak',
	'app_dselected' => 'Ezabatu hautatutako iruzkinak',
	'app_other' => 'Beste iruzkin batzuk',
	'app_akismet' => 'Spam gisa sinatua',
	'app_spamdesc' => 'Iruzkin hauek Akismetek blokeatu ditu.',
	'app_hamsubmit' => 'Argitaratzean bidali Akismetera positibo faltsu gisa.',
	'app_pubnotham' => 'Argitaratu baina ez bidali positibo faltsu gisa.',

	// Delete comments page
	'delc_title' => 'Ezabatu iruzkinak',
	'delc_descs' => 'Iruzkin hau ezabatuko duzu: ',
	'delc_descm' => 'Iruzkin hauek ezabatuko dituzu: ',

	// Manage comments page
	'man_searcht' => 'Bilatu sarrera bat',
	'man_searchd' => 'Sartu iruzkinak kudeatu nahi dituzun argitalpenaren <a href="admin.php?p=entry">ID</a>a (<code>entryYYMMDD-HHMMSS</code>).',
	'man_search' => 'Bilatu',
	'man_commfor' => '%sen iruzkinak',
	'man_spam' => 'Bidali spam gisa Akismetera',

	// The simple edit
	'simple_pre' => 'Sarrera honen iruzkinak ',
	'simple_1' => 'onartuko dira.',
	'simple_0' => 'zure onarpena beharko dute.',
	'simple_-1' => 'blokeatu egingo dira.',
	'simple_manage' => 'Kudeatu sarrera honen iruzkinak.',
	'simple_edit' => 'Editatu politikak',

	// Akismet warnings
	'akismet_errors' => array(
		-1 => 'Akismeten gakoa hutsik dago. Mesedez, sartu.',
		-2 => 'Ezin izan gara Akismet zerbitzariekin harremanetan jarri.',
		-3 => 'Akismeten erantzunak huts egin du.',
		-4 => 'Akismeten gakoak ez du balio.'
	),

	// Messages
	'msgs' => array(
		1 => 'Konfigurazioa gorde da.',
		-1 => 'Errore bat gertatu da konfigurazioa gordetzean.',

		2 => 'Politika gorde da.',
		-2 => 'Errore bat gertatu da politika gordetzean (agian konfigurazioa okerra da).',

		3 => 'Politika mugitu da.',
		-3 => 'Errore bat gertatu da politika mugitzen saiatzean (edo ezin da mugitu).',

		4 => 'Politika(k) ezabatu da/dira.',
		-4 => 'Errore bat gertatu da politika(k) ezabatzen saiatzean (edo ez duzu politikarik hautatu).',

		5 => 'Iruzkina(k) argitaratu da/dira.',
		-5 => 'Errore bat gertatu da iruzkina(k) argitaratzen saiatzean.',

		6 => 'Iruzkina(k) ezabatu da/dira.',
		-6 => 'Errore bat gertatu da iruzkina(k) ezabatzen saiatzean (edo ez duzu iruzkinik hautatu).',

		7 => 'Iruzkina bidali da.',
		-7 => 'Errore bat gertatu da iruzkina bidaltzen saiatzean.'
	),

	// Errors
	'errors' => array(
		'pol_nonex' => 'Editatu nahi duzun politika ez dago.',
		'entry_nf' => 'Hautatu duzun sarrera ez dago.'
	)
);

$lang ['plugin'] ['commentcenter'] = array(
	'akismet_error' => 'Sentitzen dugu, zailtasun teknikoak izaten ari gara.',
	'lock' => 'Barkatu, sarrera hau ezin da iruzkindu.',
	'approvation' => 'Iruzkina gorde da, baina administratzaileak onartu behar du bistaratu aurretik.',

	// Mail for comments
	'mail_subj' => 'Onartzeke dagoen iruzkin berria %s'
);

$lang ['plugin'] ['commentcenter'] ['mail_text'] = 'Kaixo %toname%,

"%fromname%"(e)k (%frommail%) iruzkin bat idatzi du "%entrytitle%" izenburua duen sarreran baina zure onespena behar du argitaratua izan baino lehen.

Hona hemen argitaratu berri den iruzkina:
_________________________________________
%content%
_________________________________________

Hasi saioa zure FlatPress blogeko kontrol-panelean eta egiaztatu iruzkin blokeatua iruzkin zentroan.

%blogtitle%k automatikoki sortua.
';
?>
