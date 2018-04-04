<?php

namespace App\Library\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Shipment
{
    public $token;
    public $shipment_api_url = "https://api.shipments.test-y-sbm.com";


    public function createToken()
    {
        $client = new Client();
        $result = $client->request(
            'POST',
            $this->shipment_api_url . '/login',
            ['headers' => [
                'Content-Type' => 'application/json'
            ],
                'body' => '{"email":"admin2@gmail.com", "password":"123"}'
            ]
        );
        $data = json_decode($result->getBody());
        $this->token = $token = $data->data[0]->token;
        session(['shipment_token' => $this->token]);
    }

    public function getShipments()
    {
        $this->createToken();
        $this->token = session('shipment_token');
        $client = new Client();
        $result = $client->request(
            'GET',
            $this->shipment_api_url . '/shipment',
            ['headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token]
            ]
        );
        $data = json_decode($result->getBody());
        return $data;
    }

    public function addShipment($id, $name)
    {
        $this->createToken();
        $this->token = session('shipment_token');
        $client = new Client();
        $result = $client->request(
            'POST',
            $this->shipment_api_url . '/shipment',
            ['headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token
            ],
                'body' => '{"id":"'.$id.'", "name":"'.$name.'"}'
            ]
        );
        return ;
    }
    public function showShipment($id)
    {
        $this->createToken();
        $this->token = session('shipment_token');
        $client = new Client();
        $result = $client->request(
            'GET',
            $this->shipment_api_url . '/shipment/'.$id,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
        $data = json_decode($result->getBody());
        return $data;
    }

}