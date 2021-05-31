<?php declare(strict_types=1);
/**
 * StandardImageSidebarModule.
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
class StandardImageSidebarModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'StandardImageSidebarModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'imageCaptionBlock' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock',
        'descriptionTextBlock' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'descriptionListBlock' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock',
        'sidebarImageTextBlock' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'sidebarListBlock' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'headline' => null,
        'imageCaptionBlock' => null,
        'descriptionTextBlock' => null,
        'descriptionListBlock' => null,
        'sidebarImageTextBlock' => null,
        'sidebarListBlock' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'headline' => 'headline',
        'imageCaptionBlock' => 'imageCaptionBlock',
        'descriptionTextBlock' => 'descriptionTextBlock',
        'descriptionListBlock' => 'descriptionListBlock',
        'sidebarImageTextBlock' => 'sidebarImageTextBlock',
        'sidebarListBlock' => 'sidebarListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'headline' => 'setHeadline',
        'imageCaptionBlock' => 'setImageCaptionBlock',
        'descriptionTextBlock' => 'setDescriptionTextBlock',
        'descriptionListBlock' => 'setDescriptionListBlock',
        'sidebarImageTextBlock' => 'setSidebarImageTextBlock',
        'sidebarListBlock' => 'setSidebarListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'headline' => 'getHeadline',
        'imageCaptionBlock' => 'getImageCaptionBlock',
        'descriptionTextBlock' => 'getDescriptionTextBlock',
        'descriptionListBlock' => 'getDescriptionListBlock',
        'sidebarImageTextBlock' => 'getSidebarImageTextBlock',
        'sidebarListBlock' => 'getSidebarListBlock',
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['imageCaptionBlock'] = $data['imageCaptionBlock'] ?? null;
        $this->container['descriptionTextBlock'] = $data['descriptionTextBlock'] ?? null;
        $this->container['descriptionListBlock'] = $data['descriptionListBlock'] ?? null;
        $this->container['sidebarImageTextBlock'] = $data['sidebarImageTextBlock'] ?? null;
        $this->container['sidebarListBlock'] = $data['sidebarListBlock'] ?? null;
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
        return [];
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
     * Gets headline.
     */
    public function getHeadline() : ?TextComponent
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $headline headline
     */
    public function setHeadline(?TextComponent $headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets imageCaptionBlock.
     */
    public function getImageCaptionBlock() : ?StandardImageCaptionBlock
    {
        return $this->container['imageCaptionBlock'];
    }

    /**
     * Sets imageCaptionBlock.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock $imageCaptionBlock imageCaptionBlock
     */
    public function setImageCaptionBlock(?StandardImageCaptionBlock $imageCaptionBlock) : self
    {
        $this->container['imageCaptionBlock'] = $imageCaptionBlock;

        return $this;
    }

    /**
     * Gets descriptionTextBlock.
     */
    public function getDescriptionTextBlock() : ?StandardTextBlock
    {
        return $this->container['descriptionTextBlock'];
    }

    /**
     * Sets descriptionTextBlock.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $descriptionTextBlock descriptionTextBlock
     */
    public function setDescriptionTextBlock(?StandardTextBlock $descriptionTextBlock) : self
    {
        $this->container['descriptionTextBlock'] = $descriptionTextBlock;

        return $this;
    }

    /**
     * Gets descriptionListBlock.
     */
    public function getDescriptionListBlock() : ?StandardTextListBlock
    {
        return $this->container['descriptionListBlock'];
    }

    /**
     * Sets descriptionListBlock.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock $descriptionListBlock descriptionListBlock
     */
    public function setDescriptionListBlock(?StandardTextListBlock $descriptionListBlock) : self
    {
        $this->container['descriptionListBlock'] = $descriptionListBlock;

        return $this;
    }

    /**
     * Gets sidebarImageTextBlock.
     */
    public function getSidebarImageTextBlock() : ?StandardImageTextBlock
    {
        return $this->container['sidebarImageTextBlock'];
    }

    /**
     * Sets sidebarImageTextBlock.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $sidebarImageTextBlock sidebarImageTextBlock
     */
    public function setSidebarImageTextBlock(?StandardImageTextBlock $sidebarImageTextBlock) : self
    {
        $this->container['sidebarImageTextBlock'] = $sidebarImageTextBlock;

        return $this;
    }

    /**
     * Gets sidebarListBlock.
     */
    public function getSidebarListBlock() : ?StandardTextListBlock
    {
        return $this->container['sidebarListBlock'];
    }

    /**
     * Sets sidebarListBlock.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock $sidebarListBlock sidebarListBlock
     */
    public function setSidebarListBlock(?StandardTextListBlock $sidebarListBlock) : self
    {
        $this->container['sidebarListBlock'] = $sidebarListBlock;

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
