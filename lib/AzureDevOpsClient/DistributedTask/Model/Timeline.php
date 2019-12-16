<?php
/**
 * Timeline
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * Timeline Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Timeline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Timeline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeId' => 'int',
        'id' => 'string',
        'location' => 'string',
        'lastChangedBy' => 'string',
        'lastChangedOn' => '\DateTime',
        'records' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeId' => 'int32',
        'id' => 'uuid',
        'location' => null,
        'lastChangedBy' => 'uuid',
        'lastChangedOn' => 'date-time',
        'records' => null
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
        'changeId' => 'changeId',
        'id' => 'id',
        'location' => 'location',
        'lastChangedBy' => 'lastChangedBy',
        'lastChangedOn' => 'lastChangedOn',
        'records' => 'records'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeId' => 'setChangeId',
        'id' => 'setId',
        'location' => 'setLocation',
        'lastChangedBy' => 'setLastChangedBy',
        'lastChangedOn' => 'setLastChangedOn',
        'records' => 'setRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeId' => 'getChangeId',
        'id' => 'getId',
        'location' => 'getLocation',
        'lastChangedBy' => 'getLastChangedBy',
        'lastChangedOn' => 'getLastChangedOn',
        'records' => 'getRecords'
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
        $this->container['changeId'] = isset($data['changeId']) ? $data['changeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['lastChangedBy'] = isset($data['lastChangedBy']) ? $data['lastChangedBy'] : null;
        $this->container['lastChangedOn'] = isset($data['lastChangedOn']) ? $data['lastChangedOn'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
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
     * Gets changeId
     *
     * @return int
     */
    public function getChangeId()
    {
        return $this->container['changeId'];
    }

    /**
     * Sets changeId
     *
     * @param int $changeId changeId
     *
     * @return $this
     */
    public function setChangeId($changeId)
    {
        $this->container['changeId'] = $changeId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets lastChangedBy
     *
     * @return string
     */
    public function getLastChangedBy()
    {
        return $this->container['lastChangedBy'];
    }

    /**
     * Sets lastChangedBy
     *
     * @param string $lastChangedBy lastChangedBy
     *
     * @return $this
     */
    public function setLastChangedBy($lastChangedBy)
    {
        $this->container['lastChangedBy'] = $lastChangedBy;

        return $this;
    }

    /**
     * Gets lastChangedOn
     *
     * @return \DateTime
     */
    public function getLastChangedOn()
    {
        return $this->container['lastChangedOn'];
    }

    /**
     * Sets lastChangedOn
     *
     * @param \DateTime $lastChangedOn lastChangedOn
     *
     * @return $this
     */
    public function setLastChangedOn($lastChangedOn)
    {
        $this->container['lastChangedOn'] = $lastChangedOn;

        return $this;
    }

    /**
     * Gets records
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineRecord[]
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TimelineRecord[] $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

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

