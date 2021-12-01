<?php
/**
 * AcceptedRate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
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

namespace Popsicle\Amazon\Model\Shipping;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * AcceptedRate Class Doc Comment
 *
 * @category Class
 * @description The specific rate purchased for the shipment, or null if unpurchased.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcceptedRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcceptedRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_charge' => '\Popsicle\Amazon\Model\Shipping\Currency',
'billed_weight' => '\Popsicle\Amazon\Model\Shipping\Weight',
'service_type' => '\Popsicle\Amazon\Model\Shipping\ServiceType',
'promise' => '\Popsicle\Amazon\Model\Shipping\ShippingPromiseSet'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_charge' => null,
'billed_weight' => null,
'service_type' => null,
'promise' => null    ];

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
        'total_charge' => 'totalCharge',
'billed_weight' => 'billedWeight',
'service_type' => 'serviceType',
'promise' => 'promise'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_charge' => 'setTotalCharge',
'billed_weight' => 'setBilledWeight',
'service_type' => 'setServiceType',
'promise' => 'setPromise'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_charge' => 'getTotalCharge',
'billed_weight' => 'getBilledWeight',
'service_type' => 'getServiceType',
'promise' => 'getPromise'    ];

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
        $this->container['total_charge'] = isset($data['total_charge']) ? $data['total_charge'] : null;
        $this->container['billed_weight'] = isset($data['billed_weight']) ? $data['billed_weight'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['promise'] = isset($data['promise']) ? $data['promise'] : null;
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
     * Gets total_charge
     *
     * @return \Popsicle\Amazon\Model\Shipping\Currency
     */
    public function getTotalCharge()
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge
     *
     * @param \Popsicle\Amazon\Model\Shipping\Currency $total_charge total_charge
     *
     * @return $this
     */
    public function setTotalCharge($total_charge)
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets billed_weight
     *
     * @return \Popsicle\Amazon\Model\Shipping\Weight
     */
    public function getBilledWeight()
    {
        return $this->container['billed_weight'];
    }

    /**
     * Sets billed_weight
     *
     * @param \Popsicle\Amazon\Model\Shipping\Weight $billed_weight billed_weight
     *
     * @return $this
     */
    public function setBilledWeight($billed_weight)
    {
        $this->container['billed_weight'] = $billed_weight;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return \Popsicle\Amazon\Model\Shipping\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param \Popsicle\Amazon\Model\Shipping\ServiceType $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets promise
     *
     * @return \Popsicle\Amazon\Model\Shipping\ShippingPromiseSet
     */
    public function getPromise()
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise
     *
     * @param \Popsicle\Amazon\Model\Shipping\ShippingPromiseSet $promise promise
     *
     * @return $this
     */
    public function setPromise($promise)
    {
        $this->container['promise'] = $promise;

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