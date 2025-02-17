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
 * Server to Server Cart API
 *
 * ### Cart Allows for a cart to be created using BigCommerce cart logic. The existing BigCommerce front end cart can be bypassed.  Notes: - cartId is the same as the checkoutId. - Carts are valid for 30 days from the last modification. This can include creating the cart or editing the cart. - Redirect URLs can be generated only from carts created using the server-to-server cart API. To restore a cart that was created on the storefront–either by a shopper or the Storefront Cart API–first recreate the cart using the server-to-server Cart API.
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

namespace BigCommerce\Api\V3\Model\Cart;

use \ArrayAccess;
use \BigCommerce\Api\V3\ObjectSerializer;

/**
 * Cart Class Doc Comment
 *
 * @category Class
 * @description A cart contains a collection of items, prices, discounts, etc.. It does not contain customer-related data.
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
        'parent_id' => 'string',
        'customer_id' => 'int',
        'email' => 'string',
        'currency' => '\BigCommerce\Api\V3\Model\Cart\Currency1',
        'tax_included' => 'bool',
        'base_amount' => 'float',
        'discount_amount' => 'float',
        'cart_amount' => 'float',
        'coupons' => '\BigCommerce\Api\V3\Model\Cart\AppliedCoupon[]',
        'discounts' => '\BigCommerce\Api\V3\Model\Cart\AppliedDiscount[]',
        'line_items' => '\BigCommerce\Api\V3\Model\Cart\LineItem[]',
        'created_time' => 'string',
        'updated_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'UUID',
        'parent_id' => null,
        'customer_id' => null,
        'email' => null,
        'currency' => null,
        'tax_included' => null,
        'base_amount' => null,
        'discount_amount' => null,
        'cart_amount' => null,
        'coupons' => null,
        'discounts' => null,
        'line_items' => null,
        'created_time' => 'ISO-8601',
        'updated_time' => 'ISO-8601'
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
        'parent_id' => 'parent_id',
        'customer_id' => 'customer_id',
        'email' => 'email',
        'currency' => 'currency',
        'tax_included' => 'tax_included',
        'base_amount' => 'base_amount',
        'discount_amount' => 'discount_amount',
        'cart_amount' => 'cart_amount',
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
        'parent_id' => 'setParentId',
        'customer_id' => 'setCustomerId',
        'email' => 'setEmail',
        'currency' => 'setCurrency',
        'tax_included' => 'setTaxIncluded',
        'base_amount' => 'setBaseAmount',
        'discount_amount' => 'setDiscountAmount',
        'cart_amount' => 'setCartAmount',
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
        'parent_id' => 'getParentId',
        'customer_id' => 'getCustomerId',
        'email' => 'getEmail',
        'currency' => 'getCurrency',
        'tax_included' => 'getTaxIncluded',
        'base_amount' => 'getBaseAmount',
        'discount_amount' => 'getDiscountAmount',
        'cart_amount' => 'getCartAmount',
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['tax_included'] = isset($data['tax_included']) ? $data['tax_included'] : null;
        $this->container['base_amount'] = isset($data['base_amount']) ? $data['base_amount'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['cart_amount'] = isset($data['cart_amount']) ? $data['cart_amount'] : null;
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
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id Bundled items will have their parent's item Id.
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @return \BigCommerce\Api\V3\Model\Cart\Currency1
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \BigCommerce\Api\V3\Model\Cart\Currency1 $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets tax_included
     *
     * @return bool
     */
    public function getTaxIncluded()
    {
        return $this->container['tax_included'];
    }

    /**
     * Sets tax_included
     *
     * @param bool $tax_included tax_included
     *
     * @return $this
     */
    public function setTaxIncluded($tax_included)
    {
        $this->container['tax_included'] = $tax_included;

        return $this;
    }

    /**
     * Gets base_amount
     *
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->container['base_amount'];
    }

    /**
     * Sets base_amount
     *
     * @param float $base_amount Cost of cart's contents, before applying discounts.
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
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param float $discount_amount Discounted amount.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets cart_amount
     *
     * @return float
     */
    public function getCartAmount()
    {
        return $this->container['cart_amount'];
    }

    /**
     * Sets cart_amount
     *
     * @param float $cart_amount Sum of line-items amounts, minus cart-level discounts and coupons. This amount includes taxes (where applicable).
     *
     * @return $this
     */
    public function setCartAmount($cart_amount)
    {
        $this->container['cart_amount'] = $cart_amount;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \BigCommerce\Api\V3\Model\Cart\AppliedCoupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \BigCommerce\Api\V3\Model\Cart\AppliedCoupon[] $coupons coupons
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
     * @return \BigCommerce\Api\V3\Model\Cart\AppliedDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \BigCommerce\Api\V3\Model\Cart\AppliedDiscount[] $discounts discounts
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
     * @return \BigCommerce\Api\V3\Model\Cart\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \BigCommerce\Api\V3\Model\Cart\LineItem[] $line_items line_items
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


