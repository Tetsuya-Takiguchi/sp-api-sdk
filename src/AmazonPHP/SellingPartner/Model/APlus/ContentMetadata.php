<?php declare(strict_types=1);
/**
 * ContentMetadata.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\APlus;

use AmazonPHP\SellingPartner\Model\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentMetadata implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ContentMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'marketplaceId' => 'string',
        'status' => '\AmazonPHP\SellingPartner\Model\APlus\ContentStatus',
        'badgeSet' => '\AmazonPHP\SellingPartner\Model\APlus\ContentBadge[]',
        'updateTime' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'marketplaceId' => null,
        'status' => null,
        'badgeSet' => null,
        'updateTime' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'marketplaceId' => 'marketplaceId',
        'status' => 'status',
        'badgeSet' => 'badgeSet',
        'updateTime' => 'updateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'marketplaceId' => 'setMarketplaceId',
        'status' => 'setStatus',
        'badgeSet' => 'setBadgeSet',
        'updateTime' => 'setUpdateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'marketplaceId' => 'getMarketplaceId',
        'status' => 'getStatus',
        'badgeSet' => 'getBadgeSet',
        'updateTime' => 'getUpdateTime',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['badgeSet'] = $data['badgeSet'] ?? null;
        $this->container['updateTime'] = $data['updateTime'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }

        if ((\mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((\mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }

        if ((\mb_strlen($this->container['marketplaceId']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplaceId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }

        if ($this->container['badgeSet'] === null) {
            $invalidProperties[] = "'badgeSet' can't be null";
        }

        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the A+ Content document name
     */
    public function setName(string $name) : self
    {
        if ((\mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentMetadata., must be smaller than or equal to 100.');
        }

        if ((\mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentMetadata., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets marketplaceId.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId.
     *
     * @param string $marketplaceId the identifier for the marketplace where the A+ Content is published
     */
    public function setMarketplaceId(string $marketplaceId) : self
    {
        if ((\mb_strlen($marketplaceId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceId when calling ContentMetadata., must be bigger than or equal to 1.');
        }

        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : ContentStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentStatus $status status
     */
    public function setStatus(ContentStatus $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets badgeSet.
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\ContentBadge[]
     */
    public function getBadgeSet() : array
    {
        return $this->container['badgeSet'];
    }

    /**
     * Sets badgeSet.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentBadge[] $badgeSet the set of content badges
     */
    public function setBadgeSet(array $badgeSet) : self
    {
        $this->container['badgeSet'] = $badgeSet;

        return $this;
    }

    /**
     * Gets updateTime.
     */
    public function getUpdateTime() : \DateTime
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime.
     *
     * @param \DateTime $updateTime the approximate age of the A+ Content document and metadata
     */
    public function setUpdateTime(\DateTime $updateTime) : self
    {
        $this->container['updateTime'] = $updateTime;

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
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
