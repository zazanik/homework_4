<?php
return array(
	'^$'							=> 'index/index',
	'university/create'				=> 'university/create',
	'university/([0-9]+)'			=> 'university/view/$1',
	'university/delete/([0-9]+)'	=> 'university/delete/$1',
	'university/edit/([0-9]+)'		=> 'university/edit/$1',
	'university' 					=> 'university/index',
	'chair/([0-9]+)'				=> 'chair/view/$1',
	'chair/delete/([0-9]+)'			=> 'chair/delete/$1',
	'chair/edit/([0-9]+)'			=> 'chair/edit/$1',
	'chair/create'					=> 'chair/create',
	'chair'							=> 'chair/index'
	);