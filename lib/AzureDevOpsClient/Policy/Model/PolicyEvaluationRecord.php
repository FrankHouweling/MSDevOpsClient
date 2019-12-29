<?php
/**
 * PolicyEvaluationRecord
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Policy
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Policy
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

namespace FrankHouweling\AzureDevOpsClient\Policy\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Policy\ObjectSerializer;

/**
 * PolicyEvaluationRecord Class Doc Comment
 *
 * @category Class
 * @description This record encapsulates the current state of a policy as it applies to one specific pull request. Each pull request has a unique PolicyEvaluationRecord for each pull request which the policy applies to.
 * @package  FrankHouweling\AzureDevOpsClient\Policy
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PolicyEvaluationRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PolicyEvaluationRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Policy\Model\ReferenceLinks',
        'artifactId' => 'string',
        'completedDate' => '\DateTime',
        'configuration' => '\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration',
        'context' => '\FrankHouweling\AzureDevOpsClient\Policy\Model\JObject',
        'evaluationId' => 'string',
        'startedDate' => '\DateTime',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'artifactId' => null,
        'completedDate' => 'date-time',
        'configuration' => null,
        'context' => null,
        'evaluationId' => 'uuid',
        'startedDate' => 'date-time',
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
        'artifactId' => 'artifactId',
        'completedDate' => 'completedDate',
        'configuration' => 'configuration',
        'context' => 'context',
        'evaluationId' => 'evaluationId',
        'startedDate' => 'startedDate',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'artifactId' => 'setArtifactId',
        'completedDate' => 'setCompletedDate',
        'configuration' => 'setConfiguration',
        'context' => 'setContext',
        'evaluationId' => 'setEvaluationId',
        'startedDate' => 'setStartedDate',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'artifactId' => 'getArtifactId',
        'completedDate' => 'getCompletedDate',
        'configuration' => 'getConfiguration',
        'context' => 'getContext',
        'evaluationId' => 'getEvaluationId',
        'startedDate' => 'getStartedDate',
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

    const STATUS_QUEUED = 'queued';
    const STATUS_RUNNING = 'running';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    const STATUS_NOT_APPLICABLE = 'notApplicable';
    const STATUS_BROKEN = 'broken';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_RUNNING,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
            self::STATUS_NOT_APPLICABLE,
            self::STATUS_BROKEN,
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
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['evaluationId'] = isset($data['evaluationId']) ? $data['evaluationId'] : null;
        $this->container['startedDate'] = isset($data['startedDate']) ? $data['startedDate'] : null;
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
     * @return \FrankHouweling\AzureDevOpsClient\Policy\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Policy\Model\ReferenceLinks $links Links to other related objects
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets artifactId
     *
     * @return string
     */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
     * Sets artifactId
     *
     * @param string $artifactId A string which uniquely identifies the target of a policy evaluation.
     *
     * @return $this
     */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;

        return $this;
    }

    /**
     * Gets completedDate
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completedDate'];
    }

    /**
     * Sets completedDate
     *
     * @param \DateTime $completedDate Time when this policy finished evaluating on this pull request.
     *
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->container['completedDate'] = $completedDate;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration $configuration Contains all configuration data for the policy which is being evaluated.
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \FrankHouweling\AzureDevOpsClient\Policy\Model\JObject
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \FrankHouweling\AzureDevOpsClient\Policy\Model\JObject $context Internal context data of this policy evaluation.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets evaluationId
     *
     * @return string
     */
    public function getEvaluationId()
    {
        return $this->container['evaluationId'];
    }

    /**
     * Sets evaluationId
     *
     * @param string $evaluationId Guid which uniquely identifies this evaluation record (one policy running on one pull request).
     *
     * @return $this
     */
    public function setEvaluationId($evaluationId)
    {
        $this->container['evaluationId'] = $evaluationId;

        return $this;
    }

    /**
     * Gets startedDate
     *
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->container['startedDate'];
    }

    /**
     * Sets startedDate
     *
     * @param \DateTime $startedDate Time when this policy was first evaluated on this pull request.
     *
     * @return $this
     */
    public function setStartedDate($startedDate)
    {
        $this->container['startedDate'] = $startedDate;

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
     * @param string $status Status of the policy (Running, Approved, Failed, etc.)
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


