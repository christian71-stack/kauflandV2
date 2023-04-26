<?php
/**
 * TicketStatus
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
 * TicketStatus Class Doc Comment
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TicketStatus
{
    /**
     * Possible values of this enum
     */
    const OPENED = 'opened';
const BUYER_CLOSED = 'buyer_closed';
const SELLER_CLOSED = 'seller_closed';
const BOTH_CLOSED = 'both_closed';
const CUSTOMER_SERVICE_CLOSED_FINAL = 'customer_service_closed_final';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPENED,
self::BUYER_CLOSED,
self::SELLER_CLOSED,
self::BOTH_CLOSED,
self::CUSTOMER_SERVICE_CLOSED_FINAL,        ];
    }
}
