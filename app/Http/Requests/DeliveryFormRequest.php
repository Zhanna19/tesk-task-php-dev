<?php
/**
 *16.07.2024
 *
 * Zhanna Kolomiiets
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class DeliveryFormRequest extends FormRequest
{

    public function authorize() {
        return true;
    }

    /**
     * Customer files the form with appropriate data - the form contains all the data about package and customer
     * - width, height, length and weight
     * - name, phone number, mail and address
     *
     * If more fields need to be added to be validated put them bellow
     * Additionally might be:
     * - delivery cost
     * - delivery service (delivery provide)
     * - need to be paid during receiving
     * - fast delivery
     * - frangible content
     * - billing address
     *
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string'],
            'delivery_address' => ['required', 'string'],
            'package_wight' => ['required', 'numeric'],
            'package_height' => ['required', 'numeric'],
            'package_length' => ['required', 'numeric'],
            'package_width' => ['required', 'numeric']
        ];
    }
}
