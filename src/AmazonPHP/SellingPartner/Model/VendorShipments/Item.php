<?php declare(strict_types=1);
/**
 * Item.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'string',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'shipped_quantity' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ItemQuantity',
        'item_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\ItemDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'shipped_quantity' => null,
        'item_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'shipped_quantity' => 'shippedQuantity',
        'item_details' => 'itemDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'shipped_quantity' => 'setShippedQuantity',
        'item_details' => 'setItemDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'shipped_quantity' => 'getShippedQuantity',
        'item_details' => 'getItemDetails',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['amazon_product_identifier'] = $data['amazon_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['shipped_quantity'] = $data['shipped_quantity'] ?? null;
        $this->container['item_details'] = $data['item_details'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }

        if ($this->container['shipped_quantity'] === null) {
            $invalidProperties[] = "'shipped_quantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : string
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param string $item_sequence_number Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level.
     */
    public function setItemSequenceNumber(string $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier.
     */
    public function getAmazonProductIdentifier() : ?string
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier.
     *
     * @param null|string $amazon_product_identifier amazon Standard Identification Number (ASIN) of an item
     */
    public function setAmazonProductIdentifier(?string $amazon_product_identifier) : self
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets shipped_quantity.
     */
    public function getShippedQuantity() : ItemQuantity
    {
        return $this->container['shipped_quantity'];
    }

    /**
     * Sets shipped_quantity.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\ItemQuantity $shipped_quantity shipped_quantity
     */
    public function setShippedQuantity(ItemQuantity $shipped_quantity) : self
    {
        $this->container['shipped_quantity'] = $shipped_quantity;

        return $this;
    }

    /**
     * Gets item_details.
     */
    public function getItemDetails() : ?ItemDetails
    {
        return $this->container['item_details'];
    }

    /**
     * Sets item_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\ItemDetails $item_details item_details
     */
    public function setItemDetails(?ItemDetails $item_details) : self
    {
        $this->container['item_details'] = $item_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
