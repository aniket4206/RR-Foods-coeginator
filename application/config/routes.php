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
$route['default_controller'] = 'MainC';
$route['product_view'] = 'MainC/product_view';
$route['home'] = 'MainC';
$route['about'] = 'MainC/about';
$route['pro_pack'] = 'MainC/pro_pack';
$route['products'] = 'MainC/products';
$route['contact'] = 'MainC/contact';
$route['insert_contact_data'] = 'MainC/insert_contact_data';
$route['login'] = 'Users/login';
$route['logout'] = 'Users/logout';
$route['forgetpass'] = 'MainC/forgetpass';
$route['dashboard'] = 'Dashboard/index';
$route['admins'] = 'Dashboard/admins';
$route['create_user'] = 'Dashboard/create_user';
$route['change'] = 'Dashboard/change';
$route['edit_user'] = 'Dashboard/edit_user';
$route['contact_data'] = 'Dashboard/contact_data';
$route['products_p'] = 'Dashboard/products_p';
$route['create_product'] = 'Dashboard/create_product';
$route['edit_products'] = 'Dashboard/edit_products';
$route['change_products'] = 'Dashboard/change_products';
$route['404_override'] = 'MainC/my404';
$route['translate_uri_dashes'] = FALSE;
