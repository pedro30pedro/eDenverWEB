<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


set_time_limit(60000);
ini_set('memory_limit', '-1');

class GuzzleController extends Controller
{
    public static function curl($url_feed)
    {
        $client = new Client([
            'verify' => false
        ]);
        
        try {

            $response = $client->get($url_feed);
        } catch (\Exception $e) {
            return false;
        }

        $data = json_decode($response->getBody(), true);
        return $data;
    }
}
