<?php
/**
 * AvailableShippingServiceOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Popsicle\Amazon\Model\MerchantFulfillment;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * AvailableShippingServiceOptions Class Doc Comment
 *
 * @category Class
 * @description The available shipping service options.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableShippingServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailableShippingServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_carrier_will_pick_up_options' => '\Popsicle\Amazon\Model\MerchantFulfillment\AvailableCarrierWillPickUpOptionsList',
'available_delivery_experience_options' => '\Popsicle\Amazon\Model\MerchantFulfillment\AvailableDeliveryExperienceOptionsList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_carrier_will_pick_up_options' => null,
'available_delivery_experience_options' => null    ];

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
        'available_carrier_will_pick_up_options' => 'AvailableCarrierWillPickUpOptions',
'available_delivery_experience_options' => 'AvailableDeliveryExperienceOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_carrier_will_pick_up_options' => 'setAvailableCarrierWillPickUpOptions',
'available_delivery_experience_options' => 'setAvailableDeliveryExperienceOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_carrier_will_pick_up_options' => 'getAvailableCarrierWillPickUpOptions',
'available_delivery_experience_options' => 'getAvailableDeliveryExperienceOptions'    ];

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
        $this->container['available_carrier_will_pick_up_options'] = isset($data['available_carrier_will_pick_up_options']) ? $data['available_carrier_will_pick_up_options'] : null;
        $this->container['available_delivery_experience_options'] = isset($data['available_delivery_experience_options']) ? $data['available_delivery_experience_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['available_carrier_will_pick_up_options'] === null) {
            $invalidProperties[] = "'available_carrier_will_pick_up_options' can't be null";
        }
        if ($this->container['available_delivery_experience_options'] === null) {
            $invalidProperties[] = "'available_delivery_experience_options' can't be null";
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
     * Gets available_carrier_will_pick_up_options
     *
     * @return \Popsicle\Amazon\Model\MerchantFulfillment\AvailableCarrierWillPickUpOptionsList
     */
    public function getAvailableCarrierWillPickUpOptions()
    {
        return $this->container['available_carrier_will_pick_up_options'];
    }

    /**
     * Sets available_carrier_will_pick_up_options
     *
     * @param \Popsicle\Amazon\Model\MerchantFulfillment\AvailableCarrierWillPickUpOptionsList $available_carrier_will_pick_up_options available_carrier_will_pick_up_options
     *
     * @return $this
     */
    public function setAvailableCarrierWillPickUpOptions($available_carrier_will_pick_up_options)
    {
        $this->container['available_carrier_will_pick_up_options'] = $available_carrier_will_pick_up_options;

        return $this;
    }

    /**
     * Gets available_delivery_experience_options
     *
     * @return \Popsicle\Amazon\Model\MerchantFulfillment\AvailableDeliveryExperienceOptionsList
     */
    public function getAvailableDeliveryExperienceOptions()
    {
        return $this->container['available_delivery_experience_options'];
    }

    /**
     * Sets available_delivery_experience_options
     *
     * @param \Popsicle\Amazon\Model\MerchantFulfillment\AvailableDeliveryExperienceOptionsList $available_delivery_experience_options available_delivery_experience_options
     *
     * @return $this
     */
    public function setAvailableDeliveryExperienceOptions($available_delivery_experience_options)
    {
        $this->container['available_delivery_experience_options'] = $available_delivery_experience_options;

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
