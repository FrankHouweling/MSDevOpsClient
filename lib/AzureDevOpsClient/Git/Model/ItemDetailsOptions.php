<?php
/**
 * ItemDetailsOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace FrankHouweling\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * ItemDetailsOptions Class Doc Comment
 *
 * @category Class
 * @description Optional details to include when returning an item model
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemDetailsOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemDetailsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'includeContentMetadata' => 'bool',
        'recursionLevel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'includeContentMetadata' => null,
        'recursionLevel' => null
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
        'includeContentMetadata' => 'includeContentMetadata',
        'recursionLevel' => 'recursionLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includeContentMetadata' => 'setIncludeContentMetadata',
        'recursionLevel' => 'setRecursionLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includeContentMetadata' => 'getIncludeContentMetadata',
        'recursionLevel' => 'getRecursionLevel'
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

    const RECURSION_LEVEL_NONE = 'none';
    const RECURSION_LEVEL_ONE_LEVEL = 'oneLevel';
    const RECURSION_LEVEL_ONE_LEVEL_PLUS_NESTED_EMPTY_FOLDERS = 'oneLevelPlusNestedEmptyFolders';
    const RECURSION_LEVEL_FULL = 'full';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecursionLevelAllowableValues()
    {
        return [
            self::RECURSION_LEVEL_NONE,
            self::RECURSION_LEVEL_ONE_LEVEL,
            self::RECURSION_LEVEL_ONE_LEVEL_PLUS_NESTED_EMPTY_FOLDERS,
            self::RECURSION_LEVEL_FULL,
        ];
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
        $this->container['includeContentMetadata'] = isset($data['includeContentMetadata']) ? $data['includeContentMetadata'] : null;
        $this->container['recursionLevel'] = isset($data['recursionLevel']) ? $data['recursionLevel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecursionLevelAllowableValues();
        if (!is_null($this->container['recursionLevel']) && !in_array($this->container['recursionLevel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recursionLevel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets includeContentMetadata
     *
     * @return bool
     */
    public function getIncludeContentMetadata()
    {
        return $this->container['includeContentMetadata'];
    }

    /**
     * Sets includeContentMetadata
     *
     * @param bool $includeContentMetadata If true, include metadata about the file type
     *
     * @return $this
     */
    public function setIncludeContentMetadata($includeContentMetadata)
    {
        $this->container['includeContentMetadata'] = $includeContentMetadata;

        return $this;
    }

    /**
     * Gets recursionLevel
     *
     * @return string
     */
    public function getRecursionLevel()
    {
        return $this->container['recursionLevel'];
    }

    /**
     * Sets recursionLevel
     *
     * @param string $recursionLevel Specifies whether to include children (OneLevel), all descendants (Full) or None for folder items
     *
     * @return $this
     */
    public function setRecursionLevel($recursionLevel)
    {
        $allowedValues = $this->getRecursionLevelAllowableValues();
        if (!is_null($recursionLevel) && !in_array($recursionLevel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recursionLevel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recursionLevel'] = $recursionLevel;

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


