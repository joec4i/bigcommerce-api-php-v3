<?php
/**
 * Consignment1
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Server to Server Checkout API
 *
 * ### Checkout Allows for a checkout to be created from an existing cart using BigCommerce checkout logic. The existing BigCommerce front end cart/checkout can be bypassed.  Notes: - checkoutId is the same as the cartId.
 *
 * OpenAPI spec version: 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.7
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\V3\Model\Checkout;

use \ArrayAccess;
use \BigCommerce\Api\V3\ObjectSerializer;

/**
 * Consignment1 Class Doc Comment
 *
 * @category Class
 * @description This allows us to have multiple shipping addresses. Where there is only one shipping address, this array will contain only one value, with all the items.
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Consignment1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Consignment_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'shipping_address' => 'object',
        'available_shipping_options' => '\BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption[]',
        'selected_shipping_option' => '\BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption',
        'coupon_discounts' => '\BigCommerce\Api\V3\Model\Checkout\ConsignmentCouponDiscount[]',
        'discounts' => '\BigCommerce\Api\V3\Model\Checkout\ConsignmentDiscount[]',
        'shipping_cost_inc_tax' => 'double',
        'shipping_cost_ex_tax' => 'double',
        'handling_cost_inc_tax' => 'double',
        'handling_cost_ex_tax' => 'double',
        'line_item_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'shipping_address' => null,
        'available_shipping_options' => null,
        'selected_shipping_option' => null,
        'coupon_discounts' => null,
        'discounts' => null,
        'shipping_cost_inc_tax' => 'double',
        'shipping_cost_ex_tax' => 'double',
        'handling_cost_inc_tax' => 'double',
        'handling_cost_ex_tax' => 'double',
        'line_item_ids' => null
    ];

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
        'id' => 'id',
        'shipping_address' => 'shipping_address',
        'available_shipping_options' => 'available_shipping_options',
        'selected_shipping_option' => 'selected_shipping_option',
        'coupon_discounts' => 'coupon_discounts',
        'discounts' => 'discounts',
        'shipping_cost_inc_tax' => 'shipping_cost_inc_tax',
        'shipping_cost_ex_tax' => 'shipping_cost_ex_tax',
        'handling_cost_inc_tax' => 'handling_cost_inc_tax',
        'handling_cost_ex_tax' => 'handling_cost_ex_tax',
        'line_item_ids' => 'line_item_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'shipping_address' => 'setShippingAddress',
        'available_shipping_options' => 'setAvailableShippingOptions',
        'selected_shipping_option' => 'setSelectedShippingOption',
        'coupon_discounts' => 'setCouponDiscounts',
        'discounts' => 'setDiscounts',
        'shipping_cost_inc_tax' => 'setShippingCostIncTax',
        'shipping_cost_ex_tax' => 'setShippingCostExTax',
        'handling_cost_inc_tax' => 'setHandlingCostIncTax',
        'handling_cost_ex_tax' => 'setHandlingCostExTax',
        'line_item_ids' => 'setLineItemIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'shipping_address' => 'getShippingAddress',
        'available_shipping_options' => 'getAvailableShippingOptions',
        'selected_shipping_option' => 'getSelectedShippingOption',
        'coupon_discounts' => 'getCouponDiscounts',
        'discounts' => 'getDiscounts',
        'shipping_cost_inc_tax' => 'getShippingCostIncTax',
        'shipping_cost_ex_tax' => 'getShippingCostExTax',
        'handling_cost_inc_tax' => 'getHandlingCostIncTax',
        'handling_cost_ex_tax' => 'getHandlingCostExTax',
        'line_item_ids' => 'getLineItemIds'
    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['available_shipping_options'] = isset($data['available_shipping_options']) ? $data['available_shipping_options'] : null;
        $this->container['selected_shipping_option'] = isset($data['selected_shipping_option']) ? $data['selected_shipping_option'] : null;
        $this->container['coupon_discounts'] = isset($data['coupon_discounts']) ? $data['coupon_discounts'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['shipping_cost_inc_tax'] = isset($data['shipping_cost_inc_tax']) ? $data['shipping_cost_inc_tax'] : null;
        $this->container['shipping_cost_ex_tax'] = isset($data['shipping_cost_ex_tax']) ? $data['shipping_cost_ex_tax'] : null;
        $this->container['handling_cost_inc_tax'] = isset($data['handling_cost_inc_tax']) ? $data['handling_cost_inc_tax'] : null;
        $this->container['handling_cost_ex_tax'] = isset($data['handling_cost_ex_tax']) ? $data['handling_cost_ex_tax'] : null;
        $this->container['line_item_ids'] = isset($data['line_item_ids']) ? $data['line_item_ids'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return object
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param object $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets available_shipping_options
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption[]
     */
    public function getAvailableShippingOptions()
    {
        return $this->container['available_shipping_options'];
    }

    /**
     * Sets available_shipping_options
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption[] $available_shipping_options This is available only when \"include=available_shipping_options\" is presented in the URL.
     *
     * @return $this
     */
    public function setAvailableShippingOptions($available_shipping_options)
    {
        $this->container['available_shipping_options'] = $available_shipping_options;

        return $this;
    }

    /**
     * Gets selected_shipping_option
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption
     */
    public function getSelectedShippingOption()
    {
        return $this->container['selected_shipping_option'];
    }

    /**
     * Sets selected_shipping_option
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\SelectedShippingOption $selected_shipping_option selected_shipping_option
     *
     * @return $this
     */
    public function setSelectedShippingOption($selected_shipping_option)
    {
        $this->container['selected_shipping_option'] = $selected_shipping_option;

        return $this;
    }

    /**
     * Gets coupon_discounts
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\ConsignmentCouponDiscount[]
     */
    public function getCouponDiscounts()
    {
        return $this->container['coupon_discounts'];
    }

    /**
     * Sets coupon_discounts
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\ConsignmentCouponDiscount[] $coupon_discounts List of consignment discounts applied through coupons
     *
     * @return $this
     */
    public function setCouponDiscounts($coupon_discounts)
    {
        $this->container['coupon_discounts'] = $coupon_discounts;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\ConsignmentDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\ConsignmentDiscount[] $discounts List of consignment discounts applied through cart level discounts
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets shipping_cost_inc_tax
     *
     * @return double
     */
    public function getShippingCostIncTax()
    {
        return $this->container['shipping_cost_inc_tax'];
    }

    /**
     * Sets shipping_cost_inc_tax
     *
     * @param double $shipping_cost_inc_tax The shipping cost for this consignment including tax.
     *
     * @return $this
     */
    public function setShippingCostIncTax($shipping_cost_inc_tax)
    {
        $this->container['shipping_cost_inc_tax'] = $shipping_cost_inc_tax;

        return $this;
    }

    /**
     * Gets shipping_cost_ex_tax
     *
     * @return double
     */
    public function getShippingCostExTax()
    {
        return $this->container['shipping_cost_ex_tax'];
    }

    /**
     * Sets shipping_cost_ex_tax
     *
     * @param double $shipping_cost_ex_tax The shipping cost for this consignment excluding tax.
     *
     * @return $this
     */
    public function setShippingCostExTax($shipping_cost_ex_tax)
    {
        $this->container['shipping_cost_ex_tax'] = $shipping_cost_ex_tax;

        return $this;
    }

    /**
     * Gets handling_cost_inc_tax
     *
     * @return double
     */
    public function getHandlingCostIncTax()
    {
        return $this->container['handling_cost_inc_tax'];
    }

    /**
     * Sets handling_cost_inc_tax
     *
     * @param double $handling_cost_inc_tax The handling cost of shipping for this consignment including tax.
     *
     * @return $this
     */
    public function setHandlingCostIncTax($handling_cost_inc_tax)
    {
        $this->container['handling_cost_inc_tax'] = $handling_cost_inc_tax;

        return $this;
    }

    /**
     * Gets handling_cost_ex_tax
     *
     * @return double
     */
    public function getHandlingCostExTax()
    {
        return $this->container['handling_cost_ex_tax'];
    }

    /**
     * Sets handling_cost_ex_tax
     *
     * @param double $handling_cost_ex_tax The handling cost of shipping for this consignment excluding tax.
     *
     * @return $this
     */
    public function setHandlingCostExTax($handling_cost_ex_tax)
    {
        $this->container['handling_cost_ex_tax'] = $handling_cost_ex_tax;

        return $this;
    }

    /**
     * Gets line_item_ids
     *
     * @return string[]
     */
    public function getLineItemIds()
    {
        return $this->container['line_item_ids'];
    }

    /**
     * Sets line_item_ids
     *
     * @param string[] $line_item_ids 
     *
     * @return $this
     */
    public function setLineItemIds($line_item_ids)
    {
        $this->container['line_item_ids'] = $line_item_ids;

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


