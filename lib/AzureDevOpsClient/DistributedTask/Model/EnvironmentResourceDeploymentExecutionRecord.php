<?php
/**
 * EnvironmentResourceDeploymentExecutionRecord
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
 * EnvironmentResourceDeploymentExecutionRecord Class Doc Comment
 *
 * @category Class
 * @description EnvironmentResourceDeploymentExecutionRecord.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvironmentResourceDeploymentExecutionRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnvironmentResourceDeploymentExecutionRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'environmentId' => 'int',
        'finishTime' => '\DateTime',
        'requestId' => 'int',
        'resourceId' => 'int',
        'result' => 'string',
        'startTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'environmentId' => 'int32',
        'finishTime' => 'date-time',
        'requestId' => 'int64',
        'resourceId' => 'int32',
        'result' => null,
        'startTime' => 'date-time'
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
        'environmentId' => 'environmentId',
        'finishTime' => 'finishTime',
        'requestId' => 'requestId',
        'resourceId' => 'resourceId',
        'result' => 'result',
        'startTime' => 'startTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'environmentId' => 'setEnvironmentId',
        'finishTime' => 'setFinishTime',
        'requestId' => 'setRequestId',
        'resourceId' => 'setResourceId',
        'result' => 'setResult',
        'startTime' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'environmentId' => 'getEnvironmentId',
        'finishTime' => 'getFinishTime',
        'requestId' => 'getRequestId',
        'resourceId' => 'getResourceId',
        'result' => 'getResult',
        'startTime' => 'getStartTime'
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

    const RESULT_SUCCEEDED = 'succeeded';
    const RESULT_SUCCEEDED_WITH_ISSUES = 'succeededWithIssues';
    const RESULT_FAILED = 'failed';
    const RESULT_CANCELED = 'canceled';
    const RESULT_SKIPPED = 'skipped';
    const RESULT_ABANDONED = 'abandoned';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCEEDED,
            self::RESULT_SUCCEEDED_WITH_ISSUES,
            self::RESULT_FAILED,
            self::RESULT_CANCELED,
            self::RESULT_SKIPPED,
            self::RESULT_ABANDONED,
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
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
     * Gets environmentId
     *
     * @return int
     */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
     * Sets environmentId
     *
     * @param int $environmentId Id of the Environment
     *
     * @return $this
     */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;

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
     * @param \DateTime $finishTime Finish time of the environment resource deployment execution
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param int $requestId Id of the Environment deployment execution history record
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets resourceId
     *
     * @return int
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param int $resourceId Resource Id
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;

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
     * @param string $result Result of the environment deployment execution
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
     * @param \DateTime $startTime Start time of the environment resource deployment execution
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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


