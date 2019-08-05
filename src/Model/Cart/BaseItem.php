<?php
/**
 * BaseItem
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
 * BaseItem Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BaseItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BaseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'variant_id' => 'float',
        'product_id' => 'float',
        'sku' => 'string',
        'name' => 'string',
        'url' => 'string',
        'quantity' => 'float',
        'is_taxable' => 'bool',
        'image_url' => 'string',
        'discounts' => '\BigCommerce\Api\V3\Model\Cart\AppliedDiscount[]',
        'coupons' => '\BigCommerce\Api\V3\Model\Cart\AppliedCoupon[]',
        'discount_amount' => 'float',
        'coupon_amount' => 'float',
        'list_price' => 'float',
        'sale_price' => 'float',
        'extended_list_price' => 'float',
        'extended_sale_price' => 'float',
        'options' => '\BigCommerce\Api\V3\Model\Cart\ProductOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'variant_id' => null,
        'product_id' => null,
        'sku' => null,
        'name' => null,
        'url' => 'uri',
        'quantity' => null,
        'is_taxable' => null,
        'image_url' => 'uri',
        'discounts' => null,
        'coupons' => null,
        'discount_amount' => null,
        'coupon_amount' => null,
        'list_price' => null,
        'sale_price' => null,
        'extended_list_price' => null,
        'extended_sale_price' => null,
        'options' => null
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
        'variant_id' => 'variant_id',
        'product_id' => 'product_id',
        'sku' => 'sku',
        'name' => 'name',
        'url' => 'url',
        'quantity' => 'quantity',
        'is_taxable' => 'is_taxable',
        'image_url' => 'image_url',
        'discounts' => 'discounts',
        'coupons' => 'coupons',
        'discount_amount' => 'discount_amount',
        'coupon_amount' => 'coupon_amount',
        'list_price' => 'list_price',
        'sale_price' => 'sale_price',
        'extended_list_price' => 'extended_list_price',
        'extended_sale_price' => 'extended_sale_price',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'variant_id' => 'setVariantId',
        'product_id' => 'setProductId',
        'sku' => 'setSku',
        'name' => 'setName',
        'url' => 'setUrl',
        'quantity' => 'setQuantity',
        'is_taxable' => 'setIsTaxable',
        'image_url' => 'setImageUrl',
        'discounts' => 'setDiscounts',
        'coupons' => 'setCoupons',
        'discount_amount' => 'setDiscountAmount',
        'coupon_amount' => 'setCouponAmount',
        'list_price' => 'setListPrice',
        'sale_price' => 'setSalePrice',
        'extended_list_price' => 'setExtendedListPrice',
        'extended_sale_price' => 'setExtendedSalePrice',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'variant_id' => 'getVariantId',
        'product_id' => 'getProductId',
        'sku' => 'getSku',
        'name' => 'getName',
        'url' => 'getUrl',
        'quantity' => 'getQuantity',
        'is_taxable' => 'getIsTaxable',
        'image_url' => 'getImageUrl',
        'discounts' => 'getDiscounts',
        'coupons' => 'getCoupons',
        'discount_amount' => 'getDiscountAmount',
        'coupon_amount' => 'getCouponAmount',
        'list_price' => 'getListPrice',
        'sale_price' => 'getSalePrice',
        'extended_list_price' => 'getExtendedListPrice',
        'extended_sale_price' => 'getExtendedSalePrice',
        'options' => 'getOptions'
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
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['is_taxable'] = isset($data['is_taxable']) ? $data['is_taxable'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['coupon_amount'] = isset($data['coupon_amount']) ? $data['coupon_amount'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['extended_list_price'] = isset($data['extended_list_price']) ? $data['extended_list_price'] : null;
        $this->container['extended_sale_price'] = isset($data['extended_sale_price']) ? $data['extended_sale_price'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['variant_id'] === null) {
            $invalidProperties[] = "'variant_id' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * @param string $id The line-item ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return float
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param float $variant_id The id of the variant. Required in the /PUT or /POST if the product has variants.
     *
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return float
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param float $product_id The id of the product. Required in a /POST
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku SKU of the variant.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The item's product name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The product URL.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Quantity of this item in the cart.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets is_taxable
     *
     * @return bool
     */
    public function getIsTaxable()
    {
        return $this->container['is_taxable'];
    }

    /**
     * Sets is_taxable
     *
     * @param bool $is_taxable Whether the item is taxable.
     *
     * @return $this
     */
    public function setIsTaxable($is_taxable)
    {
        $this->container['is_taxable'] = $is_taxable;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image of the product or variant.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
     * @param float $discount_amount The total value of all discounts applied to this item. This includes coupons and cart level discounts
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets coupon_amount
     *
     * @return float
     */
    public function getCouponAmount()
    {
        return $this->container['coupon_amount'];
    }

    /**
     * Sets coupon_amount
     *
     * @param float $coupon_amount The total value of all coupons applied to this item.
     *
     * @return $this
     */
    public function setCouponAmount($coupon_amount)
    {
        $this->container['coupon_amount'] = $coupon_amount;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return float
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param float $list_price Item's list price, as quoted by the manufacturer/distributor.
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float $sale_price Item's price after all discounts are applied. (The final price before tax calculation.)
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets extended_list_price
     *
     * @return float
     */
    public function getExtendedListPrice()
    {
        return $this->container['extended_list_price'];
    }

    /**
     * Sets extended_list_price
     *
     * @param float $extended_list_price Item's list price multiplied by the quantity.
     *
     * @return $this
     */
    public function setExtendedListPrice($extended_list_price)
    {
        $this->container['extended_list_price'] = $extended_list_price;

        return $this;
    }

    /**
     * Gets extended_sale_price
     *
     * @return float
     */
    public function getExtendedSalePrice()
    {
        return $this->container['extended_sale_price'];
    }

    /**
     * Sets extended_sale_price
     *
     * @param float $extended_sale_price Item's sale price multiplied by the quantity.
     *
     * @return $this
     */
    public function setExtendedSalePrice($extended_sale_price)
    {
        $this->container['extended_sale_price'] = $extended_sale_price;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \BigCommerce\Api\V3\Model\Cart\ProductOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \BigCommerce\Api\V3\Model\Cart\ProductOption[] $options The list of selected options for this product.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


