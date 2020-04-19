<?php

namespace App\Util;

use GuzzleHttp\Client;

class  FireIce {
    protected $client;
    protected  $baseUrl;
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->baseUrl = "https://www.anapioficeandfire.com/api";
    }

    public function all()
    {
        return $this->endpointRequest('/books');
    }

    public function findById($id)
    {
        return $this->endpointRequest("/books/$id");
    }

    public function endpointRequest($url)
    {
        try {
            $response = $this->client->request('GET', $this->baseUrl.$url);
        } catch (\Exception $e) {
            return [];
        }

        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {
        if ($response) {
            return response()->json([ 'status_code'=>200 , 'data' => json_decode($response),], 200);
        }
        return [];
    }

    public function responseHandlerBook($response, $responseType, $statusMessage)
    {
        if ($response) {
            return response()->json([ 'status' => $statusMessage, 'status_code'=>$responseType , 'data' => $response]);
        }
        return [];
    }
}