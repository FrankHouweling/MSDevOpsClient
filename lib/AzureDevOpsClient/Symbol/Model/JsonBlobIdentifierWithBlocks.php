<?php
/**
 * JsonBlobIdentifierWithBlocks
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Symbol
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Symbol
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Symbol\ObjectSerializer;

/**
 * JsonBlobIdentifierWithBlocks Class Doc Comment
 *
 * @category Class
 * @description BlobIdentifier with block hashes formatted to be deserialzied for symbol service.
 * @package  AzureDevOpsClient\Symbol
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JsonBlobIdentifierWithBlocks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JsonBlobIdentifierWithBlocks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blockHashes' => '\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\JsonBlobBlockHash[]',
        'identifierValue' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blockHashes' => null,
        'identifierValue' => 'byte'
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
        'blockHashes' => 'blockHashes',
        'identifierValue' => 'identifierValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockHashes' => 'setBlockHashes',
        'identifierValue' => 'setIdentifierValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockHashes' => 'getBlockHashes',
        'identifierValue' => 'getIdentifierValue'
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
        $this->container['blockHashes'] = isset($data['blockHashes']) ? $data['blockHashes'] : null;
        $this->container['identifierValue'] = isset($data['identifierValue']) ? $data['identifierValue'] : null;
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
     * Gets blockHashes
     *
     * @return \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\JsonBlobBlockHash[]
     */
    public function getBlockHashes()
    {
        return $this->container['blockHashes'];
    }

    /**
     * Sets blockHashes
     *
     * @param \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\JsonBlobBlockHash[] $blockHashes List of blob block hashes.
     *
     * @return $this
     */
    public function setBlockHashes($blockHashes)
    {
        $this->container['blockHashes'] = $blockHashes;

        return $this;
    }

    /**
     * Gets identifierValue
     *
     * @return string[]
     */
    public function getIdentifierValue()
    {
        return $this->container['identifierValue'];
    }

    /**
     * Sets identifierValue
     *
     * @param string[] $identifierValue Array of blobId bytes.
     *
     * @return $this
     */
    public function setIdentifierValue($identifierValue)
    {
        $this->container['identifierValue'] = $identifierValue;

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

