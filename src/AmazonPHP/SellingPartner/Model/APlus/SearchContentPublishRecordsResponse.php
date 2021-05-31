<?php declare(strict_types=1);
/**
 * SearchContentPublishRecordsResponse.
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
class SearchContentPublishRecordsResponse implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'SearchContentPublishRecordsResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'warnings' => '\AmazonPHP\SellingPartner\Model\APlus\Error[]',
        'nextPageToken' => 'string',
        'publishRecordList' => '\AmazonPHP\SellingPartner\Model\APlus\PublishRecord[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'warnings' => null,
        'nextPageToken' => null,
        'publishRecordList' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'warnings' => 'warnings',
        'nextPageToken' => 'nextPageToken',
        'publishRecordList' => 'publishRecordList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'warnings' => 'setWarnings',
        'nextPageToken' => 'setNextPageToken',
        'publishRecordList' => 'setPublishRecordList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'warnings' => 'getWarnings',
        'nextPageToken' => 'getNextPageToken',
        'publishRecordList' => 'getPublishRecordList',
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
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['nextPageToken'] = $data['nextPageToken'] ?? null;
        $this->container['publishRecordList'] = $data['publishRecordList'] ?? null;
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

        if (null !== $this->container['nextPageToken'] && (\mb_strlen($this->container['nextPageToken']) < 1)) {
            $invalidProperties[] = "invalid value for 'nextPageToken', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['publishRecordList'] === null) {
            $invalidProperties[] = "'publishRecordList' can't be null";
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
     * Gets warnings.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\Error[]
     */
    public function getWarnings() : ?array
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\Error[] $warnings a set of messages to the user, such as warnings or comments
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets nextPageToken.
     */
    public function getNextPageToken() : ?string
    {
        return $this->container['nextPageToken'];
    }

    /**
     * Sets nextPageToken.
     *
     * @param null|string $nextPageToken A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     */
    public function setNextPageToken(?string $nextPageToken) : self
    {
        if (null !== $nextPageToken && (\mb_strlen($nextPageToken) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nextPageToken when calling SearchContentPublishRecordsResponse., must be bigger than or equal to 1.');
        }

        $this->container['nextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * Gets publishRecordList.
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\PublishRecord[]
     */
    public function getPublishRecordList() : array
    {
        return $this->container['publishRecordList'];
    }

    /**
     * Sets publishRecordList.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\PublishRecord[] $publishRecordList a list of A+ Content publishing records
     */
    public function setPublishRecordList(array $publishRecordList) : self
    {
        $this->container['publishRecordList'] = $publishRecordList;

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
