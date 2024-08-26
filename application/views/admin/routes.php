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
|	https://codeigniter.com/userguide3/general/routing.html
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
//$route['default_controller'] = 'welcome';
$route['default_controller'] = 'Home/membership';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Home/login';
$route['profile'] = 'Home/profile';
$route['dashboard'] = 'Home/dashboard';
$route['users/signup'] = "Home/signup_insert";
$route['users/login']  = "Home/user_login";
$route['shopnship-create-order'] = 'Home/shopnship_create_order';
$route['users/shopnship-order-details/(:any)'] = 'Shopnship/shopnship_order_details/$1';

$route['users/shopnship-order-details/(:any)/(:any)'] = 'Shopnship/shopnship_order_details/$1/$2';
$route['users/address'] ="Shopnship/dashboard_address_book";
$route['users/change-password'] = "Home/change_pass";
$route['users/forgot'] = "Home/forgot";
$route['contact-us'] = "Prohibited/contact";
$route['signup'] = 'Home/signup';
$route['shopnship'] = 'Home/shopnship';
$route['test'] = 'Home/test';
$route['signup'] = 'Home/signup';
$route['notifications'] = 'Home/notifications';
$route['home/profile'] = 'Home/insert_profile_data';
$route['shopnship/profile'] = 'Shopnship/edit_profile_view';
$route['international-shipment'] = 'Home/international_shipment';
$route['international-create-order'] = 'Home/international_create_order';
$route['assisted-sns'] = 'Home/assisted_sns';
$route['users/assisted-order-details/(:any)'] = 'Shopnship/assisted_order_details/$1';
$route['users/international-order-details/(:any)'] = 'Shopnship/international_order_details/$1';

$route['assisted-create-order'] = 'Home/assisted_create_order';
$route['membership'] = 'Home/membership';
$route['notifications'] = 'Home/notifications';
$route['insert_data'] = 'Shopnship/insert_data';
$route['customer/international-product'] = "Shopnship/international_update_product";

$route['my-stripe/(:any)'] = "StripeController/index/$1";
$route['payment-success'] = "StripeController/payment_success";
$route['stripePost']['post'] = "StripeController/stripePost";
$route['address'] = "Home/address_book";
$route['invite_friends'] = "Home/invite_friends";
$route['logout'] = "Home/logout";
$route['international-order-details'] ="Shopnship/international_order_details";
$route['index'] = "Admin/Admin/index";
$route['Admin/admin_insert_message']      = "Admin/Admin/admin_insert_message";
$route['Admin/display_admin_message'] = "Admin/Admin/display_admin_message";
// $route['change_pass'] = "Home/change_pass";
$route['logout'] ="Home/logout";
// $route['delete_notification'] = "Home/delete_notification";
$route['Home/delete/(:any)']  = "Home/delete_notitfication/$1";
$route['Admin/dashboard'] = "Admin/Admin/dashboard_admin";
$route['admin/create-user'] = "Admin/Admin/user_details";
$route['user-list'] = "Admin/Admin/user_listing";
$route['order/shopnship'] = "Admin/Admin/shopnship_order_listing";
$route['order/shopnship/(:any)'] = "Admin/Admin/shopnship_listing";
$route['order/assisted/(:any)'] = "Admin/Admin/assisted_listing";
$route['order/assisted'] = "Admin/Admin/assisted_order_listing";
$route['order/international/(:any)'] = "Admin/Admin/international_listing";
$route['order/international'] = "Admin/Admin/international_order_listing";

$route['shopnship-order-details/(:any)'] = "Admin/Admin/shopnship_order_details/$1";
$route['shopnship-order-details/(:any)/(:any)'] = "Admin/Admin/shopnship_order_details/$1/$2";

$route['assisted-order-details/(:any)']  ="Admin/Admin/assisted_order_details/$1";
$route['assisted-order-details/(:any)/(:any)']  ="Admin/Admin/assisted_order_details/$1/$2";

$route['international-order-details/(:any)'] = "Admin/Admin/international_order_details/$1";
$route['international-order-details/(:any)/(:any)'] = "Admin/Admin/international_order_details/$1/$2";

$route['payment-list'] = "Admin/Admin/payment_listing";
$route['payment-details'] = "Admin/Admin/payment_details";
$route['admin'] = "Admin/Admin/admin_login";
$route['signin'] = "Admin/Admin/admin_signin";
$route['Admin/forgot'] = "Admin/Admin/forgot_view";
$route['Admin/logout'] = "Admin/Admin/logout";
$route['Admin/reset_password'] = "Admin/Admin/reset_password";
$route['Admin/recover-password'] = "Admin/Admin/recover_password";
$route['Admin/update-password'] = "Admin/Admin/update_password";
$route['Admin/insert-users'] = "Admin/Admin/insert_users";
// $route['Admin/update_users'] = "Admin/Admin/update_users";
$route['Admin/update-users-data'] ="Admin/Admin/update_users_data";
$route['Admin/shopnship-insert-message'] = "Admin/Admin/shopnship_insert_message";
$route['Admin/assisted-insert-message'] = "Admin/Admin/assisted_insert_message";
$route['Admin/international-insert-message'] = "Admin/Admin/international_insert_message";
$route['Admin/payment'] = "Admin/Admin/payment_view";
$route['Admin/insert-payment'] = "Admin/Admin/insert_payment";
$route['Admin/shopnship_order_details/(:num)'] = "Admin/Admin/shopnship_order_details/$1";
$route['Admin/shopnship-shipment'] = "Admin/Admin/shopnship_shipment";
$route['Admin/assisted-payment'] = "Admin/Admin/assisted_payment";
$route['Admin/assisted-shipment'] = "Admin/Admin/assisted_shipment";
$route['Admin/international-payment'] = "Admin/Admin/international_payment";
$route['Admin/international-shipment'] = "Admin/Admin/international_shipment";
$route['update-order-status'] = "Admin/Admin/update_order_status";
$route['Admin/address'] = "Admin/Admin/address";
$route['Admin/insert-address'] = "Admin/Admin/insert_address";
$route['assisted-update-order-status'] = "Admin/Admin/assisted_update_order_status";
$route['international-update-order-status'] = "Admin/Admin/international_update_order_status";
$route['card-details/(:any)'] = "StripeController/card_detail/$1";
$route['delete-card/(:any)']  = "StripeController/delete_card/$1";
$route['update_stripePost'] = "StripeController/update_stripePost";

$route['Admin/notifications'] = "Admin/Admin/notifications";
$route['Admin/delete_notification'] ="Admin/Admin/delete_notification";
$route['Admin/delete_all_notification'] = "Admin/Admin/delete_all_notification";
$route['Admin/update-address'] = "Admin/Admin/update_address";
$route['admin/notifications'] = "Admin/Admin/notifications";
$route['calculator'] = "Shopnship/calculator";

$route['Admin/edit-payment/(:any)'] = "Admin/Admin/payment_update_view/$1";
$route['Admin/shopnship-update-payment'] ="Admin/Admin/shopnship_update_payment";
$route['Admin/shopnship-delete-payment/(:any)'] ="Admin/Admin/shopnship_delete_payment/$1";

$route['Admin/assisted-edit-payment/(:any)'] = "Admin/Admin/assisted_payment_update_view/$1";
$route['Admin/assisted-update-payment'] = "Admin/Admin/assisted_update_payment";
$route['Admin/assisted-delete-payment/(:any)'] = "Admin/Admin/assisted_delete_payment/$1";

$route['Admin/international-edit-payment/(:any)'] = "Admin/Admin/international_payment_update_view/$1";
$route['Admin/international-update-payment'] = "Admin/Admin/international_update_payment";
$route['Admin/international-delete-payment/(:any)'] = "Admin/Admin/international_delete_payment/$1";

$route['Admin/international-edit-shipment/(:any)'] = "Admin/Admin/international_shipment_update_view/$1";
$route['Admin/international-update-shipment'] = "Admin/Admin/international_update_shipment";
$route['Admin/international-delete-shipment/(:any)'] = "Admin/Admin/international_delete_shipment/$1";


$route['Admin/assisted-edit-shipment/(:any)'] = "Admin/Admin/assisted_shipment_update_view/$1";
$route['Admin/assisted-update-shipment'] = "Admin/Admin/assisted_update_shipment";
$route['Admin/assisted-delete-shipment/(:any)'] = "Admin/Admin/assisted_delete_shipment/$1";

$route['Admin/shopnship-edit-shipment/(:any)'] = "Admin/Admin/shopnship_shipment_update_view/$1";
$route['Admin/shopnship-update-shipment'] ="Admin/Admin/shopnship_update_shipment";
$route['Admin/shopnship-delete-shipment/(:any)'] ="Admin/Admin/shopnship_delete_shipment/$1";

$route['user/update-status'] ="Admin/Admin/update_status";
$route['admin/update-user/(:any)'] = "Admin/Admin/update_users/$1";

$route['assisted-image-insert'] = "Admin/Admin/assisted_image_insert";
 