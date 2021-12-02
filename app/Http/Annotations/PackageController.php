<?php

/**
 * @license Apache 2.0
 */

namespace PackageSchema\controllers;

/**
 * Class PackageSchema
 *
 * @package MileappApi\controllers
 *
 */
class PackageSchema
{
    /**
     * @OA\Post(
     *     path="/package",
     *     tags={"storePackage"},
     *     summary="Add a new package to the store",
     *     operationId="createPackage",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/PackageSchema"},
     * )
     */
    public function create()
    {
    }

        /**
     * @OA\Put(
     *     path="/package/{id}",
     *     tags={"putPackage"},
     *     summary="Update whole package",
     *     operationId="updatePackage",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="int64",
     *             example="1927b0f7-68e3-40a4-807d-a64eb671e5ed"
     *         )
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/PackageSchema"},
     * )
     */
    public function update()
    {
    }


        /**
     * @OA\Patch(
     *     path="/package/{id}",
     *     tags={"patchPackage"},
     *     summary="Update single or portion attributepackage",
     *     operationId="updatePatchPackage",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="int64",
     *             example="1927b0f7-68e3-40a4-807d-a64eb671e5ed"
     *         )
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/PackageSchema"},
     * )
     */
    public function updatePatch()
    {
    }

            /**
     * @OA\Delete(
     *     path="/package/{id}",
     *     tags={"deletePackage"},
     *     summary="Add a new package to the store",
     *     operationId="deletePackage",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="int64",
     *             example="1927b0f7-68e3-40a4-807d-a64eb671e5ed"
     *         )
     *     ),
     * )
     */
    public function delete()
    {
    }

    /**
     * @OA\Get(
     *      path="/package",
     *      operationId="getPackageList",
     *      tags={"getPackage"},
     *      summary="Get list of package",
     *      description="Returns list of package",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *     )
     *
     * Returns list of package
     */
    public function index()
    {
    }

    /**
     * @OA\Get(
     *      path="/package/{id}",
     *      operationId="getPackageById",
     *      tags={"getDetailPackage"},
     *      summary="Get package information",
     *      description="Returns package data",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Bad request",
     *          @OA\MediaType(
     *             mediaType="application/json",
     *          ),
     *      ),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             format="int64",
     *             example="1927b0f7-68e3-40a4-807d-a64eb671e5ed"
     *         )
     *     ),
     * )
     */
    public function get()
    {

    }

}
