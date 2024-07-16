<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryFormRequest;
use App\Http\Services\DeliveryService;
use App\Http\Services\DeliveryServiceInterface;
use App\Http\Services\NovaPoshtaService;
use PHPUnit\Runner\ErrorException;

class DeliveryController extends Controller
{

    public function __construct(public DeliveryServiceInterface $service)
    {

    }
    /**
     * Presumably we are having a form on the front and - DeliveryFormRequest will validate fields before we
     * send the request to the delivery service
     * More about additional fields in the DeliveryFormRequest class
     */
    public function sendDeliveryData(DeliveryFormRequest $request)
    {
        // If validation successful we send the quest data  to the appropriate delivery service

        try {

            // if for now we have only one service - we can use simple version of DI pattern
            $sendData = new DeliveryService(new NovaPoshtaService);
            return $sendData->sendData($request);


            // But for handling dependencies Laravel Container can be used
            // then in AppServiceProvider we can resolve dependencies
            return $this->service->sendData($request);

        } catch (\Exception $exception) {
            // Handle exception
            // Can be added more custom exceptions
            throw new ErrorException('Something went wrong, try later');
        }
    }
}
