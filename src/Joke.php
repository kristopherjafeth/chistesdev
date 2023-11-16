<?php

namespace Kristopher\Chistesdev;

use Exception;
use GuzzleHttp\Client;

class Joke
{
    protected $client;

    public function get(): string
    {
        $client = new Client();

        $res = $client->request('GET', 'https://backend-omega-seven.vercel.app/api/getjoke');

        if ($res->getStatusCode() !== 200) {
            throw new Exception("could not fetch joke");
        }

        $joke = json_decode($res->getBody());

        return $joke->joke;
    }
}


