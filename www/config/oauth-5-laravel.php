<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '654994071308211',
			'client_secret' => 'bbbb6950dd931dea60cce680563d894d',
			'scope'         => ['email', 'user_event'],
		],

	]

];
