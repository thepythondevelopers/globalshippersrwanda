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
$route['default_controller'] = 'Home/homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Home/login';
$route['profile'] = 'Home/profile';
$route['dashboard'] = 'Home/dashboard';
$route['users/signup'] = "Home/signup_insert";
$route['users/login']  = "Home/user_login";
$route['shopnship-create-order'] = 'Home/shopnship_create_order';
$route['users/shopnship-order-details/(:any)'] = 'Shopnship/shopnship_order_details/$1';
$route['terms'] = "Home/terms";
$route['privacy'] = "Home/privacy";
$route['users/shopnship-order-details/(:any)/(:any)'] = 'Shopnship/shopnship_order_details/$1/$2';
$route['users/address'] ="Shopnship/dashboard_address_book";
$route['users/change-password'] = "Home/change_pass";
// $route['users/forgot'] = "Home/forgot";
$route['users/forgot'] = "Forgotpassword/forgot";
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
$route['testmail'] = 'Home/testmail';

$route['users/assisted-order-details/(:any)'] = 'Shopnship/assisted_order_details/$1';
$route['users/assisted-order-details/(:any)/(:any)'] = 'Shopnship/assisted_order_details/$1/$2';

$route['users/international-order-details/(:any)'] = 'Shopnship/international_order_details/$1';
$route['users/international-order-details/(:any)/(:any)'] = 'Shopnship/international_order_details/$1/$2';

$route['assisted-create-order'] = 'Home/assisted_create_order';
$route['send-email'] = 'Home/sendEmail';
$route['membership'] = 'Home/membership';
$route['shipping-calculator'] = 'Home/shippingcalculator';
$route['shipping-calc'] = 'Home/shipcalc';
$route['restrictions'] = 'Home/restrictions';
$route['help-centre'] = 'Home/helpcentre';
$route['faq'] = 'Home/faq';
$route['blog'] = 'Home/blog';
$route['consolidation'] = 'Home/consolidation';
$route['how-it-works'] = 'Home/howitworks';
$route['about-us'] = 'Home/aboutus';
$route['notifications'] = 'Home/notifications';
$route['home'] = 'Home/homepage';
$route['insert_data'] = 'Shopnship/insert_data';
$route['customer/international-product'] = "Shopnship/international_update_product";

$route['user/shopnshippdf/(:any)/(:any)'] = "Shopnship/shopnshippdf/$1/$2";
$route['user/assistedpdf/(:any)/(:any)'] = "Shopnship/assistedpdf/$1/$2";
$route['user/internationalshipmentpdf/(:any)/(:any)'] = "Shopnship/internationalshipmentpdf/$1/$2";
$route['user/shopnship-invoice/(:any)/(:any)']  = "Shopnship/shopnship_invoice/$1/$2";
$route['user/assisted-invoice/(:any)/(:any)']  = "Shopnship/assisted_invoice/$1/$2";
$route['user/international-invoice/(:any)/(:any)']  = "Shopnship/international_invoice/$1/$2";

$route['my-stripe/(:any)'] = "StripeController/index/$1";
$route['payment-success'] = "StripeController/payment_success";
$route['update-card/(:any)'] = "StripeController/update_card_view/$1";
$route['update-payment'] = "StripeController/update_payment";
$route['payment']['post'] = "StripeController/payment";
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
$route['admin/automate-consolidate-shipments'] = "Admin/Admin/automate_shopnship";
$route['admin/add-consolidate-shipments'] = "Admin/Admin/add_automate_shopnship";
$route['admin/insert-consolidate-shipments'] = "Admin/Admin/insert_automate_shopnship";
$route['pickup-shipments/(:any)'] = "Admin/Admin/update_pickup_shipment/$1";
$route['admin/create-user'] = "Admin/Admin/user_details";
$route['user-list'] = "Admin/Admin/user_listing";
$route['order/shopnship'] = "Admin/Admin/shopnship_order_listing";
$route['order/shopnship/(:any)'] = "Admin/Admin/shopnship_listing/$1";
$route['order/assisted/(:any)'] = "Admin/Admin/assisted_listing/$1";
$route['order/assisted'] = "Admin/Admin/assisted_order_listing";
$route['order/international/(:any)'] = "Admin/Admin/international_listing/$1";
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
$route['Admin/edit-consolidate-shipment/(:any)'] = "Admin/Admin/edit_consolidate_item/$1";
$route['assisted-update-order-status'] = "Admin/Admin/assisted_update_order_status";
$route['international-update-order-status'] = "Admin/Admin/international_update_order_status";
$route['card-details/(:any)'] = "StripeController/card_detail/$1";
$route['delete-card/(:any)']  = "StripeController/delete_card/$1";
$route['update_stripePost'] = "StripeController/update_stripePost";

$route['Admin/notifications'] = "Admin/Admin/notifications";
$route['Admin/delete_notification'] ="Admin/Admin/delete_notification";
$route['Admin/delete_all_notification'] = "Admin/Admin/delete_all_notification";
$route['Admin/update-address'] = "Admin/Admin/update_address";
$route['Admin/edit-buy-for-me/(:any)'] = "Admin/Admin/edit_buy_for_me_item/$1";
$route['admin/notifications'] = "Admin/Admin/notifications";
$route['calculator'] = "Shopnship/calculator";

$route['Admin/edit-payment/(:any)/(:any)'] = "Admin/Admin/payment_update_view/$1/$2";
$route['Admin/shopnship-update-payment'] ="Admin/Admin/shopnship_update_payment";
$route['Admin/shopnship-delete-payment/(:any)/(:any)'] ="Admin/Admin/shopnship_delete_payment/$1/$2";

$route['Admin/assisted-edit-payment/(:any)/(:any)'] = "Admin/Admin/assisted_payment_update_view/$1/$2";
$route['Admin/assisted-update-payment'] = "Admin/Admin/assisted_update_payment";
$route['Admin/assisted-delete-payment/(:any)/(:any)'] = "Admin/Admin/assisted_delete_payment/$1/$2";

$route['Admin/international-edit-payment/(:any)/(:any)'] = "Admin/Admin/international_payment_update_view/$1/$2";
$route['Admin/international-update-payment'] = "Admin/Admin/international_update_payment";
$route['Admin/international-delete-payment/(:any)/(:any)'] = "Admin/Admin/international_delete_payment/$1/$2";

$route['Admin/international-edit-shipment/(:any)/(:any)'] = "Admin/Admin/international_shipment_update_view/$1/$2";
$route['Admin/international-update-shipment'] = "Admin/Admin/international_update_shipment";
$route['Admin/international-delete-shipment/(:any)/(:any)'] = "Admin/Admin/international_delete_shipment/$1/$2";


$route['Admin/assisted-edit-shipment/(:any)/(:any)'] = "Admin/Admin/assisted_shipment_update_view/$1/$2";
$route['Admin/assisted-update-shipment'] = "Admin/Admin/assisted_update_shipment";
$route['Admin/assisted-delete-shipment/(:any)/(:any)'] = "Admin/Admin/assisted_delete_shipment/$1/$2";

$route['Admin/shopnship-edit-shipment/(:any)/(:any)'] = "Admin/Admin/shopnship_shipment_update_view/$1/$2";
$route['Admin/shopnship-update-shipment'] ="Admin/Admin/shopnship_update_shipment";
$route['Admin/shopnship-delete-shipment/(:any)/(:any)'] ="Admin/Admin/shopnship_delete_shipment/$1/$2";

$route['user/update-status'] ="Admin/Admin/update_status";
$route['admin/update-user/(:any)'] = "Admin/Admin/update_users/$1";

$route['assisted-image-insert'] = "Admin/Admin/assisted_image_insert";
$route['shopnship-image-insert'] = "Admin/Admin/shopnship_image_insert";

$route['admin/shopnship-pdf/(:any)/(:any)'] = "Admin/Admin/shopnship_pdf/$1/$2";
$route['admin/assisted-pdf/(:any)/(:any)']  = "Admin/Admin/assisted_pdf/$1/$2";

$route['admin/shopnship-invoice/(:any)/(:any)'] = "Admin/Admin/shopnship_invoice/$1/$2";
$route['admin/assisted-invoice/(:any)/(:any)']  = "Admin/Admin/assisted_invoice/$1/$2";

// Admin Routes for CMS Pages
$route['cms/how-it-works'] = "Admin/Admin/how_it_works"; 
$route['cms/homepage'] = "Admin/Admin/homepage"; 
$route['cms/about-us'] = "Admin/Admin/about_us"; 
$route['cms/restrictions'] = "Admin/Admin/restrictions";   
$route['cms/help-centre'] = "Admin/Admin/help_centre"; 
$route['cms/faq'] = "Admin/Admin/faq"; 
$route['cms/blog'] = "Admin/Admin/blog"; 
$route['cms/consolidation'] = "Admin/Admin/consolidation"; 
$route['get-admin-address'] = "Admin/Admin/getadminaddress"; 
$route['admin-panel'] = "myadmin/DashboardController/index";
$route['cms/restriction-section2']  = "Admin/Admin/restriction_section2";
$route['cms/restriction-section1']  = "Admin/Admin/restriction_section1";
$route['cms/shipping-cal'] = "Admin/Admin/shippingcal";
$route['cms/contact-us'] = "Admin/Admin/contactus";



/*blog articles */
$route['blog/article/(:any)'] = "Articles/Articles/$1";
$route['blog/articles/(:any)'] = "Articles/Articles/blogdetailpage/$1";

/*helpcentre */
$route['help-centre/details/(:any)/(:any)'] = "Articles/Articles/helpcentredetails/$1/$2";
$route['help-centre/(:any)'] = "Articles/Articles/helpcentre/$1";

$route['editor'] = "Pagedata/index";
$route['Admin/edit-mail'] ="Admin/Admin/editmailview";
$route['Admin/admin-update-email'] ="Admin/Admin/adminupdateemail";
$route['cms/help-centre-listing'] = "Admin/Admin/helpcentrelisting";
$route['cms/edit-help-centre/(:any)'] ="Admin/Admin/edit_helpcentre/$1";
$route['cms/update-help-centre'] ="Admin/Admin/updatehelpcentre";
$route['cms/delete-help-centre/(:any)'] ="Admin/Admin/delete_helpcentre/$1";
$route['cms/blog-list'] = "Admin/Admin/bloglisting";
$route['cms/delete-blog/(:any)'] ="Admin/Admin/delete_blog/$1";
$route['cms/edit-blog/(:any)'] ="Admin/Admin/edit_blog/$1";
$route['blog/(:any)'] = "Articles/Articles/blog/$1";
$route['cms/shipping'] = "Admin/Admin/shipping";
$route['admin/user-email'] ="Admin/Admin/useremaillogin";
$route['cms/how-it-works-list'] = "Admin/Admin/how_it_works_listing";
$route['cms/edit-how-it-works/(:any)'] = "Admin/Admin/howitworksupdatesec2/$1";
$route['cms/delete-how-it-works/(:any)'] = "Admin/Admin/delete_howitworks_sec2/$1";
$route['cms/faq-edit/(:any)'] = "Admin/Admin/faqedit/$1"; 
$route['cms/faq-listing'] = "Admin/Admin/faq_list";
$route['cms/faq-delete/(:any)'] = "Admin/Admin/delete_faq/$1";
$route['cms/restrictions-listing'] = "Admin/Admin/restrictions_list";
$route['cms/edit-restriction/(:any)'] = "Admin/Admin/editrestrictionsec2/$1";
$route['cms/delete-restriction/(:any)'] = "Admin/Admin/delete_restrictionsec2/$1";
$route['cms/aboutus-sec-4-listing'] = "Admin/Admin/aboutsec4";
$route['cms/aboutus-sec4-edit/(:any)'] = "Admin/Admin/updateaboutsec4/$1";
$route['cms/aboutus-sec4-delete/(:any)'] = "Admin/Admin/delete_aboutus_sec4/$1";
$route['cms/edit-consolidation/(:any)'] ="Admin/Admin/consolidationupdatesec2view/$1";
$route['cms/delete-consolidation/(:any)'] ="Admin/Admin/delete_consolidation_sec2/$1";
$route['cms/consolidation-listing'] ="Admin/Admin/consolidation_listing";
$route['cms/consolidation-faq-edit/(:any)'] = "Admin/Admin/consolidationupdatesec4view/$1";
$route['cms/consolidation-faq-delete/(:any)'] = "Admin/Admin/delete_consolidation_faq/$1";


$route['signup-testing'] = 'Googlelogin/testing';
$route['Googlelogin/googlelogin'] = 'Googlelogin/callback';