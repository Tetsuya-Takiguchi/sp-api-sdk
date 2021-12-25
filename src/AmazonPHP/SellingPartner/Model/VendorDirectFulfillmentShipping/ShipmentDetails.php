<?php declare(strict_types=1);
/**
 * ShipmentDetails.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

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
class ShipmentDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const SHIPMENT_STATUS_SHIPPED = 'SHIPPED';

    public const SHIPMENT_STATUS_FLOOR_DENIAL = 'FLOOR_DENIAL';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipped_date' => '\DateTime',
        'shipment_status' => 'string',
        'is_priority_shipment' => 'bool',
        'vendor_order_number' => 'string',
        'estimated_delivery_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipped_date' => 'date-time',
        'shipment_status' => null,
        'is_priority_shipment' => null,
        'vendor_order_number' => null,
        'estimated_delivery_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipped_date' => 'shippedDate',
        'shipment_status' => 'shipmentStatus',
        'is_priority_shipment' => 'isPriorityShipment',
        'vendor_order_number' => 'vendorOrderNumber',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipped_date' => 'setShippedDate',
        'shipment_status' => 'setShipmentStatus',
        'is_priority_shipment' => 'setIsPriorityShipment',
        'vendor_order_number' => 'setVendorOrderNumber',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipped_date' => 'getShippedDate',
        'shipment_status' => 'getShipmentStatus',
        'is_priority_shipment' => 'getIsPriorityShipment',
        'vendor_order_number' => 'getVendorOrderNumber',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
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
        $this->container['shipped_date'] = $data['shipped_date'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['is_priority_shipment'] = $data['is_priority_shipment'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues() : array
    {
        return [
            self::SHIPMENT_STATUS_SHIPPED,
            self::SHIPMENT_STATUS_FLOOR_DENIAL,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['shipped_date'] === null) {
            $invalidProperties[] = "'shipped_date' can't be null";
        }

        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        $allowedValues = $this->getShipmentStatusAllowableValues();

        if (null !== $this->container['shipment_status'] && !\in_array($this->container['shipment_status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'shipment_status', must be one of '%s'",
                $this->container['shipment_status'],
                \implode("', '", $allowedValues)
            );
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
     * Gets shipped_date.
     */
    public function getShippedDate() : \DateTime
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date.
     *
     * @param \DateTime $shipped_date This field indicates the date of the departure of the shipment from vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the Shipment Confirmation should not be in the future.
     */
    public function setShippedDate(\DateTime $shipped_date) : self
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets shipment_status.
     */
    public function getShipmentStatus() : string
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param string $shipment_status indicate the shipment status
     */
    public function setShipmentStatus(string $shipment_status) : self
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();

        if (!\in_array($shipment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'shipment_status', must be one of '%s'",
                    $shipment_status,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets is_priority_shipment.
     */
    public function getIsPriorityShipment() : ?bool
    {
        return $this->container['is_priority_shipment'];
    }

    /**
     * Sets is_priority_shipment.
     *
     * @param null|bool $is_priority_shipment provide the priority of the shipment
     */
    public function setIsPriorityShipment(?bool $is_priority_shipment) : self
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }

    /**
     * Gets vendor_order_number.
     */
    public function getVendorOrderNumber() : ?string
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number.
     *
     * @param null|string $vendor_order_number the vendor order number is a unique identifier generated by a vendor for their reference
     */
    public function setVendorOrderNumber(?string $vendor_order_number) : self
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }

    /**
     * Gets estimated_delivery_date.
     */
    public function getEstimatedDeliveryDate() : ?\DateTime
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date.
     *
     * @param null|\DateTime $estimated_delivery_date Date on which the shipment is expected to reach the buyer's warehouse. It needs to be an estimate based on the average transit time between the ship-from location and the destination. The exact appointment time will be provided by buyer and is potentially not known when creating the shipment confirmation.
     */
    public function setEstimatedDeliveryDate(?\DateTime $estimated_delivery_date) : self
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

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
