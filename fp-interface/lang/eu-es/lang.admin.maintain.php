<?php
$lang ['admin'] ['panel'] ['maintain'] = 'Mantentze-lanak';

$lang ['admin'] ['maintain'] ['default'] = array(
	'head' => 'Mantentze-lanak',
	'descr' => 'Etorri hona zerbait hondatu dela uste duzunean eta agian hemen aurkituko duzu konponbideren bat. Hala ere, baliteke honek ez funtzionatzea.',
	'opt0' => '&laquo; Itzuli menu nagusira',
	'opt1' => 'Berreraiki indizea',
	'opt2' => 'Garbitu gai eta txantiloien cachea',
	'opt3' => 'Leheneratu fitxategien baimenak',
	'opt4' => 'Erakutsi PHPri buruzko informazioa',
	'opt5' => 'Bilatu eguneraketak',

	'chmod_info' => 'Fitxategiaren baimenak ' . decoct(FILE_PERMISSIONS) . '-(r)a <strong>ezin izan badira</strong> berrezarri, ziurrenik fitxategiaren jabea ez da web zerbitzariaren jabea bera.<br>' . //
		'Normalean ohar hau baztertu dezakezu.'
);

$lang ['admin'] ['maintain'] ['default'] ['msgs'] = array(
	1 => 'Eragiketa amaituta.',
	-1 => 'Eragiketak huts egin du.'
);

$lang ['admin'] ['maintain'] ['updates'] = array(
	'head' => 'Eguneraketak',
	'list' => '<ul>
		<li>FlatPressen <big>%s</big> bertsioa duzu.</li>
		<li>FlatPressen azken bertsio egonkorra <big><a href="%s">%sa</a></big> da.</li>
		<li>FlatPressen azken bertsio ezegonkorra <big><a href="%s">%sa</a></big> da.</li>
		</ul>',
	'notice' => 'Oharra:'
);

$lang ['admin'] ['maintain'] ['updates'] ['msgs'] = array(
	1 => 'Eguneraketak eskuragarri daude!',
	2 => 'Zure sistema eguneratuta dago jada.',
	-1 => 'Ez da eguneraketarik aurkitu.'
);
?>
