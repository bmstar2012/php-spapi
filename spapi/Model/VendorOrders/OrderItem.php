<?php
/**
 * OrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\VendorOrders;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_sequence_number' => 'string',
'amazon_product_identifier' => 'string',
'vendor_product_identifier' => 'string',
'ordered_quantity' => '\Popsicle\Amazon\Model\VendorOrders\ItemQuantity',
'is_back_order_allowed' => 'bool',
'net_cost' => '\Popsicle\Amazon\Model\VendorOrders\Money',
'list_price' => '\Popsicle\Amazon\Model\VendorOrders\Money'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_sequence_number' => null,
'amazon_product_identifier' => null,
'vendor_product_identifier' => null,
'ordered_quantity' => null,
'is_back_order_allowed' => null,
'net_cost' => null,
'list_price' => null    ];

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
        'item_sequence_number' => 'itemSequenceNumber',
'amazon_product_identifier' => 'amazonProductIdentifier',
'vendor_product_identifier' => 'vendorProductIdentifier',
'ordered_quantity' => 'orderedQuantity',
'is_back_order_allowed' => 'isBackOrderAllowed',
'net_cost' => 'netCost',
'list_price' => 'listPrice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
'amazon_product_identifier' => 'setAmazonProductIdentifier',
'vendor_product_identifier' => 'setVendorProductIdentifier',
'ordered_quantity' => 'setOrderedQuantity',
'is_back_order_allowed' => 'setIsBackOrderAllowed',
'net_cost' => 'setNetCost',
'list_price' => 'setListPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
'amazon_product_identifier' => 'getAmazonProductIdentifier',
'vendor_product_identifier' => 'getVendorProductIdentifier',
'ordered_quantity' => 'getOrderedQuantity',
'is_back_order_allowed' => 'getIsBackOrderAllowed',
'net_cost' => 'getNetCost',
'list_price' => 'getListPrice'    ];

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
        $this->container['item_sequence_number'] = isset($data['item_sequence_number']) ? $data['item_sequence_number'] : null;
        $this->container['amazon_product_identifier'] = isset($data['amazon_product_identifier']) ? $data['amazon_product_identifier'] : null;
        $this->container['vendor_product_identifier'] = isset($data['vendor_product_identifier']) ? $data['vendor_product_identifier'] : null;
        $this->container['ordered_quantity'] = isset($data['ordered_quantity']) ? $data['ordered_quantity'] : null;
        $this->container['is_back_order_allowed'] = isset($data['is_back_order_allowed']) ? $data['is_back_order_allowed'] : null;
        $this->container['net_cost'] = isset($data['net_cost']) ? $data['net_cost'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        if ($this->container['ordered_quantity'] === null) {
            $invalidProperties[] = "'ordered_quantity' can't be null";
        }
        if ($this->container['is_back_order_allowed'] === null) {
            $invalidProperties[] = "'is_back_order_allowed' can't be null";
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
     * Gets item_sequence_number
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return $this
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier
     *
     * @return string
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier
     *
     * @param string $amazon_product_identifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return $this
     */
    public function setAmazonProductIdentifier($amazon_product_identifier)
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string $vendor_product_identifier The vendor selected product identification of the item.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets ordered_quantity
     *
     * @return \Popsicle\Amazon\Model\VendorOrders\ItemQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \Popsicle\Amazon\Model\VendorOrders\ItemQuantity $ordered_quantity ordered_quantity
     *
     * @return $this
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets is_back_order_allowed
     *
     * @return bool
     */
    public function getIsBackOrderAllowed()
    {
        return $this->container['is_back_order_allowed'];
    }

    /**
     * Sets is_back_order_allowed
     *
     * @param bool $is_back_order_allowed When true, we will accept backorder confirmations for this item.
     *
     * @return $this
     */
    public function setIsBackOrderAllowed($is_back_order_allowed)
    {
        $this->container['is_back_order_allowed'] = $is_back_order_allowed;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return \Popsicle\Amazon\Model\VendorOrders\Money
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \Popsicle\Amazon\Model\VendorOrders\Money $net_cost net_cost
     *
     * @return $this
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \Popsicle\Amazon\Model\VendorOrders\Money
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \Popsicle\Amazon\Model\VendorOrders\Money $list_price list_price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

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
