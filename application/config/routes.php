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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['checkout-page'] = 'Home_Controller/Checkout';
$route['login'] = 'Home_Controller/User_Login';
$route['registration'] = 'Home_Controller/User_Registration';
$route['mail-us'] = 'Home_Controller/Mail_Us';
$route['category-women/product'] = 'Home_Controller/Women_Product';
$route['category-men/product'] = 'Home_Controller/Men_Product';
$route['single-product'] = 'Home_Controller/Single_Product';
$route['save_registration'] = 'User_Controller/Save_Registration';
$route['check_login'] = 'User_Controller/Check_Login';
$route['product-(:any)'] = 'Home_Controller/Single_Product';
$route['add_to_cart'] = 'Home_Controller/Add_To_Cart';


/**-------------Admin Route Url--------------------**/
$route['admin/login'] = 'Admin_Controller/Admin_Login';
$route['admin/login_validation'] = 'Admin_Controller/Login_Validation';
$route['admin/logout'] = 'Admin_Controller/Logout';
$route['admin/index'] = 'Admin_Controller/Index';
$route['admin/product-list'] = 'Admin_Controller/Product_List';
$route['admin/add-category'] = 'Admin_Controller/Add_Category';
$route['admin/add-product'] = 'Admin_Controller/Add_Product';
$route['admin/save_category'] = 'Admin_Controller/Save_Category';
$route['admin/get_edit_category'] = 'Admin_Controller/Get_Edit_Category';
$route['admin/update_category'] = 'Admin_Controller/Update_Category';
$route['admin/save_product'] = 'Admin_Controller/Save_Product';
$route['admin/get-product-by-id/product-id-(:any)'] = 'Admin_Controller/Get_Edit_Product';
$route['admin/update_product'] = 'Admin_Controller/Update_Product';
$route['admin/delete_category'] = 'Admin_Controller/Delete_Category';
$route['admin/delete_product'] = 'Admin_Controller/Delete_Product';

