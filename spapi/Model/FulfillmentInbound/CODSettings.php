<?php
/**
 * CODSettings
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
 * CODSettings Class Doc Comment
 *
 * @category Class
 * @description The COD (Cash On Delivery) charges that you associate with a COD fulfillment order.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CODSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CODSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_cod_required' => 'bool',
'cod_charge' => '\Popsicle\Amazon\Model\FulfillmentInbound\Money',
'cod_charge_tax' => '\Popsicle\Amazon\Model\FulfillmentInbound\Money',
'shipping_charge' => '\Popsicle\Amazon\Model\FulfillmentInbound\Money',
'shipping_charge_tax' => '\Popsicle\Amazon\Model\FulfillmentInbound\Money'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_cod_required' => null,
'cod_charge' => null,
'cod_charge_tax' => null,
'shipping_charge' => null,
'shipping_charge_tax' => null    ];

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
        'is_cod_required' => 'isCodRequired',
'cod_charge' => 'codCharge',
'cod_charge_tax' => 'codChargeTax',
'shipping_charge' => 'shippingCharge',
'shipping_charge_tax' => 'shippingChargeTax'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_cod_required' => 'setIsCodRequired',
'cod_charge' => 'setCodCharge',
'cod_charge_tax' => 'setCodChargeTax',
'shipping_charge' => 'setShippingCharge',
'shipping_charge_tax' => 'setShippingChargeTax'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_cod_required' => 'getIsCodRequired',
'cod_charge' => 'getCodCharge',
'cod_charge_tax' => 'getCodChargeTax',
'shipping_charge' => 'getShippingCharge',
'shipping_charge_tax' => 'getShippingChargeTax'    ];

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
        $this->container['is_cod_required'] = isset($data['is_cod_required']) ? $data['is_cod_required'] : null;
        $this->container['cod_charge'] = isset($data['cod_charge']) ? $data['cod_charge'] : null;
        $this->container['cod_charge_tax'] = isset($data['cod_charge_tax']) ? $data['cod_charge_tax'] : null;
        $this->container['shipping_charge'] = isset($data['shipping_charge']) ? $data['shipping_charge'] : null;
        $this->container['shipping_charge_tax'] = isset($data['shipping_charge_tax']) ? $data['shipping_charge_tax'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_cod_required'] === null) {
            $invalidProperties[] = "'is_cod_required' can't be null";
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
     * Gets is_cod_required
     *
     * @return bool
     */
    public function getIsCodRequired()
    {
        return $this->container['is_cod_required'];
    }

    /**
     * Sets is_cod_required
     *
     * @param bool $is_cod_required When true, this fulfillment order requires a COD (Cash On Delivery) payment.
     *
     * @return $this
     */
    public function setIsCodRequired($is_cod_required)
    {
        $this->container['is_cod_required'] = $is_cod_required;

        return $this;
    }

    /**
     * Gets cod_charge
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\Money
     */
    public function getCodCharge()
    {
        return $this->container['cod_charge'];
    }

    /**
     * Sets cod_charge
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\Money $cod_charge cod_charge
     *
     * @return $this
     */
    public function setCodCharge($cod_charge)
    {
        $this->container['cod_charge'] = $cod_charge;

        return $this;
    }

    /**
     * Gets cod_charge_tax
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\Money
     */
    public function getCodChargeTax()
    {
        return $this->container['cod_charge_tax'];
    }

    /**
     * Sets cod_charge_tax
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\Money $cod_charge_tax cod_charge_tax
     *
     * @return $this
     */
    public function setCodChargeTax($cod_charge_tax)
    {
        $this->container['cod_charge_tax'] = $cod_charge_tax;

        return $this;
    }

    /**
     * Gets shipping_charge
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\Money
     */
    public function getShippingCharge()
    {
        return $this->container['shipping_charge'];
    }

    /**
     * Sets shipping_charge
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\Money $shipping_charge shipping_charge
     *
     * @return $this
     */
    public function setShippingCharge($shipping_charge)
    {
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    /**
     * Gets shipping_charge_tax
     *
     * @return \Popsicle\Amazon\Model\FulfillmentInbound\Money
     */
    public function getShippingChargeTax()
    {
        return $this->container['shipping_charge_tax'];
    }

    /**
     * Sets shipping_charge_tax
     *
     * @param \Popsicle\Amazon\Model\FulfillmentInbound\Money $shipping_charge_tax shipping_charge_tax
     *
     * @return $this
     */
    public function setShippingChargeTax($shipping_charge_tax)
    {
        $this->container['shipping_charge_tax'] = $shipping_charge_tax;

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
