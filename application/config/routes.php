<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['(:any)'] = 'home/$1';
$route['(:any)'] = 'convert/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;