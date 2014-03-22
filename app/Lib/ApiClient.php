<?php
namespace BVApp\Lib;

use Resty\Resty;

/**
 *
 */
class ApiClient extends Resty
{
    public function __construct(\Slim\Slim $app)
    {
        $opts = [
            'silence_fopen_warning' => true,
            'raise_fopen_exception' => true,
            'supports_patch' => true,
            'json_to_array' => true,
        ];

        parent::__construct($opts);

        $this->debug($app->config('resty.debug'));
        $this->setBaseUrl($app->config('myiga.api.base'));

        // log to App's monoglog instance
        $this->setLogger(function ($msg) use ($app) {
            if (!is_scalar($msg)) {
                $msg = json_encode($msg);
            }
            $app->log->addDebug("APICLIENT: {$msg}");
        });

        $this->app = $app;
    }


    public function sendRequest($url, $method = 'GET', $querydata = null, $headers = null, $options = null)
    {
        if (!$headers) {
            $headers = array();
        }
        $headers['Accept'] = "application/vnd.myiga.v1+json";
        $headers['Authorization'] = "Token " . $this->app->config('myiga.api.key');
        return parent::sendRequest($url, $method, $querydata, $headers, $options);
    }
}
