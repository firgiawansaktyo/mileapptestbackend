<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeletePackage;
use App\Http\Requests\GetPackage;
use App\Http\Requests\PatchPackage;
use App\Http\Requests\PostPackage;
use App\Http\Requests\PutPackage;
use Illuminate\Http\Request;
use App\Models\Package;
use function _\difference;

class PackageController extends Controller
{

    public function index(Request $request)
    {
        $packages = Package::all();
        return [
            "success" => true,
            "data" => $packages,
        ];
    }

    public function get(GetPackage $request, $id)
    {
        $package = Package::find($id);
        return [
            "success" => true,
            "data" => $package,
        ];
    }

    public function store(PostPackage $request)
    {
        $data = $request->all();
        Package::create($data);
        return [
            "success" => true,
            "message" => "Success create",
        ];
    }

    //UPDATE WHOLE MODEL
    public function put(PutPackage $request, $id)
    {

        $data = $request->only(Package::$attr);

        $requestAttr = array_keys($data);
        $unsetKey = difference(Package::$attr, $requestAttr);

        if (count($unsetKey) > 0) {
            Package::find($id)->unset($unsetKey);
        }

        Package::where("transaction_id", $id)->update($data, ['upsert' => false]);

        return [
            "success" => true,
            "message" => "Success update",
        ];

    }

    public function remove(DeletePackage $request, $id)
    {
        Package::destroy($id);
        return [
            "success" => true,
            "message" => "Success delete",
        ];
    }

    //UPDATE A PORTION OR A SINGLE ATTRIBUTE
    public function patch(PatchPackage $request, $id)
    {
        $data = $request->only(Package::$attr);
        Package::where("transaction_id", $id)->update($data, ['upsert' => false]);
        return [
            "success" => true,
            "message" => "Success patch",
        ];
    }
}
