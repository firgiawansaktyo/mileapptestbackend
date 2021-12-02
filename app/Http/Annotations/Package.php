<?php

/**
 * @license Apache 2.0
 */

namespace PackageSchema;

/**
 * Class PackageSchema
 *
 * @packageSchema PackageSchema
 *
 *
 * @OA\Schema(
 *     description="Package model",
 *     title="Package model",
 *     @OA\Xml(
 *         name="Package"
 *     )
 * )
 */
class PackageSchema
{

    /**
     * @OA\Property(
     *     format="string",
     *     description="transaction_id",
     *     title="transaction_id",
     * )
     *
     * @var string
     */
    private $transaction_id;

    /**
     * @OA\Property(
     *     format="string",
     *     description="customer_name",
     *     title="customer_name",
     * )
     *
     * @var string
     */
    private $customer_name;

    /**
     * @OA\Property(
     *     format="string",
     *     description="customer_code",
     *     title="customer_code",
     * )
     *
     * @var string
     */
    private $customer_code;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="transaction_amount",
     *     title="transaction_amount",
     * )
     *
     * @var integer
     */
    private $transaction_amount;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="transaction_discount",
     *     title="transaction_discount",
     * )
     *
     * @var integer
     */
    private $transaction_discount;

    /**
     * @OA\Property(
     *     format="nullable",
     *     description="transaction_additional_field",
     *     title="transaction_additional_field",
     * )
     *
     * @var object
     */
    private $transaction_additional_field;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="transaction_payment_type",
     *     title="transaction_payment_type",
     * )
     *
     * @var integer
     */
    private $transaction_payment_type;

    /**
     * @OA\Property(
     *     format="string",
     *     description="transaction_state",
     *     title="transaction_state",
     * )
     *
     * @var string
     */
    private $transaction_state;

    /**
     * @OA\Property(
     *     format="string",
     *     description="transaction_code",
     *     title="transaction_code",
     * )
     *
     * @var string
     */
    private $transaction_code;

    /**
     * @OA\Property(
     *     format="string",
     *     description="transaction_order",
     *     title="transaction_order",
     * )
     *
     * @var string
     */
    private $transaction_order;

    /**
     * @OA\Property(
     *     format="string",
     *     description="location_id",
     *     title="location_id",
     * )
     *
     * @var string
     */
    private $location_id;

    /**
     * @OA\Property(
     *     format="string",
     *     description="transaction_payment_type_name",
     *     title="transaction_payment_type_name",
     * )
     *
     * @var string
     */
    private $transaction_payment_type_name;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="transaction_cash_amount",
     *     title="transaction_cash_amount",
     * )
     *
     * @var integer
     */
    private $transaction_cash_amount;

    /**
     * @OA\Property(
     *     format="int64",
     *     description="transaction_cash_change",
     *     title="transaction_cash_change",
     * )
     *
     * @var integer
     */
    private $transaction_cash_change;

    /**
     * @OA\Property(
     *     format="string",
     *     description="connote_id",
     *     title="connote_id",
     * )
     *
     * @var integer
     */
    private $connote_id;

    /**
     * @OA\Property(
     *     format="nullable",
     *     description="custom_field",
     *     title="custom_field",
     * )
     *
     * @var object
     */
    private $custom_field;

}
