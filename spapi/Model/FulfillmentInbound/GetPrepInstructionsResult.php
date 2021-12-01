<?php
/**
 * GetPrepInstructionsResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Popsicle\Amazon\Model\FulfillmentInbound;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * GetPrepInstructionsResult Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetPrepInstructionsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetPrepInstructionsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku_prep_instructions_list' => '\Popsicle\Amazon\Model\FulfillmentInbound\SKUPrepInstructionsList',
'invalid_sku_list' => '\Popsicle\Amazon\Model\FulfillmentInbound\InvalidSKUList',
'asin_prep_instructions_list' => '\Popsicle\Amazon\Model\FulfillmentInbound\ASINPrepInstructionsList',
'invalid_asin_list' => '\Popsicle\Amazon\Model\FulfillmentInbound\InvalidASINList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku_prep_instructions_list' => null,
'invalid_sku_list' => null,
'asin_prep_instructions_list' => null,
'invalid_asin_list' => null    ];

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
        'sku_prep_instructions_list' => 'SKUPrepInstructionsList',
'invalid_sku_list' => 'InvalidSKUList',
'asin_prep_instructions_list' => 'ASINPrepInstructionsList',
'invalid_asin_list' => 'InvalidASINList'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_prep_instructions_list' => 'setSkuPrepInstructionsList',
'invalid_sku_list' => 'setInvalidSkuList',
'asin_prep_instructions_list' => 'setAsinPrepInstructionsList',
'invalid_asin_list' => 'setInvalidAsinList'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_prep_instructions_list' => 'getSkuPrepInstructionsList',
'invalid_sku_list' => 'getInvalidSkuList',
'asin_prep_instructions_list' => 'getAsinPrepInstructionsList',
'invalid_asin_list' => 'getInvalidAsinList'    ];

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
        $this->container['sku_prep_instructions_list'] = isset($data['sku_prep_instructions_list']) ? $data['sku_prep_instructions_list'] : null;
        $this->container['invalid_sku_list'] = isset($data['invalid_sku_list']) ? $data['invalid_sku_list'] : null;
        $this->container['asin_prep_instructions_list'] = isset($data['asin_prep_instructions_list']) ? $data['asin_prep_instructions_list'] : null;
        $this->container['invalid_asin_list'] = isset($data['invalid_asin_list']) ? $data['invalid_asin_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets sku_prep_instructions_list
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\SKUPrepInstructionsList
     */
    public function getSkuPrepInstructionsList()
    {
        return $this->container['sku_prep_instructions_list'];
    }

    /**
     * Sets sku_prep_instructions_list
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\SKUPrepInstructionsList $sku_prep_instructions_list sku_prep_instructions_list
     *
     * @return $this
     */
    public function setSkuPrepInstructionsList($sku_prep_instructions_list)
    {
        $this->container['sku_prep_instructions_list'] = $sku_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\InvalidSKUList
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\InvalidSKUList $invalid_sku_list invalid_sku_list
     *
     * @return $this
     */
    public function setInvalidSkuList($invalid_sku_list)
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_prep_instructions_list
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\ASINPrepInstructionsList
     */
    public function getAsinPrepInstructionsList()
    {
        return $this->container['asin_prep_instructions_list'];
    }

    /**
     * Sets asin_prep_instructions_list
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\ASINPrepInstructionsList $asin_prep_instructions_list asin_prep_instructions_list
     *
     * @return $this
     */
    public function setAsinPrepInstructionsList($asin_prep_instructions_list)
    {
        $this->container['asin_prep_instructions_list'] = $asin_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\InvalidASINList
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\InvalidASINList $invalid_asin_list invalid_asin_list
     *
     * @return $this
     */
    public function setInvalidAsinList($invalid_asin_list)
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
