<?php
/**
 * ItemPricing
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Product Pricing API
 *
 * API to provide marketing/display pricing for products, variants, and partially configured selections.
 *
 * OpenAPI spec version: master
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.7
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\V3\Model\Pricing;

use \ArrayAccess;
use \BigCommerce\Api\V3\ObjectSerializer;

/**
 * ItemPricing Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\V3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemPricing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemPricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'variant_id' => 'int',
        'options' => '\BigCommerce\Api\V3\Model\Pricing\PricingRequestItemOption[]',
        'retail_price' => '\BigCommerce\Api\V3\Model\Pricing\TaxPrice',
        'sale_price' => '\BigCommerce\Api\V3\Model\Pricing\TaxPrice',
        'minimum_advertised_price' => '\BigCommerce\Api\V3\Model\Pricing\TaxPrice',
        'price' => '\BigCommerce\Api\V3\Model\Pricing\TaxPrice',
        'calculated_price' => '\BigCommerce\Api\V3\Model\Pricing\TaxPrice',
        'price_range' => '\BigCommerce\Api\V3\Model\Pricing\PriceRange',
        'retail_price_range' => '\BigCommerce\Api\V3\Model\Pricing\PriceRange',
        'bulk_pricing' => '\BigCommerce\Api\V3\Model\Pricing\BulkPricingTier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'variant_id' => null,
        'options' => null,
        'retail_price' => null,
        'sale_price' => null,
        'minimum_advertised_price' => null,
        'price' => null,
        'calculated_price' => null,
        'price_range' => null,
        'retail_price_range' => null,
        'bulk_pricing' => null
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
        'product_id' => 'product_id',
        'variant_id' => 'variant_id',
        'options' => 'options',
        'retail_price' => 'retail_price',
        'sale_price' => 'sale_price',
        'minimum_advertised_price' => 'minimum_advertised_price',
        'price' => 'price',
        'calculated_price' => 'calculated_price',
        'price_range' => 'price_range',
        'retail_price_range' => 'retail_price_range',
        'bulk_pricing' => 'bulk_pricing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'variant_id' => 'setVariantId',
        'options' => 'setOptions',
        'retail_price' => 'setRetailPrice',
        'sale_price' => 'setSalePrice',
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'price' => 'setPrice',
        'calculated_price' => 'setCalculatedPrice',
        'price_range' => 'setPriceRange',
        'retail_price_range' => 'setRetailPriceRange',
        'bulk_pricing' => 'setBulkPricing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'variant_id' => 'getVariantId',
        'options' => 'getOptions',
        'retail_price' => 'getRetailPrice',
        'sale_price' => 'getSalePrice',
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'price' => 'getPrice',
        'calculated_price' => 'getCalculatedPrice',
        'price_range' => 'getPriceRange',
        'retail_price_range' => 'getRetailPriceRange',
        'bulk_pricing' => 'getBulkPricing'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['minimum_advertised_price'] = isset($data['minimum_advertised_price']) ? $data['minimum_advertised_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['calculated_price'] = isset($data['calculated_price']) ? $data['calculated_price'] : null;
        $this->container['price_range'] = isset($data['price_range']) ? $data['price_range'] : null;
        $this->container['retail_price_range'] = isset($data['retail_price_range']) ? $data['retail_price_range'] : null;
        $this->container['bulk_pricing'] = isset($data['bulk_pricing']) ? $data['bulk_pricing'] : null;
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
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id The product ID this price was generated for
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param int $variant_id The (optional) variant ID this price was generated for
     *
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\PricingRequestItemOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\PricingRequestItemOption[] $options The optional product option configuration this price was generated for
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\TaxPrice
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\TaxPrice $retail_price The (optional) RRP/retail price configured for this product
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\TaxPrice
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\TaxPrice $sale_price sale_price
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets minimum_advertised_price
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\TaxPrice
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\TaxPrice $minimum_advertised_price minimum_advertised_price
     *
     * @return $this
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\TaxPrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\TaxPrice $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets calculated_price
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\TaxPrice
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\TaxPrice $calculated_price calculated_price
     *
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\PriceRange
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\PriceRange $price_range price_range
     *
     * @return $this
     */
    public function setPriceRange($price_range)
    {
        $this->container['price_range'] = $price_range;

        return $this;
    }

    /**
     * Gets retail_price_range
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\PriceRange
     */
    public function getRetailPriceRange()
    {
        return $this->container['retail_price_range'];
    }

    /**
     * Sets retail_price_range
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\PriceRange $retail_price_range retail_price_range
     *
     * @return $this
     */
    public function setRetailPriceRange($retail_price_range)
    {
        $this->container['retail_price_range'] = $retail_price_range;

        return $this;
    }

    /**
     * Gets bulk_pricing
     *
     * @return \BigCommerce\Api\V3\Model\Pricing\BulkPricingTier[]
     */
    public function getBulkPricing()
    {
        return $this->container['bulk_pricing'];
    }

    /**
     * Sets bulk_pricing
     *
     * @param \BigCommerce\Api\V3\Model\Pricing\BulkPricingTier[] $bulk_pricing bulk_pricing
     *
     * @return $this
     */
    public function setBulkPricing($bulk_pricing)
    {
        $this->container['bulk_pricing'] = $bulk_pricing;

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


