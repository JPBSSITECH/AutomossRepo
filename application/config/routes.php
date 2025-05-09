<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once( BASEPATH .'database/DB.php');
$db =& DB();

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

// echo subdomain;
 

 
		$route['default_controller'] = $df = 'page';

 		

		$route['robots.txt'] = 'page/robot';
		$route['sitemap.xml'] = 'page/sitemap'; 


		
		/////// || ---------ADMIN SEGMENT

		$route['backend'] = "backend/index";
		$route['backend/(:any)'] = "backend/$1";
		$route['backend/(:any)/(:any)'] = "backend/$1/$2";
		$route['backend/(:any)/(:any)/(:any)'] = "backend/$1/$2/$3";

		$route['admin'] = "admin/index";
		$route['admin/(:any)'] = "admin/$1";
		$route['admin/(:any)/(:any)'] = "admin/$1/$2";
		$route['admin/(:any)/(:any)/(:any)'] = "admin/$1/$2/$3";


		$route['mechanic'] = "mechanic/index";
		$route['mechanic/(:any)'] = "mechanic/$1";
		$route['mechanic/(:any)/(:any)'] = "mechanic/$1/$2";
		$route['mechanic/(:any)/(:any)/(:any)'] = "mechanic/$1/$2/$3";



		$route['customer'] = "customer/index";
		$route['customer/(:any)'] = "customer/$1";
		$route['customer/(:any)/(:any)'] = "customer/$1/$2";
		$route['customer/(:any)/(:any)/(:any)'] = "customer/$1/$2/$3";




		$route['(:any)'] = "page/index/$1";
		$route['(:any)/(:any)'] = "page/index/$1/$2";
		$route['(:any)/(:any)/(:any)'] = "page/index/$1/$2/$3";
		$route['(:any)/(:any)/(:any)/(:any)'] = "page/index/$1/$2/$3/$4";


 
$route['404_override'] = 'page/error404';
$route['translate_uri_dashes'] = FALSE;