<?php
/**
 * ReturnUnitStatus
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
 * ReturnUnitStatus Class Doc Comment
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnUnitStatus
{
    /**
     * Possible values of this enum
     */
    const NEED_TO_BE_RETURNED = 'need_to_be_returned';
const RETURN_ARRIVED = 'return_arrived';
const RETURN_ACCEPTED = 'return_accepted';
const RETURN_REJECTED = 'return_rejected';
const RETURN_CLOSED = 'return_closed';
const RETURN_IN_REPAIR = 'return_in_repair';
const RETURN_IN_CLARIFICATION = 'return_in_clarification';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEED_TO_BE_RETURNED,
self::RETURN_ARRIVED,
self::RETURN_ACCEPTED,
self::RETURN_REJECTED,
self::RETURN_CLOSED,
self::RETURN_IN_REPAIR,
self::RETURN_IN_CLARIFICATION,        ];
    }
}
