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

$route['user/inputData'] = 'user_input_prod/index';
$route['user/inputData/(:any)'] = 'user_input_prod/$1';
$route['user/inputData/(:any)/(:any)'] = 'user_input_prod/$1/$2';
$route['user/inputData/(:any)/(:any)/(:any)'] = 'user_input_prod/$1/$2/$3';


/* 
*
* routes admin/spv
*
*/

$route['adminSPV/adminSpvDashboard'] = 'admin_spv_dashboard/index';

$route['adminSPV/reportProductions'] = 'adminSPV_reports_production/index';
$route['adminSPV/reportProductions/(:any)'] = 'adminSPV_reports_production/$1';
$route['adminSPV/reportProductions/(:any)/(:any)'] = 'adminSPV_reports_production/$1/$2';
$route['adminSPV/reportProductions/(:any)/(:any)/(:any)'] = 'adminSPV_reports_production/$1/$2/$3';


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


$route['administrator/employee'] = 'admin_employee/index';
$route['administrator/employee/(:any)'] = 'admin_employee/$1';
$route['administrator/employee/(:any)/(:any)'] = 'admin_employee/$1/$2';

$route['administrator/reportSPL'] = 'reportSPLAdmin/index';
$route['administrator/reportSPL/(:any)'] = 'reportSPLAdmin/$1';
$route['administrator/reportSPL/(:any)/(:any)'] = 'reportSPLAdmin/$1/$2';
$route['administrator/reportSPL/(:any)/(:any)/(:any)'] = 'reportSPLAdmin/$1/$2/$3';

$route['pages/(:any)'] = 'pages/index/$1';