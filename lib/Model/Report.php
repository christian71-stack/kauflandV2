<?php
/**
 * Report
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

use \ArrayAccess;
use \Cbdesk\Kauflandv2\Api\ObjectSerializer;

/**
 * Report Class Doc Comment
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Report implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_report' => 'int',
'status' => 'string',
'date_requested' => 'string',
'url' => 'string',
'report_name' => 'string',
'storefront' => 'string',
'parameters' => '\Cbdesk\Kauflandv2\Api\Model\ReportParameterValue[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_report' => 'int64',
'status' => null,
'date_requested' => null,
'url' => null,
'report_name' => null,
'storefront' => null,
'parameters' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_report' => 'id_report',
'status' => 'status',
'date_requested' => 'date_requested',
'url' => 'url',
'report_name' => 'report_name',
'storefront' => 'storefront',
'parameters' => 'parameters'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_report' => 'setIdReport',
'status' => 'setStatus',
'date_requested' => 'setDateRequested',
'url' => 'setUrl',
'report_name' => 'setReportName',
'storefront' => 'setStorefront',
'parameters' => 'setParameters'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_report' => 'getIdReport',
'status' => 'getStatus',
'date_requested' => 'getDateRequested',
'url' => 'getUrl',
'report_name' => 'getReportName',
'storefront' => 'getStorefront',
'parameters' => 'getParameters'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_report'] = isset($data['id_report']) ? $data['id_report'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_requested'] = isset($data['date_requested']) ? $data['date_requested'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['storefront'] = isset($data['storefront']) ? $data['storefront'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_report'] === null) {
            $invalidProperties[] = "'id_report' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['date_requested'] === null) {
            $invalidProperties[] = "'date_requested' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['report_name'] === null) {
            $invalidProperties[] = "'report_name' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id_report
     *
     * @return int
     */
    public function getIdReport()
    {
        return $this->container['id_report'];
    }

    /**
     * Sets id_report
     *
     * @param int $id_report id_report
     *
     * @return $this
     */
    public function setIdReport($id_report)
    {
        $this->container['id_report'] = $id_report;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_requested
     *
     * @return string
     */
    public function getDateRequested()
    {
        return $this->container['date_requested'];
    }

    /**
     * Sets date_requested
     *
     * @param string $date_requested date_requested
     *
     * @return $this
     */
    public function setDateRequested($date_requested)
    {
        $this->container['date_requested'] = $date_requested;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string $report_name report_name
     *
     * @return $this
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return string
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param string $storefront storefront
     *
     * @return $this
     */
    public function setStorefront($storefront)
    {
        $this->container['storefront'] = $storefront;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Cbdesk\Kauflandv2\Api\Model\ReportParameterValue[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Cbdesk\Kauflandv2\Api\Model\ReportParameterValue[] $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
