<?php
defined('API_CHECK') OR define('API_CHECK', 'https://haveibeenpwned.com/api/breachedaccount/');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 8/4/18
 * Time: 16:24
 */
require_once 'vendor/autoload.php';
if (!function_exists('pwnedCheck')) {
    /**
     * check Pwnded with API
     *
     * @param string $email
     * @return mixed|string
     */
    function pwnedCheck($email = '')
    {
        $curl = new Curl\Curl();
        $curl->setOpt(CURLOPT_RETURNTRANSFER, TRUE);
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);
        $curl->setOpt(CURLOPT_ENCODING, "utf-8");
        $curl->setOpt(CURLOPT_MAXREDIRS, 10);
        $curl->setOpt(CURLOPT_TIMEOUT, 300);
        // Set Url Request
        $url = API_CHECK . $email;
        $curl->get($url);
        $result = $curl->error ? "Your email is Safely!" : json_decode($curl->response, true);
        $curl->close();
        return $result;
    }
}
