<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\Http\Services;

class DeliveryService implements DeliveryServiceInterface
{

    public function __construct(public DeliveryServiceInterface $service)
    {

    }

    public function sendData($data)
    {
        return $this->service->sendData($data);
    }
}
