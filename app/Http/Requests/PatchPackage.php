<?php

namespace App\Http\Requests;

use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PatchPackage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $transactions_id = $request->id;

        $package = Package::find($transactions_id);

        if (!$package) {
            abort(422, 'Package not exist.');
            return false;
        }

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
            'customer_name' => 'nullable|string',
            'customer_code' => 'nullable|string',
            'transaction_amount' => 'nullable|integer',
            'transaction_discount' => 'nullable|integer',
            'transaction_additional_field' => 'nullable',
            'transaction_payment_type' => 'nullable|integer',
            'transaction_state' => 'nullable|string',
            'transaction_code' => 'nullable|string',
            'transaction_order' => 'nullable|integer',
            'location_id' => 'nullable|string',
            'transaction_payment_type_name' => 'nullable|string',
            'transaction_cash_amount' => 'nullable|int',
            'transaction_cash_change' => 'nullable|int',
            'connote_id' => 'nullable|uuid',
            'custom_field' => 'nullable',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email address',
        ];
    }

}
