<?php
define('ENV', 'dev');

return array(
	'env' => ENV,
	'logger' => array(
		'level' => 'debug', // none/off|(LEVEL)
		'dump' => 'file', // none|html|file, 可用'|'组合
		'files' => array( // ALL|(LEVEL)
			'ALL'	=> '/data/applogs/i12p/' . date('Y-m') . '.log',
		),
	),
	'db' => array(
		'host' => '127.0.0.1',
		'dbname' => 'i12p',
		'username' => 'test',
		'password' => 'mypassword',
		'charset' => 'utf8',
	),
	'ssdb' => array(
		'host' => '127.0.0.1',
		'port' => 8888,
	),
);
