<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\DataTransferObjects;

use App\Http\Requests\DeliveryFormRequest;

final class UkrPoshtaDTO
{

    public function __construct(
        public string $customer_name,
        public string $phone_number,
        public string $email,
        public string $date,
        public string $sender_address,
        public string $delivery_address)
    {

    }

    // For example - may be date should be added to the api call
    public function dataForRequest(DeliveryFormRequest $request): array {
        return [
            'customer_name' => $request->get('name'),
            'phone_number' => $request->get('phone'),
            'sender_address' => config('app.sender_address'),
            'delivery_address' => $request->get('delivery_address'),
            'email' => $request->get('email'),
            'date' => Date('Y-m-d'),
        ];
    }
}
