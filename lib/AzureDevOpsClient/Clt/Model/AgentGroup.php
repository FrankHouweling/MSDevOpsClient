<?php
/**
 * AgentGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudLoadTest
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

namespace FrankHouweling\AzureDevOpsClient\Clt\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Clt\ObjectSerializer;

/**
 * AgentGroup Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Clt
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgentGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgentGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef',
        'creationTime' => '\DateTime',
        'groupId' => 'string',
        'groupName' => 'string',
        'machineAccessData' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[]',
        'machineConfiguration' => '\FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput',
        'tenantId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdBy' => null,
        'creationTime' => 'date-time',
        'groupId' => null,
        'groupName' => null,
        'machineAccessData' => null,
        'machineConfiguration' => null,
        'tenantId' => null
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
        'createdBy' => 'createdBy',
        'creationTime' => 'creationTime',
        'groupId' => 'groupId',
        'groupName' => 'groupName',
        'machineAccessData' => 'machineAccessData',
        'machineConfiguration' => 'machineConfiguration',
        'tenantId' => 'tenantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdBy' => 'setCreatedBy',
        'creationTime' => 'setCreationTime',
        'groupId' => 'setGroupId',
        'groupName' => 'setGroupName',
        'machineAccessData' => 'setMachineAccessData',
        'machineConfiguration' => 'setMachineConfiguration',
        'tenantId' => 'setTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdBy' => 'getCreatedBy',
        'creationTime' => 'getCreationTime',
        'groupId' => 'getGroupId',
        'groupName' => 'getGroupName',
        'machineAccessData' => 'getMachineAccessData',
        'machineConfiguration' => 'getMachineConfiguration',
        'tenantId' => 'getTenantId'
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['machineAccessData'] = isset($data['machineAccessData']) ? $data['machineAccessData'] : null;
        $this->container['machineConfiguration'] = isset($data['machineConfiguration']) ? $data['machineConfiguration'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
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
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\IdentityRef $createdBy User that created the agent group
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets creationTime
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
     * Sets creationTime
     *
     * @param \DateTime $creationTime Time agent group was created
     *
     * @return $this
     */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId Id of the agent group
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string $groupName The name of the agent group
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

        return $this;
    }

    /**
     * Gets machineAccessData
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[]
     */
    public function getMachineAccessData()
    {
        return $this->container['machineAccessData'];
    }

    /**
     * Sets machineAccessData
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroupAccessData[] $machineAccessData machineAccessData
     *
     * @return $this
     */
    public function setMachineAccessData($machineAccessData)
    {
        $this->container['machineAccessData'] = $machineAccessData;

        return $this;
    }

    /**
     * Gets machineConfiguration
     *
     * @return \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput
     */
    public function getMachineConfiguration()
    {
        return $this->container['machineConfiguration'];
    }

    /**
     * Sets machineConfiguration
     *
     * @param \FrankHouweling\AzureDevOpsClient\Clt\Model\WebApiUserLoadTestMachineInput $machineConfiguration Machine configuration
     *
     * @return $this
     */
    public function setMachineConfiguration($machineConfiguration)
    {
        $this->container['machineConfiguration'] = $machineConfiguration;

        return $this;
    }

    /**
     * Gets tenantId
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     *
     * @param string $tenantId Tenant Id
     *
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

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

