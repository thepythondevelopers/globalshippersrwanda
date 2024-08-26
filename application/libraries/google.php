<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/mydata/vendor/autoload.php';

class Google {

    protected $client;

    public function __construct() {
        $this->client = new Google_Client();
        $CI = &get_instance();
        $this->client->setClientId($CI->config->item('google_client_id'));
        $this->client->setClientSecret($CI->config->item('google_client_secret'));
        $this->client->setRedirectUri($CI->config->item('google_redirect_uri'));
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function getClient() {
        return $this->client;
    }
}
?>