<?php
/**
 * ItemDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace Popsicle\Amazon\Model\VendorShipments;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * ItemDetails Class Doc Comment
 *
 * @category Class
 * @description Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchase_order_number' => 'string',
'lot_number' => 'string',
'expiry' => '\Popsicle\Amazon\Model\VendorShipments\Expiry',
'maximum_retail_price' => '\Popsicle\Amazon\Model\VendorShipments\Money',
'handling_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchase_order_number' => null,
'lot_number' => null,
'expiry' => null,
'maximum_retail_price' => null,
'handling_code' => null    ];

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
        'purchase_order_number' => 'purchaseOrderNumber',
'lot_number' => 'lotNumber',
'expiry' => 'expiry',
'maximum_retail_price' => 'maximumRetailPrice',
'handling_code' => 'handlingCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
'lot_number' => 'setLotNumber',
'expiry' => 'setExpiry',
'maximum_retail_price' => 'setMaximumRetailPrice',
'handling_code' => 'setHandlingCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
'lot_number' => 'getLotNumber',
'expiry' => 'getExpiry',
'maximum_retail_price' => 'getMaximumRetailPrice',
'handling_code' => 'getHandlingCode'    ];

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

    const HANDLING_CODE_OVERSIZED = 'Oversized';
const HANDLING_CODE_FRAGILE = 'Fragile';
const HANDLING_CODE_FOOD = 'Food';
const HANDLING_CODE_HANDLE_WITH_CARE = 'HandleWithCare';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandlingCodeAllowableValues()
    {
        return [
            self::HANDLING_CODE_OVERSIZED,
self::HANDLING_CODE_FRAGILE,
self::HANDLING_CODE_FOOD,
self::HANDLING_CODE_HANDLE_WITH_CARE,        ];
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
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['lot_number'] = isset($data['lot_number']) ? $data['lot_number'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['maximum_retail_price'] = isset($data['maximum_retail_price']) ? $data['maximum_retail_price'] : null;
        $this->container['handling_code'] = isset($data['handling_code']) ? $data['handling_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHandlingCodeAllowableValues();
        if (!is_null($this->container['handling_code']) && !in_array($this->container['handling_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'handling_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets lot_number
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number
     *
     * @param string $lot_number The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     *
     * @return $this
     */
    public function setLotNumber($lot_number)
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return \Popsicle\Amazon\Model\VendorShipments\Expiry
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param \Popsicle\Amazon\Model\VendorShipments\Expiry $expiry expiry
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets maximum_retail_price
     *
     * @return \Popsicle\Amazon\Model\VendorShipments\Money
     */
    public function getMaximumRetailPrice()
    {
        return $this->container['maximum_retail_price'];
    }

    /**
     * Sets maximum_retail_price
     *
     * @param \Popsicle\Amazon\Model\VendorShipments\Money $maximum_retail_price maximum_retail_price
     *
     * @return $this
     */
    public function setMaximumRetailPrice($maximum_retail_price)
    {
        $this->container['maximum_retail_price'] = $maximum_retail_price;

        return $this;
    }

    /**
     * Gets handling_code
     *
     * @return string
     */
    public function getHandlingCode()
    {
        return $this->container['handling_code'];
    }

    /**
     * Sets handling_code
     *
     * @param string $handling_code Identification of the instructions on how specified item/carton/pallet should be handled.
     *
     * @return $this
     */
    public function setHandlingCode($handling_code)
    {
        $allowedValues = $this->getHandlingCodeAllowableValues();
        if (!is_null($handling_code) && !in_array($handling_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'handling_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handling_code'] = $handling_code;

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
