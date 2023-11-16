<?php
namespace Kristopher\Chistesdev;

use GuzzleHttp\Client;

class Joke
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getRandomJoke()
    {
        $response = $this->client->request('GET', 'https://backend-omega-seven.vercel.app/api/getjoke');

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value->joke;
    }
}





