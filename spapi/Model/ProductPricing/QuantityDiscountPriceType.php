<?php
/**
 * QuantityDiscountPriceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\ProductPricing;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * QuantityDiscountPriceType Class Doc Comment
 *
 * @category Class
 * @description Contains pricing information that includes special pricing when buying in bulk.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuantityDiscountPriceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuantityDiscountPriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity_tier' => 'int',
'quantity_discount_type' => '\Popsicle\Amazon\Model\ProductPricing\QuantityDiscountType',
'price' => '\Popsicle\Amazon\Model\ProductPricing\MoneyType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity_tier' => 'int32',
'quantity_discount_type' => null,
'price' => null    ];

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
        'quantity_tier' => 'quantityTier',
'quantity_discount_type' => 'quantityDiscountType',
'price' => 'price'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity_tier' => 'setQuantityTier',
'quantity_discount_type' => 'setQuantityDiscountType',
'price' => 'setPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity_tier' => 'getQuantityTier',
'quantity_discount_type' => 'getQuantityDiscountType',
'price' => 'getPrice'    ];

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
        $this->container['quantity_tier'] = isset($data['quantity_tier']) ? $data['quantity_tier'] : null;
        $this->container['quantity_discount_type'] = isset($data['quantity_discount_type']) ? $data['quantity_discount_type'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quantity_tier'] === null) {
            $invalidProperties[] = "'quantity_tier' can't be null";
        }
        if ($this->container['quantity_discount_type'] === null) {
            $invalidProperties[] = "'quantity_discount_type' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets quantity_tier
     *
     * @return int
     */
    public function getQuantityTier()
    {
        return $this->container['quantity_tier'];
    }

    /**
     * Sets quantity_tier
     *
     * @param int $quantity_tier Indicates at what quantity this price becomes active.
     *
     * @return $this
     */
    public function setQuantityTier($quantity_tier)
    {
        $this->container['quantity_tier'] = $quantity_tier;

        return $this;
    }

    /**
     * Gets quantity_discount_type
     *
     * @return \Popsicle\Amazon\Model\ProductPricing\QuantityDiscountType
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantity_discount_type'];
    }

    /**
     * Sets quantity_discount_type
     *
     * @param \Popsicle\Amazon\Model\ProductPricing\QuantityDiscountType $quantity_discount_type quantity_discount_type
     *
     * @return $this
     */
    public function setQuantityDiscountType($quantity_discount_type)
    {
        $this->container['quantity_discount_type'] = $quantity_discount_type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Popsicle\Amazon\Model\ProductPricing\MoneyType
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Popsicle\Amazon\Model\ProductPricing\MoneyType $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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