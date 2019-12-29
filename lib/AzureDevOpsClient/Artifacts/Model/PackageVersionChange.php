<?php
/**
 * PackageVersionChange
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Artifacts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Feed
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

namespace FrankHouweling\AzureDevOpsClient\Artifacts\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Artifacts\ObjectSerializer;

/**
 * PackageVersionChange Class Doc Comment
 *
 * @category Class
 * @description A change to a single package version.
 * @package  FrankHouweling\AzureDevOpsClient\Artifacts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageVersionChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageVersionChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeType' => 'string',
        'continuationToken' => 'int',
        'packageVersion' => '\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeType' => null,
        'continuationToken' => 'int64',
        'packageVersion' => null
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
        'changeType' => 'changeType',
        'continuationToken' => 'continuationToken',
        'packageVersion' => 'packageVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeType' => 'setChangeType',
        'continuationToken' => 'setContinuationToken',
        'packageVersion' => 'setPackageVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeType' => 'getChangeType',
        'continuationToken' => 'getContinuationToken',
        'packageVersion' => 'getPackageVersion'
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

    const CHANGE_TYPE_ADD_OR_UPDATE = 'addOrUpdate';
    const CHANGE_TYPE_DELETE = 'delete';
    const CHANGE_TYPE_PERMANENT_DELETE = 'permanentDelete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_ADD_OR_UPDATE,
            self::CHANGE_TYPE_DELETE,
            self::CHANGE_TYPE_PERMANENT_DELETE,
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['continuationToken'] = isset($data['continuationToken']) ? $data['continuationToken'] : null;
        $this->container['packageVersion'] = isset($data['packageVersion']) ? $data['packageVersion'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
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
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string $changeType The type of change that was performed.
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!is_null($changeType) && !in_array($changeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'changeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['changeType'] = $changeType;

        return $this;
    }

    /**
     * Gets continuationToken
     *
     * @return int
     */
    public function getContinuationToken()
    {
        return $this->container['continuationToken'];
    }

    /**
     * Sets continuationToken
     *
     * @param int $continuationToken Token marker for this change, allowing the caller to send this value back to the service and receive changes beyond this one.
     *
     * @return $this
     */
    public function setContinuationToken($continuationToken)
    {
        $this->container['continuationToken'] = $continuationToken;

        return $this;
    }

    /**
     * Gets packageVersion
     *
     * @return \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion
     */
    public function getPackageVersion()
    {
        return $this->container['packageVersion'];
    }

    /**
     * Sets packageVersion
     *
     * @param \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion $packageVersion Package version that was changed.
     *
     * @return $this
     */
    public function setPackageVersion($packageVersion)
    {
        $this->container['packageVersion'] = $packageVersion;

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


