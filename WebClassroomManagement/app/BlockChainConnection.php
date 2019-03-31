<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

class BlockChainConnection
{
    static function getMethod($ip, $fixPath, $lastPath, $verify = false ) // http://localhost:3000/api/path
    {
        try {
            $client = new Client(['base_uri' => env($ip).$fixPath, 'verify' => $verify]);
            $res = $client->request('GET', $lastPath);
            $req = json_decode($res->getBody()->getContents(),true);
            return $req;
        } catch (ConnectException $exception) {
            return $exception->getResponse()->getBody()->getContents();
        }
    }

    static function postMethod($ip, $fixPath, $lastPath, $data, $verify = false )
    {
        try {
            $client = new Client(['base_uri' => env($ip).$fixPath, 'verify' => $verify]);
            $res = $client->request('POST', $lastPath,
                [
                    'json' => $data
                ]);
            $req = json_decode($res->getBody()->getContents(),true);
            return $req;
        } catch (ConnectException $exception) {
            dd(1);
            return $exception->getResponse()->getBody()->getContents();
        }
    }

}
