<?php
/**
 * ChangeListSearchCriteria
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * ChangeListSearchCriteria Class Doc Comment
 *
 * @category Class
 * @description Criteria used in a search for change lists
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChangeListSearchCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChangeListSearchCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compareVersion' => 'string',
        'excludeDeletes' => 'bool',
        'followRenames' => 'bool',
        'fromDate' => 'string',
        'fromVersion' => 'string',
        'itemPath' => 'string',
        'itemPaths' => 'string[]',
        'itemVersion' => 'string',
        'skip' => 'int',
        'toDate' => 'string',
        'top' => 'int',
        'toVersion' => 'string',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compareVersion' => null,
        'excludeDeletes' => null,
        'followRenames' => null,
        'fromDate' => null,
        'fromVersion' => null,
        'itemPath' => null,
        'itemPaths' => null,
        'itemVersion' => null,
        'skip' => 'int32',
        'toDate' => null,
        'top' => 'int32',
        'toVersion' => null,
        'user' => null
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
        'compareVersion' => 'compareVersion',
        'excludeDeletes' => 'excludeDeletes',
        'followRenames' => 'followRenames',
        'fromDate' => 'fromDate',
        'fromVersion' => 'fromVersion',
        'itemPath' => 'itemPath',
        'itemPaths' => 'itemPaths',
        'itemVersion' => 'itemVersion',
        'skip' => 'skip',
        'toDate' => 'toDate',
        'top' => 'top',
        'toVersion' => 'toVersion',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compareVersion' => 'setCompareVersion',
        'excludeDeletes' => 'setExcludeDeletes',
        'followRenames' => 'setFollowRenames',
        'fromDate' => 'setFromDate',
        'fromVersion' => 'setFromVersion',
        'itemPath' => 'setItemPath',
        'itemPaths' => 'setItemPaths',
        'itemVersion' => 'setItemVersion',
        'skip' => 'setSkip',
        'toDate' => 'setToDate',
        'top' => 'setTop',
        'toVersion' => 'setToVersion',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compareVersion' => 'getCompareVersion',
        'excludeDeletes' => 'getExcludeDeletes',
        'followRenames' => 'getFollowRenames',
        'fromDate' => 'getFromDate',
        'fromVersion' => 'getFromVersion',
        'itemPath' => 'getItemPath',
        'itemPaths' => 'getItemPaths',
        'itemVersion' => 'getItemVersion',
        'skip' => 'getSkip',
        'toDate' => 'getToDate',
        'top' => 'getTop',
        'toVersion' => 'getToVersion',
        'user' => 'getUser'
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
        $this->container['compareVersion'] = isset($data['compareVersion']) ? $data['compareVersion'] : null;
        $this->container['excludeDeletes'] = isset($data['excludeDeletes']) ? $data['excludeDeletes'] : null;
        $this->container['followRenames'] = isset($data['followRenames']) ? $data['followRenames'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['fromVersion'] = isset($data['fromVersion']) ? $data['fromVersion'] : null;
        $this->container['itemPath'] = isset($data['itemPath']) ? $data['itemPath'] : null;
        $this->container['itemPaths'] = isset($data['itemPaths']) ? $data['itemPaths'] : null;
        $this->container['itemVersion'] = isset($data['itemVersion']) ? $data['itemVersion'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['toVersion'] = isset($data['toVersion']) ? $data['toVersion'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
     * Gets compareVersion
     *
     * @return string
     */
    public function getCompareVersion()
    {
        return $this->container['compareVersion'];
    }

    /**
     * Sets compareVersion
     *
     * @param string $compareVersion If provided, a version descriptor to compare against base
     *
     * @return $this
     */
    public function setCompareVersion($compareVersion)
    {
        $this->container['compareVersion'] = $compareVersion;

        return $this;
    }

    /**
     * Gets excludeDeletes
     *
     * @return bool
     */
    public function getExcludeDeletes()
    {
        return $this->container['excludeDeletes'];
    }

    /**
     * Sets excludeDeletes
     *
     * @param bool $excludeDeletes If true, don't include delete history entries
     *
     * @return $this
     */
    public function setExcludeDeletes($excludeDeletes)
    {
        $this->container['excludeDeletes'] = $excludeDeletes;

        return $this;
    }

    /**
     * Gets followRenames
     *
     * @return bool
     */
    public function getFollowRenames()
    {
        return $this->container['followRenames'];
    }

    /**
     * Sets followRenames
     *
     * @param bool $followRenames Whether or not to follow renames for the given item being queried
     *
     * @return $this
     */
    public function setFollowRenames($followRenames)
    {
        $this->container['followRenames'] = $followRenames;

        return $this;
    }

    /**
     * Gets fromDate
     *
     * @return string
     */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param string $fromDate If provided, only include history entries created after this date (string)
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;

        return $this;
    }

    /**
     * Gets fromVersion
     *
     * @return string
     */
    public function getFromVersion()
    {
        return $this->container['fromVersion'];
    }

    /**
     * Sets fromVersion
     *
     * @param string $fromVersion If provided, a version descriptor for the earliest change list to include
     *
     * @return $this
     */
    public function setFromVersion($fromVersion)
    {
        $this->container['fromVersion'] = $fromVersion;

        return $this;
    }

    /**
     * Gets itemPath
     *
     * @return string
     */
    public function getItemPath()
    {
        return $this->container['itemPath'];
    }

    /**
     * Sets itemPath
     *
     * @param string $itemPath Path of item to search under. If the itemPaths memebr is used then it will take precedence over this.
     *
     * @return $this
     */
    public function setItemPath($itemPath)
    {
        $this->container['itemPath'] = $itemPath;

        return $this;
    }

    /**
     * Gets itemPaths
     *
     * @return string[]
     */
    public function getItemPaths()
    {
        return $this->container['itemPaths'];
    }

    /**
     * Sets itemPaths
     *
     * @param string[] $itemPaths List of item paths to search under. If this member is used then itemPath will be ignored.
     *
     * @return $this
     */
    public function setItemPaths($itemPaths)
    {
        $this->container['itemPaths'] = $itemPaths;

        return $this;
    }

    /**
     * Gets itemVersion
     *
     * @return string
     */
    public function getItemVersion()
    {
        return $this->container['itemVersion'];
    }

    /**
     * Sets itemVersion
     *
     * @param string $itemVersion Version of the items to search
     *
     * @return $this
     */
    public function setItemVersion($itemVersion)
    {
        $this->container['itemVersion'] = $itemVersion;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip Number of results to skip (used when clicking more...)
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets toDate
     *
     * @return string
     */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param string $toDate If provided, only include history entries created before this date (string)
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;

        return $this;
    }

    /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param int $top If provided, the maximum number of history entries to return
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets toVersion
     *
     * @return string
     */
    public function getToVersion()
    {
        return $this->container['toVersion'];
    }

    /**
     * Sets toVersion
     *
     * @param string $toVersion If provided, a version descriptor for the latest change list to include
     *
     * @return $this
     */
    public function setToVersion($toVersion)
    {
        $this->container['toVersion'] = $toVersion;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user Alias or display name of user who made the changes
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

