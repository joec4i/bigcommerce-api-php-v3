<?php
/**
 * Cart
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'customer_id' => 'int',
        'email' => 'string',
        'currency' => '\BigCommerce\Api\V3\Model\Checkout\Currency1',
        'base_amount' => 'double',
        'discount_amount' => 'double',
        'cart_amount_inc_tax' => 'double',
        'cart_amount_ex_tax' => 'double',
        'coupons' => '\BigCommerce\Api\V3\Model\Checkout\AppliedCoupon[]',
        'discounts' => '\BigCommerce\Api\V3\Model\Checkout\AppliedDiscount[]',
        'line_items' => '\BigCommerce\Api\V3\Model\Checkout\LineItem[]',
        'created_time' => 'string',
        'updated_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'customer_id' => 'int32',
        'email' => null,
        'currency' => null,
        'base_amount' => 'double',
        'discount_amount' => 'double',
        'cart_amount_inc_tax' => 'double',
        'cart_amount_ex_tax' => 'double',
        'coupons' => null,
        'discounts' => null,
        'line_items' => null,
        'created_time' => null,
        'updated_time' => null
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
        'customer_id' => 'customer_id',
        'email' => 'email',
        'currency' => 'currency',
        'base_amount' => 'base_amount',
        'discount_amount' => 'discount_amount',
        'cart_amount_inc_tax' => 'cart_amount_inc_tax',
        'cart_amount_ex_tax' => 'cart_amount_ex_tax',
        'coupons' => 'coupons',
        'discounts' => 'discounts',
        'line_items' => 'line_items',
        'created_time' => 'created_time',
        'updated_time' => 'updated_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customer_id' => 'setCustomerId',
        'email' => 'setEmail',
        'currency' => 'setCurrency',
        'base_amount' => 'setBaseAmount',
        'discount_amount' => 'setDiscountAmount',
        'cart_amount_inc_tax' => 'setCartAmountIncTax',
        'cart_amount_ex_tax' => 'setCartAmountExTax',
        'coupons' => 'setCoupons',
        'discounts' => 'setDiscounts',
        'line_items' => 'setLineItems',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customer_id' => 'getCustomerId',
        'email' => 'getEmail',
        'currency' => 'getCurrency',
        'base_amount' => 'getBaseAmount',
        'discount_amount' => 'getDiscountAmount',
        'cart_amount_inc_tax' => 'getCartAmountIncTax',
        'cart_amount_ex_tax' => 'getCartAmountExTax',
        'coupons' => 'getCoupons',
        'discounts' => 'getDiscounts',
        'line_items' => 'getLineItems',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime'
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['base_amount'] = isset($data['base_amount']) ? $data['base_amount'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['cart_amount_inc_tax'] = isset($data['cart_amount_inc_tax']) ? $data['cart_amount_inc_tax'] : null;
        $this->container['cart_amount_ex_tax'] = isset($data['cart_amount_ex_tax']) ? $data['cart_amount_ex_tax'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
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
     * @param string $id Cart ID, provided after creating a cart with a POST.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id ID of the customer to which the cart belongs.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The cart's email. This is the same email that is used in the billing address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\Currency1
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\Currency1 $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets base_amount
     *
     * @return double
     */
    public function getBaseAmount()
    {
        return $this->container['base_amount'];
    }

    /**
     * Sets base_amount
     *
     * @param double $base_amount Cost of cart's contents, before applying discounts.
     *
     * @return $this
     */
    public function setBaseAmount($base_amount)
    {
        $this->container['base_amount'] = $base_amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double $discount_amount Discounted amount.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets cart_amount_inc_tax
     *
     * @return double
     */
    public function getCartAmountIncTax()
    {
        return $this->container['cart_amount_inc_tax'];
    }

    /**
     * Sets cart_amount_inc_tax
     *
     * @param double $cart_amount_inc_tax Sum of line-items amounts, minus cart-level discounts and coupons including tax
     *
     * @return $this
     */
    public function setCartAmountIncTax($cart_amount_inc_tax)
    {
        $this->container['cart_amount_inc_tax'] = $cart_amount_inc_tax;

        return $this;
    }

    /**
     * Gets cart_amount_ex_tax
     *
     * @return double
     */
    public function getCartAmountExTax()
    {
        return $this->container['cart_amount_ex_tax'];
    }

    /**
     * Sets cart_amount_ex_tax
     *
     * @param double $cart_amount_ex_tax Sum of line-items amounts, minus cart-level discounts and coupons excluding tax
     *
     * @return $this
     */
    public function setCartAmountExTax($cart_amount_ex_tax)
    {
        $this->container['cart_amount_ex_tax'] = $cart_amount_ex_tax;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\AppliedCoupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\AppliedCoupon[] $coupons 
     *
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\AppliedDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\AppliedDiscount[] $discounts 
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \BigCommerce\Api\V3\Model\Checkout\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \BigCommerce\Api\V3\Model\Checkout\LineItem[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param string $created_time Time when the cart was created.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param string $updated_time Time when the cart was last updated.
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

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


