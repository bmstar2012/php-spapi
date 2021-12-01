<?php
/**
 * TrackingEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
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
 * TrackingEvent Class Doc Comment
 *
 * @category Class
 * @description Information for tracking package deliveries.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_date' => '\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp',
'event_address' => '\Popsicle\Amazon\Model\FulfillmentInbound\TrackingAddress',
'event_code' => '\Popsicle\Amazon\Model\FulfillmentInbound\EventCode',
'event_description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event_date' => null,
'event_address' => null,
'event_code' => null,
'event_description' => null    ];

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
        'event_date' => 'eventDate',
'event_address' => 'eventAddress',
'event_code' => 'eventCode',
'event_description' => 'eventDescription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_date' => 'setEventDate',
'event_address' => 'setEventAddress',
'event_code' => 'setEventCode',
'event_description' => 'setEventDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_date' => 'getEventDate',
'event_address' => 'getEventAddress',
'event_code' => 'getEventCode',
'event_description' => 'getEventDescription'    ];

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
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['event_address'] = isset($data['event_address']) ? $data['event_address'] : null;
        $this->container['event_code'] = isset($data['event_code']) ? $data['event_code'] : null;
        $this->container['event_description'] = isset($data['event_description']) ? $data['event_description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_date'] === null) {
            $invalidProperties[] = "'event_date' can't be null";
        }
        if ($this->container['event_address'] === null) {
            $invalidProperties[] = "'event_address' can't be null";
        }
        if ($this->container['event_code'] === null) {
            $invalidProperties[] = "'event_code' can't be null";
        }
        if ($this->container['event_description'] === null) {
            $invalidProperties[] = "'event_description' can't be null";
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
     * Gets event_date
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\Timestamp
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\Timestamp $event_date event_date
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets event_address
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\TrackingAddress
     */
    public function getEventAddress()
    {
        return $this->container['event_address'];
    }

    /**
     * Sets event_address
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\TrackingAddress $event_address event_address
     *
     * @return $this
     */
    public function setEventAddress($event_address)
    {
        $this->container['event_address'] = $event_address;

        return $this;
    }

    /**
     * Gets event_code
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\EventCode
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\EventCode $event_code event_code
     *
     * @return $this
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param string $event_description A description for the corresponding event code.
     *
     * @return $this
     */
    public function setEventDescription($event_description)
    {
        $this->container['event_description'] = $event_description;

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
