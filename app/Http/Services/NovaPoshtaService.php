<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\Http\Services;

use App\DataTransferObjects\NovaPoshtaDTO;
use GuzzleHttp\Client;

use http\Env\Request;

use function Laravel\Prompts\error;

final class NovaPoshtaService implements DeliveryServiceInterface
{

    private string $api_url;

    public function __construct()
    {
        $this->api_url = $this->getApiUrl();
    }

    public function sendData($data) : array
    {
        $preparedData = NovaPoshtaDTO::dataForRequest($data);

        $client = $this->getHTTPClient();

        $uri = $this->getRequestUri();

        $response = $client->request('POST', $uri, $preparedData);

        if($response) {
            // Return some information about package
            return [
                'package_id' =>  '',
                'delivery_date' => ''
            ];
        } else {
            throw new \ErrorException('Something went wrong, try later');
        }

        return [];

    }

    //May be from the config file
    // Or from the configuration on the front end
    // Or from the file with api endpoints
    // For the purposes of the test tack - written in the function
    private function getApiUrl() : string
    {
        return 'someUrl';
    }

    // Hardcoded due to the test task purposes
    private function getRequestUri() :string
    {
        return 'novaposhta.test/api/delivery';
    }

    // Get HTTP Client

    private function getHTTPClient() : Client
    {
        return new Client([
            'base_url' => $this->api_url,
            'verify' => true,
            'timeout' => 10
        ]);
    }

    // Later for father development
    // above methods can be moved to the separate file to be reused be different providers

}
