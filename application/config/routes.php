<?php
return array(
	'^$'							=> 'index/index',
	'university/create'				=> 'university/create',
	'university/([0-9]+)'			=> 'university/view/$1',
	'university/delete/([0-9]+)'	=> 'university/delete/$1',
	'university/edit/([0-9]+)'		=> 'university/edit/$1',
	'university' 					=> 'university/index',
	'chair/create'					=> 'chair/create',
	'chair'							=> 'chair/index'
	);