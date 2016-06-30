<?php

return [

	'theme' => [
	'folder'  => 'themes',
	'active' => 'default' ],

	'templates' => [
		'home' 	=> MyTailor\Templates\HomeTemplate::class,
		'shots' => MyTailor\Templates\ShotsTemplate::class,
		'brands' => MyTailor\Templates\BrandsTemplate::class,
		'designers' => MyTailor\Templates\DesignersTemplate::class
	]
];
