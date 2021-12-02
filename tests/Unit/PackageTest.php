<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\File;


class PackageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     **/
    public function getId()
    {
        $response = $this->json('get', '/api/package');
        $id = $response->decodeResponseJson()["data"]["0"]["transaction_id"];
        return $id;
    }

    public function testStorePackage()
    {
        $path = storage_path() . "/package-json/store.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('post', '/api/package', $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testGetAllPackage()
    {
        $response = $this->json('get', '/api/package');
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testGetDetailPackage()
    {
        $response = $this->json('get', '/api/package/' . $this->getId());
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testPutPackage()
    {
        $path = storage_path() . "/package-json/put.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('put', '/api/package/' . $this->getId(), $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testPatchPackage()
    {
        $path = storage_path() . "/package-json/patch.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('patch', '/api/package/' . $this->getId(), $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testDeletePackage()
    {
        $path = storage_path() . "/package-json/put.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('delete', '/api/package/' . $this->getId(), $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }
}
