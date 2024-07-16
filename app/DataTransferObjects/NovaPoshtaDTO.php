<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\DataTransferObjects;

use App\Http\Requests\DeliveryFormRequest;

final class NovaPoshtaDTO
{

    // Fields can be added/updated/deleted depend on the way endpoint expects
    // If we have new service just need to add new DTO description to handle data properly
    public function __construct(
        public string $customer_name,
        public string $phone_number,
        public string $email,
        public string $sender_address,
        public string $delivery_address)
    {

    }

    public static function dataForRequest(DeliveryFormRequest $request): array {
        return [
            'customer_name' => $request->get('name'),
            'phone_number' => $request->get('phone'),
            'sender_address' => config('app.sender_address'),
            'delivery_address' => $request->get('delivery_address'),
            'email' => $request->get('email'),
        ];
    }
}
