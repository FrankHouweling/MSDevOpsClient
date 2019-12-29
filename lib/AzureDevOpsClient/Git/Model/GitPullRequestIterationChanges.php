<?php
/**
 * GitPullRequestIterationChanges
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
 * GitPullRequestIterationChanges Class Doc Comment
 *
 * @category Class
 * @description Collection of changes made in a pull request.
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitPullRequestIterationChanges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitPullRequestIterationChanges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeEntries' => '\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[]',
        'nextSkip' => 'int',
        'nextTop' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeEntries' => null,
        'nextSkip' => 'int32',
        'nextTop' => 'int32'
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
        'changeEntries' => 'changeEntries',
        'nextSkip' => 'nextSkip',
        'nextTop' => 'nextTop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeEntries' => 'setChangeEntries',
        'nextSkip' => 'setNextSkip',
        'nextTop' => 'setNextTop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeEntries' => 'getChangeEntries',
        'nextSkip' => 'getNextSkip',
        'nextTop' => 'getNextTop'
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
        $this->container['changeEntries'] = isset($data['changeEntries']) ? $data['changeEntries'] : null;
        $this->container['nextSkip'] = isset($data['nextSkip']) ? $data['nextSkip'] : null;
        $this->container['nextTop'] = isset($data['nextTop']) ? $data['nextTop'] : null;
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
     * Gets changeEntries
     *
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[]
     */
    public function getChangeEntries()
    {
        return $this->container['changeEntries'];
    }

    /**
     * Sets changeEntries
     *
     * @param \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[] $changeEntries Changes made in the iteration.
     *
     * @return $this
     */
    public function setChangeEntries($changeEntries)
    {
        $this->container['changeEntries'] = $changeEntries;

        return $this;
    }

    /**
     * Gets nextSkip
     *
     * @return int
     */
    public function getNextSkip()
    {
        return $this->container['nextSkip'];
    }

    /**
     * Sets nextSkip
     *
     * @param int $nextSkip Value to specify as skip to get the next page of changes.  This will be zero if there are no more changes.
     *
     * @return $this
     */
    public function setNextSkip($nextSkip)
    {
        $this->container['nextSkip'] = $nextSkip;

        return $this;
    }

    /**
     * Gets nextTop
     *
     * @return int
     */
    public function getNextTop()
    {
        return $this->container['nextTop'];
    }

    /**
     * Sets nextTop
     *
     * @param int $nextTop Value to specify as top to get the next page of changes.  This will be zero if there are no more changes.
     *
     * @return $this
     */
    public function setNextTop($nextTop)
    {
        $this->container['nextTop'] = $nextTop;

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


