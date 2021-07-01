<?php

/**
 * Файл для статичных переводов
 **/


return [
    'filling' => 'The section is being filled',
	'home' => 'Home',
	'page_prev' => 'Previous',
	'page_next' => 'Next',
    'back' => 'Back',
    'site_map' => 'Site Map',

	'404' => [
		'title' => 'Wrong address or the page no longer exists <br> <a href="/'. LaravelLocalization::getCurrentLocale() .'/">Go back to home page</a>',
	],

    'footer' => [
        'copyright' => '© '. date('Y') .' ',
        'dev' => 'Developed by <a class="link link--blue-2" href="http://www.ir.kz" target="_blank" title="Developed by Internet Solutions - creation and support of websites, creation of annual reports (website development in Kazakhstan, development of the websites of Nur-Sultan, Almaty, creation of the websites of Nur-Sultan, Almaty, creation of annual reports in Nur-Sultan)">Internet Solutions</a>',
    ]
];
