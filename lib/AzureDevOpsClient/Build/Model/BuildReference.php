<?php
/**
 * BuildReference
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Build\ObjectSerializer;

/**
 * BuildReference Class Doc Comment
 *
 * @category Class
 * @description Represents a reference to a build.
 * @package  AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks',
        'buildNumber' => 'string',
        'deleted' => 'bool',
        'finishTime' => '\DateTime',
        'id' => 'int',
        'queueTime' => '\DateTime',
        'requestedFor' => '\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef',
        'result' => 'string',
        'startTime' => '\DateTime',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'buildNumber' => null,
        'deleted' => null,
        'finishTime' => 'date-time',
        'id' => 'int32',
        'queueTime' => 'date-time',
        'requestedFor' => null,
        'result' => null,
        'startTime' => 'date-time',
        'status' => null
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
        'links' => '_links',
        'buildNumber' => 'buildNumber',
        'deleted' => 'deleted',
        'finishTime' => 'finishTime',
        'id' => 'id',
        'queueTime' => 'queueTime',
        'requestedFor' => 'requestedFor',
        'result' => 'result',
        'startTime' => 'startTime',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'buildNumber' => 'setBuildNumber',
        'deleted' => 'setDeleted',
        'finishTime' => 'setFinishTime',
        'id' => 'setId',
        'queueTime' => 'setQueueTime',
        'requestedFor' => 'setRequestedFor',
        'result' => 'setResult',
        'startTime' => 'setStartTime',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'buildNumber' => 'getBuildNumber',
        'deleted' => 'getDeleted',
        'finishTime' => 'getFinishTime',
        'id' => 'getId',
        'queueTime' => 'getQueueTime',
        'requestedFor' => 'getRequestedFor',
        'result' => 'getResult',
        'startTime' => 'getStartTime',
        'status' => 'getStatus'
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

    const RESULT_NONE = 'none';
    const RESULT_SUCCEEDED = 'succeeded';
    const RESULT_PARTIALLY_SUCCEEDED = 'partiallySucceeded';
    const RESULT_FAILED = 'failed';
    const RESULT_CANCELED = 'canceled';
    const STATUS_NONE = 'none';
    const STATUS_IN_PROGRESS = 'inProgress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELLING = 'cancelling';
    const STATUS_POSTPONED = 'postponed';
    const STATUS_NOT_STARTED = 'notStarted';
    const STATUS_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_NONE,
            self::RESULT_SUCCEEDED,
            self::RESULT_PARTIALLY_SUCCEEDED,
            self::RESULT_FAILED,
            self::RESULT_CANCELED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NONE,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLING,
            self::STATUS_POSTPONED,
            self::STATUS_NOT_STARTED,
            self::STATUS_ALL,
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['queueTime'] = isset($data['queueTime']) ? $data['queueTime'] : null;
        $this->container['requestedFor'] = isset($data['requestedFor']) ? $data['requestedFor'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets links
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets buildNumber
     *
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
     * Sets buildNumber
     *
     * @param string $buildNumber The build number.
     *
     * @return $this
     */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Indicates whether the build has been deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets finishTime
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     *
     * @param \DateTime $finishTime The time that the build was completed.
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID of the build.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets queueTime
     *
     * @return \DateTime
     */
    public function getQueueTime()
    {
        return $this->container['queueTime'];
    }

    /**
     * Sets queueTime
     *
     * @param \DateTime $queueTime The time that the build was queued.
     *
     * @return $this
     */
    public function setQueueTime($queueTime)
    {
        $this->container['queueTime'] = $queueTime;

        return $this;
    }

    /**
     * Gets requestedFor
     *
     * @return \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef
     */
    public function getRequestedFor()
    {
        return $this->container['requestedFor'];
    }

    /**
     * Sets requestedFor
     *
     * @param \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef $requestedFor The identity on whose behalf the build was queued.
     *
     * @return $this
     */
    public function setRequestedFor($requestedFor)
    {
        $this->container['requestedFor'] = $requestedFor;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result The build result.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($result) && !in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'result', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime The time that the build was started.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The build status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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

