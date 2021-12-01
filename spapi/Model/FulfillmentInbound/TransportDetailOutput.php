<?php
/**
 * TransportDetailOutput
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
 * TransportDetailOutput Class Doc Comment
 *
 * @category Class
 * @description Inbound shipment information, including carrier details and shipment status.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransportDetailOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransportDetailOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partnered_small_parcel_data' => '\Popsicle\Amazon\Model\FulfillmentInbound\PartneredSmallParcelDataOutput',
'non_partnered_small_parcel_data' => '\Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredSmallParcelDataOutput',
'partnered_ltl_data' => '\Popsicle\Amazon\Model\FulfillmentInbound\PartneredLtlDataOutput',
'non_partnered_ltl_data' => '\Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredLtlDataOutput'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'partnered_small_parcel_data' => null,
'non_partnered_small_parcel_data' => null,
'partnered_ltl_data' => null,
'non_partnered_ltl_data' => null    ];

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
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
'partnered_ltl_data' => 'PartneredLtlData',
'non_partnered_ltl_data' => 'NonPartneredLtlData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
'partnered_ltl_data' => 'setPartneredLtlData',
'non_partnered_ltl_data' => 'setNonPartneredLtlData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
'partnered_ltl_data' => 'getPartneredLtlData',
'non_partnered_ltl_data' => 'getNonPartneredLtlData'    ];

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
        $this->container['partnered_small_parcel_data'] = isset($data['partnered_small_parcel_data']) ? $data['partnered_small_parcel_data'] : null;
        $this->container['non_partnered_small_parcel_data'] = isset($data['non_partnered_small_parcel_data']) ? $data['non_partnered_small_parcel_data'] : null;
        $this->container['partnered_ltl_data'] = isset($data['partnered_ltl_data']) ? $data['partnered_ltl_data'] : null;
        $this->container['non_partnered_ltl_data'] = isset($data['non_partnered_ltl_data']) ? $data['non_partnered_ltl_data'] : null;
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
     * Gets partnered_small_parcel_data
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\PartneredSmallParcelDataOutput
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\PartneredSmallParcelDataOutput $partnered_small_parcel_data partnered_small_parcel_data
     *
     * @return $this
     */
    public function setPartneredSmallParcelData($partnered_small_parcel_data)
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets non_partnered_small_parcel_data
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredSmallParcelDataOutput
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredSmallParcelDataOutput $non_partnered_small_parcel_data non_partnered_small_parcel_data
     *
     * @return $this
     */
    public function setNonPartneredSmallParcelData($non_partnered_small_parcel_data)
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets partnered_ltl_data
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\PartneredLtlDataOutput
     */
    public function getPartneredLtlData()
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\PartneredLtlDataOutput $partnered_ltl_data partnered_ltl_data
     *
     * @return $this
     */
    public function setPartneredLtlData($partnered_ltl_data)
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }

    /**
     * Gets non_partnered_ltl_data
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredLtlDataOutput
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\NonPartneredLtlDataOutput $non_partnered_ltl_data non_partnered_ltl_data
     *
     * @return $this
     */
    public function setNonPartneredLtlData($non_partnered_ltl_data)
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

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
