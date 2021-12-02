<?php

namespace App\Http\Requests;

use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostPackage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
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
            'customer_name' => 'required|string',
            'customer_code' => 'required|string',
            'transaction_amount' => 'required|integer',
            'transaction_discount' => 'required|integer',
            'transaction_additional_field' => 'nullable',
            'transaction_payment_type' => 'required|integer',
            'transaction_state' => 'required|string',
            'transaction_code' => 'required|string',
            'transaction_order' => 'required|integer',
            'location_id' => 'required|string',
            'transaction_payment_type_name' => 'required|string',
            'transaction_cash_amount' => 'required|int',
            'transaction_cash_change' => 'required|int',
            'connote_id' => 'required|uuid',
            'custom_field' => 'nullable',
        ];
    }
}
