<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePickupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pickup_type' => "required",
            "customer_name" => "required",
            "mobile_number" => "required",
            "business_number" => "required",
            "home_number" => "required",
            "email" => "required",
            "device_type" => "required",
            "device_model" => "required",
            'estimate_price' => "required",
            "device_fault" => "required",
            "device_pickup_address" => "required",
            "pickup_country_state" => "required",
            "delivery_address" => "required",
            "delivery_country_state" => "required",
            "pickup_date" => "required",
            "delivery_date" => "required",
            "messenger" => "required",
            "comments" => "required"
        ];
    }
}
