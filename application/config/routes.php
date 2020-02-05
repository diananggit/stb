<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'administrator/Administrator';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* 
* 
* routes operator
*
*/

$route['user/dashboard'] = 'dashboard/index';

$route['user/building'] = 'user_buildings/index';
$route['user/building/(:any)'] = 'user_buildings/$1';
$route['user/building/(:any)/(:any)'] = 'user_buildings/$1/$2';
$route['user/building/(:any)/(:any)/(:any)'] = 'user_buildings/$1/$2/$3';

$route['user/bathroom'] = 'user_bathrooms/index';
$route['user/bathroom/(:any)'] = 'user_bathrooms/$1';
$route['user/bathroom/(:any)/(:any)'] = 'user_bathrooms/$1/$2';
$route['user/bathroom/(:any)/(:any)/(:any)'] = 'user_bathrooms/$1/$2/$3';

$route['user/reportCleaningBuilding'] = 'user_reports_building/index';
$route['user/reportCleaningBuilding/(:any)'] = 'user_reports_building/$1';
$route['user/reportCleaningBuilding/(:any)/(:any)'] = 'user_reports_building/$1/$2';
$route['user/reportCleaningBuilding/(:any)/(:any)/(:any)'] = 'user_reports_building/$1/$2/$3';

$route['user/reportCleaningBathroom'] = 'user_reports_bathroom/index';
$route['user/reportCleaningBathroom/(:any)'] = 'user_reports_bathroom/$1';
$route['user/reportCleaningBathroom/(:any)/(:any)'] = 'user_reports_bathroom/$1/$2';
$route['user/reportCleaningBathroom/(:any)/(:any)/(:any)'] = 'user_reports_bathroom/$1/$2/$3';

$route['user/packing'] = 'user_employee/index';
$route['user/packing/(:any)'] = 'user_employee/$1';
$route['user/packing/(:any)/(:any)'] = 'user_employee/$1/$2';
$route['user/packing/(:any)/(:any)/(:any)'] = 'user_employee/$1/$2/$3';


/* 
* 
* routes admin 
*
*/

$route['administrator/user'] = 'user/index';
$route['administrator/user/(:any)'] = 'user/$1';

$route['administrator/menu'] = 'menu/index';
$route['administrator/menu/(:any)'] = 'menu/$1';

$route['administrator/area'] = 'admin_area/index';
$route['administrator/area/(:any)'] = 'admin_area/$1';
$route['administrator/area/(:any)/(:any)'] = 'admin_area/$1/$2';
$route['administrator/area/(:any)/(:any)/(:any)'] = 'admin_area/$1/$2/$3';


$route['administrator/reportCleaningBuilding'] = 'admin_reports_building/index';
$route['administrator/reportCleaningBuilding/(:any)'] = 'admin_reports_building/$1';
$route['administrator/reportCleaningBuilding/(:any)/(:any)'] = 'admin_reports_building/$1/$2';
$route['administrator/reportCleaningBuilding/(:any)/(:any)/(:any)'] = 'admin_reports_building/$1/$2/$3';

$route['administrator/reportCleaningBathroom'] = 'admin_reports_bathroom/index';
$route['administrator/reportCleaningBathroom/(:any)'] = 'admin_reports_bathroom/$1';
$route['administrator/reportCleaningBathroom/(:any)/(:any)'] = 'admin_reports_bathroom/$1/$2';
$route['administrator/reportCleaningBathroom/(:any)/(:any)/(:any)'] = 'admin_reports_bathroom/$1/$2/$3';


$route['administrator/employee'] = 'admin_employee/index';
$route['administrator/employee/(:any)'] = 'admin_employee/$1';
$route['administrator/employee/(:any)/(:any)'] = 'admin_employee/$1/$2';

$route['administrator/reportSPL'] = 'reportSPLAdmin/index';
$route['administrator/reportSPL/(:any)'] = 'reportSPLAdmin/$1';
$route['administrator/reportSPL/(:any)/(:any)'] = 'reportSPLAdmin/$1/$2';
$route['administrator/reportSPL/(:any)/(:any)/(:any)'] = 'reportSPLAdmin/$1/$2/$3';

$route['pages/(:any)'] = 'pages/index/$1';