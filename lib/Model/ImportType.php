<?php
/**
 * ImportType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * OpenAPI spec version: 2.9.1
 * Contact: seller-api-support@kaufland-online.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Cbdesk\Kauflandv2\Api\Model;
use \Cbdesk\Kauflandv2\Api\ObjectSerializer;

/**
 * ImportType Class Doc Comment
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportType
{
    /**
     * Possible values of this enum
     */
    const INVENTORY_FEED = 'INVENTORY_FEED';
const INVENTORY_COMMAND = 'INVENTORY_COMMAND';
const ORDER_COMMAND = 'ORDER_COMMAND';
const PRODUCT_FEED = 'PRODUCT_FEED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVENTORY_FEED,
self::INVENTORY_COMMAND,
self::ORDER_COMMAND,
self::PRODUCT_FEED,        ];
    }
}
