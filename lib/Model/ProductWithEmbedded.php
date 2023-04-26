<?php
/**
 * ProductWithEmbedded
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
 * ProductWithEmbedded Class Doc Comment
 *
 * @category Class
 * @package  Cbdesk\Kauflandv2\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductWithEmbedded implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductWithEmbedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_product' => 'int',
'storefront' => '\Cbdesk\Kauflandv2\Api\Model\Storefront',
'title' => 'string',
'eans' => 'string[]',
'id_category' => 'int',
'main_picture' => 'string',
'manufacturer' => 'string',
'url' => 'string',
'age_rating' => 'double',
'is_valid' => 'bool',
'dangerous_goods_li_shipping' => 'string',
'danger_label_9_a' => 'string',
'category' => '\Cbdesk\Kauflandv2\Api\Model\Category',
'category_basic' => '\Cbdesk\Kauflandv2\Api\Model\CategoryBasic',
'units' => '\Cbdesk\Kauflandv2\Api\Model\ProductUnitEmbedded[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_product' => 'int64',
'storefront' => null,
'title' => null,
'eans' => null,
'id_category' => 'int64',
'main_picture' => null,
'manufacturer' => null,
'url' => null,
'age_rating' => 'double',
'is_valid' => null,
'dangerous_goods_li_shipping' => null,
'danger_label_9_a' => null,
'category' => null,
'category_basic' => null,
'units' => null    ];

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
        'id_product' => 'id_product',
'storefront' => 'storefront',
'title' => 'title',
'eans' => 'eans',
'id_category' => 'id_category',
'main_picture' => 'main_picture',
'manufacturer' => 'manufacturer',
'url' => 'url',
'age_rating' => 'age_rating',
'is_valid' => 'is_valid',
'dangerous_goods_li_shipping' => 'dangerous_goods_li_shipping',
'danger_label_9_a' => 'danger_label_9A',
'category' => 'category',
'category_basic' => 'category_basic',
'units' => 'units'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_product' => 'setIdProduct',
'storefront' => 'setStorefront',
'title' => 'setTitle',
'eans' => 'setEans',
'id_category' => 'setIdCategory',
'main_picture' => 'setMainPicture',
'manufacturer' => 'setManufacturer',
'url' => 'setUrl',
'age_rating' => 'setAgeRating',
'is_valid' => 'setIsValid',
'dangerous_goods_li_shipping' => 'setDangerousGoodsLiShipping',
'danger_label_9_a' => 'setDangerLabel9A',
'category' => 'setCategory',
'category_basic' => 'setCategoryBasic',
'units' => 'setUnits'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_product' => 'getIdProduct',
'storefront' => 'getStorefront',
'title' => 'getTitle',
'eans' => 'getEans',
'id_category' => 'getIdCategory',
'main_picture' => 'getMainPicture',
'manufacturer' => 'getManufacturer',
'url' => 'getUrl',
'age_rating' => 'getAgeRating',
'is_valid' => 'getIsValid',
'dangerous_goods_li_shipping' => 'getDangerousGoodsLiShipping',
'danger_label_9_a' => 'getDangerLabel9A',
'category' => 'getCategory',
'category_basic' => 'getCategoryBasic',
'units' => 'getUnits'    ];

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
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['storefront'] = isset($data['storefront']) ? $data['storefront'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['eans'] = isset($data['eans']) ? $data['eans'] : null;
        $this->container['id_category'] = isset($data['id_category']) ? $data['id_category'] : null;
        $this->container['main_picture'] = isset($data['main_picture']) ? $data['main_picture'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['age_rating'] = isset($data['age_rating']) ? $data['age_rating'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['dangerous_goods_li_shipping'] = isset($data['dangerous_goods_li_shipping']) ? $data['dangerous_goods_li_shipping'] : null;
        $this->container['danger_label_9_a'] = isset($data['danger_label_9_a']) ? $data['danger_label_9_a'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_basic'] = isset($data['category_basic']) ? $data['category_basic'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_product'] === null) {
            $invalidProperties[] = "'id_product' can't be null";
        }
        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['eans'] === null) {
            $invalidProperties[] = "'eans' can't be null";
        }
        if ($this->container['id_category'] === null) {
            $invalidProperties[] = "'id_category' can't be null";
        }
        if ($this->container['main_picture'] === null) {
            $invalidProperties[] = "'main_picture' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['age_rating'] === null) {
            $invalidProperties[] = "'age_rating' can't be null";
        }
        if ($this->container['is_valid'] === null) {
            $invalidProperties[] = "'is_valid' can't be null";
        }
        if ($this->container['dangerous_goods_li_shipping'] === null) {
            $invalidProperties[] = "'dangerous_goods_li_shipping' can't be null";
        }
        if ($this->container['danger_label_9_a'] === null) {
            $invalidProperties[] = "'danger_label_9_a' can't be null";
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
     * Gets id_product
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     *
     * @param int $id_product id_product
     *
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return \Cbdesk\Kauflandv2\Api\Model\Storefront
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param \Cbdesk\Kauflandv2\Api\Model\Storefront $storefront storefront
     *
     * @return $this
     */
    public function setStorefront($storefront)
    {
        $this->container['storefront'] = $storefront;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets eans
     *
     * @return string[]
     */
    public function getEans()
    {
        return $this->container['eans'];
    }

    /**
     * Sets eans
     *
     * @param string[] $eans eans
     *
     * @return $this
     */
    public function setEans($eans)
    {
        $this->container['eans'] = $eans;

        return $this;
    }

    /**
     * Gets id_category
     *
     * @return int
     */
    public function getIdCategory()
    {
        return $this->container['id_category'];
    }

    /**
     * Sets id_category
     *
     * @param int $id_category id_category
     *
     * @return $this
     */
    public function setIdCategory($id_category)
    {
        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets main_picture
     *
     * @return string
     */
    public function getMainPicture()
    {
        return $this->container['main_picture'];
    }

    /**
     * Sets main_picture
     *
     * @param string $main_picture main_picture
     *
     * @return $this
     */
    public function setMainPicture($main_picture)
    {
        $this->container['main_picture'] = $main_picture;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

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
     * Gets age_rating
     *
     * @return double
     */
    public function getAgeRating()
    {
        return $this->container['age_rating'];
    }

    /**
     * Sets age_rating
     *
     * @param double $age_rating age_rating
     *
     * @return $this
     */
    public function setAgeRating($age_rating)
    {
        $this->container['age_rating'] = $age_rating;

        return $this;
    }

    /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid is_valid
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets dangerous_goods_li_shipping
     *
     * @return string
     */
    public function getDangerousGoodsLiShipping()
    {
        return $this->container['dangerous_goods_li_shipping'];
    }

    /**
     * Sets dangerous_goods_li_shipping
     *
     * @param string $dangerous_goods_li_shipping dangerous_goods_li_shipping
     *
     * @return $this
     */
    public function setDangerousGoodsLiShipping($dangerous_goods_li_shipping)
    {
        $this->container['dangerous_goods_li_shipping'] = $dangerous_goods_li_shipping;

        return $this;
    }

    /**
     * Gets danger_label_9_a
     *
     * @return string
     */
    public function getDangerLabel9A()
    {
        return $this->container['danger_label_9_a'];
    }

    /**
     * Sets danger_label_9_a
     *
     * @param string $danger_label_9_a danger_label_9_a
     *
     * @return $this
     */
    public function setDangerLabel9A($danger_label_9_a)
    {
        $this->container['danger_label_9_a'] = $danger_label_9_a;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Cbdesk\Kauflandv2\Api\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Cbdesk\Kauflandv2\Api\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_basic
     *
     * @return \Cbdesk\Kauflandv2\Api\Model\CategoryBasic
     */
    public function getCategoryBasic()
    {
        return $this->container['category_basic'];
    }

    /**
     * Sets category_basic
     *
     * @param \Cbdesk\Kauflandv2\Api\Model\CategoryBasic $category_basic category_basic
     *
     * @return $this
     */
    public function setCategoryBasic($category_basic)
    {
        $this->container['category_basic'] = $category_basic;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \Cbdesk\Kauflandv2\Api\Model\ProductUnitEmbedded[]
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \Cbdesk\Kauflandv2\Api\Model\ProductUnitEmbedded[] $units units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

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
