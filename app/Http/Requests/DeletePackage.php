<?php

namespace App\Http\Requests;

use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class DeletePackage extends FormRequest
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

    public function rules()
    {
        return [ ];
    }

}
