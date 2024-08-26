<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['facebook_app_id']                = '1666428657504851';
$config['facebook_app_secret']            = '8e6167fd2559f5ca4d2de2e9348ed0d6';
$config['facebook_login_redirect_url']    = 'Facebook_Authentication/login';
$config['facebook_logout_redirect_url']   = 'Facebook_Authentication/logout';
$config['facebook_login_type']            = 'web';
$config['facebook_permissions']           = array('email');
$config['facebook_graph_version']         = 'v5.x';
$config['facebook_auth_on_load']          = TRUE;
?>